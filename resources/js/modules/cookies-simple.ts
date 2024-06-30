class SimpleCookieHandler {
    private localStorageName: string = 'cookie_consent_' + import.meta.env.VITE_APP_NAME
    private cookies_accepted: boolean = false;
    public cookie_consent_given: boolean = false;

    private cookieNotification: HTMLElement | null | undefined;
    private acceptCookiesButton: HTMLElement | null | undefined;
    private declineCookiesButton: HTMLElement | null | undefined;

    public onCookiesDeclined?: () => void;
    public onCookiesAccepted?: () => void;

    constructor() {
        document.addEventListener('DOMContentLoaded', this.onInitialized.bind(this));
    }

    private onInitialized(): void {
        this.cookieNotification = document.getElementById('cookie-notification');
        if (!this.cookieNotification) return;

        let storageValue: string | null = localStorage.getItem(this.localStorageName);
        if (storageValue !== null) {
            this.cookies_accepted = true;
            this.cookie_consent_given = storageValue === 'accepted';

            if (!this.cookie_consent_given && this.onCookiesDeclined) {
                this.onCookiesDeclined();
            } else if (this.onCookiesAccepted) {
                this.onCookiesAccepted();
            }

            this.deleteCookieNotification();
            return;
        }

        this.acceptCookiesButton = document.getElementById('accept-cookies-button');
        this.declineCookiesButton = document.getElementById('decline-cookies-button');

        if (document.referrer && document.referrer.includes(location.origin)) {
            //No delay if users origin is on the same page
            this.toggleNotificationVisibility();

            setTimeout(() => {
                this.cookieNotification?.classList.add('transition-all', 'duration-300', 'ease-in-out');
            }, 500)
        } else {
            //Add delay for cookie notification to display
            setTimeout((): void => {
                //Add classes for animations
                this.cookieNotification?.classList.add('transition-all', 'duration-300', 'ease-in-out');

                this.toggleNotificationVisibility();
            }, 1200);
        }

        this.acceptCookiesButton?.addEventListener('click', this.acceptCookies.bind(this));

        this.declineCookiesButton?.addEventListener('click', this.declineCookies.bind(this));
    }

    private acceptCookies(): void {
        localStorage.setItem(this.localStorageName, 'accepted');
        this.toggleNotificationVisibility();
        this.cookie_consent_given = true;

        if (this.onCookiesAccepted)
            this.onCookiesAccepted();

        //Add delay for notification to be hidden, before deleting the element
        setTimeout(() => {
            this.deleteCookieNotification();
        }, 500);
    }

    private declineCookies(): void {
        localStorage.setItem(this.localStorageName, 'minimal');
        this.toggleNotificationVisibility();

        if (this.onCookiesDeclined)
            this.onCookiesDeclined();

        //Add delay for notification to be hidden, before deleting the element
        setTimeout(() => {
            this.deleteCookieNotification();
        }, 500);
    }

    private toggleNotificationVisibility(): void {
        this.cookieNotification?.classList.toggle('translate-y-full');
        this.cookieNotification?.classList.toggle('-bottom-1');

        this.cookieNotification?.classList.toggle('bottom-0');
    }

    private deleteCookieNotification(): void {
        this.cookieNotification?.remove();
    }
}

export const simpleCookieHandler: SimpleCookieHandler = new SimpleCookieHandler();

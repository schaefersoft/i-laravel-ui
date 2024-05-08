class SidebarHandler {
    private sidebar: HTMLElement | null | undefined;
    private sidebarOpenButton: HTMLElement | null | undefined;
    private sidebarCloseButton: HTMLElement | null | undefined;
    private sidebarBackground: HTMLElement | null | undefined;

    public onSidebarOpened?: () => void;
    public onSidebarClosed?: () => void;

    constructor() {
        document.addEventListener('DOMContentLoaded', this.domContentLoaded.bind(this))
    }

    private domContentLoaded(): void {
        console.log("domContentLoaded")

        this.sidebar = document.getElementById('sidebar');
        this.sidebarOpenButton = document.getElementById('sidebar-open-button');
        this.sidebarCloseButton = document.getElementById('sidebar-close-button');
        this.sidebarBackground = document.getElementById('sidebar-background');

        if (!this.sidebar || !this.sidebarBackground || !this.sidebarOpenButton || !this.sidebarCloseButton) return;

        this.sidebarOpenButton.addEventListener('click', () :void => {
           this.openSidebar();

           if (this.onSidebarOpened)
               this.onSidebarOpened();
        });

        this.sidebarCloseButton.addEventListener('click', (): void => {
           this.closeSidebar();

            if (this.onSidebarClosed)
                this.onSidebarClosed();
        });

        this.sidebarBackground.addEventListener('click', (): void => {
           this.closeSidebar();

            if (this.onSidebarClosed)
                this.onSidebarClosed();
        });
    }

    public openSidebar(): void {
        if (!this.sidebar) return;

        this.sidebar.setAttribute('data-opened', 'true');
    }

    public closeSidebar(): void {
        if (!this.sidebar) return;

        this.sidebar.removeAttribute('data-opened');
    }
}

export const SidebarHanlder = new SidebarHandler();

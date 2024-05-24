class ExpandHandler {
    constructor() {
        document.addEventListener('DOMContentLoaded', this.onInitialized.bind(this));
    }

    private onInitialized(): void {
        document.querySelectorAll('.expand-frame').forEach((e: Element): void => {
            let element: HTMLElement = e as HTMLElement;

            let toggle: Element | null = element.querySelector('.expand-title');
            if(toggle) {
                toggle.addEventListener('click', (_: Event): void => {

                   if (!element.hasAttribute('data-opened')) {
                       element.setAttribute('data-opened', '');
                   } else {
                       element.removeAttribute('data-opened');
                   }
                });
            }
        });
    }
}

export const expandHandler: ExpandHandler = new ExpandHandler();

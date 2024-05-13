class SidebarHandler {
    private sidebar: HTMLElement | null | undefined;
    private sidebarContent: HTMLElement | null | undefined;
    private sidebarOpenButton: HTMLElement | null | undefined;
    private sidebarCloseButton: HTMLElement | null | undefined;
    private sidebarBackground: HTMLElement | null | undefined;

    public onSidebarOpened?: (element: HTMLElement) => void;
    public onSidebarClosed?: (element: HTMLElement) => void;

    constructor() {
        document.addEventListener('DOMContentLoaded', this.domContentLoaded.bind(this))
    }

    private domContentLoaded(): void {
        this.sidebar = document.getElementById('sidebar');
        this.sidebarContent = document.getElementById('sidebar-content');
        this.sidebarOpenButton = document.getElementById('sidebar-open-button');
        this.sidebarCloseButton = document.getElementById('sidebar-close-button');
        this.sidebarBackground = document.getElementById('sidebar-background');

        if (!this.sidebar || !this.sidebarContent || !this.sidebarBackground || !this.sidebarOpenButton || !this.sidebarCloseButton) return;

        this.sidebarOpenButton.addEventListener('click', () :void => {
           this.openSidebar();

           if (this.onSidebarOpened)
               this.onSidebarOpened(this.sidebarContent!);
        });

        this.sidebarCloseButton.addEventListener('click', (): void => {
           this.closeSidebar();

            if (this.onSidebarClosed)
                this.onSidebarClosed(this.sidebarContent!);
        });

        this.sidebarBackground.addEventListener('click', (): void => {
           this.closeSidebar();

            if (this.onSidebarClosed)
                this.onSidebarClosed(this.sidebarContent!);
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

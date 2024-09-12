class Dropzone {
    constructor() {
        document.addEventListener('DOMContentLoaded', this.onInitialized.bind(this));
    }

    private onInitialized(): void {
        document.querySelectorAll('.dropzone').forEach((e: Element): void => {
            let fileNames: HTMLElement = e.querySelector('.fileNames') as HTMLElement;
            let input: HTMLInputElement = e.querySelector('.input') as HTMLInputElement;

            if (fileNames && input) {
                input.addEventListener('change', (e: Event): void => {
                    const files = e.target.files;

                    fileNames.innerText = '';


                    Array.from(files).forEach(file => {
                        const badge = document.createElement('span');
                        badge.className = 'inline-flex items-center mt-2 px-2 py-0.5 rounded-full text-xs font-medium bg-theme-100 text-theme-700 mr-2';
                        badge.innerHTML = `${file.name}`;

                        fileNames.appendChild(badge);
                    })
                });
            }

        });
    }
}

export const dropzone: Dropzone = new Dropzone();

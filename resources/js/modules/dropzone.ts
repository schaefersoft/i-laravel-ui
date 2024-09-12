class Dropzone {
    constructor() {
        document.addEventListener('DOMContentLoaded', this.onInitialized.bind(this));
    }

    private onInitialized(): void {
        document.querySelectorAll('.dropzone').forEach((dropzoneElement: Element): void => {
            this.initializeDropzone(dropzoneElement);
        });
    }

    private initializeDropzone(dropzoneElement: Element): void {
        const fileNamesContainer: HTMLElement = dropzoneElement.querySelector('.fileNames') as HTMLElement;
        const fileInput: HTMLInputElement = dropzoneElement.querySelector('.input') as HTMLInputElement;
        const notificationContainer: HTMLElement = this.createNotificationContainer(dropzoneElement);

        if (!fileNamesContainer || !fileInput) return;

        let isFileInputTriggered = false;

        const isDisabled = fileInput.disabled;

        if (!isDisabled) {
            //@ts-ignore
            dropzoneElement.addEventListener('click', (event: MouseEvent): void => {
                if (!isFileInputTriggered) {
                    event.preventDefault();
                    isFileInputTriggered = true;
                    fileInput.click();
                }
            });

            fileInput.addEventListener('click', (event: MouseEvent): void => {
                event.stopPropagation();
            });

            fileInput.addEventListener('change', (event: Event): void => {
                this.handleFileInputChange(event, fileNamesContainer, notificationContainer);
                isFileInputTriggered = false;
            });

            //@ts-ignore
            dropzoneElement.addEventListener('dragover', (event: DragEvent): void => {
                event.preventDefault();
                dropzoneElement.classList.add('bg-gray-100', 'dark:bg-gray-600');
            });

            dropzoneElement.addEventListener('dragleave', (): void => {
                dropzoneElement.classList.remove('bg-gray-100', 'dark:bg-gray-600');
            });

            //@ts-ignore
            dropzoneElement.addEventListener('drop', (event: DragEvent): void => {

                this.handleFileDrop(event, fileInput, fileNamesContainer, dropzoneElement, notificationContainer);
            });
        }

        // ... existing code ...
    }

    private handleFileInputChange(event: Event, fileNamesContainer: HTMLElement, notificationContainer: HTMLElement): void {
        const input = event.target as HTMLInputElement;
        const files = input.files;

        if (!files) return;

        this.displayFileNames(files, input, fileNamesContainer);

        // No need to reset the input value
        // input.value = '';
    }

    private handleFileDrop(event: DragEvent, fileInput: HTMLInputElement, fileNamesContainer: HTMLElement, dropzoneElement: Element, notificationContainer: HTMLElement): void {
        event.preventDefault();
        dropzoneElement.classList.remove('bg-gray-100', 'dark:bg-gray-600');

        let files = event.dataTransfer?.files;
        if (!files) return;

        const allowedFiles = this.filterFilesByMimeType(files, fileInput);

        if (allowedFiles.length < files.length) {
            this.showNotification('Some files were ignored due to incorrect file type.', notificationContainer);
        }

        if (!fileInput.hasAttribute('multiple') && allowedFiles.length > 1) {
            allowedFiles.length = 1;
            this.showNotification('Only one file is allowed, using the first one.', notificationContainer);
        }

        fileInput.files = this.convertToDataTransfer(allowedFiles).files;
        this.displayFileNames(fileInput.files, fileInput, fileNamesContainer);
    }

    private filterFilesByMimeType(files: FileList, fileInput: HTMLInputElement): File[] {
        const acceptedTypes = fileInput.accept.split(',').map(type => type.trim());

        return Array.from(files).filter(file => {
            return acceptedTypes.some(acceptedType => {
                return acceptedType === file.type || acceptedType === '.' + file.name.split('.').pop();
            });
        });
    }

    private convertToDataTransfer(files: File[]): DataTransfer {
        const dt = new DataTransfer();
        files.forEach(file => dt.items.add(file));
        return dt;
    }

    private displayFileNames(files: FileList, fileInput: HTMLInputElement, fileNamesContainer: HTMLElement): void {
        fileNamesContainer.innerHTML = '';

        Array.from(files).forEach((file: File, index: number): void => {
            const badge: HTMLDivElement = document.createElement('div');
            badge.className = 'flex items-center m-1 px-2 py-1 bg-theme-100 text-theme-700 text-sm font-medium rounded-full relative mr-2';

            badge.innerHTML = `
                <span class="truncate text-xs">${file.name}</span>
                <button class="ms-1 px-1 text-theme-600 hover:cursor-pointer hover:text-theme-800 text-lg font-bold">&times;</button>
            `;

            const removeButton = badge.querySelector('button') as HTMLButtonElement;
            removeButton.addEventListener('click', (e: Event): void => {
                e.preventDefault();
                e.stopPropagation(); // Prevent event bubbling to the dropzone
                this.removeFile(index, fileInput);
                badge.remove();
            });

            fileNamesContainer.appendChild(badge);
        });
    }

    private removeFile(index: number, fileInput: HTMLInputElement): void {
        const dt = new DataTransfer();
        const files = fileInput.files;

        if (!files) return;

        Array.from(files).forEach((file, i) => {
            if (i !== index) dt.items.add(file);
        });

        fileInput.files = dt.files;
    }

    private createNotificationContainer(dropzoneElement: Element): HTMLElement {
        const notificationContainer = document.createElement('div');
        notificationContainer.className = 'mt-2 text-sm text-red-600 hidden';
        dropzoneElement.appendChild(notificationContainer);
        return notificationContainer;
    }

    private showNotification(message: string, notificationContainer: HTMLElement): void {
        notificationContainer.innerText = message;
        notificationContainer.classList.remove('hidden');

        setTimeout(() => {
            notificationContainer.classList.add('hidden');
        }, 3000); // Hide notification after 3 seconds
    }
}

export const dropzone: Dropzone = new Dropzone();

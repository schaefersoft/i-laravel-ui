document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-autocomplete]').forEach((autocompleteElement) => {

        const inputElement = autocompleteElement.querySelector('[data-autocomplete-input]') as HTMLInputElement;
        const dropdownElement = autocompleteElement.querySelector('[data-autocomplete-dropdown]') as HTMLElement;
        const noResultsElement = autocompleteElement.querySelector('[data-autocomplete-no-results]') as HTMLElement;

        let debounceTimer: number | null = null;

        const updateDropdownVisibility = () => {
            const query = inputElement.value.trim().toLowerCase();
            let hasVisibleOptions = false;

            dropdownElement.querySelectorAll('[data-autocomplete-item]').forEach((item) => {
                const value = (item as HTMLElement).textContent?.trim().toLowerCase() || '';
                if (value.includes(query)) {
                    item.classList.remove('hidden');
                    hasVisibleOptions = true;
                } else {
                    item.classList.add('hidden');
                }
            });

            if (hasVisibleOptions) {
                noResultsElement.classList.add('hidden');
                dropdownElement.classList.remove('hidden');
            } else {
                noResultsElement.classList.remove('hidden');
                dropdownElement.classList.remove('hidden');
            }
        };

        const selectItem = (item: HTMLElement) => {
            inputElement.value = item.textContent?.trim() || '';
            dropdownElement.classList.add('hidden');
        };

        // Debounced input handler
        inputElement.addEventListener('input', () => {
            if (debounceTimer) {
                clearTimeout(debounceTimer);
            }
            debounceTimer = setTimeout(updateDropdownVisibility, 150) as unknown as number;
        });

        // Show dropdown on focus
        inputElement.addEventListener('focus', () => {
            updateDropdownVisibility();
        });

        // Handle selecting items from the dropdown
        dropdownElement.querySelectorAll('[data-autocomplete-item]').forEach((item) => {
            item.addEventListener('click', () => {
                selectItem(item as HTMLElement);
            });
        });

        // Handle keyboard navigation
        inputElement.addEventListener('keydown', (event) => {
            if (event.key === 'ArrowDown' || event.key === 'ArrowUp') {
                event.preventDefault();
                const items = Array.from(dropdownElement.querySelectorAll('[data-autocomplete-item]:not(.hidden)'));
                const currentIndex = items.findIndex(item => item === document.activeElement);
                let nextIndex;

                if (event.key === 'ArrowDown') {
                    nextIndex = currentIndex < items.length - 1 ? currentIndex + 1 : 0;
                } else {
                    nextIndex = currentIndex > 0 ? currentIndex - 1 : items.length - 1;
                }

                (items[nextIndex] as HTMLElement).focus();
            } else if (event.key === 'Enter' || event.key === 'Tab') {
                const focusedItem = dropdownElement.querySelector('[data-autocomplete-item]:focus') as HTMLElement;
                if (focusedItem) {
                    event.preventDefault();
                    selectItem(focusedItem);
                }
            } else if (event.key === 'Escape') {
                dropdownElement.classList.add('hidden');
            }
        });

        // Close the dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!autocompleteElement.contains(event.target as Node)) {
                dropdownElement.classList.add('hidden');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-search]').forEach((searchElement) => {
        const inputElement = searchElement.querySelector('[data-search-input]') as HTMLInputElement;
        const dropdownElement = searchElement.querySelector('[data-search-dropdown]') as HTMLElement;
        const badgeContainer = searchElement.querySelector('[data-search-badge-container]') as HTMLElement;
        const noResultsElement = searchElement.querySelector('[data-search-dropdown-none]') as HTMLElement;

        const updateDropdownVisibility = () => {
            const query = inputElement.value.trim().toLowerCase();
            let hasVisibleOptions = false;

            dropdownElement.querySelectorAll('[data-search-dropdown-value]').forEach((item) => {
                const value = item.getAttribute('data-search-dropdown-content')?.trim().toLowerCase() || '';
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

        const addBadge = (text: string, value: string) => {
            if (badgeContainer.querySelector(`[data-value="${value}"]`)) {
                return;
            }

            const badge = document.createElement('span');
            badge.className = 'inline-flex items-center mt-2 px-2 py-0.5 rounded-full text-xs font-medium bg-theme-100 text-theme-700 mr-2';
            badge.dataset.value = value;
            badge.innerHTML = `${text} <button type="button" class="ml-1 text-theme-600 hover:text-theme-800 focus:outline-hidden focus:text-theme-800">&times;</button>`;

            const removeButton = badge.querySelector('button') as HTMLButtonElement;
            removeButton.addEventListener('click', () => {
                badge.remove();
                const checkbox = dropdownElement.querySelector(`[data-search-dropdown-value="${value}"] input`) as HTMLInputElement;
                if (checkbox) {
                    checkbox.checked = false;
                }
                if (badgeContainer.children.length === 0) {
                    dropdownElement.classList.add('hidden');
                }
            });

            badgeContainer.appendChild(badge);
        };

        const removeBadge = (value: string) => {
            const badge = badgeContainer.querySelector(`[data-value="${value}"]`) as HTMLElement;
            if (badge) {
                badge.remove();
            }
        };

        const initializeBadges = () => {
            dropdownElement.querySelectorAll('[data-search-dropdown-value]').forEach((item) => {
                const value = item.getAttribute('data-search-dropdown-value') || '';
                const checkbox = item.querySelector('input') as HTMLInputElement;

                if (checkbox && checkbox.checked) {
                    const text = item.textContent?.trim() || '';
                    addBadge(text, value);
                }
            });
        };

        // Open the dropdown on focus and input events
        inputElement.addEventListener('focus', () => {
            dropdownElement.classList.remove('hidden');
        });

        inputElement.addEventListener('input', updateDropdownVisibility);

        // Handle selecting and deselecting items from the dropdown
        dropdownElement.querySelectorAll('[data-search-dropdown-value]').forEach((item) => {
            const checkbox = item.querySelector('input') as HTMLInputElement;
            const label = item.querySelector('label') as HTMLElement;

            // Handle clicking on the entire item (background and checkbox)
            item.addEventListener('click', (event) => {
                if (event.target !== checkbox) {
                    checkbox.checked = !checkbox.checked;
                }

                const text = item.textContent?.trim() || '';
                const value = item.getAttribute('data-search-dropdown-value') || '';

                if (checkbox.checked) {
                    addBadge(text, value);
                } else {
                    removeBadge(value);
                }
            });

            // Prevent the checkbox click from toggling twice
            checkbox.addEventListener('click', (event) => {
                if (event.target !== checkbox) {
                    checkbox.checked = !checkbox.checked;
                }

                const text = item.textContent?.trim() || '';
                const value = item.getAttribute('data-search-dropdown-value') || '';

                if (checkbox.checked) {
                    addBadge(text, value);
                } else {
                    removeBadge(value);
                }
            });
            label.addEventListener('click', (event) => {
                if (event.target !== checkbox) {
                    checkbox.checked = !checkbox.checked;
                }

                const text = item.textContent?.trim() || '';
                const value = item.getAttribute('data-search-dropdown-value') || '';

                if (checkbox.checked) {
                    addBadge(text, value);
                } else {
                    removeBadge(value);
                }
            });
        });

        // Close the dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!searchElement.contains(event.target as Node)) {
                dropdownElement.classList.add('hidden');
            }
        });

        // Close the dropdown on Escape key
        inputElement.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                dropdownElement.classList.add('hidden');
            }
        });

        // Initialize badges based on the current state of checkboxes
        initializeBadges();
    });
});

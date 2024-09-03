class CurrencyInputHandler {
    constructor() {
        document.addEventListener('DOMContentLoaded', this.onInitialized.bind(this));
    }

    private onInitialized(): void {
        document.querySelectorAll('.currency-input').forEach((e: Element): void => {
            let input = e as HTMLInputElement;

            if (input && !input.disabled) {
                input.addEventListener('input', (_: Event): void => {
                    let value = input.value.replace(/\D/g, '');

                    value = value.replace(/^0+/, '');

                    if (value.length === 0) {
                        value = "000";
                    } else if (value.length === 1) {
                        value = "00" + value;
                    } else if (value.length === 2) {
                        value = "0" + value;
                    }

                    input.value = value.slice(0, -2) + "." + value.slice(-2);
                });
            }
        });
    }
}

export const currencyInputHandler: CurrencyInputHandler = new CurrencyInputHandler();

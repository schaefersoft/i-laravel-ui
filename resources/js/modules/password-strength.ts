interface PasswordStrengthOption {
    insufficient: { text: string; color: string; width: number };
    weak: { text: string; color: string; width: number };
    sufficient: { text: string; color: string; width: number };
    okay: { text: string; color: string; width: number };
    strong: { text: string; color: string; width: number };
    outstanding: { text: string; color: string; width: number };
}

class PasswordStrengtHandler {
    private passwordInput: HTMLInputElement | null | undefined;
    private strengthText: HTMLElement | null | undefined;
    private strengthIndicator: HTMLProgressElement | null | undefined;

    public options: PasswordStrengthOption = {
        insufficient: {
            text: 'Insufficient',
            color: '#a30000',
            width: 2
        },
        weak: {
            text: 'Weak',
            color: '#ff5900',
            width: 15
        },
        sufficient: {
            text: 'Sufficient',
            color: '#ffd500',
            width: 30
        },
        okay: {
            text: 'Okay',
            color: '#81ac03',
            width: 55
        },
        strong: {
            text: 'Strong',
            color: '#5eff00',
            width: 75
        },
        outstanding: {
            text: 'Outstanding',
            color: '#2a9101',
            width: 100
        }
    };

    constructor() {
        document.addEventListener('DOMContentLoaded', this.onInitialized.bind(this));
    }

    private onInitialized(): void {
        let elements: NodeListOf<Element> = document.querySelectorAll('#password-strength');
        elements.forEach(((e: Element): void => {
            let passwordInput: HTMLInputElement | null = document.getElementById(e.getAttribute('data-input-id') as string) as HTMLInputElement | null;
            if (passwordInput) {
                let strengthText: HTMLElement | null = e.querySelector('#password-strength-text');
                let strengthIndicator: HTMLProgressElement | null = e.querySelector('#password-strength-indicator');

                if (passwordInput && strengthText && strengthIndicator) {
                    passwordInput.addEventListener('keyup', (): void => {
                        const inputValue: string = passwordInput?.value as string;
                        let strength: number = 0;

                        if (/.{8,}/.test(inputValue)) strength += 20; // Min 8 chars
                        if (/.{10,}/.test(inputValue)) strength += 10; // Min 10 chars
                        if (/.{12,}/.test(inputValue)) strength += 10; // Min 12 chars
                        if (/[A-Z]/.test(inputValue)) strength += 10; // Contains Uppercase chars
                        if (/[a-z]/.test(inputValue)) strength += 10; // Contains lowercase chars
                        if (/[0-9]/.test(inputValue)) strength += 15; // Contains special characters
                        if (/[$&+,:;=?@#|'<>.^*()%!-]/.test(inputValue)) strength += 15; // Contains special characters

                        //if any patterns are found
                        if (/(^\d{6,}$)|(.)\2{2,}|(qwerty|abc|123|pass)/.test(inputValue)) strength = 0;
                        if (strength <= 10) {
                            strengthIndicator.style.width = this.options.insufficient.width + "%";
                            strengthIndicator.style.backgroundColor = this.options.insufficient.color;
                            strengthText.style.color = this.options.insufficient.color;
                            strengthText.innerText = this.options.insufficient.text;
                        } else if (strength <= 25) {
                            strengthIndicator.style.width = this.options.weak.width + "%";
                            strengthIndicator.style.backgroundColor = this.options.weak.color;
                            strengthText.style.color = this.options.weak.color;
                            strengthText.innerText = this.options.weak.text;
                        } else if (strength <= 40) {
                            strengthIndicator.style.width = this.options.sufficient.width + "%";
                            strengthIndicator.style.backgroundColor = this.options.sufficient.color;
                            strengthText.style.color = this.options.sufficient.color;
                            strengthText.innerText = this.options.sufficient.text;
                        } else if (strength <= 60) {
                            strengthIndicator.style.width = this.options.okay.width + "%";
                            strengthIndicator.style.backgroundColor = this.options.okay.color;
                            strengthText.style.color = this.options.okay.color;
                            strengthText.innerText = this.options.okay.text;
                        } else if (strength <= 80) {
                            strengthIndicator.style.width = this.options.strong.width + "%";
                            strengthIndicator.style.backgroundColor = this.options.strong.color;
                            strengthText.style.color = this.options.strong.color;
                            strengthText.innerText = this.options.strong.text;
                        } else {
                            strengthIndicator.style.width = this.options.outstanding.width + "%";
                            strengthIndicator.style.backgroundColor = this.options.outstanding.color;
                            strengthText.style.color = this.options.outstanding.color;
                            strengthText.innerText = this.options.outstanding.text;
                        }
                    })
                }
            }
        }));
    }
}

export const passwordStrengthHandler: PasswordStrengtHandler = new PasswordStrengtHandler();

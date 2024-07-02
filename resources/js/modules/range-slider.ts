class RangeSliderHandler {
    constructor() {
        document.addEventListener('DOMContentLoaded', this.onInitialized.bind(this));
    }

    private onInitialized(): void {
        const sliders: NodeListOf<Element> = document.querySelectorAll('.range-slider-frame');
        sliders.forEach((slider: Element): void => {
            const fromSlider: HTMLInputElement | null = slider.querySelector('.from-slider');
            const toSlider: HTMLInputElement | null = slider.querySelector('.to-slider');
            const fromValueElement: HTMLElement | null = slider.querySelector('.lower-value');
            const toValueElement: HTMLElement | null = slider.querySelector('.upper-value');
            const selected: HTMLElement | null = slider.querySelector('.range-slider-background .selected');
            const background: HTMLElement | null = slider.querySelector('.range-slider-background');

            if (fromSlider && toSlider && selected && background) {
                fromSlider.addEventListener('input', () => {
                    this.controlFromSlider(fromSlider, toSlider, fromValueElement, selected);
                });

                toSlider.addEventListener('input', () => {
                    this.controlToSlider(fromSlider, toSlider, toValueElement, selected);
                });

                background.addEventListener('click', (event: MouseEvent) => {
                    this.handleBarClick(event, fromSlider, toSlider, selected);
                });

                fromSlider.dispatchEvent(new Event('input'));
                toSlider.dispatchEvent(new Event('input'));
            }
        });
    }

    private controlFromSlider(fromSlider: HTMLInputElement, toSlider: HTMLInputElement, fromValueElement: HTMLElement | null, selected: HTMLElement): void {
        const [from, to]: [number, number] = this.getParsedValues(fromSlider, toSlider);
        if (from >= to) {
            fromSlider.value = to.toString();
        }
        if (fromValueElement) {
            fromValueElement.innerHTML = fromSlider.value;
        }
        this.updateSelectedRange(fromSlider, toSlider, selected);
    }

    private controlToSlider(fromSlider: HTMLInputElement, toSlider: HTMLInputElement, toValueElement: HTMLElement | null, selected: HTMLElement): void {
        const [from, to]: [number, number] = this.getParsedValues(fromSlider, toSlider);
        if (to <= from) {
            toSlider.value = from.toString();
        }
        if (toValueElement) {
            toValueElement.innerHTML = toSlider.value;
        }
        this.updateSelectedRange(fromSlider, toSlider, selected);
    }

    private getParsedValues(fromSlider: HTMLInputElement, toSlider: HTMLInputElement): [number, number] {
        const from: number = parseInt(fromSlider.value, 10);
        const to: number = parseInt(toSlider.value, 10);
        return [from, to];
    }

    private updateSelectedRange(fromSlider: HTMLInputElement, toSlider: HTMLInputElement, selected: HTMLElement): void {
        const min: number = parseInt(fromSlider.min, 10);
        const max: number = parseInt(fromSlider.max, 10);
        const fromValue: number = parseInt(fromSlider.value, 10);
        const toValue: number = parseInt(toSlider.value, 10);

        const left: number = ((fromValue - min) / (max - min)) * 100;
        const width: number = ((toValue - fromValue) / (max - min)) * 100;

        selected.style.left = `${left}%`;
        selected.style.width = `${width}%`;
    }

    private handleBarClick(event: MouseEvent, fromSlider: HTMLInputElement, toSlider: HTMLInputElement, selected: HTMLElement): void {
        const rect: DOMRect = (event.currentTarget as HTMLElement).getBoundingClientRect();
        const offsetX: number = event.clientX - rect.left;
        const clickPosition: number = (offsetX / rect.width) * 100;

        const min: number = parseInt(fromSlider.min, 10);
        const max: number = parseInt(fromSlider.max, 10);
        const clickValue: number = min + ((max - min) * (clickPosition / 100));

        const fromValue: number = parseInt(fromSlider.value, 10);
        const toValue: number = parseInt(toSlider.value, 10);

        if (fromValue === toValue) {
            if (clickValue < fromValue) {
                fromSlider.value = Math.round(clickValue).toString();
                this.controlFromSlider(fromSlider, toSlider, null, selected);
            } else {
                toSlider.value = Math.round(clickValue).toString();
                this.controlToSlider(fromSlider, toSlider, null, selected);
            }
        } else {
            if (Math.abs(clickValue - fromValue) < Math.abs(clickValue - toValue)) {
                fromSlider.value = Math.round(clickValue).toString();
                this.controlFromSlider(fromSlider, toSlider, null, selected);
            } else {
                toSlider.value = Math.round(clickValue).toString();
                this.controlToSlider(fromSlider, toSlider, null, selected);
            }
        }

        fromSlider.dispatchEvent(new Event('input'));
        toSlider.dispatchEvent(new Event('input'));
    }
}

export const rangeSliderHandler: RangeSliderHandler = new RangeSliderHandler();

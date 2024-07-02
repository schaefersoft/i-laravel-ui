<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class RangeSlider extends Component
{
    public function __construct(
        public string $lowerName,
        public string $upperName,
        public ?int $min = 0,
        public ?int $max = 100,
        public ?int $lowerValue = null,
        public ?int $upperValue = null,
        public ?bool $showDetails = true,
        public ?string $unit = null,
        public ?bool $lowerDisabled = false,
        public ?bool $upperDisabled = false
    )
    {
        if (!$this->lowerValue)
            $this->lowerValue = $this->min;
        if (!$this->upperValue)
            $this->upperValue = $this->max;
    }

    public function render(): View
    {
        return view('ui::components.range-slider');
    }
}

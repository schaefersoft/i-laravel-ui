<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public string $name,
        public ?string $value = null,
        public bool $disabled = false,
        public bool $required = false,
        public bool $checked = false,
    ) {}

    public function render(): View
    {
        return view('ui::components.checkbox');
    }
}

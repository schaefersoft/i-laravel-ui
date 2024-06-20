<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public string $name,
        public bool   $requiredAsterisk = false,
        public bool   $checked = false,
        public bool   $showValidationErrors = true
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.checkbox');
    }
}

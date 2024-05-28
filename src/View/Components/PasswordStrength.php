<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class PasswordStrength extends Component
{
    public function __construct(
        public string $inputId,
        public ?string $strengthTitle = "Strength"
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.password-strength');
    }
}

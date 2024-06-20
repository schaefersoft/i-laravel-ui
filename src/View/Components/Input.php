<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string  $name,
        public ?string $value = null,
        public string  $label = 'Unnamed input',
        public string  $placeholder = '',
        public string  $type = 'text',
        public string  $autocomplete = 'off',
        public bool    $disabled = false,
        public bool    $autofocus = false,
        public bool    $requiredAsterisk = false
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.input');
    }
}

<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileInput extends Component
{
    public function __construct(
        public string $name,
        public string $label = 'Unnamed input',
        public string $type = 'text',
        public bool $disabled = false,
        public bool $multiple = false,
        public ?string $accept = null,
    ) {}

    public function render(): View
    {
        return view('ui::components.file-input');
    }
}

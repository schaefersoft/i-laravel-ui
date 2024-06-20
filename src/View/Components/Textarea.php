<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public function __construct(
        public string  $name,
        public ?string $value = null,
        public string  $label = 'Unnamed textarea',
        public string  $placeholder = '',
        public bool    $disabled = false,
        public int     $rows = 5,
        public bool    $requiredAsterisk = false,
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.textarea');
    }
}

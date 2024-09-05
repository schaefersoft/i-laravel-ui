<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Multiselect extends Component
{
    public function __construct(
        public string  $name,
        public array $items,
        public array $selectedValues = [],
        public string  $label = 'Unnamed multiselect',
        public string  $placeholder = '',
        public bool    $disabled = false,
        public bool    $autofocus = false,
        public bool    $requiredAsterisk = false,
        public ?string $errorName = null
    )
    {
        if ($this->errorName === null)
            $this->errorName = $this->name;
    }
    public function render(): View
    {
        return view('ui::components.multiselect');
    }
}

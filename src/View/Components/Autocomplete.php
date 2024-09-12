<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\View\Component;

class Autocomplete extends Component
{
    public function __construct(
        public string $name,
        public array $items,
        public string $label = 'Unnamed autocomplete',
        public string $placeholder = '',
        public bool $disabled = false,
        public bool $autofocus = false,
        public bool $requiredAsterisk = false,
        public ?string $errorName = null,
    )
    {
        if (!$this->errorName)
            $this->errorName = $this->name;
    }

    public function render()
    {
        return view('ui::components.autocomplete');
    }
}

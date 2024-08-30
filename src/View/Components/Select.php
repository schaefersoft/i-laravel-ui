<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public function __construct(
        public string $name,
        public string $label = 'Unnamed input',
        public bool   $disabled = false,
        public bool   $autofocus = false,
        public bool   $requiredAsterisk = false,
        public ?string $errorName = null
    )
    {
        if ($this->errorName === null)
            $this->errorName = $this->name;
    }

    public function render(): View
    {
        return view('ui::components.select');
    }
}

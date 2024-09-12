<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Dropzone extends Component
{
    public function __construct(
        public string $name,
        public ?string $value = null,
        public bool $disabled = false,
        public bool $multiple = false,
        public ?string $errorName = null,
        public string $accept = 'image/*',
    )
    {
        if (!$this->errorName)
            $this->errorName = $this->name;
    }

    public function render(): View
    {
        return view('ui::components.dropzone');
    }
}

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
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.dropzone');
    }
}

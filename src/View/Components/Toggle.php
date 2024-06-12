<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Toggle extends Component
{
    public function __construct(
        public string $name,
        public bool   $checked = false,
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.toggle');
    }
}

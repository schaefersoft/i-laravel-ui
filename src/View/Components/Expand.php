<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Expand extends Component
{
    public function __construct(
        public ?bool $opened = false,
        public ?string $maxHeight = null
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.expand');
    }
}

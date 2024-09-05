<?php

namespace Schaefersoft\UI\View\Components\Menu;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Divider extends Component
{
    public function __construct(
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.menu.divider');
    }
}

<?php

namespace Schaefersoft\UI\View\Components\Menu;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Title extends Component
{
    public function __construct(
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.menu.title');
    }
}

<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Notifications extends Component
{
    public function __construct()
    {
    }

    public function render(): View
    {
        return view('ui::components.notifications');
    }
}

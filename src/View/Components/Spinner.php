<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Spinner extends Component
{
    public function __construct(
        public ?string $hexColorSpinner = '#5c5959'
    )
    {
    }

    public function render(): View
    {
        return view('ui::components.spinner');
    }
}

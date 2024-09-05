<?php

namespace Schaefersoft\UI\View\Components\Menu;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public string $href,
        public ?bool $respectSubNavigation = false,
        public ?bool $highlighted = false,
    )
    {
        if (request()->url() == $this->href)
            $this->highlighted = true;

        if ($this->respectSubNavigation && str_contains(request()->url(), $this->href))
            $this->highlighted = true;
    }

    public function render(): View
    {
        return view('ui::components.menu.link');
    }
}

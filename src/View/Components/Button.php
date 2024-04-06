<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $type,
        public ?string $id = null,
        public bool $disabled = false
    ) {
        if(!$this->id){
            $this->id = Str::random("10");
        }
    }

    public function render(): View
    {
        return view('ui::components.button');
    }
}

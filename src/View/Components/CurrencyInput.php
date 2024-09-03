<?php

namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CurrencyInput extends Component
{
    public function __construct(
        public string  $name,
        public ?string $currency = null,
        public ?string $value = '0.00',
        public bool    $disabled = false,
        public ?string $errorName = null
    )
    {
        if ($this->errorName === null)
            $this->errorName = $this->name;
    }

    public function render(): View
    {
        return view('ui::components.currency-input');
    }
}

<?php
namespace Schaefersoft\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Rating extends Component
{
    public function __construct(
        public float  $stars,
        public string $starColorClass,
        public string $starBgColorClass,
        public string $starSize,
        public ?float  $maxStars = 5,
    ){}

    public function render(): View
    {
        return view('ui::components.rating');
    }
}

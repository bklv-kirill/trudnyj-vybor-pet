<?php

namespace App\View\Components\Footers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    public function __construct()
    {

    }

    public function render(): View|Closure|string
    {
        return view('components.footers.main');
    }
}

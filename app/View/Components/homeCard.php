<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class homeCard extends Component
{
    public $movie;


    
    public function __construct($movie)
    {
        $this->movie = $movie;
    }



    public function getStarsFill()
    {
        return round($this->movie->vote);
    }




    public function render(): View|Closure|string
    {
        return view('components.home-card');
    }
}

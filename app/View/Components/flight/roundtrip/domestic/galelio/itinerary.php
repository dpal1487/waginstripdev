<?php

namespace App\View\Components\flight\roundtrip\domestic\galelio;

use Illuminate\View\Component;

class itinerary extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flight.roundtrip.domestic.galelio.itinerary');
    }
}

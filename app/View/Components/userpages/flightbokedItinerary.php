<?php

namespace App\View\Components\userpages;

use Illuminate\View\Component;

class flightbokedItinerary extends Component
{
    public $itineraryDepart = [];
    public $itineraryArrival = [];
    public $primaryId = "";
    public $trip = "";
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($itineraryDepart, $itineraryArrival,$primaryId, $trip)
    {
        $this->itineraryDepart = $itineraryDepart;
        $this->itineraryArrival = $itineraryArrival;
        $this->primaryId = $primaryId;
        $this->trip = $trip;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.userpages.flightboked-itinerary');
    }
}

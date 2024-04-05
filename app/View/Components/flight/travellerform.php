<?php

namespace App\View\Components\flight;

use Illuminate\View\Component;

class travellerform extends Component
{

    public $travellers = [];
    public $originCountry = [];
    public $destinationCountry = [];
    public $jurneyDate = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($travellers, $originCountry, $destinationCountry, $jurneyDate)
    {
       $this->travellers = $travellers;
       $this->originCountry = $originCountry;
       $this->destinationCountry = $destinationCountry;
       $this->jurneyDate = $jurneyDate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flight.travellerform');
    }
}

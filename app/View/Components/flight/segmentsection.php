<?php

namespace App\View\Components\flight;

use Illuminate\View\Component;

class segmentsection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $trip = '';
    public $triptype = '';
    public $segmentInformation = [];
    public $itineraryDetails = [];
    public $arrivalingTime = [];
    public function __construct($trip, $triptype, $segmentInformation, $itineraryDetails, $arrivalingTime)
    {
        $this->trip = $trip;
        $this->triptype = $triptype;
        $this->segmentInformation = $segmentInformation;
        $this->itineraryDetails = $itineraryDetails;
        $this->arrivalingTime = $arrivalingTime;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flight.segmentsection');
    }
}

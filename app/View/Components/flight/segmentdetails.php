<?php

namespace App\View\Components\flight;

use Illuminate\View\Component;

class segmentdetails extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $segmentInformation = [];
    public $arrivalingTime = [];
    public $operatingCompany = [];
    public function __construct($segmentInformation, $arrivalingTime, $operatingCompany)
    {
        $this->segmentInformation = $segmentInformation;
        $this->arrivalingTime = $arrivalingTime;
        $this->operatingCompany = $operatingCompany;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flight.segmentdetails');
    }
}

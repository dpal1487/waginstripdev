<?php

namespace App\View\Components\flight\galelio;

use Illuminate\View\Component;

class searchflightsagment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $trip = '';
    public $segment = [];
    public $segmentMarge = '';
    public $rowkey = '';


    public function __construct($trip, $segment, $segmentMarge, $rowkey)
    {
        $this->trip = $trip;
        $this->segment = $segment;
        $this->segmentMarge = $segmentMarge;
        $this->rowkey = $rowkey;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flight.galelio.searchflightsagment');
    }
}

<?php

namespace App\View\Components\flight;

use Illuminate\View\Component;

class segmentGlSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $trip = '';
    public $segment = [];

    public function __construct($trip, $segment)
    {
        $this->trip = $trip;
        $this->segment = $segment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flight.segment-gl-section');
    }
}

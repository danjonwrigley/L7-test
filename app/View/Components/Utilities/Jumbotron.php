<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Jumbotron extends Component
{
    public $title;
    public $titleClass;
    public $lead;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $titleClass, $lead)
    {
        $this->title = $title;
        $this->titleClass = $titleClass;
        $this->lead  = $lead;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.utilities.jumbotron');
    }
}

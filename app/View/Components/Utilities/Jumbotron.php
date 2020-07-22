<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Jumbotron extends Component
{
    public $title;
    public $titleClass;
    public $lead;
    public $classes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $titleClass, $lead, $classes)
    {
        $this->title = $title;
        $this->titleClass = $titleClass;
        $this->lead  = $lead;
        $this->classes = $classes;
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

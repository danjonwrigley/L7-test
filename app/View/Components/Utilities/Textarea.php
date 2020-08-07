<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputTextarea extends Component
{
    /**
     * The content of the textarea
     * 
     * @var string
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @param string $content
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.utilities.inputs.textarea');
    }
}

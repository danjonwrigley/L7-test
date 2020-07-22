<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{

    public $modalTitle;
    public $content;
    public $confirmText;
    public $closeText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $content, $confirmText, $closeText)
    {
        $this->$title = $title;
        $this->$content = $content;
        $this->$confirmText = $confirmText;
        $this->$closeText = $closeText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}

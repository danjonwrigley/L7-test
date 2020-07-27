<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    public $cardImage;
    public $cardHeader;
    public $cardTitle;
    public $cardText;
    public $cardLinkHref;
    public $cardLinkText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardImage, $cardHeader, $cardTitle, $cardText, $cardLinkHref, $cardLinkText)
    {
        // $this->image = $cardImage;
        // $this->header = $cardHeader;
        // $this->title = $cardTitle;
        // $this->text = $cardText;
        // $this->link = $cardLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.utilities.cards.w-image');
    }
}

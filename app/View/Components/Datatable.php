<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $cardTableData;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardTableData)
    {
        $this->cardTableData = $cardTableData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cards.datatable');
    }
}

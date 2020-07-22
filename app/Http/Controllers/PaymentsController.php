<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ProductPurchased;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('pages.payments.create');
    }

    public function store()
    {
        ProductPurchased::dispatch('Toy');
    }
}

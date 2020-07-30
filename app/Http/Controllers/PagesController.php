<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * [Controller for the home page]
     * @return [view object] [pass the pages title to the view]
     */
    public function home()
    {
        $pageTitle = Str::ucfirst('homepage');

        return view('pages.home', compact('pageTitle'));
    }

    /**
     * [Controller for the about page]
     * @return [view object] [pass the pages title to the view]
     */
    public function about()
    {
        $pageTitle = Str::ucfirst('about');

        return view('pages.about', compact('pageTitle'));
    }
}

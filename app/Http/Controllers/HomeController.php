<?php

namespace App\Http\Controllers;

use App\Support\HomeContent;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Show the magazine home page.
     */
    public function __invoke(): View
    {
        return view('home', HomeContent::all());
    }
}

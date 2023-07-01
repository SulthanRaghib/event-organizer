<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome()
    {
        // send title and content to view
        return view('home', [
            'title' => 'Home',
        ]);
    }
}

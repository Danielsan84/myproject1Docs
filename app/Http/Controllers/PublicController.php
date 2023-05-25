<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }
     
    // poi da mettere in fortify cosi la gente si registra al sito
    public function html5()
    {
        return view('html5');
    }

    public function css3()
    {
        return view('css3');
    }
}

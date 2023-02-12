<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function about(){
        return view('layouts.frontend.about');
    }
}

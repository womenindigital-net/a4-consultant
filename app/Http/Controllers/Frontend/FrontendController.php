<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function aboutus(){
        return view('frontend.about');
    }
    
    public function service(){
        return view('frontend.service');
    }
    public function coursese(){
        return view('frontend.courses');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // ===========Index page============
    
    public function index(){
        return view('frontend.index');
    }


    // ===========About us page============
    public function aboutus(){
        return view('frontend.about');
    }
    

    // ===========Service page============
    public function service(){
        return view('frontend.service');
    }



    // ===========Blog/Story page============
    public function stories(){
        return view('frontend.story');
    }



    // ===========Blog/Story Details page============
    public function storyDetails(){
        return view('frontend.story-details');
    }

    // ===========Course page============
    public function courses(){
        return view('frontend.courses');
    }

    // ===========Course Details page============
    public function courseDetails(){
        return view('frontend.course-details');
    }


    // ===========Teachers page============
    public function teachers(){
        return view('frontend.teachers');
    }


    // ===========Clint page============
    public function clints(){
        return view('frontend.clint');
    }


    // ===========News and Event page============
    public function news(){
        return view('frontend.event');
    }


    // ===========News and Event page============
    public function eventDetails(){
        return view('frontend.event-details');
    }


    // ===========Contact page============
    public function contact(){
        return view('frontend.contact');
    }
}

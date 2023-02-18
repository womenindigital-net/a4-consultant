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
    public function storyDetails(){
        return view('frontend.story-details');
    }
    public function courses(){
        return view('frontend.courses');
    }
    public function courseDetails(){
        return view('frontend.course-details');
    }
    public function teachers(){
        return view('frontend.teachers');
    }
    public function stories(){
        return view('frontend.story');
    }
    public function clints(){
        return view('frontend.clint');
    }
    public function news(){
        return view('frontend.event');
    }
    public function eventDetails(){
        return view('frontend.event-details');
    }
    public function contact(){
        return view('frontend.contact');
    }
}

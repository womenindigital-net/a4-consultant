<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // ===========Index page============

    public function index(){
        $data['sliders'] = Slider::get();
        $data['clients'] = Client::get();
        $data['allCourses'] = Course::get();
        return view('frontend.index',$data);
    }



    // =========== category course show ============
    public function courseShow($id){
        $category_id = $id;
        $data['categories'] = Course::where('course_category_id',$category_id)->where('status',1)->get();
        $data['categoryTitle'] = CourseCategory::where('id',$category_id)->first();
        return view('frontend.category-course-show',$data);
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
    public function allCourses(){
        $data['allCourses'] = Course::get();
        return view('frontend.all-courses',$data);
    }

    // ===========Course Details page============
    public function courseDetails($course_id){
        $data['categoriesDetails'] = Course::where('id',$course_id)->where('status',1)->first();
        $data['latestCourses'] = Course::orderBy('created_at', 'DESC')->paginate(3);
        return view('frontend.course-details',$data);
    }


    // ===========Teachers page============
    public function teachers(){
        return view('frontend.teachers');
    }


    // ===========Clint page============
    public function clints(){
        $data['clients'] = Client::where('status',1)->get();
        return view('frontend.clint',$data);
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

    // ===========Contact page============
    public function userProfile(){
        return view('layouts.frontend.dashboard.profile');
    }
}

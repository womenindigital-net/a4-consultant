<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\About;
use App\Models\Client;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Stories;
use App\Models\Consultant;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\NewsAdnEvents;
use App\Models\CourseCategory;
// use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Constant;
use Carbon\Carbon;

class FrontendController extends Controller
{
    // ===========Index page============

    public function index(){
        $data['sliders'] = Slider::get();
        $data['consultants'] = Consultant::paginate(4);
        $data['clients'] = Client::get();
        $data['allCourses'] = Course::get();
        $data['aboutus'] = About::first();
        $todayDate = Carbon::now()->toDateString();
        $data['upcomingEvents']= NewsAdnEvents::where('date','>=',$todayDate )->get();
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
        $data['aboutus'] = About::first();

        return view('frontend.about', $data);
    }


    // ===========Service page============
    public function service(){
        return view('frontend.service');
    }



    // ===========Blog/Story page============
    public function stories(){
        $data['stories'] = Stories::paginate(8);
        return view('frontend.story',$data);
    }



    // ===========Blog/Story Details page============
    public function storyDetails($story_id){
        $data['story']= Stories::find($story_id);
        $data['latestStory']= Stories::orderBy('id', 'DESC')->paginate(3);
        return view('frontend.story-details',$data);
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
        $data['instractor'] = Instructor::paginate(16);

        return view('frontend.teachers',$data);
    }


    // ===========Clint page============
    public function clints(){
        $data['clients'] = Client::where('status',1)->get();
        return view('frontend.clint',$data);
    }


    // ===========News and Event page============
    public function news(){
        $data['news_event'] = NewsAdnEvents::paginate(6);
        return view('frontend.event',$data);
    }


    // ===========News and Event page============
    public function eventDetails($newsEvent_id){
        $data['event']=NewsAdnEvents::find($newsEvent_id);
        $data['latestEvent']= NewsAdnEvents::orderBy('id', 'DESC')->paginate(3);
        return view('frontend.event-details',$data);
    }


    // ===========Contact page============
    public function contact(){
        $data['contact'] = Contact::first();
        return view('frontend.contact',$data);
    }

    // ===========Contact page============
    public function userProfile(){
        $data['userInfo'] = User::where('id', Auth::user()->id)->first();
        return view('layouts.frontend.dashboard.profile',$data);
    }
}

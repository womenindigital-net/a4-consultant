<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enroll;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    public function enroll($course_id)
    {
        $course_id = $course_id;
        if (Auth::user()) {
            $record = new Enroll();
            $record->userName = Auth::user()->name;
            $record->email = Auth::user()->email;
            $record->address = Auth::user()->address;
            $record->phone = Auth::user()->phone;
            $record->course_id = $course_id;
            $record->save();
            return redirect()->route('course.details',$course_id)->with('message', 'Successfully Enrolled Wait for Authority approval.');
        } else {
            return redirect()->route('login');
        }
    }

    public function index(){
        $data['enrollLists'] = Enroll::get();
        return view('admin.enroll.index',$data);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enroll;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    //list enroll
    public function index()
    {
        $data['enrollLists'] = Enroll::get();
        return view('admin.enroll.index', $data);
    }

    // store enroll
    public function enroll($course_id)
    {
        $course_id = $course_id;
        if (Auth::user()) {
            if (Enroll::where('course_id', $course_id)->where('email', Auth::user()->email)->exists()) {
                return redirect()->route('course.details', $course_id)->with('message', 'This course already has been taken.');
            } else {
                $record = new Enroll();
                $record->userName = Auth::user()->name;
                $record->email = Auth::user()->email;
                $record->address = Auth::user()->address;
                $record->phone = Auth::user()->phone;
                $record->course_id = $course_id;
                $record->save();
                return redirect()->route('course.details', $course_id)->with('message', 'Successfully Enrolled Wait for Authority approval.');
            }
        } else {
            return redirect()->route('login');
        }
    }

    //show enroll
    public function show($enroll_id)
    {
        $enroll = Enroll::find($enroll_id);
        $data = ['enroll' => $enroll];
        return view('admin.enroll.show', $data);
    }

    //show update
    public function update(Request $request, $enroll_id)
    {
        $record = Enroll::find($enroll_id);
        $record->status = 1;
        $record->update();
        return redirect()->route('enroll.list')->with('message', 'Successfully approved ');
    }
    //enroll delete
    public function delete(Request $request, $enroll_id)
    {
        $record = Enroll::find($enroll_id);
        $record->delete();
        return redirect()->route('enroll.list')->with('message', 'Successfully delete ');
    }





    /////for user
    public function enrollDetails()
    {
        $data['enrollLists'] = Enroll::where('email', Auth::user()->email)->get();
        return view('layouts.frontend.dashboard.enroll-list', $data);
    }

    //
    public function allDetails($enroll_id)
    {
        $enroll = Enroll::find($enroll_id);
        $data = ['enroll' => $enroll];
        return view('layouts.frontend.dashboard.enroll-all-details', $data);
    }
}

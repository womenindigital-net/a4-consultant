<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\File;
use App\Models\CourseCategory;
use App\Models\Instructor;

class CourseController extends Controller
{
    //course list
    public function index(){
        $data['courses'] = Course::orderBy('id', 'DESC')->paginate(5);
        return view('admin.course.index',$data);
    }
    //course create
    public function create(){
        $data['courseCategory'] = CourseCategory::all();
        $data['instructors'] = Instructor::all();
        return view('admin.course.create',$data);
    }
    //  course store
    public function store(CourseRequest $request){
        $record = new Course();
        $record->course_category_id = request('course_category_id');
        $record->CourseName = request('CourseName');
        $record->courseTitle = request('courseTitle');
        $record->courseDescription = request('courseDescription');
        $record->price = request('price');
        $record->startDate = request('startDate');
        $record->time = request('time');
        $record->duration = request('duration');
        $record->instructor_id = request('instructor_id');
        $uploadPath = 'uploads/courses/';
        if ($request->hasFile('coursesImage')) {
            $file = $request->file('coursesImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/courses/', $filename);
            $record->coursesImage = $uploadPath.$filename;
        }
        $record->status = request('status');
        $record->save();
        // session()->flash('message', 'Successfully Courses Create');
        return redirect()->route('course.list')->with('message','Successfully Courses Create');
    }

    //course edit
    public function edit($course_id){
        $course = Course::findOrFail($course_id);
        $data = ['courses' => $course];
        $data['courseCategory'] = CourseCategory::all();
        $data['instructors'] = Instructor::all();
        return view('admin.course.edit',$data);
    }


    //update courses
    public function update(CourseRequest $request ,$course_id){

        $course_id = $course_id;
        $record = Course::find($course_id);
        $record->course_category_id = request('course_category_id');
        $record->CourseName = request('CourseName');
        $record->courseTitle = request('courseTitle');
        $record->courseDescription = request('courseDescription');
        $record->price = request('price');
        $record->startDate = request('startDate');
        $record->time = request('time');
        $record->duration = request('duration');
        $record->instructor_id = request('instructor_id');
        if ($request->hasFile('coursesImage')) {
            $uploadPath = 'uploads/courses/' . $record->coursesImage;
            if(File::exists($uploadPath)){
                File::delete($uploadPath);
            }
            $file = $request->file('coursesImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/courses/', $filename);
            $record->coursesImage = $filename;
        }
        $record->status = request('status');
        $record->update();
        return redirect()->route('course.list')->with('message','Successfully Courses Updated');
    }

    //delete Courses

    public function destroy($course_id)
    {
        $record = Course::findOrFail($course_id);
        if($record->count() > 0){
            $destination = $record->coursesImage;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $record->delete();
        }
        return redirect()->back()->with('message', 'Successfully Delete Courses');
    }
}

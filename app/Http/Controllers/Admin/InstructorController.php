<?php

namespace App\Http\Controllers\Admin;

use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\InstructorRequest;

class InstructorController extends Controller
{
    //instructor list
    public function index()
    {
        $data['instructors'] = Instructor::orderBy('id', 'DESC')->paginate(5);
        return view('admin.instructor.index', $data);
    }
    //instructor create
    public function create()
    {
        return view('admin.instructor.create');
    }

    //instructor store
    public function store(InstructorRequest $request)
    {
        $record = new Instructor();
        $record->instructorName = request('instructorName');
        $record->instructorTitle = request('instructorTitle');
        $record->instructorDescription = request('instructorDescription');
        $record->instructorPosition = request('instructorPosition');
        $uploadPath = 'uploads/instructors/';
        if ($request->hasFile('instructorImage')) {
            $file = $request->file('instructorImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/instructors/', $filename);
            $record->instructorImage = $uploadPath . $filename;
        }
        $record->status = request('status');
        $record->save();
        // session()->flash('message', 'Successfully Courses Create');
        return redirect()->route('instructor.list')->with('message', 'Successfully Instructor Created');
    }


    //instructor edit
    public function edit($instructor_id){
        $instructor = Instructor::findOrFail($instructor_id);
        $data = [
            'instructors' => $instructor
        ];
        return view('admin.instructor.edit',$data);
    }

    //update instructor
    public function update(InstructorRequest $request ,$instructor_id){
        $record = Instructor::find($instructor_id);
        $record->instructorName = request('instructorName');
        $record->instructorTitle = request('instructorTitle');
        $record->instructorDescription = request('instructorDescription');
        $record->instructorPosition = request('instructorPosition');
        if ($request->hasFile('instructorImage')) {
            $destination = $record->instructorImage;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('instructorImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/instructors/', $filename);
            $record->instructorImage = 'uploads/instructors/' . $filename;
        }
        $record->status = request('status');
        $record->update();
        return redirect()->route('instructor.list')->with('message','Successfully Instructor Updated');
    }

    //delete instructor

    public function destroy($course_id)
    {
        $record = Instructor::findOrFail($course_id);
        if($record->count() > 0){
            $destination = $record->instructorImage;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $record->delete();
        }
        return redirect()->back()->with('message', 'Successfully Delete Instructor');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
     //instructor list
     public function index()
     {
         $data['sliders'] = Slider::orderBy('id', 'DESC')->paginate(5);
         return view('admin.slider.index', $data);
     }
     //instructor create
     public function create()
     {
         return view('admin.slider.create');
     }

     //instructor store
     public function store(SliderRequest $request)
     {
         $record = new Slider();
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
         $instructor = Slider::findOrFail($instructor_id);
         $data = [
             'instructors' => $instructor
         ];
         return view('admin.instructor.edit',$data);
     }

     //update instructor
     public function update(SliderRequest $request ,$slider_id){
         $record = Slider::find($slider_id);
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
         $record = Slider::findOrFail($course_id);
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

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\SliderUpdateRequest;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
     //slider list
     public function index()
     {
         $data['sliders'] = Slider::orderBy('id', 'DESC')->paginate(5);
         return view('admin.slider.index', $data);
     }
     //slider create
     public function create()
     {
         return view('admin.slider.create');
     }

     //slider store
     public function store(SliderRequest $request)
     {
         $record = new Slider();
         $record->sliderTitle = request('sliderTitle');
         $record->sliderDescription = request('sliderDescription');
         $uploadPath = 'uploads/sliders/';
         if ($request->hasFile('sliderImage')) {
             $file = $request->file('sliderImage');
             $ext = $file->getClientOriginalExtension();
             $filename = time() . '.' . $ext;
             $file->move('uploads/sliders/', $filename);
             $record->sliderImage = $uploadPath . $filename;
         }
         $record->status = request('status');
         $record->save();
         return redirect()->route('slider.list')->with('message', 'Successfully slider Created');
     }


     //slider edit
     public function edit($slider_id){
         $slider = Slider::findOrFail($slider_id);
         $data = [
             'sliders' => $slider
         ];
         return view('admin.slider.edit',$data);
     }

     //update slider
     public function update(SliderUpdateRequest $request ,$slider_id){
         $record = Slider::find($slider_id);
         $record->sliderTitle = request('sliderTitle');
         $record->sliderDescription = request('sliderDescription');;
         if ($request->hasFile('sliderImage')) {
             $destination = $record->sliderImage;
             if(File::exists($destination)){
                 File::delete($destination);
             }
             $file = $request->file('sliderImage');
             $ext = $file->getClientOriginalExtension();
             $filename = time() . '.' . $ext;
             $file->move('uploads/sliders/', $filename);
             $record->sliderImage = 'uploads/sliders/' . $filename;
         }
         $record->status = request('status');
         $record->update();
         return redirect()->route('slider.list')->with('message','Successfully Slider Updated');
     }

     //delete slider

     public function destroy($slider_id)
     {
         $record = Slider::findOrFail($slider_id);
         if($record->count() > 0){
             $destination = $record->sliderImage;
             if(File::exists($destination)){
                 File::delete($destination);
             }
             $record->delete();
         }
         return redirect()->back()->with('message', 'Successfully Delete slider');
     }
}

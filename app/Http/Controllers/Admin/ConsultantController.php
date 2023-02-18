<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ConsultantRequest;
use App\Http\Requests\ConsultantUpdateRequest;

class ConsultantController extends Controller
{
     //instructor list
     public function index()
     {
         $data['consultants'] = Consultant::orderBy('id', 'DESC')->paginate(5);
         return view('admin.consultant.index', $data);
     }
     //instructor create
     public function create()
     {
         return view('admin.consultant.create');
     }

     //instructor store
     public function store(ConsultantRequest $request)
     {
         $record = new Consultant();
         $record->consultantName = request('consultantName');
         $record->consultantDesignation = request('consultantDesignation');
         $uploadPath = 'uploads/consultants/';
         if ($request->hasFile('consultantImage')) {
             $file = $request->file('consultantImage');
             $ext = $file->getClientOriginalExtension();
             $filename = time() . '.' . $ext;
             $file->move('uploads/consultants/', $filename);
             $record->consultantImage = $uploadPath . $filename;
         }
         $record->status = request('status');
         $record->save();
         return redirect()->route('consultant.list')->with('message', 'Successfully Consultant Created');
     }


     //instructor edit
     public function edit($consultant_id){
         $consultant = Consultant::findOrFail($consultant_id);
         $data = [
             'consultants' => $consultant
         ];
         return view('admin.consultant.edit',$data);
     }

     //update instructor
     public function update(ConsultantUpdateRequest $request ,$slider_id){
         $record = Consultant::find($slider_id);
         $record->consultantName = request('consultantName');
         $record->consultantDesignation = request('consultantDesignation');;
         if ($request->hasFile('consultantImage')) {
             $destination = $record->consultantImage;
             if(File::exists($destination)){
                 File::delete($destination);
             }
             $file = $request->file('consultantImage');
             $ext = $file->getClientOriginalExtension();
             $filename = time() . '.' . $ext;
             $file->move('uploads/consultants/', $filename);
             $record->consultantImage = 'uploads/consultants/' . $filename;
         }
         $record->status = request('status');
         $record->update();
         return redirect()->route('consultant.list')->with('message','Successfully Consultant Updated');
     }

     //delete instructor

     public function destroy($consultant_id)
     {
         $record = Consultant::findOrFail($consultant_id);
         if($record->count() > 0){
             $destination = $record->consultantImage;
             if(File::exists($destination)){
                 File::delete($destination);
             }
             $record->delete();
         }
         return redirect()->back()->with('message', 'Successfully Delete Consultant');
     }
}

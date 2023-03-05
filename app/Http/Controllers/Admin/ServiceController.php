<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
      //event list
      public function index()
      {
          $data['services'] = Service::orderBy('id', 'DESC')->paginate(10);
          return view('admin.service.index', $data);
      }
      //event create
      public function create()
      { $data['serviceCategory'] = ServiceCategory::all();
          return view('admin.service.create',$data);
      }

      //event store
      public function store(ServiceStoreRequest $request)
      {
          $record = new Service();
          $record->name = request('name');
          $record->description = request('description');
          $record->service_category_id = request('service_category_id');
          $uploadPath = 'uploads/Services/';
          if ($request->hasFile('image')) {
              $file = $request->file('image');
              $ext = $file->getClientOriginalExtension();
              $filename = time() . '.' . $ext;
              $file->move('uploads/Services/', $filename);
              $record->image = $uploadPath . $filename;
          }
          $record->status = request('status');
          $record->save();
          return redirect()->route('service.list')->with('message', 'Successfully Services Created');
      }


      //event edit
      public function edit($id){
          $service = Service::findOrFail($id);
          $data = [
              'service' => $service
          ];
          $data['serviceCategories'] = ServiceCategory::all();
          return view('admin.service.edit',$data);
      }

      //event update
      public function update(ServiceUpdateRequest $request ,$id){
          $record = Service::find($id);
          $record->name = request('name');
          $record->description = request('description');
          if ($request->hasFile('image')) {
              $destination = $record->image;
              if(File::exists($destination)){
                  File::delete($destination);
              }
              $file = $request->file('image');
              $ext = $file->getClientOriginalExtension();
              $filename = time() . '.' . $ext;
              $file->move('uploads/Services/', $filename);
              $record->image = 'uploads/Services/' . $filename;
          }
          $record->status = request('status');
          $record->update();
          return redirect()->route('service.list')->with('message','Successfully Service Updated');
      }

      //delete event
      public function destroy($id)
      {
          $record = Service::findOrFail($id);
          if($record->count() > 0){
              $destination = $record->image;
              if(File::exists($destination)){
                  File::delete($destination);
              }
              $record->delete();
          }
          return redirect()->back()->with('message', 'Successfully Delete Service');
      }
}

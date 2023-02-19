<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
     //event list
     public function index()
     {
         $data['clients'] = Client::orderBy('id', 'DESC')->paginate(5);
         return view('admin.client.index', $data);
     }
     //event create
     public function create()
     {
         return view('admin.client.create');
     }

     //event store
     public function store(ClientStoreRequest $request)
     {
         $record = new Client();
         $record->name = request('name');
         $uploadPath = 'uploads/clients/';
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $ext = $file->getClientOriginalExtension();
             $filename = time() . '.' . $ext;
             $file->move('uploads/clients/', $filename);
             $record->image = $uploadPath . $filename;
         }
         $record->status = request('status');
         $record->save();
         return redirect()->route('client.list')->with('message', 'Successfully client Created');
     }


     //event edit
     public function edit($id){
         $clients = Client::findOrFail($id);
         $data = [
             'clients' => $clients
         ];
         return view('admin.client.edit',$data);
     }

     //event update
     public function update(ClientUpdateRequest $request ,$id){
         $record = Client::find($id);
         $record->name = request('name');
         if ($request->hasFile('image')) {
             $destination = $record->image;
             if(File::exists($destination)){
                 File::delete($destination);
             }
             $file = $request->file('image');
             $ext = $file->getClientOriginalExtension();
             $filename = time() . '.' . $ext;
             $file->move('uploads/clients/', $filename);
             $record->image = 'uploads/clients/' . $filename;
         }
         $record->status = request('status');
         $record->update();
         return redirect()->route('client.list')->with('message','Successfully Clients Updated');
     }

     //delete event
     public function destroy($id)
     {
         $record = Client::findOrFail($id);
         if($record->count() > 0){
             $destination = $record->image;
             if(File::exists($destination)){
                 File::delete($destination);
             }
             $record->delete();
         }
         return redirect()->back()->with('message', 'Successfully Delete Clients');
     }
}

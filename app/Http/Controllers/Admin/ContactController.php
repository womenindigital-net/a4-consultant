<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
   //event list
   public function index()
   {
       $data['contacts'] = Contact::orderBy('id', 'DESC')->paginate(5);
       return view('admin.contact.index', $data);
   }
   //event create
   public function create()
   {
       return view('admin.contact.create');
   }

   //event store
   public function store(ContactStoreRequest $request)
   {
       $record = new Contact();
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
       $clients = Contact::findOrFail($id);
       $data = [
           'clients' => $clients
       ];
       return view('admin.client.edit',$data);
   }

   //event update
   public function update(ContactUpdateRequest $request ,$id){
       $record = Contact::find($id);
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
       $record = Contact::findOrFail($id);
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

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
       $record->address = request('address');
       $record->phone = request('phone');
       $record->email = request('email');
       $record->status = request('status');
       $record->save();
       return redirect()->route('contact.list')->with('message', 'Successfully Contacts Created');
   }


   //event edit
   public function edit($id){
       $contact = Contact::findOrFail($id);
       $data = [
           'contacts' => $contact
       ];
       return view('admin.contact.edit',$data);
   }

   //event update
   public function update(ContactStoreRequest $request ,$id){
       $record = Contact::find($id);
       $record->address = request('address');
       $record->phone = request('phone');
       $record->email = request('email');
       $record->status = request('status');
       $record->update();
       return redirect()->route('contact.list')->with('message','Successfully Contact Updated');
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
       return redirect()->back()->with('message', 'Successfully Delete Contact');
   }
}

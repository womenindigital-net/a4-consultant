<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\AboutusStoreRequest;

class AboutController extends Controller
{
   //event list
   public function index()
   {
       $data['aboutus'] = About::get();
       return view('admin.about-us.index', $data);
   }
   //event create
   public function create()
   {
       return view('admin.about-us.create');
   }

   //event store
   public function store(AboutusStoreRequest $request)
   {
       $record = new About();
       $record->title = request('title');
       $record->des = request('des');
       $record->sub_title_one = request('sub_title_one');
       $record->sub_title_one_des = request('sub_title_one_des');
       $record->sub_title_two = request('sub_title_two');
       $record->sub_title_two_des = request('sub_title_two_des');
       $record->sub_title_three = request('sub_title_three');
       $record->sub_title_three_des = request('sub_title_three_des');
       $record->status = request('status');
       $record->save();
       return redirect()->route('aboutus.list')->with('message', 'Successfully About Content Created');
   }


   //event edit
   public function edit($id){
       $aboutus = About::findOrFail($id);
       $data = [
           'aboutus' => $aboutus
       ];
       return view('admin.about-us.edit',$data);
   }

   //event update
   public function update(AboutusStoreRequest $request ,$id){
       $record = About::find($id);
       $record->title = request('title');
       $record->des = request('des');
       $record->sub_title_one = request('sub_title_one');
       $record->sub_title_one_des = request('sub_title_one_des');
       $record->sub_title_two = request('sub_title_two');
       $record->sub_title_two_des = request('sub_title_two_des');
       $record->sub_title_three = request('sub_title_three');
       $record->sub_title_three_des = request('sub_title_three_des');
       $record->status = request('status');
       $record->update();
       return redirect()->route('aboutus.list')->with('message','Successfully About Content Updated');
   }

   //delete event
   public function destroy($id)
   {
       $record = About::findOrFail($id);
       if($record->count() > 0){
           $destination = $record->image;
           if(File::exists($destination)){
               File::delete($destination);
           }
           $record->delete();
       }
       return redirect()->back()->with('message', 'Successfully Delete About Content');
   }
}

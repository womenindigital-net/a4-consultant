<?php

namespace App\Http\Controllers\Admin;

use App\Models\Stories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoriesStoreRequest;
use App\Http\Requests\StoriesUpdateRequest;
use Illuminate\Support\Facades\File;

class StoriesController extends Controller
{
      //stories list
      public function index()
      {
          $data['stories'] = Stories::orderBy('id', 'DESC')->paginate(5);
          return view('admin.stories.index', $data);
      }
      //stories create
      public function create()
      {
          return view('admin.stories.create');
      }

      //stories store
      public function store(StoriesStoreRequest $request)
      {
          $record = new Stories();
          $record->title = request('title');
          $record->description = request('description');
          $record->date = request('date');
          $uploadPath = 'uploads/stories/';
          if ($request->hasFile('storiesImage')) {
              $file = $request->file('storiesImage');
              $ext = $file->getClientOriginalExtension();
              $filename = time() . '.' . $ext;
              $file->move('uploads/stories/', $filename);
              $record->storiesImage = $uploadPath . $filename;
          }
          $record->status = request('status');
          $record->save();
          return redirect()->route('stories.list')->with('message', 'Successfully Stories Created');
      }


      //stories edit
      public function edit($stories_id){
          $stories = Stories::findOrFail($stories_id);
          $data = [
              'stories' => $stories
          ];
          return view('admin.stories.edit',$data);
      }

      //stories slider
      public function update(StoriesUpdateRequest $request ,$stories_id){
          $record = Stories::find($stories_id);
          $record->title = request('title');
          $record->description = request('description');
          $record->date = request('date');
          if ($request->hasFile('storiesImage')) {
              $destination = $record->storiesImage;
              if(File::exists($destination)){
                  File::delete($destination);
              }
              $file = $request->file('storiesImage');
              $ext = $file->getClientOriginalExtension();
              $filename = time() . '.' . $ext;
              $file->move('uploads/stories/', $filename);
              $record->storiesImage = 'uploads/stories/' . $filename;
          }
          $record->status = request('status');
          $record->update();
          return redirect()->route('stories.list')->with('message','Successfully Stories Updated');
      }

      //delete stories

      public function destroy($stories_id)
      {
          $record = Stories::findOrFail($stories_id);
          if($record->count() > 0){
              $destination = $record->storiesImage;
              if(File::exists($destination)){
                  File::delete($destination);
              }
              $record->delete();
          }
          return redirect()->back()->with('message', 'Successfully Delete Stories');
      }
      
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Stories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoriesStoreRequest;
use App\Http\Requests\StoriesUpdateRequest;
use App\Models\StoriesImages;
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
        // dd($request->validated());
        $record = new Stories();
        $record->title = request('title');
        $record->description = request('description');
        $record->date = request('date');
        $uploadPath = 'uploads/stories/';
        //   if ($request->hasFile('storiesImage')) {
        //       $file = $request->file('storiesImage');
        //       $ext = $file->getClientOriginalExtension();
        //       $filename = time() . '.' . $ext;
        //       $file->move('uploads/stories/', $filename);
        //       $record->storiesImage = $uploadPath . $filename;
        //   }
        $record->status = request('status');
        $record->save();

        if ($request->hasFile('storiesImage')) {
            $uploadPath = 'uploads/stories/';
            $i = 1;
            foreach ($request->file('storiesImage') as $imageFile) {
                $ext = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $ext;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . '' . $filename;
                $record->storiesImage = $finalImagePathName;

                $record->storiesImages()->create([
                    'stories_id' => $record->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }
        return redirect()->route('stories.list')->with('message', 'Successfully Stories Created');
    }


    //stories edit
    public function edit($stories_id)
    {
        $stories = Stories::findOrFail($stories_id);
        $data = [
            'stories' => $stories
        ];
        return view('admin.stories.edit', $data);
    }

    //stories slider
    public function update(StoriesUpdateRequest $request, $stories_id)
    {
        $record = Stories::find($stories_id);
        $record->title = request('title');
        $record->description = request('description');
        $record->date = request('date');
        $record->status = request('status');
        $record->update();

        if ($request->hasFile('storiesImage')) {
            $uploadPath = 'uploads/stories/';
            $i = 1;
            foreach ($request->file('storiesImage') as $imageFile) {
                $ext = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $ext;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . '' . $filename;
                $record->storiesImage = $finalImagePathName;

                $record->storiesImages()->create([
                    'stories_id' => $record->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }
        return redirect()->route('stories.list')->with('message', 'Successfully Stories Updated');
    }

      ///delete images
      public function destroyImage($stories_image_id)
      {
          $storiesImage = StoriesImages::findOrFail($stories_image_id);
          if (File::exists($storiesImage->image)) {
              File::delete($storiesImage->image);
          }
          $storiesImage->delete();
          return redirect()->back()->with('message', 'Stories Image Deleted');
      }

    //delete stories

    public function destroy($stories_id)
    {
        $record = Stories::findOrFail($stories_id);
        if ($record->count() > 0) {
            $destination = $record->storiesImage;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $record->delete();
        }
        return redirect()->back()->with('message', 'Successfully Delete Stories');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

}

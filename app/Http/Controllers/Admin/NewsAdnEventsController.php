<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\NewsAdnEvents;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsAndEventsStoreRequest;
use App\Http\Requests\NewsAndEventsUpdateRequest;
use Illuminate\Support\Facades\File;

class NewsAdnEventsController extends Controller
{
    //event list
    public function index()
    {
        $data['events'] = NewsAdnEvents::orderBy('id', 'DESC')->paginate(5);
        return view('admin.news-and-event.index', $data);
    }
    //event create
    public function create()
    {
        return view('admin.news-and-event.create');
    }

    //event store
    public function store(NewsAndEventsStoreRequest $request)
    {
        $record = new NewsAdnEvents();
        $record->title = request('title');
        $record->description = request('description');
        $record->date = request('date');
        $record->time = request('time');
        $record->finishTime = request('finishTime');
        $record->address = request('address');
        $uploadPath = 'uploads/newsAndEvents/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/newsAndEvents/', $filename);
            $record->image = $uploadPath . $filename;
        }
        $record->status = request('status');
        $record->save();
        return redirect()->route('event.list')->with('message', 'Successfully News and Events Created');
    }


    //event edit
    public function edit($id){
        $events = NewsAdnEvents::findOrFail($id);
        $data = [
            'events' => $events
        ];
        return view('admin.news-and-event.edit',$data);
    }

    //event update
    public function update(NewsAndEventsUpdateRequest $request ,$id){
        $record = NewsAdnEvents::find($id);
        $record->title = request('title');
        $record->description = request('description');
        $record->date = request('date');
        $record->time = request('time');
        $record->finishTime = request('finishTime');
        $record->address = request('address');
        if ($request->hasFile('image')) {
            $destination = $record->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/newsAndEvents/', $filename);
            $record->image = 'uploads/newsAndEvents/' . $filename;
        }
        $record->status = request('status');
        $record->update();
        return redirect()->route('event.list')->with('message','Successfully News And Events Updated');
    }

    //delete event
    public function destroy($id)
    {
        $record = NewsAdnEvents::findOrFail($id);
        if($record->count() > 0){
            $destination = $record->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $record->delete();
        }
        return redirect()->back()->with('message', 'Successfully Delete News and Events');
    }
}

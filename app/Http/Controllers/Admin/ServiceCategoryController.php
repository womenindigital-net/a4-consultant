<?php

namespace App\Http\Controllers\Admin;

use id;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ServiceCategoryRequest;

class ServiceCategoryController extends Controller
{
    // service category list
    public function index(){
        $data['servicesCategories'] = ServiceCategory::orderBy('id', 'DESC')->paginate(5);
        return view('admin.service-category.index',$data);
    }
     //service category create
     public function create(){
        return view('admin.service-category.create');
    }
     //  service category store
    public function store(ServiceCategoryRequest $request){

        $record = new ServiceCategory();
        $record->categoryTitle = request('categoryTitle');
        $record->categoryDescription = request('categoryDescription');
        $uploadPath = 'uploads/Services-category/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/Services-category/', $filename);
            $record->image = $uploadPath . $filename;
        }
        $record->status = request('status');
        $record->save();
        return redirect()->route('service.category.list')->with('message', 'Successfully Category Created');
    }
     //service category edit
     public function edit($service_id){
        $category = ServiceCategory::findOrFail($service_id);
        $data = [
            'serviceCategory' => $category
        ];
        return view('admin.service-category.edit',$data);
    }


    //update category service category

    public function update(serviceCategoryRequest $request ,$service_id){
        $record = ServiceCategory::find($service_id);
        $record->categoryTitle = request('categoryTitle');
        $record->categoryDescription = request('categoryDescription');
        if ($request->hasFile('image')) {
            $destination = $record->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/Services-category/', $filename);
            $record->image = 'uploads/Services-category/' . $filename;
        }
        $record->status = request('status');
        $record->update();
        return redirect()->route('service.category.list')->with('message','Successfully Category Updated');
    }

    //delete service category

    public function destroy($service_id)
    {
        $record = ServiceCategory::findOrFail($service_id);
        if($record->count() > 0){
            $destination = $record->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $record->delete();
        }
        return redirect()->back()->with('message', 'Successfully Delete Category');
    }




}


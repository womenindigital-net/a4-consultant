<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CourseCategoryRequest;
use App\Http\Requests\CourseCategroyRequest;

class CourseCategoryController extends Controller
{
     //course category list
     public function index(){
         $data['coursesCategories'] = CourseCategory::orderBy('id', 'DESC')->paginate(5);
        return view('admin.courses-category.index',$data);
    }
    //course category create
    public function create(){
        return view('admin.courses-category.create');
    }
    //  course category store
    public function store(CourseCategoryRequest $request){

        $record = new CourseCategory();
        $record->categoryTitle = request('categoryTitle');
        $uploadPath = 'uploads/course-category/';
        if ($request->hasFile('categoryImage')) {
            $file = $request->file('categoryImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/course-category/', $filename);
            $record->categoryImage = $uploadPath . $filename;
        }
        $record->status = request('status');
        $record->save();
        return redirect()->route('course.category.list')->with('message', 'Successfully Category Created');
    }
    //course category edit
    public function edit($category_id){
        $category = CourseCategory::findOrFail($category_id);
        $data = [
            'coursesCategory' => $category
        ];
        return view('admin.courses-category.edit',$data);
    }


    //update category courses

    public function update(CourseCategoryRequest $request ,$category_id){
        $record = CourseCategory::find($category_id);
        $record->categoryTitle = request('categoryTitle');
        if ($request->hasFile('categoryImage')) {
            $destination = $record->categoryImage;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('categoryImage');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/course-category/', $filename);
            $record->categoryImage = 'uploads/course-category/'. $filename;
        }
        $record->status = request('status');
        $record->update();
        return redirect()->route('course.category.list')->with('message','Successfully Category Updated');
    }

    //delete Courses

    public function destroy($category_id)
    {
        $record = CourseCategory::findOrFail($category_id);
        if($record->count() > 0){
            $destination = $record->categoryImage;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $record->delete();
        }
        return redirect()->back()->with('message', 'Successfully Delete Category');
    }
}

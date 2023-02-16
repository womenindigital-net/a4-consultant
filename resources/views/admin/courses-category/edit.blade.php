@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Categroy Courses
                            <a href="{{ route('course.category.list') }}" class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Courses Categroy List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('course.category.update',$coursesCategory->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Category Name</label>
                                    <input type="text" value="{{ $coursesCategory->categoryTitle }}" name="categoryTitle" class="form-control" id="validationCustom01"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Upload Image</label>
                                    <input type="file" name="categoryImage" id="imgInp" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-2 col-form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1" {{ $coursesCategory->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $coursesCategory->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset($coursesCategory->categoryImage) }}"  width="70px" height="70px" id="blah" src="#"
                                    alt="your image" />
                            </div>
                        </div>
                        {{-- preview image  --}}
                        <div class="row mt-2">
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-primary mt-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div>
@endsection

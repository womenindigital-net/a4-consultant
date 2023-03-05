@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Service
                            <a href="{{ route('service.list') }}" class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Service  List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Service Name</label>
                                    <input type="text" value="{{ $service->name }}" name="name" class="form-control" id="validationCustom02">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label"> Course Category</label>
                                    <select class="form-select" name="course_category_id" id="validationCustom02" >
                                        <option selected disabled value="">Select Category</option>
                                        @foreach ($serviceCategories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $service->service_category_id ? 'selected' : '' }} >{{ $category->categoryTitle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="1"> {{ $service->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1"{{ $service->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>



                            <div class="col-md-6">
                            </div>

                        </div>
                        {{-- preview image  --}}
                        <div class="row mt-2">
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-primary mt-3" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div>
@endsection

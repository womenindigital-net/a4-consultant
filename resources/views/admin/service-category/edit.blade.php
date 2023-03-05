@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Categroy Service
                            <a href="{{ route('service.category.list') }}" class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Service Categroy List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('service.category.update',$serviceCategory->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Category Name</label>
                                    <input type="text" value="{{ $serviceCategory->categoryTitle }}" name="categoryTitle" class="form-control" id="validationCustom01"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Category Description</label>
                                    <input type="text" name="categoryDescription" class="form-control"
                                        id="validationCustom02" 
                                        >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-2 col-form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1" {{ $serviceCategory->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $serviceCategory->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
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

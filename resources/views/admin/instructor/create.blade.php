@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Create Instructor
                            <a href="{{ route('instructor.list') }}" class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Instructor List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('instructor.store') }}" method="POST" class="needs-validation" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Instructor Name </label>
                                    <input type="text" name="instructorName" class="form-control" id="validationCustom01"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Instructor Title </label>
                                    <input type="text" name="instructorTitle" class="form-control" id="validationCustom02"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea name="instructorDescription" required class="form-control" rows="1" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Position </label>
                                    <input type="text" name="instructorPosition" class="form-control" id="validationCustom02"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Instrutor Image</label>
                                    <input type="file" name="instructorImage" id="imgInp" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <img class="d-none" width="100px" height="100px" id="blah" src="#"
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

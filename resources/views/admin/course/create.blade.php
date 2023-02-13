@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Create Courses
                            <a href="{{ url('admin/package/list') }}"
                                class="btn btn-primary btn-sm text-white  float-end p-2"></i> Courses List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ url('admin/package/store') }}" method="POST" class="needs-validation" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label"> Course Category</label>
                                    <select class="form-select" name="courseCategory" id="validationCustom02" required>
                                        <option selected disabled value="">Select Category</option>
                                        <option value="30">category One </option>
                                        <option value="90">Category two</option>
                                        <option value="180">Category three</option>
                                        <option value="365">Category Frou</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Name </label>
                                    <input type="text" name="CourseName" class="form-control" id="validationCustom01"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Course Title </label>
                                    <input type="number" name="courseTitle" class="form-control" id="validationCustom02"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Course Description</label>
                                    <input type="number" name="courseDescription" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">price</label>
                                    <input type="number" name="price" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Start Date</label>
                                    <input type="number" name="startDate" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Time</label>
                                    <input type="number" name="time" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Duration</label>
                                    <input type="number" name="duration" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Select Instructor</label>
                                    <select class="form-select" name="SelectInstructor" id="validationCustom02" required>
                                        <option selected disabled value="">Select Instructor</option>
                                        <option value="30">category One </option>
                                        <option value="90">Category two</option>
                                        <option value="180">Category three</option>
                                        <option value="365">Category Frou</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Upload Image</label>
                                    <input type="file" name="coursesImage" id="imgInp" class="form-control"
                                        id="validationCustom02" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="col-md-2 col-form-label">Status</label>
                                    <select name="status"  class="form-select">
                                        <option selected disabled value="">Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                            </div>
                            <div class="col-md-6">
                                <img width="70px" height="70px" id="blah" src="#" alt="your image" />
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

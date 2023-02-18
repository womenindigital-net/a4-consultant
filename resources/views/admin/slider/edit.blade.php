@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Instructors
                            <a href="{{ route('instructor.list') }}" class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Instructors List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('instructor.update',$instructors->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Instructor Name </label>
                                    <input type="text" value="{{ $instructors->instructorName }}" name="instructorName" class="form-control" id="validationCustom01"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Instructor Title </label>
                                    <input type="text" value="{{ $instructors->instructorName }}" name="instructorTitle" class="form-control" id="validationCustom02"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea name="instructorDescription"  required class="form-control" rows="1" required>{{ $instructors->instructorDescription }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Position </label>
                                    <input type="text" value="{{ $instructors->instructorPosition }}" name="instructorPosition" class="form-control" id="validationCustom02"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1"{{ $instructors->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $instructors->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Instrutor Image</label>
                                    <input type="file" name="instructorImage" id="imgInp" class="form-control"
                                        id="validationCustom02" >
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <img  src="{{ asset($instructors->instructorImage) }}" width="100px" height="100px" id="blah" src="#"
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

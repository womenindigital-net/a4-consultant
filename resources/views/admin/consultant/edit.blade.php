@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Consultant
                            <a href="{{ route('consultant.list') }}" class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Consultant List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('consultant.update',$consultants->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Consultant Name</label>
                                    <input type="text" value="{{ $consultants->consultantName }}" name="consultantName" class="form-control" id="validationCustom02" >
                                    @if ($errors->has('consultantName'))
                                        <span class="text-danger">{{ $errors->first('consultantName') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Designation</label>
                                    <input value="{{ $consultants->consultantDesignation }}" name="consultantDesignation" class="form-control" rows="1">
                                    @if ($errors->has('consultantDesignation'))
                                    <span class="text-danger">{{ $errors->first('consultantDesignation') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1"{{ $consultants->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $consultants->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Consultant Image</label>
                                    <input type="file" name="consultantImage" id="imgInp" class="form-control"
                                        id="validationCustom02">
                                        @if ($errors->has('consultantImage'))
                                        <span class="text-danger">{{ $errors->first('consultantImage') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <img  src="{{ asset($consultants->consultantImage) }}" width="100px" height="100px" id="blah" src="#"
                                    alt="your image" />
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

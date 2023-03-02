@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Slider
                            <a href="{{ route('slider.list') }}" class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Slider List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('slider.update',$sliders->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">slider Title </label>
                                    <input type="text" name="sliderTitle" value="{{ $sliders->sliderTitle }}" class="form-control" id="validationCustom02" >
                                    @if ($errors->has('sliderTitle'))
                                        <span class="text-danger">{{ $errors->first('sliderTitle') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea name="sliderDescription" class="form-control" rows="1">{{ $sliders->sliderDescription }}</textarea>
                                    @if ($errors->has('sliderDescription'))
                                    <span class="text-danger">{{ $errors->first('sliderDescription') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1"{{ $sliders->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $sliders->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">slider Image</label>
                                    <input type="file" name="sliderImage" id="imgInp" class="form-control"
                                        id="validationCustom02">
                                        @if ($errors->has('sliderImage'))
                                        <span class="text-danger">{{ $errors->first('sliderImage') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <img  src="{{ asset($sliders->sliderImage) }}" width="100px" height="100px" id="blah" src="#"
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

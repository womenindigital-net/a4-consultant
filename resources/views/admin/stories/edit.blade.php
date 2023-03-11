@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Stories
                            <a href="{{ route('stories.list') }}"
                                class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Stories List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('stories.update', $stories->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Stories Title</label>
                                    <input value="{{ $stories->title }}" type="text" name="title" class="form-control"
                                        id="validationCustom02">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Date</label>
                                    <input type="date" value="{{ $stories->date }}" name="date" class="form-control"
                                        id="validationCustom02">
                                    @if ($errors->has('date'))
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="1">{{ $stories->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Image</label>
                                    <input type="file" name="storiesImage[]" multiple id="gallery-photo-add"
                                        class="form-control" id="validationCustom02">
                                    @if ($errors->has('storiesImage'))
                                        <span class="text-danger">{{ $errors->first('storiesImage') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1"{{ $stories->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $stories->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                {{-- <img src="{{ asset($stories->storiesImage) }}" width="100px" height="100px"  id="gallery-photo-add"
                                    src="#" alt="your image" /> --}}
                                <style>
                                    .gallery img {
                                        height: 80px;
                                        width: 80px;
                                        margin-left: 10px;
                                    }
                                </style>
                                <div class="gallery"></div>
                                @if ($stories->storiesImages)
                                    <div class="row mb-4">
                                        @foreach ($stories->storiesImages as $image)
                                            <div class="col-md-4">
                                                <img src="{{ asset($image->image) }}" style="width: 80px; height:80px;"
                                                    class="m-4 border " alt="">
                                                <a type="submit" href="{{ route('storiesImage.delete', $image->id) }}"
                                                    class="btn btn-sm mb-2 me-1 ms-4 btn-danger btn-rounded waves-effect waves-light">
                                                    Remove
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <h5>NO image Added</h5>
                                @endif
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

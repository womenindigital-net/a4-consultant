@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit News and Events
                            <a href="{{ route('event.list') }}"
                                class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                News and Events List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('event.update', $events->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Title</label>
                                    <input value="{{ $events->title }}" type="text" name="title" class="form-control" id="validationCustom02">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Date</label>
                                    <input type="date" value="{{ $events->date }}" name="date" class="form-control" id="validationCustom02">
                                    @if ($errors->has('date'))
                                        <span class="text-danger">{{ $errors->first('date') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Start Time</label>
                                    <input type="time" name="time" value="{{ $events->time }}" class="form-control" id="validationCustom02">
                                    @if ($errors->has('time'))
                                        <span class="text-danger">{{ $errors->first('time') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Finish Time</label>
                                    <input type="time" name="finishTime" value="{{ $events->finishTime }}" class="form-control" id="validationCustom02">
                                    @if ($errors->has('finishTime'))
                                        <span class="text-danger">{{ $errors->first('finishTime') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Place</label>
                                    <input type="text" name="address" value="{{ $events->address }}"   class="form-control" id="validationCustom02">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="1">{{ $events->description }}"</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1"{{ $events->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $events->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Image</label>
                                    <input type="file" name="image" id="imgInp" class="form-control"
                                        id="validationCustom02">
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset($events->image) }}" width="100px" height="100px" id="blah"
                                    src="#" alt="your image" />
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

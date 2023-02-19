@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Edit Clients
                            <a href="{{ route('client.list') }}"
                                class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                Clients List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('client.update', $clients->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Name(optional)</label>
                                    <input type="text" name="name" value="{{ $clients->name }}" class="form-control" id="validationCustom02">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
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
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option selected disabled value="">Select</option>
                                    <option value="1"{{ $clients->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $clients->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <img  src="{{ asset($clients->image) }}" width="100px" height="100px" id="blah" src="#"
                                        alt="your image" />
                                </div>
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

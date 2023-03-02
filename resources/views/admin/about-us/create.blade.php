@extends('layouts.admin.master')
@section('page_content')


    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card p-2 mt-1">
                        <h3 class="text-primary">Create About Content
                            <a href="{{ route('aboutus.list') }}"
                                class="btn btn-primary btn-sm text-white  float-end p-2"></i>
                                About Content List
                            </a>
                        </h3>
                    </div>
                    <hr>
                    <form action="{{ route('aboutus.store') }}" method="POST" class="needs-validation" novalidate
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="validationCustom02">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea rows="1" type="text" name="des" class="form-control" id="validationCustom02"></textarea>
                                    @if ($errors->has('des'))
                                        <span class="text-danger">{{ $errors->first('des') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Sub Title One</label>
                                    <input type="text" name="sub_title_one" class="form-control" id="validationCustom02">
                                    @if ($errors->has('sub_title_one'))
                                        <span class="text-danger">{{ $errors->first('sub_title_one') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label  for="validationCustom03" class="form-label">Sub Title One Description</label>
                                    <textarea rows="1" type="text" name="sub_title_one_des" class="form-control" id="validationCustom02"></textarea>
                                    @if ($errors->has('sub_title_one_des'))
                                        <span class="text-danger">{{ $errors->first('sub_title_one_des') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Sub Title Two</label>
                                    <input type="text" name="sub_title_two" class="form-control" id="validationCustom02">
                                    @if ($errors->has('sub_title_two'))
                                        <span class="text-danger">{{ $errors->first('sub_title_two') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Sub Title Two Description</label>
                                    <textarea rows="1" type="text" name="sub_title_two_des" class="form-control" id="validationCustom02"></textarea>
                                    @if ($errors->has('sub_title_two_des'))
                                        <span class="text-danger">{{ $errors->first('sub_title_two_des') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Sub Title Three</label>
                                    <input type="text" name="sub_title_three" class="form-control" id="validationCustom02">
                                    @if ($errors->has('sub_title_three'))
                                        <span class="text-danger">{{ $errors->first('sub_title_three') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Sub Title Three Description</label>
                                    {{-- <textarea required class="form-control" rows="3"></textarea> --}}
                                    <textarea rows="1" type="text" name="sub_title_three_des" class="form-control" id="validationCustom02"></textarea>
                                    @if ($errors->has('sub_title_three_des'))
                                        <span class="text-danger">{{ $errors->first('sub_title_three_des') }}</span>
                                    @endif
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
                        </div>
                        <div class="row mt-2">
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-primary mt-3" type="submit">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div>
@endsection

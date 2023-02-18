@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card-header">
                    <h3 class="text-primary">Slider List
                        <a href="{{ route('slider.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Add
                            Sliders
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="responsive table table-borderd ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Slider Title</th>
                                    <th>Slider Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sliders as $key  => $slider)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $slider->sliderTitle }}</td>
                                        <td><img src="{{ asset($slider->sliderImage) }}" width="50px" height="50px"
                                                alt=""></td>
                                        <td>{{ $slider->sliderDescription }}</td>
                                        <td>{{ $slider->status == '1' ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('slider.edit', $slider->id) }}" type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                            <a type="button" href="{{ route('slider.delete', $slider->id) }}"
                                                onclick="return confirm('Are you sure, you want to delete?')"
                                                class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="13" class="text-danger text-center">No instructors Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $instructors->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

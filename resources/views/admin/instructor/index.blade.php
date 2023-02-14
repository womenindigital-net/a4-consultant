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
                    <h3 class="text-primary">Curses List
                        <a href="{{ route('instructor.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Add
                            Courses
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="responsive table table-borderd ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Instructor Name</th>
                                    <th>Instructor Title</th>
                                    <th>Description</th>
                                    <th>Position </th>
                                    <th>Instrutor Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($instructors as $key  => $instructor)
                                    <tr>

                                        <td>{{ $key+ 1}}</td>
                                        <td>{{ $instructor->instructorName }}</td>
                                        <td>{{ $instructor->instructorTitle }}</td>
                                        <td>{{ $instructor->instructorDescription }}</td>
                                        <td>{{ $instructor->instructorPosition }}</td>
                                        <td><img src="{{ asset($instructor->instructorImage) }}" width="50px" height="50px" alt=""></td>
                                        <td>{{ $instructor->status == '1' ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('instructor.edit',$instructor->id) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                    class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                                <a type="button"
                                                    href="{{ route('instructor.delete',$instructor->id) }}"
                                                    onclick="return confirm('Are you sure, you want to delete ')"
                                                    class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="13" class="text-danger text-center">No Courses Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                        {{-- {{ $courses->links() }} --}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

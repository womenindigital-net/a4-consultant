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
                        <a href="{{ route('course.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Add
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
                                    <th>Course Category</th>
                                    <th>Course Title</th>
                                    <th>Course Description</th>
                                    <th>Courses Image</th>
                                    <th>Price</th>
                                    <th>Start Date</th>
                                    <th>Time</th>
                                    <th>Leactures</th>
                                    <th>Quizzes</th>
                                    <th>Duration</th>
                                    <th>Select Instructor</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($courses as $key  => $course)
                                    <tr>

                                        <td>{{ $key+ 1}}</td>
                                        <td>{{ $course->courseCategory->categoryTitle }}</td>
                                        <td>{{ $course->courseTitle }}</td>
                                        <td>{{ substr($course->courseDescription, 0,  80) }}...</td>
                                        <td><img src="{{ asset($course->coursesImage) }}" width="50px" height="50px" alt=""></td>
                                        <td>{{ $course->price }}</td>
                                        <td>{{ $course->startDate }}</td>
                                        <td>{{ $course->time }}</td>
                                        <td>{{ $course->leactures }}</td>
                                        <td>{{ $course->quizzes }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td>{{ $course->Instructor->instructorName }}</td>
                                        <td>{{ $course->status == '1' ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('course.edit',$course->id) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                    class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                                <a type="button"
                                                    href="{{ route('course.delete',$course->id) }}"
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
                        {{ $courses->links() }}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

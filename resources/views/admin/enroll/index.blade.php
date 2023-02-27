@extends('layouts.admin.master')
@section('page_content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="responsive table table-borderd ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Course Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Course Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($enrollLists as $key  => $enrollList)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $enrollList->userName }}</td>
                                        <td>{{ $enrollList->course->courseTitle }}</td>
                                        <td>{{ $enrollList->email }}</td>
                                        <td>{{ $enrollList->phone }}</td>
                                        <td>{{ $enrollList->course->price }}</td>
                                        <td>{{ $enrollList->status == '1' ? 'Approved' : 'Pending' }}</td>
                                        <td>
                                            <a href="{{ route('slider.edit', $enrollList->id) }}" type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                            <a type="button" href="{{ route('slider.delete', $enrollList->id) }}"
                                                onclick="return confirm('Are you sure, you want to delete?')"
                                                class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="13" class="text-danger text-center">No Slider Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- <div>
                            {{ $enrollLists->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                    <h3 class="text-primary">Consultant List
                        <a href="{{ route('consultant.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Crate
                            Consultant
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="responsive table table-borderd ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Consultant Name</th>
                                    <th>Consultant Designation</th>
                                    <th>Consultant Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($consultants as $key  => $consultant)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $consultant->consultantName }}</td>
                                        <td>{{ $consultant->consultantDesignation }}</td>
                                        <td><img src="{{ asset($consultant->consultantImage) }}" width="50px" height="50px"
                                                alt=""></td>
                                        <td>{{ $consultant->status == '1' ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('consultant.edit', $consultant->id) }}" type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                            <a type="button" href="{{ route('consultant.delete', $consultant->id) }}"
                                                onclick="return confirm('Are you sure, you want to delete?')"
                                                class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="13" class="text-danger text-center">No Consultant Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $consultants->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

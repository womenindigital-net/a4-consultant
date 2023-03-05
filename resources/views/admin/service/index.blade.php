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
                    <h3 class="text-primary">Service List
                        <a href="{{ route('service.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Add
                            Service
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="responsive table table-borderd ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Sevice Name</th>
                                    <th>Service Description</th>
                                    <th>Service Category Name</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $key  => $service)
                                    <tr>
                                        <td>{{ $key+ 1}}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ substr($service->description, 0,  80) }}...</td>
                                        <td>{{ $service->Service->categoryTitle ??'' }}</td>
                                        <td>{{$service->status == '1' ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('service.edit',$service->id) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                    class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                                <a type="button"
                                                    href="{{ route('service.delete',$service->id) }}"
                                                    onclick="return confirm('Are you sure, you want to delete ')"
                                                    class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="13" class="text-danger text-center">No Service Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                        {{-- {{ $servicesCategories->links() }} --}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                    <h3 class="text-primary">Service Category List
                        <a href="{{ route('service.category.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Add Category
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
                                    <th>Sevice Title</th>
                                    <th>Service Description</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($servicesCategories as $key  => $category)
                                    <tr>
                                        <td>{{ $key+ 1}}</td>
                                        <td>{{ $category->categoryTitle }}</td>
                                        <td>{{ substr($category->categoryDescription, 0,  80) }}...</td>
                                        <td>{{ $category->status == '1' ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('service.category.edit',$category->id) }}"
                                                    type="button"
                                                    class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                    class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                                <a type="button"
                                                    href="{{ route('service.category.delete',$category->id) }}"
                                                    onclick="return confirm('Are you sure, you want to delete ')"
                                                    class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="13" class="text-danger text-center">No Service Category Available</td>
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

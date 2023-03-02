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
                <h3 class="text-primary">About Content List
                    <a href="{{ route('aboutus.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Create
                        About Content
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="responsive table table-borderd ">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Sub Title One</th>
                                <th>Sub Title Two</th>
                                <th>Sub Title Three</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($aboutus as $key  => $aboutus)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $aboutus->title }}</td>
                                    <td>{{ substr($aboutus->des, 0,  80) }}...</td>
                                    <td>{{ $aboutus->sub_title_one }}</td>
                                    <td>{{ $aboutus->sub_title_two }}</td>
                                    <td>{{ $aboutus->sub_title_three }}</td>
                                    <td>{{ $aboutus->status == '1' ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('aboutus.edit', $aboutus->id) }}" type="button"
                                            class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                            class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                        <a type="button" href="{{ route('aboutus.delete', $aboutus->id) }}"
                                            onclick="return confirm('Are you sure, you want to delete?')"
                                            class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13" class="text-danger text-center">No Content Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{-- {{ $aboutus->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

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
                    <h3 class="text-primary">Contact List
                        <a href="{{ route('contact.create') }}" class="btn btn-primary btn-sm text-white  float-end ">Create
                            Contact
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="responsive table table-borderd ">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $key  => $contact)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->status == '1' ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('contact.edit', $contact->id) }}" type="button"
                                                class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1"
                                                class="btn btn-sm btn-success"> <i class="mdi mdi-pencil"></i></a>

                                            <a type="button" href="{{ route('contact.delete', $contact->id) }}"
                                                onclick="return confirm('Are you sure, you want to delete?')"
                                                class="btn btn-sm mb-2 me-1 btn-danger btn-rounded waves-effect waves-light">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="13" class="text-danger text-center">No contact Available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $contacts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin.master')

@section('page_content')
    <Section>
        <style>
            .table thead tr th{
                padding-top:3px;
                padding-bottom:3px;
            }
            .table thead tr td{
                padding-top:3px;
                padding-bottom:3px;
            }
            .table tbody tr th{
                padding-top:3px;
                padding-bottom:3px;
                width: 20%;
            }
            .table tbody tr td{
                padding-top:3px;
                padding-bottom:3px;
            }

        </style>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-11">
                <div class="row">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">⭐ Name:</th>
                                <td scope="col"> {{ $enroll->userName }}</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">⭐ Email:</th>
                                <td>{{ $enroll->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Address:</th>
                                <td>{{ $enroll->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Phone:</th>
                                <td>{{ $enroll->phone }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ status:</th>
                                <td>
                                    <h6
                                        class="me-4 {{ $enroll->status == '1' ? 'bg-success' : 'bg-danger' }} waves-effect
                                    waves-light p-1 rounded">
                                        {{ $enroll->status == '1' ? 'Approved' : 'Pending' }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Title:</th>
                                <td>{{ $enroll->course->courseTitle }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Price:</th>
                                <td>{{ $enroll->course->price }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Category Title::</th>
                                <td>{{ $enroll->course->courseCategory->categoryTitle }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Description:</th>
                                <td>{{ $enroll->course->courseDescription }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Duration:</th>
                                <td>{{ $enroll->course->duration }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Leactures:</th>
                                <td>{{ $enroll->course->leactures }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Instructor Name:</th>
                                <td>{{ $enroll->course->Instructor->instructorName }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ Quizzes:</th>
                                <td>{{ $enroll->course->quizzes }}</td>
                            </tr>
                            <tr>
                                <th scope="row">⭐ StartDate:</th>
                                <td>{{ $enroll->course->startDate }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </Section>
@endsection

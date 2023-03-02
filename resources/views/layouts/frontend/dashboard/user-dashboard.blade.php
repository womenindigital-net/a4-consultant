@extends('layouts.frontend.dashboard.master')
@section('page_content')
    @php
        use App\Models\Enroll;
        $EnrollCousreCount = Enroll::where('status','=','1')->where('email',Auth::user()->email)->count();
    @endphp
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mini-stats-wid rounded">
                        <div class="card-body rounded border-none" style="background-color: rgb(19, 23, 80)">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class=" fw-medium" style="color:white">Total Enroll Coursess</p>
                                    <h4 style="color:white" class="mb-0">{{$EnrollCousreCount }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid rounded">
                        <div class="card-body rounded border-none" style="background-color: #ffc600">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class=" fw-medium" style="color:white">Total News and Event</p>
                                    <h4 style="color:white" class="mb-0">00</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid rounded">
                        <div class="card-body rounded border-none" style="background-color:gray">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class=" fw-medium" style="color:white">Total Story</p>
                                    <h4 style="color:white" class="mb-0">00</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid rounded">
                        <div class="card-body rounded border-none" style="background-color: #0081B5">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class=" fw-medium" style="color:white">Total Teacher</p>
                                    <h4 style="color:white" class="mb-0">00</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection

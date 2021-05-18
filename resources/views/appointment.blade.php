@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bradcam_area bradcam_overlay"
            style="background-image: url({{ asset('images') }}/{{ $user->image }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Bác sĩ {{ $user->name }}</h3>
                            <p>Chuyên khoa {{ $user->department }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 posts-list">
                <div class="single-post">
                    <div class="blog_details">
                        <h2>{{ $user->education }} {{ $user->name }}</h2>
                        <div>
                            {!! $user->description !!}
                        </div>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                {!! $user->treatment !!}
                            </div>
                        </div>
                        <div>
                            {!! $user->service !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach

                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif

                @if (Session::has('errmessage'))
                    <div class="alert alert-danger">
                        {{ Session::get('errmessage') }}
                    </div>
                @endif
                <form action="{{ route('booking.appointment') }}" method="post">@csrf
                    <div class="card">
                        <div class="card-header lead">Lịch khám cho ngày: {{ $date }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($times as $time)
                                    <div class="col-md-3" style="margin-bottom: 12px">
                                        <label class="btn btn-info">
                                            <input type="radio" name="time" value="{{ $time->time }}">
                                            <span>{{ $time->time }}</span>
                                        </label>
                                    </div>
                                    <input type="hidden" name="doctorId" value="{{ $doctor_id }}">
                                    <input type="hidden" name="appointmentId" value="{{ $time->appointment_id }}">
                                    <input type="hidden" name="date" value="{{ $date }}">
                                @endforeach
                            </div>
                            <p>Giá khám {{ number_format($user->price) }} {{ 'VNĐ' }}</p>
                            @if (Auth::check())
                                <button type="submit" class="btn btn-success">Đặt lịch khám</button>
                            @else
                                <p class="col-md-12"><b>Vui lòng đăng nhập để đặt lịch hẹn khám</b></p>
                                <a href="#" type="button" data-toggle="modal" data-target="#registerForm">
                                    <button class="btn btn-primary">Đăng kí</button>
                                </a>
                                <a href="#" type="button" data-toggle="modal" data-target="#loginForm">
                                    <button class="btn btn-secondary">Đăng nhập</button>
                                </a>
                            @endif
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>


    <style type="text/css">
        label.btn {
            padding: 0;
        }

        label.btn input {
            opacity: 0;
            position: absolute;

        }

        label.btn span {
            text-align: center;
            padding: 6px 12px;
            display: block;
            min-width: 80px;
        }

        label.btn input:checked+span {
            background-color: rgb(80, 110, 228);
            color: #fff;
        }

    </style>
@endsection

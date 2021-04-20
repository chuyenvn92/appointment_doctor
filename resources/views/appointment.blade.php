@extends('layouts.app')

@section('content')
    <div class="container mb-3">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Thông tin bác sĩ</h4>
                        <img src="{{ asset('images') }}/{{ $user->image }}" width="100px" style="border-radius: 50%;">
                        <br>
                        <p class="lead"> Tên: {{ ucfirst($user->name) }}</p>
                        <p class="lead">Trình độ: {{ $user->education }}</p>
                        <p class="lead">Chuyên khoa: {{ $user->department }}</p>
                        <p class="lead">Giới thiệu: {{ $user->description }}</p>
                    </div>

                </div>

            </div>
            <div class="col-md-9">
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
                        <div class="card-header lead">Lịch khám cho ngày: {{ $date }}</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($times as $time)
                                    <div class="col-md-3">
                                        <label class="btn btn-outline-primary">
                                            <input type="radio" name="time" value="{{ $time->time }}">
                                            <span>{{ $time->time }}</span>
                                        </label>
                                    </div>
                                    <input type="hidden" name="doctorId" value="{{ $doctor_id }}">
                                    <input type="hidden" name="appointmentId" value="{{ $time->appointment_id }}">
                                    <input type="hidden" name="date" value="{{ $date }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        @if (Auth::check())
                            <button type="submit" class="btn btn-success" style="width: 100%;">Đặt lịch khám</button>
                        @else
                            <p>Vui lòng đăng nhập để đặt lịch hẹn khám</p>
                            <a href="{{ url('/register') }}"> <button class="btn btn-info">Đăng kí</button></a>
                            <a href="{{ url('/login') }}"><button class="btn btn-secondary">Đăng nhập</button></a>
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

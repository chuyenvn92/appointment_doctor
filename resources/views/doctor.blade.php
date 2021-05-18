@extends('layouts.app')

@section('content')
    <div class="bradcam_area slider_bg_2 bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Danh sách bác sĩ</h3>
                        <p><a href="{{ url('/') }}">Trang chủ /</a>Bác sĩ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area doctor_page">
        <div class="container">
            <div class="row">
                @foreach ($doctors as $doctor)
                    <div class="col-md-6 col-lg-3">
                        <a href="{{ url('doctor/detail/' . $doctor->id) }}">
                            <div class="single_expert mb-40">
                                <div class="expert_thumb">
                                    <img src="{{ asset('images') }}/{{ $doctor->image }}" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>{{ $doctor->name }}</h3>
                                    <span>{{ $doctor->department }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

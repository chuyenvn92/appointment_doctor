@extends('layouts.app')

@section('content')
    <div class="bradcam_area slider_bg_2 bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Danh sách chuyên khoa</h3>
                        <p><a href="{{ url('/') }}">Trang chủ /</a>Chuyên khoa</p>
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
                @foreach ($departments as $department)
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="{{ asset('images') }}/{{ $department->image }}" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>{{ $department->name_department }}</h3>
                            <span>{{ $department->description_department  }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

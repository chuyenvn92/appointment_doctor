@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="bs-thongtin">
                <div class="vung-bao">
                    <div class="bs-anh">
                        <img src="{{ asset('images') }}/{{ $doctor->image }}" alt="Ảnh bác sĩ">
                    </div>
                    <div class="bs-soluoc">
                        <h1 class="bs-ten">Thông tin cơ bản</h1>
                        <div class="cmsms_features_item">
                            <span class="cmsms_features_item_title">Tên bác sĩ</span>
                            <span class="cmsms_features_item_desc">
                                {{ $doctor->name }}
                            </span>
                        </div>
                        <div class="cmsms_features_item">
                            <span class="cmsms_features_item_title">Trình độ</span>
                            <span class="cmsms_features_item_desc">
                                {{ $doctor->education }}
                            </span>
                        </div>
                        <div class="cmsms_features_item">
                            <span class="cmsms_features_item_title">Chuyên khoa</span>
                            <span class="cmsms_features_item_desc">
                                {{ $doctor->department }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 posts-list">
                <div class="single-post">
                    <div class="blog_details">
                        <h2>{{ $doctor->education }} {{ $doctor->name }}</h2>
                        <div>
                            {!! $doctor->description !!}
                        </div>
                        <h2>{{ $doctor->education }} khám và điều trị</h2>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                {!! $doctor->treatment !!}
                            </div>
                        </div>
                        <h2>Dịch vụ liên quan</h2>
                        <div>
                            {!! $doctor->service !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

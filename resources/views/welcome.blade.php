@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/banner/online-medicine-concept_160901-152.jpg" class="img-fluid" style="border:1px solid #ccc;">
            </div>
            <div class="col-md-6">
                <h2>Tạo tài khản và đặt lịch hẹn khám bác sĩ!!!</h2>
                <p>– Tiết kiệm thời gian và chi phí</p>

                <p>– Chẩn đoán đúng bệnh, nhanh chóng bởi đội ngũ chuyên gia bác sĩ đầu ngành</p>

                <p>– Chất lượng dịch vụ tận tình, chu đáo trước, trong và sau khi khám</p>

                <p>– Trả kết quả ngay trong ngày</p>

                <p>– Cam kết chất lượng và dịch vụ</p>

                <p>– Lắng nghe, tận tâm, chu đáo</p>
                
                <div class="mt-5">
                    @if (Auth::check())
                @else
                    <a href="{{ url('/register') }}"> <button class="btn btn-success">Đăng kí</button></a>
                    <a href="{{ url('/login') }}"><button class="btn btn-secondary">Đăng nhập</button></a>
                @endif
                </div>
            </div>
        </div>
        <hr>
        <!--date picker component-->
        <find-doctor></find-doctor>
    </div>
@endsection

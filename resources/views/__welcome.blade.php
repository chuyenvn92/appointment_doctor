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
                    <a href="{{ url('/register') }}"> <button class="btn btn-success">Đăng kí bệnh nhân</button></a>
                    <a href="{{ url('/login') }}"><button class="btn btn-secondary">Đăng nhập</button></a>
                </div>
            </div>
        </div>
        <hr>
        <!--Search doctor-->
        <form action="{{ url('/') }}" method="GET">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">Tìm kiếm bác sĩ</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="date" class="form-control" id="datepicker">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" type="submit">Tìm</button>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </form>

        <!--display doctors-->
        <div class="card">
            <div class="card-body">
                <div class="card-header"> Doctors </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Chuyên môn</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($doctors as $doctor)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img src="{{ asset('images') }}/{{ $doctor->doctor->image }}" width="100px"
                                            style="border-radius: 50%;">
                                    </td>
                                    <td>
                                        {{ $doctor->doctor->name }}
                                    </td>
                                    <td>
                                        {{ $doctor->doctor->department }}
                                    </td>
                                    <td>
                                        <a href="{{ route('create.appointment', [$doctor->user_id, $doctor->date]) }}"><button
                                                class="btn btn-success">Đặt lịch khám</button></a>
                                    </td>
                                </tr>
                            @empty
                                <td>Không có lịch của bác sĩ trong ngày hôm nay</td>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection

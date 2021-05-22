@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>Lịch đặt chờ xác nhận</h5>
                            <span>Số lượt: ({{ $bookings->count() }})</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('/patients/all') }}">Lịch đặt</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Index</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (Session::has('message'))
                    <div class="alert bg-success alert-success text-white" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Ngày đặt</th>
                                    <th scope="col">Tên bệnh nhân</th>
                                    <th scope="col">Thời gian</th>
                                    <th scope="col">Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="/profile/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;" alt="Ảnh đại diện">
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($booking->date)) }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>
                                            @if ($booking->date < date('Y-m-d'))
                                                <span class="btn btn-warning">Đã hết hạn</span>
                                            @else
                                                <span class="btn btn-info">Chờ xử lí</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($booking->date < date('Y-m-d'))
                                                <div class="table-actions">
                                                    <a class="btn btn-secondary" href="#" data-toggle="modal"
                                                        data-target="#exampleModal{{ $booking->id }}">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </div>
                                            @else
                                                <div class="table-actions d-flex">
                                                    <form action="{{ route('accept.booking') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $booking->id }}">
                                                        <input type="hidden" name="doctor_name"
                                                            value="{{ $booking->doctor->name }}">
                                                        <input type="hidden" name="user_name"
                                                            value="{{ $booking->user->name }}">
                                                        <input type="hidden" name="time" value="{{ $booking->time }}">
                                                        <input type="hidden" name="date" value="{{ $booking->date }}">
                                                        <input type="hidden" name="user_email"
                                                            value="{{ $booking->user->email }}">
                                                        <button type="submit" class="btn btn-primary mr-1">Xác nhận
                                                            khám</button>
                                                    </form>
                                                    <form action="{{ route('ignore.booking') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $booking->id }}">
                                                        <input type="hidden" name="doctor_name"
                                                            value="{{ $booking->doctor->name }}">
                                                        <input type="hidden" name="user_name"
                                                            value="{{ $booking->user->name }}">
                                                        <input type="hidden" name="time" value="{{ $booking->time }}">
                                                        <input type="hidden" name="date" value="{{ $booking->date }}">
                                                        <input type="hidden" name="user_email"
                                                            value="{{ $booking->user->email }}">
                                                        <button type="submit" class="btn btn-danger mr-1">Huỷ</button>
                                                    </form>
                                                    <a class="btn btn-secondary" href="#" data-toggle="modal"
                                                        data-target="#exampleModal{{ $booking->id }}">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                    @include('admin.patient.model')
                                @empty
                                    <td>Không tìm thấy lịch hẹn khám nào</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>Lượt đặt khám thành công</h5>
                            <span>Tổng số lượt đặt khám: ({{ $bookings->count() }})</span>
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
                <div class="card">
                    <form action="{{ route('all.appointments') }}" method="GET">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>Lượt đặt từ:</p>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control datetimepicker-input" id="date_from"
                                        data-toggle="datetimepicker" data-target="#date_from" name="date_from">
                                </div>
                                <div class="col-md-2">
                                    <p>Đến</p>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="date_to" data-toggle="datetimepicker"
                                        data-target="#date_to" name="date_to">
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary">Tìm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ảnh</th>
                                    <th>Ngày đặt</th>
                                    <th>Tên bệnh nhân</th>
                                    <th>Thời gian</th>
                                    <th>Bác sĩ</th>
                                    <th>Trạng thái</th>
                                    <th class="nosort">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="/profile/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;" alt="ảnh đại diện">
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($booking->date)) }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>{{ $booking->doctor->name }}</td>
                                        <td>
                                            @if ($booking->status == 0)
                                                <span class="btn btn-warning">Chờ xử lí</span>
                                            @elseif ($booking->status == 1)
                                                <span class="btn btn-info">Đã xác nhận</span>
                                            @elseif ($booking->status == 2)
                                                <span class="btn btn-info">Đã khám</span>
                                            @else
                                                <span class="btn btn-danger">Đã huỷ</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="btn btn-secondary" href="#" data-toggle="modal"
                                                    data-target="#exampleModal{{ $booking->id }}">
                                                    <i class="far fa-eye"></i>Xem
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('admin.patientlist.model')
                                @empty
                                    @if (isset($date_from) && isset($date_to))
                                        <td>Không tìm thấy lịch hẹn khám từ {{ date('d-m-Y', strtotime($date_from)) }}
                                            đến {{ date('d-m-Y', strtotime($date_to)) }}</td>
                                    @else
                                        <td>Không tìm thấy lịch hẹn khám nào</td>
                                    @endif
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            @if (isset($title))
                                <h5>{{ $title }}</h5>
                            @else
                                <h5>Kết quả tìm kiếm</h5>
                            @endif
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
                <div class="card">
                    <form action="{{ route('patient') }}" method="GET">
                        <div class="card-header">
                            Tìm theo ngày:
                            <div class="row">
                                <div class="col-md-8 ml-2">
                                    <input type="text" class="form-control datetimepicker-input" id="datepicker"
                                        data-toggle="datetimepicker" data-target="#datepicker" name="date">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">Tìm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Ngày đặt</th>
                                    <th scope="col">Tên bệnh nhân</th>
                                    <th scope="col">Thời gian</th>
                                    <th scope="col">Bác sĩ</th>
                                    <th scope="col">Trạng thái</th>
                                    <th class="nosort">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="{{ asset('profile') }}/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;" alt="Ảnh đại diện">
                                        </td>
                                        <td>{{ date('d-m-Y', strtotime($booking->date)) }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>{{ $booking->doctor->name }}</td>
                                        <td>
                                            @if ($booking->status == 0)
                                                <span class="btn btn-warning">Chờ xác nhận</span>
                                            @elseif ($booking->status == 1)
                                                <span class="btn btn-info">Đã xác nhận</span>
                                            @elseif ($booking->status == 2)
                                                <span class="btn btn-success">Đã khám</span>
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
                                    <!-- View Modal -->
                                    @include('admin.patientlist.model')
                                @empty
                                    @if (isset($date))
                                        <td>Không tìm thấy lịch hẹn khám nào cho ngày
                                            {{ date('d-m-Y', strtotime($date)) }}</td>
                                    @else
                                        <td>Không tìm thấy lịch hẹn khám nào</td>
                                    @endif
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">{!! $bookings->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

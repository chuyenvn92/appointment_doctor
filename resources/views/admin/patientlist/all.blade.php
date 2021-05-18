@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Tổng số lượt đặt khám: ({{ $bookings->count() }})
                    </div>
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
                                        <td>{{ $booking->date }}</td>
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
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal{{ $booking->id }}">
                                                    <i class="ik ik-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
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

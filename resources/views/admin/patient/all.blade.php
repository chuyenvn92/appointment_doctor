@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Số lượt đặt khám: ({{ $count->count() }})
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Ngày muốn khám</th>
                                    <th scope="col">Tên bệnh nhân</th>
                                    <th scope="col">Thời gian</th>
                                    <th scope="col">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ date('d-m-Y', strtotime($booking->date)) }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>
                                            @if ($booking->status == 0)
                                                <span class="btn btn-warning">Chờ xử lí</span>
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
                        <div class="d-flex justify-content-center">{!! $bookings->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (Session::has('message'))
                    <div class="alert bg-success alert-success text-white" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Số lượt đặt khám: ({{ $bookings->count() }})
                    </div>
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
                                            <span class="btn btn-warning">Đã bị huỷ</span>

                                        </td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#exampleModal{{ $booking->id }}">
                                                    <i class="ik ik-eye ml-4"></i>
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

@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">

                        Số lượt đặt khám: ({{ $bookings->count() }})
                    </div>
                    <div class="card-body">
                        <table id="data_table" class="table table-striped">
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
                                        <td><img src="/profile/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;" alt="Ảnh đại diện">
                                        </td>
                                        <td>{{ $booking->date }}</td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>{{ $booking->doctor->name }}</td>
                                        <td>
                                            @if ($booking->status == 0)
                                                {{-- <a href="{{ route('update.status', [$booking->id]) }}"> --}}
                                                    <button class="btn btn-danger">Chưa khám</button>
                                                {{-- </a> --}}
                                            @else
                                                {{-- <a href="{{ route('update.status', [$booking->id]) }}"> --}}
                                                    <button class="btn btn-success">Đã khám</button>
                                                {{-- </a> --}}
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

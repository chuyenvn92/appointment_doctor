@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-header">

                        Lượt khám bệnh: ({{ $bookings->count() }})
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Ngày tháng</th>
                                    <th scope="col">Bệnh nhân</th>
                                    <th scope="col">Thời gian</th>
                                    <th scope="col">Bác sĩ</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Đơn thuốc</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $key=>$booking)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="/profile/{{ $booking->user->image }}" width="80"
                                                style="border-radius: 50%;">
                                        </td>
                                        <td>
                                            {{ $booking->date }}
                                        </td>
                                        <td>{{ $booking->user->name }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>{{ $booking->doctor->name }}</td>
                                        <td>
                                            @if ($booking->status == 1)
                                                <button class="btn btn-info">Đã khám</button>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->

                                            @if (!App\Prescription::where('date', date('d-m-Y'))->where('doctor_id', auth()->user()->id)->where('user_id', $booking->user->id)->exists())
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{ $booking->user_id }}">
                                                    Viết đơn thuốc
                                                </button>
                                                @include('admin.prescription.form')

                                            @else
                                                <a href="{{ route('prescription.show', [$booking->user_id, $booking->date]) }}"
                                                    class="btn btn-secondary">Xem đơn thuốc</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!App\Prescription::where('date', date('d-m-Y'))->where('doctor_id', auth()->user()->id)->where('user_id', $booking->user->id)->exists())

                                            @else
                                                <a href="{{ route('patient.generatePDF', [$booking->user_id, $booking->date]) }}"
                                                    class="btn btn-secondary"><i class="fas fa-print"></i></a>
                                            @endif
                                        </td>

                                    </tr>
                                @empty
                                    <td>Không có lượt khám bệnh nào trong ngày {{ date('d-m-Y') }}</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>


@endsection

@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">

                        Số bệnh nhân đã khám: {{ $patients->count() }}
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Ngày khám</th>
                                    <th scope="col">Bác sĩ</th>
                                    <th scope="col">Đơn thuốc</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($patients as $key=>$patient)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="/profile/{{ $patient->user->image }}" width="80"
                                                style="border-radius: 50%;">
                                        </td>
                                        <td>{{ $patient->user->name }}
                                        </td>
                                        <td>{{ $patient->date }}</td>
                                        <td>{{ $patient->doctor->name }}</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('prescription.show', [$patient->user_id, $patient->date]) }}"
                                                class="btn btn-secondary">Xem đơn thuốc</a>
                                        </td>
                                    </tr>
                                @empty
                                    <td>Không tìm thấy bệnh nhân nào</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

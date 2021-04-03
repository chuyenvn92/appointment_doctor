@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lịch hẹn khám của bạn({{$appointments->count()}})</div>

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Bác sĩ</th>
                          <th scope="col">Thời gian</th>
                          <th scope="col">Ngày</th>
                          <th scope="col">Ngày đặt lịch</th>
                          <th scope="col">Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($appointments as $key=>$appointment)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$appointment->doctor->name}}</td>
                          <td>{{$appointment->time}}</td>
                          <td>{{$appointment->date}}</td>
                          <td>{{$appointment->created_at}}</td>
                          <td>
                              @if($appointment->status==0)
                              <button class="btn btn-primary">Chưa khám</button>
                              @else 
                              <button class="btn btn-success">Đã khám</button>
                              @endif
                          </td>
                        </tr>
                        @empty
                        <td>Không tìm thấy lịch hẹn khám nào!!!</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> 

                     Số lượt đặt khám: ({{$bookings->count()}})
                 </div>
                <form action="{{route('patient')}}" method="GET">

                 <div class="card-header">
                     Lọc:
                     <div class="row">
                     <div class="col-md-10">
                         <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
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
                          <th scope="col">#</th>
                          <th scope="col">Ảnh</th>
                          <th scope="col">Ngày đặt</th>
                          <th scope="col">Tên bệnh nhân</th>
                          <th scope="col">Giới tính</th>
                          <th scope="col">Thời gian</th>
                          <th scope="col">Bác sĩ</th>
                          <th scope="col">Trạng thái</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                          </td>
                          <td>{{$booking->date}}</td>
                          <td>{{$booking->user->name}}</td>
                          @if ($booking->user->gender == 1)
                          <td>Nam</td>
                          @else
                          <td>Nữ</td>
                          @endif
                          <td>{{$booking->time}}</td>
                          <td>{{$booking->doctor->name}}</td>
                          <td>
                              @if($booking->status==0)
                              <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-primary">Chờ xác nhận</button></a>
                              @else 
                               <a href="{{route('update.status',[$booking->id])}}"><button class="btn btn-success">Đã khám</button></a>
                              @endif
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

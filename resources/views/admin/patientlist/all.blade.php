@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> 

                     Tổng số lượt đặt khám: ({{$bookings->count()}})
                 </div>
             

                

                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Ảnh</th>
                          <th scope="col">Ngày đặt</th>
                          <th scope="col">Tên bệnh nhân</th>
                          <th scope="col">Email</th>
                          <th scope="col">Số điện thoại</th>
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
                          <td>{{$booking->user->email}}</td>
                          <td>{{$booking->user->phone_number}}</td>
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
                {{$bookings->links()}}
            </div>
        </div>
    </div>
</div>
@endsection

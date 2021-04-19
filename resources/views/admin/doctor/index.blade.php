@extends('admin.layouts.master')

@section('content')

<div class="page-header">
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="ik ik-inbox bg-blue"></i>
            <div class="d-inline">
                <h5>Bác sĩ</h5>
                <span>Danh sách tất cả các bác sĩ</span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Bác sĩ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>
    </div>
</div>
</div>


<div class="row">
<div class="col-md-12">
       @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
    <div class="card">
        <div class="card-body">
            <table id="data_table" class="table">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th class="nosort">Ảnh</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Chuyên khoa</th>
                        <th class="nosort">&nbsp;</th>
                        <th class="nosort">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($users)>0)
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td><img src="{{asset('images')}}/{{$user->image}}" class="table-user-thumb" alt=""></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->department}}</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                                <i class="ik ik-eye"></i>
                                </a>
                                <a href="{{route('doctor.edit',[$user->id])}}"><i class="ik ik-edit-2"></i></a>
                                
                                <a href="{{route('doctor.show',[$user->id])}}">
                                    <i class="ik ik-trash-2"></i>
                                </a>
                            </div>
                        </td>
                        {{-- <td>x</td> --}}

                    </tr>
           
                    <!-- View Modal -->
                    @include('admin.doctor.model')
                    @endforeach
                    @else 
                    <td>Không có dữ liệu để hiển thị</td>
                    @endif
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
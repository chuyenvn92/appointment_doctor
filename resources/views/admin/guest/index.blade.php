@extends('admin.layouts.master')

@section('content')

<div class="page-header">
<div class="row align-items-end">
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="ik ik-inbox bg-blue"></i>
            <div class="d-inline">
                <h5>Bệnh nhân ngoài</h5>
                <span>Danh sách yêu cầu khám không đăng kí</span>
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
                    <a href="#">Bệnh nhân</a>
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
                        <th>Ngày muốn khám</th>
                        <th>Số điện thoại</th>
                        <th>Chuyên khoa muốn khám</th>
                        <th class="nosort">&nbsp;</th>
                        <th class="nosort">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($guests)>0)
                    @foreach($guests as $guest)
                    <tr>
                        <td>{{$guest->name}}</td>
                        <td>{{date('d-m-Y', strtotime($guest->date))}}</td>
                        <td>{{$guest->phone}}</td>
                        <td>{{$guest->specialist}}</td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-toggle="modal" data-target="#exampleModal{{$guest->id}}">
                                <i class="ik ik-eye"></i>
                                </a>
                            </div>
                        </td>
                        <td>x</td>

                    </tr>
           
                    <!-- View Modal -->
                    @include('admin.guest.model')
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
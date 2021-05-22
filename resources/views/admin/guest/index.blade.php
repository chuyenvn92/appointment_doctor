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
                            <a href="{{ url('/dashboard') }}"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('/guest') }}">Khách</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Ngày muốn khám</th>
                                <th>Số điện thoại</th>
                                <th>Chuyên khoa muốn khám</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($guests) > 0)
                                @foreach ($guests as $guest)
                                    <tr>
                                        <td>{{ $guest->name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($guest->date)) }}</td>
                                        <td>{{ $guest->phone }}</td>
                                        <td>{{ $guest->specialist }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="btn btn-secondary" href="#" data-toggle="modal"
                                                    data-target="#exampleModal{{ $guest->id }}">
                                                    <i class="far fa-eye"></i>Xem
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- View Modal -->
                                    @include('admin.guest.model')
                                @endforeach
                            @else
                                <td>Không có dữ liệu để hiển thị</td>
                            @endif
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{!! $guests->links() !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

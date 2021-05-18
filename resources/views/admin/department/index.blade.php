@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Chuyên khoa</h5>
                        <span>Danh sách tất cả chuyên khoa</span>
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
                            <a href="{{ url('/department') }}">Chuyên khoa</a>
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
                                <th>STT</th>
                                <th class="nosort">Ảnh</th>
                                <th>Tên chuyên khoa</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($departments) > 0)
                                @foreach ($departments as $key => $department)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset('images') }}/{{ $department->image }}"
                                                style="width: 80px; height: 80px; border-radius: 30%;" alt=""></td>
                                        <td>{{ $department->name_department }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="{{ route('department.edit', [$department->id]) }}"><i
                                                        class="ik ik-edit-2"></i></a>
                                                <a href="{{ route('department.show', [$department->id]) }}">
                                                    <i class="ik ik-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td>Không có chuyên khoa nào để hiển thị</td>
                            @endif

                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{!! $departments->links() !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

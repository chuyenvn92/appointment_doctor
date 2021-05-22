@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Danh sách kết quả</h5>
                        <span>Tìm thấy {{ count($results) }} chuyên khoa</span>
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
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <form method="POST" role="search" action="{{ route('search.department') }}">
            @csrf
            <div class="input-group rounded">
                <input type="search" class="form-control ml-4 rounded" value="{{ $item }}" name="searchDepartment"
                    aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" type="submit" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </form>
    </div><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th class="nosort">Ảnh</th>
                                <th>Tên chuyên khoa</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($results) > 0)
                                @foreach ($results as $key => $department)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset('images') }}/{{ $department->image }}"
                                                style="width: 80px; height: 80px; border-radius: 30%;" alt=""></td>
                                        <td>{{ $department->name_department }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="btn btn-primary"
                                                    href="{{ route('department.edit', [$department->id]) }}">
                                                    <i class="fas fa-edit"></i>Sửa</a>
                                                <a class="btn btn-danger"
                                                    href="{{ route('department.show', [$department->id]) }}">
                                                    <i class="fas fa-trash"></i>Xoá
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td>Không có chuyên khoa với tên "<b>{{ $item }}</b>"</td>
                            @endif

                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{!! $results->links() !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Bác sĩ</h5>
                        <span>Xoá</span>
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
                            <a href="{{ url('/doctor') }}">Bác sĩ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">delete</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Xác nhận xoá</h3>
                </div>
                <div class="card-body">
                    <img src="{{ asset('images') }}/{{ $user->image }}" width="120">
                    <h2>{{ $user->name }}</h2>
                    <form class="forms-sample" action="{{ route('doctor.destroy', [$user->id]) }}" method="post">@csrf
                        @method('DELETE')

                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger mr-2">Xác nhận</button>
                            <a href="{{ route('doctor.index') }}" class="btn btn-secondary">
                                Huỷ
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

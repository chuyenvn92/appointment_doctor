@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-command bg-blue"></i>
                    <div class="d-inline">
                        <h5>Chuyên khoa</h5>
                        <span>Cập nhật chuyên khoa</span>
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
                        <li class="breadcrumb-item active" aria-current="page">Update</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">


            <div class="card">
                <div class="card-header">
                    <h3>Cập nhật chuyên khoa</h3>
                </div>
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('department.update', [$department->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tên chuyên khoa</label>
                                    <input type="text" name="name_department"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $department->name_department }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Ảnh chuyên khoa</label>
                                    <input type="file"
                                        class="form-control file-upload-info @error('image') is-invalid @enderror"
                                        placeholder="Upload Image" name="image">
                                    <span class="input-group-append">
                                    </span>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Thông tin về chuyên khoa</label>
                                    <textarea class="form-control @error('description_department') is-invalid @enderror"
                                        id="exampleTextarea1" rows="4"
                                        name="description_department">{{ $department->description_department }}</textarea>
                                    @error('description_department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

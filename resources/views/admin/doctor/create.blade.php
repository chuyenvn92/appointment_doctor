@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-command bg-blue"></i>
                    <div class="d-inline">
                        <h5>Bác sĩ</h5>
                        <span>Thêm bác sĩ</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Bác sĩ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                    <h3>Thêm mới</h3>
                </div>
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('doctor.store') }}" method="post"
                        enctype="multipart/form-data">@csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Tên đầy đủ</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Giới tính</label>
                                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                    <option value="">Vui lòng chọn</option>
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Trình độ</label>
                                <input type="text" name="education"
                                    class="form-control @error('education') is-invalid @enderror"
                                    value="{{ old('education') }}">
                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Chuyên khoa</label>
                                    <select name="department" class="form-control">
                                        <option value="">Vui lòng chọn</option>
                                        @foreach (App\Department::all() as $d)
                                            <option value="{{ $d->name_department }}">{{ $d->name_department }}</option>
                                        @endforeach
                                    </select>
                                    @error('department_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        value="{{ old('phone_number') }}">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
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
                            </div>
                            <div class="col-md-6">
                                <label>Vai trò</label>
                                <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                    <option value="">Vui lòng chọn</option>
                                    @foreach (App\Role::where('name_role', '!=', 'patient')->get() as $role)
                                        @if ($role->name_role == 'admin')
                                        <option value="1">Bác sĩ</option>
                                        @else 
                                        <option value="2">Quản trị hệ thống</option>
                                        @endif
                                    @endforeach

                                </select>
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Thông tin</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1"
                                rows="4" name="description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                        <button class="btn btn-light">Huỷ</button>


                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

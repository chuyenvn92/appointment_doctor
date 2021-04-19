@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <div class="row ">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Thông tin người dùng</div>

                    <div class="card-body">
                        <p>Name: {{ auth()->user()->name }}</p>
                        <p>Email: {{ auth()->user()->email }}</p>
                        <p>Địa chỉ: {{ auth()->user()->address }}</p>
                        <p>Số điện thoại: {{ auth()->user()->phone_number }}</p>

                        @if (auth()->user()->gender == 1)
                        <p>Giới tính: Nam </p>
                    @else
                        <p>Giới tính: Nữ </p>
                        @endif
                        <p>Thông tin: {{ auth()->user()->description }}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Cập nhật thông tin</div>

                    <div class="card-body">
                        <form action="{{ route('profile.store') }}" method="post">@csrf
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ auth()->user()->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="address" class="form-control"
                                    value="{{ auth()->user()->address }}">

                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="phone_number" class="form-control"
                                    value="{{ auth()->user()->phone_number }}">

                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="1" @if (auth()->user()->gender == 1) selected @endif>Nam</option>
                                    <option value="0" @if (auth()->user()->gender == 0) selected @endif>Nữ</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group">
                                    <label>Giới thiệu</label>
                                    <textarea name="description"
                                        class="form-control">{{ auth()->user()->description }}</textarea>
                                </div>
                                <div class="form-group">

                                    <button class="btn btn-primary" type="submit">Cập nhật</button>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Ảnh đại diện</div>
                    <form action="{{ route('profile.pic') }}" method="post" enctype="multipart/form-data">@csrf
                        <div class="card-body">
                            @if (!auth()->user()->image)
                                <img src="/images/3Dz1og01c2vXjbjmfTskpLqdVGEB2Qmpg1DLROiR.png" width="120">
                            @else
                                <img src="/profile/{{ auth()->user()->image }}" width="120">
                            @endif
                            <br>
                            <input type="file" name="file" class="form-control" required="">
                            <br>
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary">Cập nhật</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Xin chào</div>

                <div class="card-body">
                  Bạn đã đăng nhập vào hệ thống với tư cách là : 
                  {{Auth()->user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
             
              <div class="card-header" >       
                    
                </div>

                <div class="card-body">
                    <p>Ngày tháng: {{$prescription->date}}</p>
                    <p>Bệnh nhân: {{$prescription->user->name}}</p>
                    <p>Bác sĩ: {{$prescription->doctor->name}}</p>
                    <p>Tên bệnh: {{$prescription->name_of_disease}}</p>
                    <p>Triệu chứng: {{$prescription->symptoms}}</p>
                    <p>Loại thuốc: {{$prescription->medicine}}</p>
                    <p>Cách sử dụng: {{$prescription->procedure_to_use_medicine}}</p>
                    <p>Ghi chú: {{$prescription->feedback}}</p>
                    <p>Chữ kí:{{$prescription->signature}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

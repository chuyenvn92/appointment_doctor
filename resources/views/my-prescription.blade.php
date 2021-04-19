@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Đơn thuốc của bạn</div>

                <div class="card-body">
                 
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th scope="col">Ngày khám</th>
                          <th scope="col">Bác sĩ</th>
                          <th scope="col">Tên bệnh</th>
                          <th scope="col">Triệu chứng</th>
                          <th scope="col">Thuốc</th>
                          <th scope="col">Cách sử dụng</th>
                          <th scope="col">Ghi chú của bác sĩ</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($prescriptions as $prescription)
                        <tr>
                         
                          <td>{{$prescription->date}}</td>
                          <td>{{$prescription->doctor->name}}</td>
                          <td>{{$prescription->name_of_disease}}</td>
                          <td>{{$prescription->symptoms}}</td>
                          <td>{{$prescription->medicine}}</td>
                          <td>{{$prescription->procedure_to_use_medicine}}</td>
                          <td>{{$prescription->feedback}}</td>
                        </tr>
                        @empty
                        <td>Bạn chưa có đơn thuốc nào!!!</td>
                        @endforelse
                       
                      </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

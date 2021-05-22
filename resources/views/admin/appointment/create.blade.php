@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-command bg-blue"></i>
                    <div class="d-inline">
                        <h5>Lịch hẹn khám</h5>
                        <span>Thời gian khám</span>
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
                            <a href="{{ url('/appointment') }}">Lịch hẹn</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        @if (Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}

            </div>
        @endforeach


        <form action="{{ route('appointment.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    Chọn ngày
                </div>
                <div class="card-body">
                    <input type="text" class="form-control datetimepicker-input" id="datepicker_appointment"
                        data-toggle="datetimepicker" data-target="#datepicker_appointment" name="date">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Chọn thời gian buổi sáng
                    <span style="margin-left: 700px">Chọn/Bỏ chọn
                        <input type="checkbox"
                            onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked">
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><input type="checkbox" name="time[]" value="06:00">06:00</td>
                                <td><input type="checkbox" name="time[]" value="06:20">06:20</td>
                                <td><input type="checkbox" name="time[]" value="06:40">06:40</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><input type="checkbox" name="time[]" value="07:00">07:00</td>
                                <td><input type="checkbox" name="time[]" value="07:20">07:20</td>
                                <td><input type="checkbox" name="time[]" value="07:40">07:40</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><input type="checkbox" name="time[]" value="08:00">08:00</td>
                                <td><input type="checkbox" name="time[]" value="08:20">08:20</td>
                                <td><input type="checkbox" name="time[]" value="08:40">08:40</td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td><input type="checkbox" name="time[]" value="09:00">09:00</td>
                                <td><input type="checkbox" name="time[]" value="09:20">09:20</td>
                                <td><input type="checkbox" name="time[]" value="09:40">09:40</td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td><input type="checkbox" name="time[]" value="10:00">10:00</td>
                                <td><input type="checkbox" name="time[]" value="10:20">10:20</td>
                                <td><input type="checkbox" name="time[]" value="10:40">10:40</td>
                            </tr>

                            <tr>
                                <th scope="row">6</th>
                                <td><input type="checkbox" name="time[]" value="11:00">11:00</td>
                                <td><input type="checkbox" name="time[]" value="11:20">11:20</td>
                                <td><input type="checkbox" name="time[]" value="11:40">11:40</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Chọn thời gian buổi chiều
                </div>
                <div class="card-body">

                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">7</th>
                                <td><input type="checkbox" name="time[]" value="12:00">12:00</td>
                                <td><input type="checkbox" name="time[]" value="12:20">12:20</td>
                                <td><input type="checkbox" name="time[]" value="12:40">12:40</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><input type="checkbox" name="time[]" value="13:00">13:00</td>
                                <td><input type="checkbox" name="time[]" value="13:20">13:20</td>
                                <td><input type="checkbox" name="time[]" value="13:40">13:40</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><input type="checkbox" name="time[]" value="14:00">14:00</td>
                                <td><input type="checkbox" name="time[]" value="14:20">14:20</td>
                                <td><input type="checkbox" name="time[]" value="14:40">14:40</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><input type="checkbox" name="time[]" value="15:00">15:00</td>
                                <td><input type="checkbox" name="time[]" value="15:20">15:20</td>
                                <td><input type="checkbox" name="time[]" value="15:40">15:40</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><input type="checkbox" name="time[]" value="16:00">16:00</td>
                                <td><input type="checkbox" name="time[]" value="16:20">16:20</td>
                                <td><input type="checkbox" name="time[]" value="16:40">16:40</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td><input type="checkbox" name="time[]" value="17:00">17:00</td>
                                <td><input type="checkbox" name="time[]" value="17:20">17:20</td>
                                <td><input type="checkbox" name="time[]" value="17:40">17:40</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td><input type="checkbox" name="time[]" value="18:00">18:00</td>
                                <td><input type="checkbox" name="time[]" value="18:20">18:20</td>
                                <td><input type="checkbox" name="time[]" value="18:40">18:40</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td><input type="checkbox" name="time[]" value="19:00">19:00</td>
                                <td><input type="checkbox" name="time[]" value="19:20">19:20</td>
                                <td><input type="checkbox" name="time[]" value="19:40">19:40</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td><input type="checkbox" name="time[]" value="20:00">20:00</td>
                                <td><input type="checkbox" name="time[]" value="20:20">20:20</td>
                                <td><input type="checkbox" name="time[]" value="20:40">20:40</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td><input type="checkbox" name="time[]" value="21:00">21:00</td>
                                <td><input type="checkbox" name="time[]" value="21:20">21:20</td>
                                <td><input type="checkbox" name="time[]" value="21:40">21:40</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Hoàn thành</button>
                </div>
            </div>
        </form>

    </div>

    <style type="text/css">
        input[type="checkbox"] {
            zoom: 1.1;
        }

        body {
            font-size: 18px;
        }

    </style>

@endsection

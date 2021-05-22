@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">


                <div class="page-header-title">
                    <i class="ik ik-command bg-blue"></i>
                    <div class="d-inline">
                        <h5>Bác sĩ</h5>
                        <span>Lịch hẹn khám</span>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
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
        @if (Session::has('errmessage'))
            <div class="alert bg-danger alert-success text-white" role="alert">
                {{ Session::get('errmessage') }}
            </div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>

        @endforeach


        <form action="{{ route('appointment.check') }}" method="post">@csrf

            <div class="card">
                <div class="card-header">
                    @if (isset($date))
                        Lịch khám của ngày:
                        {{ date('d-m-Y', strtotime($date)) }}
                    @endif
                </div>
                <div class="card-body">
                    <input type="text" class="form-control datetimepicker-input" id="datepicker"
                        data-toggle="datetimepicker" data-target="#datepicker" name="date">
                    <br>
                    <button type="submit" class="btn btn-primary">Kiểm tra</button>
                </div>
            </div>
        </form>
        @if (Route::is('appointment.check'))
            <form action="{{ route('update') }}" method="post">@csrf
                <div class="card">
                    <div class="card-header">
                        Thời gian buổi sáng
                        <span style="margin-left: 700px">Chọn/Bỏ chọn
                            <input type="checkbox"
                                onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked">
                        </span>
                    </div>

                    <div class="card-body">

                        <table class="table table-striped">
                            <tbody>
                                <input type="hidden" name="appoinmentId" value="{{ $appointmentId }}">
                                <tr>
                                    <th scope="row">1</th>
                                    <td><input type="checkbox" name="time[]" value="06:00" @if (isset($times)) {{ $times->contains('time', '06:00') ? 'checked' : '' }} @endif>06:00</td>
                                    <td><input type="checkbox" name="time[]" value="06:20" @if (isset($times)) {{ $times->contains('time', '06:20') ? 'checked' : '' }} @endif>06:20</td>
                                    <td><input type="checkbox" name="time[]" value="06:40" @if (isset($times)) {{ $times->contains('time', '06:40') ? 'checked' : '' }} @endif>06:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><input type="checkbox" name="time[]" value="07:00" @if (isset($times)) {{ $times->contains('time', '07:00') ? 'checked' : '' }} @endif>07:00</td>
                                    <td><input type="checkbox" name="time[]" value="07:20" @if (isset($times)) {{ $times->contains('time', '07:20') ? 'checked' : '' }} @endif>07:20</td>
                                    <td><input type="checkbox" name="time[]" value="07:40" @if (isset($times)) {{ $times->contains('time', '07:40') ? 'checked' : '' }} @endif>07:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><input type="checkbox" name="time[]" value="08:00" @if (isset($times)) {{ $times->contains('time', '08:00') ? 'checked' : '' }} @endif>08:00</td>
                                    <td><input type="checkbox" name="time[]" value="08:20" @if (isset($times)) {{ $times->contains('time', '08:20') ? 'checked' : '' }} @endif>08:20</td>
                                    <td><input type="checkbox" name="time[]" value="08:40" @if (isset($times)) {{ $times->contains('time', '08:40') ? 'checked' : '' }} @endif>08:40</td>
                                </tr>

                                <tr>
                                    <th scope="row">4</th>
                                    <td><input type="checkbox" name="time[]" value="09:00" @if (isset($times)) {{ $times->contains('time', '09:00') ? 'checked' : '' }} @endif>09:00</td>
                                    <td><input type="checkbox" name="time[]" value="09:20" @if (isset($times)) {{ $times->contains('time', '09:20') ? 'checked' : '' }} @endif>09:20</td>
                                    <td><input type="checkbox" name="time[]" value="09:40" @if (isset($times)) {{ $times->contains('time', '09:40') ? 'checked' : '' }} @endif>09:40</td>
                                </tr>

                                <tr>
                                    <th scope="row">5</th>
                                    <td><input type="checkbox" name="time[]" value="10:00" @if (isset($times)) {{ $times->contains('time', '10:00') ? 'checked' : '' }} @endif>10:00</td>
                                    <td><input type="checkbox" name="time[]" value="10:20" @if (isset($times)) {{ $times->contains('time', '10:20') ? 'checked' : '' }} @endif>10:20</td>
                                    <td><input type="checkbox" name="time[]" value="10:40" @if (isset($times)) {{ $times->contains('time', '10:40') ? 'checked' : '' }} @endif>10:40</td>
                                </tr>

                                <tr>
                                    <th scope="row">6</th>
                                    <td><input type="checkbox" name="time[]" value="11:00" @if (isset($times)) {{ $times->contains('time', '11:00') ? 'checked' : '' }} @endif>11:00</td>
                                    <td><input type="checkbox" name="time[]" value="11:20" @if (isset($times)) {{ $times->contains('time', '11:20') ? 'checked' : '' }} @endif>11:20</td>
                                    <td><input type="checkbox" name="time[]" value="11:40" @if (isset($times)) {{ $times->contains('time', '11:40') ? 'checked' : '' }} @endif>11:40</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Thời gian buỏi chiều
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">7</th>
                                    <td><input type="checkbox" name="time[]" value="12:00" @if (isset($times)) {{ $times->contains('time', '12:00') ? 'checked' : '' }} @endif>12:00</td>
                                    <td><input type="checkbox" name="time[]" value="12:20" @if (isset($times)) {{ $times->contains('time', '12:20') ? 'checked' : '' }} @endif>12:20</td>
                                    <td><input type="checkbox" name="time[]" value="12:40" @if (isset($times)) {{ $times->contains('time', '12:40') ? 'checked' : '' }} @endif>12:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td><input type="checkbox" name="time[]" value="13:00" @if (isset($times)) {{ $times->contains('time', '13:00') ? 'checked' : '' }} @endif>13:00</td>
                                    <td><input type="checkbox" name="time[]" value="13:20" @if (isset($times)) {{ $times->contains('time', '13:20') ? 'checked' : '' }} @endif>13:20</td>
                                    <td><input type="checkbox" name="time[]" value="13:40" @if (isset($times)) {{ $times->contains('time', '13:40') ? 'checked' : '' }} @endif>13:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td><input type="checkbox" name="time[]" value="14:00" @if (isset($times)) {{ $times->contains('time', '14:00') ? 'checked' : '' }} @endif>14:00</td>
                                    <td><input type="checkbox" name="time[]" value="14:20" @if (isset($times)) {{ $times->contains('time', '14:20') ? 'checked' : '' }} @endif>14:20</td>
                                    <td><input type="checkbox" name="time[]" value="14:40" @if (isset($times)) {{ $times->contains('time', '14:40') ? 'checked' : '' }} @endif>14:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td><input type="checkbox" name="time[]" value="15:00" @if (isset($times)) {{ $times->contains('time', '15:00') ? 'checked' : '' }} @endif>15:00</td>
                                    <td><input type="checkbox" name="time[]" value="15:20" @if (isset($times)) {{ $times->contains('time', '15:20') ? 'checked' : '' }} @endif>15:20</td>
                                    <td><input type="checkbox" name="time[]" value="15:40" @if (isset($times)) {{ $times->contains('time', '15:40') ? 'checked' : '' }} @endif>15:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td><input type="checkbox" name="time[]" value="16:00" @if (isset($times)) {{ $times->contains('time', '16:00') ? 'checked' : '' }} @endif>16:00</td>
                                    <td><input type="checkbox" name="time[]" value="16:20" @if (isset($times)) {{ $times->contains('time', '16:20') ? 'checked' : '' }} @endif>16:20</td>
                                    <td><input type="checkbox" name="time[]" value="16:40" @if (isset($times)) {{ $times->contains('time', '16:40') ? 'checked' : '' }} @endif>16:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td><input type="checkbox" name="time[]" value="17:00" @if (isset($times)) {{ $times->contains('time', '17:00') ? 'checked' : '' }} @endif>17:00</td>
                                    <td><input type="checkbox" name="time[]" value="17:20" @if (isset($times)) {{ $times->contains('time', '17:20') ? 'checked' : '' }} @endif>17:20</td>
                                    <td><input type="checkbox" name="time[]" value="17:40" @if (isset($times)) {{ $times->contains('time', '17:40') ? 'checked' : '' }} @endif>17:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td><input type="checkbox" name="time[]" value="18:00" @if (isset($times)) {{ $times->contains('time', '18:00') ? 'checked' : '' }} @endif>18:00</td>
                                    <td><input type="checkbox" name="time[]" value="18:20" @if (isset($times)) {{ $times->contains('time', '18:20') ? 'checked' : '' }} @endif>18:20</td>
                                    <td><input type="checkbox" name="time[]" value="18:40" @if (isset($times)) {{ $times->contains('time', '18:40') ? 'checked' : '' }} @endif>18:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td><input type="checkbox" name="time[]" value="19:00" @if (isset($times)) {{ $times->contains('time', '19:00') ? 'checked' : '' }} @endif>19:00</td>
                                    <td><input type="checkbox" name="time[]" value="19:20" @if (isset($times)) {{ $times->contains('time', '19:20') ? 'checked' : '' }} @endif>19:20</td>
                                    <td><input type="checkbox" name="time[]" value="19:40" @if (isset($times)) {{ $times->contains('time', '19:40') ? 'checked' : '' }} @endif>19:40</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td><input type="checkbox" name="time[]" value="20:00" @if (isset($times)) {{ $times->contains('time', '8pm') ? 'checked' : '' }} @endif>8pm</td>
                                    <td><input type="checkbox" name="time[]" value="20:20" @if (isset($times)) {{ $times->contains('time', '8.20pm') ? 'checked' : '' }} @endif>8.20pm</td>
                                    <td><input type="checkbox" name="time[]" value="20:40" @if (isset($times)) {{ $times->contains('time', '8.40pm') ? 'checked' : '' }} @endif>8.40pm</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td><input type="checkbox" name="time[]" value="21:00" @if (isset($times)) {{ $times->contains('time', '21:00') ? 'checked' : '' }} @endif>21:00</td>
                                    <td><input type="checkbox" name="time[]" value="21:20" @if (isset($times)) {{ $times->contains('time', '21:20') ? 'checked' : '' }} @endif>21:20</td>
                                    <td><input type="checkbox" name="time[]" value="21:40" @if (isset($times)) {{ $times->contains('time', '21:40') ? 'checked' : '' }} @endif>21:40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>

    </div>
    </form>

@else
    <h3>Tổng số lịch khám của bạn: {{ $all->count() }}</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Người tạo</th>
                <th scope="col">Ngày</th>
                <th scope="col">Xem/Cập nhật</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($myappointments as $appoinment)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $appoinment->doctor->name }}</td>
                    <td>{{ date('d-m-Y', strtotime($appoinment->date)) }}</td>
                    <td>
                        <form action="{{ route('appointment.check') }}" method="post">@csrf
                            <input type="hidden" name="date" value="{{ $appoinment->date }}">
                            <button type="submit" class="btn btn-primary">Xem/Cập nhật</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('appointment.show', [$appoinment->id]) }}">
                            <i class="ik ik-trash-2"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">{!! $myappointments->links() !!}</div>
    @endif

    <style type="text/css">
        input[type="checkbox"] {
            zoom: 1.1;

        }

        body {
            font-size: 17px;
        }

    </style>



@endsection

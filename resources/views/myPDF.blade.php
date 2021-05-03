<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ public_path('css/bootstrap.min.css') }}" type="text/css">

    <title>Đơn thuốc</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: DejaVu Sans;
        }

        * {
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
            font-family: DejaVu Sans;
        }

        /* ==== GRID SYSTEM ==== */
        .container {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .row {
            position: relative;
            width: 100%;
        }

        .row [class^="col"] {
            float: left;
        }

        .row::after {
            content: "";
            clear: both;
            display: block;
        }

        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }

        /* Custom */

        .container {
            min-height: 84px;
            border: 1px solid black;
            max-width: 420px;
            margin: 0 auto;
            margin-top: 40px;
        }

        header {
            min-height: 83px;
            border-bottom: 1px solid black;

        }

        .doc-details {
            margin-top: 5px;
            margin-left: 15px;

        }

        .clinic-details {
            margin-top: 5px;
            margin-left: 15px;
        }

        .doc-name {
            font-weight: bold;
            margin-bottom: 5px;

        }

        .doc-meta {
            font-size: 9px;
        }

        .datetime {
            font-size: 10px;
            margin-top: 5px;

        }

        .row.title {
            font-weight: bold;
            padding-left: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .prescription {
            min-height: 380px;
            margin-bottom: 10px;
        }

        table {
            text-align: left;
            width: 90%;
            min-height: 25px;
        }

        table th {
            font-size: 8px;
            font-weight: bold;
        }

        table tr {
            margin-top: 20px;
        }

        table td {
            font-size: 7px;

        }

        .instruction {
            font-size: 6px;
        }

    </style>
</head>

<body>
    <div class="container">
        <header class="row">
            <div class="col-md-10">
                {{-- <div class="doc-details">
                    <p class="doc-name">Bệnh viện đa khoa Hồng Phát</p>
                    <p class="doc-meta">Địa chỉ: 219 Lê Duẩn - Hai Bà Trưng - Hà Nội
                    </p>
                    <p class="doc-meta">Trao y đức - Nhận niềm tin</p>
                </div>

                <div class="clinic-details">
                    <p class="doc-meta">Bác sĩ chuẩn đoán</p>
                    <p class="doc-meta">{{ $data['doctor']['name'] }}</p>
                </div> --}}
                <h3>Bệnh viện đa khoa Hồng Phát</h3>

            </div>
            <div class="col-md-2">
                <p>Ngày khám: {{ $data['date'] }}</p>
                {{-- <p>Time: 03:13</p> --}}
            </div>
        </header>
        <div class="prescription">
            <p style="margin-left:15px;font-size:10px;font-weight:bold;">Bệnh nhân: {{ $data['user']['name'] }}</p>
            <table>
                <tr>
                    <th></th>
                    <th>Tên bệnh</th>
                    <th>Triệu chứng</th>
                    <th>Loại thuốc</th>
                    <th>Cách sử dụng</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>{{ $data['name_of_disease'] }}</td>
                    <td>{{ $data['symptoms'] }}</td>
                    <td>{{ $data['medicine'] }}</td>
                    <td>{{ $data['procedure_to_use_medicine'] }}</td>
                </tr>
            </table>
            {{-- <p>Ghi chú: {{ $data['feedback'] }}</p> --}}
        </div>

        {{-- <p style="font-size:9px;text-align:right;padding-bottom:15px;padding-right:25px;">{{ $data['signature'] }} --}}
        </p>
        {{-- <p style="font-size:6px;text-align:center;padding-bottom:20px;">Bản đưa bệnh nhân không có dấu đỏ</p> --}}
    </div>

    {{-- <p>Ngày tháng: {{ $data['date'] }}</p>
    <p>Bệnh nhân: {{ $data['user']['name'] }}</p>
    <p>Bác sĩ: {{ $data['doctor']['name'] }}</p>
    <p>Tên bệnh: {{ $data['name_of_disease'] }}</p>
    <p>Triệu chứng: {{ $data['symptoms'] }}</p>
    <p>Loại thuốc: {{ $data['medicine'] }}</p>
    <p>Cách sử dụng: {{ $data['procedure_to_use_medicine'] }}</p>
    <p>Ghi chú: {{ $data['feedback'] }}</p>
    <p>Chữ kí:{{ $data['signature'] }}</p> --}}
    <script type="text/javascript" src="{{ public_path('js/bootstrap.min.js') }}"></script>
</body>

</html>

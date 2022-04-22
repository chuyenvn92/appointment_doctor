<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ public_path('css/bootstrap.min.css') }}" type="text/css">

    <title>Đơn thuốc test</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: DejaVu Sans;
        }

        * {
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
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
            <div class="col-8">
                <div class="doc-details">
                    <p class="doc-name">Bác sĩ: {{ $data['doctor']['name'] }}</p>
                    <p class="doc-meta">Chuyên khoa: Cơ xương khớp</p>
                </div>

                <div class="clinic-details">
                    <p class="doc-meta">Địa chỉ bệnh viện</p>
                    <p class="doc-meta">219 Lê Duẩn - Hai Bà Trưng - Hà Nội</p>
                </div>

            </div>
            <div class="col-4 datetime">
                <p>Ngày: {{ $data['date'] }}</p>
            </div>
        </header>
        <div class="prescription">
            <p style="margin-left:15px;font-size:10px;font-weight:bold;">Bệnh nhân: {{ $data['user']['name'] }}</p>
            <table>
                <tr>
                    <th></th>
                    <th>Chuẩn đoán</th>
                    <th>Triệu chứng</th>
                    <th>Thuốc</th>
                    <th>Cách dùng</th>
                    <th>Ghi chú</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>{{ $data['name_of_disease'] }}</td>
                    <td>{{ $data['symptoms'] }}</td>
                    <td>{{ $data['medicine'] }}</td>
                    <td>{{ $data['procedure_to_use_medicine'] }}</td>
                    <td>{{ $data['feedback'] }}</td>
                </tr>

            </table>


        </div>

        <p style="font-size:9px;text-align:right;padding-bottom:15px;padding-right:25px;">Bác sĩ
            {{ $data['signature'] }}</p>
    </div>
</body>

</html>

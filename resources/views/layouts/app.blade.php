<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đặt lịch khám bệnh viện</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navbar-dark">
            <div class="container">
                <!-- <a class="navbar-brand" href="index.html">Health</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav"
                    aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="probootstrap-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link pl-0">Trang chủ</a>
                        </li>
                        <li class="nav-item"><a href="departments.html" class="nav-link">Chuyên khoa</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">Thông tin</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Liên hệ</a></li>
                    </ul>
                    <div class="ml-auto">

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <form action="#" method="get" class="probootstrap-search-form mb-sm-0 mb-3">
                                    <div class="form-group">
                                        <button class="icon submit"><span class="icon-magnifying-glass"></span></button>
                                        <input type="text" class="form-control" placeholder="Tìm kiếm">
                                    </div>
                                </form>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a style="color: #fff; font-size:13px;" class="nav-link"
                                            href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a style="color: #fff; font-size:13px; " class="nav-link"
                                                href="{{ route('register') }}"
                                                style="color: #fff; font-size:13px;">{{ __('Đăng kí') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a style="color: #fff; font-size:13px;" id="navbarDropdown"
                                            class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            @if (auth()->check() && auth()->user()->role->name === 'patient')
                                                <a href="{{ url('user-profile') }}" class="dropdown-item"
                                                    style="color: #000; font-size:13px;">Thông tin cá nhân</a>
                                                <a class="dropdown-item" href="{{ route('my.booking') }}"
                                                    style="color: #000; font-size:13px;">{{ __('Lịch khám') }}</a>
                                                <a style="color: #000; font-size:13px;" class="dropdown-item"
                                                    href="{{ route('my.prescription') }}"
                                                    style="color: #000; font-size:13px;">{{ __('Đơn thuốc') }}</a>
                                            @else
                                                <a href="{{ url('dashboard') }}" class="dropdown-item"
                                                    style="color: #000; font-size:13px;">Đến trang quản trị</a>
                                            @endif
                                            <a style="color: #000; font-size:13px;" class="dropdown-item"
                                                href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                                                                                                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Đăng xuất') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END nav -->
        <header role="banner" class="probootstrap-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <a href="{{ url('/') }}" class="mr-auto"><img src=" {{ asset('/images/hongphat.png')}}"
                                width="212" height="48" alt="Bệnh viện đa khoa Hồng Phát"></a>
                    </div>
                    <div class="col-md-9">
                        <div class="float-md-right float-none">
                            <div class="probootstrap-contact-phone d-flex align-items-top mb-3 float-left">
                                <span class="icon mr-2"><i class="icon-phone"></i></span>
                                <span class="probootstrap-text">0349982248<small class="d-block"><a href="#"
                                            class="arrow-link">Đặt lịch hẹn bác sĩ<i
                                                class="icon-chevron-right"></i></a></small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>

    <footer class="probootstrap-footer mt-3">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <h3 class="heading">Đồ án CNTT</h3>
                    <ul class="list-unstyled probootstrap-footer-recent-post">
                        <li>
                            <a href="#"><span class="date">19-05-2021</span> Thực hiện bới Mai Công Chuyên </a>
                        </li>
                        <li>
                            <a href="#"><span class="date">19-05-2021</span>Xin chào UTT </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="heading">Địa chỉ</h3>
                    <p class="mb-5">219 Lê Duẩn - Hai Bà Trưng - Hà Nội</p>
                    <h3 class="heading text-white">Giờ mở cửa</h3>
                    <p>
                        Sáng: 7h30 – 12h00 <br>
                        Chiều: 13h30 – 17h00<br>
                        Cấp cứu trực 24/7 luôn sẵn sàng
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 class="heading">Truy cập nhanh</h3>
                    <ul class="list-unstyled probootstrap-footer-links">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Chuyên khoa</a></li>
                        <li><a href="#">Thông tin</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="heading">Theo dõi chúng tôi trên</h3>
                    <ul class="probootstrap-footer-social">
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- END row -->
        </div>
    </footer>

    <!-- loader -->
    <div id="probootstrap-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#32609e" />
        </svg></div>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <style type="text/css">
        .ui-corner-all {
            background: red;
            color: #fff;
        }

        label.btn {
            padding: 0;
        }

        label.btn input {
            opacity: 0;
            position: absolute;
        }

        label.btn span {
            text-align: center;
            padding: 6px 12px;
            display: block;
            min-width: 80px;
        }

        label.btn input:checked+span {
            background-color: rgb(80, 110, 228);
            color: #fff;
        }

    </style>


</body>

</html>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bệnh viện đa khoa Hồng Phát</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>

<body>
    <div id="app">
        @php
            $specialists = DB::table('departments')
                ->orderBy('id', 'desc')
                ->get();
        @endphp
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div class="header-top_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 ">
                                <div class="social_media_links">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> chuyendaik99@gmail.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i>0349982248</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky-header" class="main-header-area">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{ '/' }}">
                                        <h2><i class="fa fa-h-square"></i>ồng Phát</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{ '/' }}">Trang chủ</a></li>
                                            <li><a href="{{ route('departmentshow') }}">Chuyên khoa</a></li>
                                            <li><a href="{{ route('doctorshow') }}">Bác sĩ</a></li>
                                            @guest
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        Đăng nhập
                                                    </a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li>
                                                        <a href="{{ route('register') }}">
                                                            Đăng kí
                                                        </a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="navbarDropdown">
                                                        @if (auth()->check() && auth()->user()->role->name_role == 'patient')
                                                            <a href="{{ url('user-profile') }}"
                                                                class="dropdown-item">Thông tin cá nhân</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('my.booking') }}">{{ __('Lịch khám bệnh') }}</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('my.prescription') }}">{{ __('Chuẩn đoán') }}</a>
                                                        @else
                                                            <a href="{{ url('dashboard') }}" class="dropdown-item">Đến
                                                                trang quản trị</a>
                                                        @endif
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Đăng xuất') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="{{ url('list-appointment') }}">Đặt lịch hẹn</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

        @yield('content')

        <!-- Emergency_contact start -->
        <div class="Emergency_contact">
            <div class="conatiner-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-6">
                        <div
                            class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                            <div class="info">
                                <h3>Liên hệ đặt khám</h3>
                                <p>Đường dây nóng hỗ trợ 24/7</p>
                            </div>
                            <div class="info_button">
                                <a href="#" class="boxed-btn3-white">+84 349 982 248</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div
                            class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                            <div class="info">
                                <h3>Đặt lịch trực tiếp</h3>
                                <p>Gửi yêu cầu đặt lịch không cần tạo tài khoản</p>
                            </div>
                            <div class="info_button">
                                <a href="#test-form" class="boxed-btn3-white popup-with-form">Đặt lịch ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Emergency_contact end -->

        <!-- footer start -->
        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <p>
                                    Đồ án đặt hẹn lịch khám bác sĩ Bệnh viện đa khoa Hồng Phát
                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Chuyên Khoa
                                </h3>
                                <ul>
                                    @foreach ($specialists as $specialist)
                                        <li><a href="#">{{ $specialist->name_department }}</a></li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Link
                                </h3>
                                <ul>
                                    <li><a href="#">Trang chủ</a></li>
                                    <li><a href="#">Chuyên khoa</a></li>
                                    <li><a href="#">Bác sĩ</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                    <li><a href="#">Đặt lịch hẹn</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Địa chỉ
                                </h3>
                                <p>
                                    219 Lê Duẩn - Hai Bà Trưng - Hà Nội<br>
                                    096 227 9115 <br>
                                    cskh@benhvienhongphat.vn
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end  -->
        <!-- link that opens popup -->

        <!-- form itself end-->
        <form id="test-form" class="white-popup-block mfp-hide" role="form" action="{{ route('store.guest') }}"
            method="post">
            @csrf
            <div class="popup_box ">
                <div class="popup_inner">
                    <h3>Đặt lịch khám nhanh</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên đầy đủ">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Địa chỉ Email">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="date" name="date" value="" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" name="specialist">
                                <option data-display="specialist">Chuyên khoa</option>
                                @foreach ($specialists as $specialist)
                                    <option>{{ $specialist->name_department }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                            <textarea class="form-control" rows="5" id="message" name="message"
                                placeholder="Ghi chú"></textarea>
                            <button type="submit" class="form-control boxed-btn3" name="submit">Gửi
                                yêu cầu
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- form itself end -->

        <!-- JS here -->
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/ajax-form.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/scrollIt.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/gijgo.min.js') }}"></script>
        <!--contact js-->
        <script src="{{ asset('js/contact.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/jquery.form.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
        </script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            @if (Session::has('messege'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
                case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
                case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
                case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
                }
            @endif

        </script>
    </div>
</body>

</html>

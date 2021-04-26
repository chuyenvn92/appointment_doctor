<!DOCTYPE html>
<html lang="en">

<head>

    <title>Bệnh viện đa khoa Hồng Phát</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://use.fontawesome.com/fb7e99abe9.js"></script>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>

    <div id=app>
        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-5">
                        <p>Trang đặt lịch khám bệnh viện đa khoa Hồng Phát</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                        <span class="phone-icon"><i class="fa fa-phone"></i>0349982248</span>
                        <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 06:00 - 10:00 (CẢ TUẦN)</span>
                        <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                                href="#">maicongchuyentb@gmail.com</a></span>
                    </div>

                </div>
            </div>
        </header>


        <!-- MENU -->
        <section class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{ url('/') }}" class="navbar-brand"><i class="fa fa-h-square"></i>ồng Phát</a>
                </div>

                <!-- MENU LINKS -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#top" class="smoothScroll">Trang chủ</a></li>
                        <li><a href="#about" class="smoothScroll">Giới thiệu</a></li>
                        <li><a href="#team" class="smoothScroll">Bác sĩ</a></li>
                        <li><a href="#news" class="smoothScroll">Cẩm nang</a></li>
                        <li><a href="#google-map" class="smoothScroll">Liên hệ</a></li>
                        <li class="appointment-btn"><a href="#appointment">Đặt lịch</a></li>
                        @guest
                            <li>
                                <a href="#" type="button" class="smoothScroll" data-toggle="modal" data-target="#loginForm">
                                    Đăng nhập
                                </a>
                            </li>
                            @if (Route::has('register'))
                                {{-- <li><a href="{{ route('register') }}" class="smoothScroll">Đăng kí</a></li> --}}
                                <li><a href="#" type="button" class="smoothScroll" data-toggle="modal" data-target="#registerForm">
                                    Đăng kí
                                </a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (auth()->check() && auth()->user()->role->name_role == 'patient')
                                        <a href="{{ url('user-profile') }}" class="dropdown-item">Thông tin cá nhân</a>
                                        <a class="dropdown-item"
                                            href="{{ route('my.booking') }}">{{ __('Lịch khám bệnh') }}</a>
                                        <a class="dropdown-item"
                                            href="{{ route('my.prescription') }}">{{ __('Chuẩn đoán') }}</a>
                                    @else
                                        <a href="{{ url('dashboard') }}" class="dropdown-item">Đến trang quản trị</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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
        </section>
        <main>
            @yield('content')

        </main>
    </div>


    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Thông tin liên hệ</h4>
                        <p>Địa chỉ: 219 Lê Duẩn - Hai Bà Trưng - Hà Nội</p>
                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> (024) 3942 9999</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">cskh@benhvienhongphat.vn</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Tin tức mới</h4>
                        <div class="latest-stories">
                            <div class="stories-image">
                                <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                            </div>
                            <div class="stories-info">
                                <a href="#">
                                    <h5>Tiêu đề nè</h5>
                                </a>
                                <span>24-04-2021</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <div class="opening-hours">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Thời gian làm việc</h4>
                            <p>Từ thứ 2 - Chủ nhật<span>06:00 - 10:00 </span></p>
                        </div>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square"
                                    attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright-text">
                            <p>Đồ án Đặt lịch hẹn khám bác sĩ</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-link">
                            <a href="#">GitHub</a>
                            <a href="#">GitLab</a>
                            <a href="#">Gmail</a>
                            <a href="#">Drive</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn">
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                    class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    {{-- Modal Form Login --}}
    <div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ghi nhớ lần đăng nhập') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng nhập') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End Login Form --}}

    {{-- Modal Form Register --}}
    <div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Đăng kí</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tên') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Nhập lại mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Giới tính') }}</label>

                            <div class="col-md-6">
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="">Vui lòng chọn</option>
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                </select>
                            </div>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng kí') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End Register Form --}}



    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>

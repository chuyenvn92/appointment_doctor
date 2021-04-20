@extends('layouts.app')

@section('content')
    <section class="probootstrap-features-1">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('banner/slider_1.jpeg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('banner/slider_2.jpeg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('banner/slider_3.jpeg') }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><br>
            <div class="row">
                <div class="col-md probootstrap-feature-item"
                    style="background-image:url({{ asset('images/khoa-co-xuong-khop.jpeg') }})">
                    <div class="probootstrap-feature-item-text">
                        <span class="icon"><i class="flaticon-first-aid-kit display-4"></i></span>
                        <h2>Khoa<span>Xương khớp</span></h2>
                    </div>
                </div>
                <div class="col-md probootstrap-opening">
                    <h2 class="text-uppercase mb-3">Giờ mở cửa<span>Bệnh viện đa khoa Hồng Phát</span></h2>
                    <ul class="list-unstyled probootstrap-schedule">
                        <li>Thứ 2 - Thứ 6<span>6:00 - 17:00</span></li>
                        <li>Thứ 7<span>6:30-17:00</span></li>
                        <li>Chủ nhật<span>6:30-17:00</span></li>
                    </ul>
                </div>
                <div class="col-md probootstrap-feature-item"
                    style="background-image:url({{ asset('images/121042-than-kinh.jpeg') }})">
                    <div class="probootstrap-feature-item-text">
                        <span class="icon"><i
                                class="flaticon-gym-control-of-exercises-with-a-list-on-a-clipboard-and-heart-beats display-4"></i></span>
                        <h2>Khoa<span>Nội thần kinh</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-services">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 probootstrap-aside-stretch-left">
                    <div class="mb-3">
                        <h2 class="h6">Chuyên Khoa</h2>
                        <ul class="list-unstyled probootstrap-light mb-4">
                            <li><a href="#">Cơ Xương Khớp</a></li>
                            <li><a href="#">Nội Thần Kinh</a></li>
                            <li><a href="#">Não</a></li>
                            <li><a href="#">Răng hàm mặt</a></li>
                            <li><a href="#">Tiêu hoá</a></li>
                        </ul>
                        <!-- <p><a href="#" class="arrow-link text-white">Thêm chuyên khoa<i class="icon-chevron-right"></i></a></p> -->
                    </div>
                </div>
                <div class="col-md-9 pl-md-5 pl-0">
                    <div class="row mb-5">

                        <div class="col-lg-4 col-md-6">
                            <div class="media d-block mb-4 text-left probootstrap-media">
                                <div class="probootstrap-icon mb-3"><span class="flaticon-price-tag display-4"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 text-secondary">Tiết kiệm thời gian và chi phí</h3>
                                    <p>Đa dạng gói khám phù hợp với nhu cầu của mỗi người bệnh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="media d-block mb-4 text-left probootstrap-media">
                                <div class="probootstrap-icon mb-3"><span
                                        class="flaticon-shield-with-cross display-4"></span></div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 text-secondary">Chuẩn đoán đúng bệnh, nhanh chóng</h3>
                                    <p>Đảm bảo môi trường an toàn cho mọi người đến thăm khám bệnh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="media d-block mb-4 text-left probootstrap-media">
                                <div class="probootstrap-icon mb-3"><span class="flaticon-first-aid-kit display-4"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 text-secondary">Chất lượng dịch vụ tận tình chu đáo</h3>
                                    <p>Hỗ trợ các gói khám: khám giáo sư, khám cá nhân, khám lẻ...</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="media d-block mb-4 text-left probootstrap-media">
                                <div class="probootstrap-icon mb-3"><span class="flaticon-microscope display-4"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 text-secondary">Trả kết quả ngay trong ngày</h3>
                                    <p>Luôn luôn cập nhật trang thiết bị hiện đại, công nghệ mới nhất vào khám bệnh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="media d-block mb-4 text-left probootstrap-media">
                                <div class="probootstrap-icon mb-3"><span
                                        class="flaticon-gym-control-of-exercises-with-a-list-on-a-clipboard-and-heart-beats display-4"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 text-secondary">Cam kết chất lượng và dịch vụ</h3>
                                    <p>Xây dựng lộ trình điều trị riêng cho từng bệnh nhân, tuỳ theo thể trạng và sức khoẻ
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="media d-block mb-4 text-left probootstrap-media">
                                <div class="probootstrap-icon mb-3"><span class="flaticon-doctor display-4"></span>
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mt-0 text-secondary">Lắng nghe, tận tâm và chu đáo</h3>
                                    <p>Đội ngũ giáo sư, tiến sĩ bác sĩ đầu ngành</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <find-doctor></find-doctor>
    </div>
    <!--date picker component-->
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-5 text-center probootstrap-media">
                        <div class="probootstrap-icon mb-3"><span class="flaticon-price-tag display-4"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mt-0 text-secondary">Chi phí hợp lí</h3>
                            <p>Đa dạng gói khám phù hợp với nhu cầu của mỗi người bệnh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-5 text-center probootstrap-media">
                        <div class="probootstrap-icon mb-3"><span class="flaticon-shield-with-cross display-4"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mt-0 text-secondary">Chất lượng và an toàn</h3>
                            <p>Đảm bảo môi trường an toàn cho mọi người đến thăm khám bệnh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-5 text-center probootstrap-media">
                        <div class="probootstrap-icon mb-3"><span class="flaticon-microscope display-4"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mt-0 text-secondary">Đa dạng dịch vụ</h3>
                            <p>Hỗ trợ các gói khám: khám giáo sư, khám cá nhân, khám lẻ...</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-5 text-center probootstrap-media">
                        <div class="probootstrap-icon mb-3"><span class="flaticon-microscope display-4"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mt-0 text-secondary">Thiết bị hiện đại</h3>
                            <p>Luôn luôn cập nhật trang thiết bị hiện đại, công nghệ mới nhất vào khám bệnh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-5 text-center probootstrap-media">
                        <div class="probootstrap-icon mb-3"><span
                                class="flaticon-gym-control-of-exercises-with-a-list-on-a-clipboard-and-heart-beats display-4"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mt-0 text-secondary">Lộ trình phù hợp</h3>
                            <p>Xây dựng lộ trình điều trị riêng cho từng bệnh nhân, tuỳ theo thể trạng và sức khoẻ
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media d-block mb-5 text-center probootstrap-media">
                        <div class="probootstrap-icon mb-3"><span class="flaticon-doctor display-4"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mt-0 text-secondary">Bác sĩ nhiều kinh nghiệm</h3>
                            <p>Đội ngũ giáo sư, tiến sĩ bác sĩ đầu ngành</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="probootstrap-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                    <img src="{{ asset('images/gUoYKxXU4QeuLIkK7d9ZXRGbAI602aiPg4gD3GxL.jpg') }}" alt="image" class="img-fluid">
                    <div class="probootstrap-person-text">
                        <span class="title">Cơ xương khớp</span>
                        <span class="name">Bác sĩ Trần Ngọc Ân</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                    <img src="{{ asset('images/gUoYKxXU4QeuLIkK7d9ZXRGbAI602aiPg4gD3GxL.jpg') }}" alt="image" class="img-fluid">
                    <div class="probootstrap-person-text">
                        <span class="title">Cơ xương khớp</span>
                        <span class="name">Bác sĩ Trần Ngọc Ân</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                    <img src="{{ asset('images/gUoYKxXU4QeuLIkK7d9ZXRGbAI602aiPg4gD3GxL.jpg') }}" alt="image" class="img-fluid">
                    <div class="probootstrap-person-text">
                        <span class="title">Cơ xương khớp</span>
                        <span class="name">Bác sĩ Trần Ngọc Ân</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                    <img src="{{ asset('images/gUoYKxXU4QeuLIkK7d9ZXRGbAI602aiPg4gD3GxL.jpg') }}" alt="image" class="img-fluid">
                    <div class="probootstrap-person-text">
                        <span class="title">Cơ xương khớp</span>
                        <span class="name">Bác sĩ Trần Ngọc Ân</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md probootstrap-animate">
                    <div class="probootstrap-counter text-center">
                        <span class="probootstrap-number" data-number="12">0</span>
                        <span class="probootstrap-label">Năm thành lập</span>
                    </div>
                </div>
                <div class="col-md probootstrap-animate">
                    <div class="probootstrap-counter text-center">
                        <span class="probootstrap-number" data-number="30">0</span>
                        <span class="probootstrap-label">Giáo sư tiến sĩ</span>
                    </div>
                </div>
                <div class="col-md probootstrap-animate">
                    <div class="probootstrap-counter text-center">
                        <span class="probootstrap-number" data-number="60">0</span>
                        <span class="probootstrap-label">Y tá điều dưỡng</span>
                    </div>
                </div>
                <div class="col-md probootstrap-animate">
                    <div class="probootstrap-counter text-center">
                        <span class="probootstrap-number" data-number="1000000">0</span>
                        <span class="probootstrap-label">Điều trị bệnh nhân/năm</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- <section class="probootstrap-subscribe">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="h1 text-white">Subscribe Newsletter</h2>
                    <p class="lead text-white">Far far away, behind the word mountains, far from the countries Vokalia.
                    </p>
                </div>
            </div>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" value="Subscribe" class="btn btn-primary btn-block">
                    </div>

                </div>
            </form>
        </div>
    </section> --}}
    </div>
@endsection

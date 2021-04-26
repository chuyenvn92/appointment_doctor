@extends('layouts.app')

@section('content')

    @php
    $specialists = DB::table('departments')
        ->orderBy('id', 'desc')
        ->get();
    $doctors = DB::table('users')
        ->join('departments', 'users.department_id', 'departments.id')
        ->select('users.*', 'departments.name_department')
        ->where('role_id', 1)
        ->get();
    @endphp
 <!-- HOME -->
 <section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Làm cho cuộc sống trở nên đơn giản hơn</h3>
                            <h1>Sống khoẻ</h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Gặp bác sĩ</a>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Lắng nghe những chia sẻ từ chúng tôi</h3>
                            <h1>Phong cách sống mới</h1>
                            <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Về chúng
                                tôi</a>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Chia sẻ những kinh nghệm quý báu</h3>
                            <h1>Hãy lắng nghe</h1>
                            <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Đọc nhiều
                                hơn</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Chào mừng bạn đến với trang đặt lịch khám bệnh
                        viện <i class="fa fa-h-square"></i>ồng Phát</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p>Cung cấp cho bạn thông tin lịch khám của các giáo sư tiến sĩ hàng đầu tại Hồng Phát</p>
                        <p>Lịch khám được cập nhật hàng ngày với thông tin chi tiết của từng bác sĩ, hi vọng sẽ giúp
                            bạn đơn giản hoá việc thăm khám bệnh tại bệnh viện</p>
                    </div>
                    <figure class="profile wow fadeInUp" data-wow-delay="1s">
                        <img src="images/author-image.jpeg" class="img-responsive" alt="">
                        <figcaption>
                            <h3>Mai Công Chuyên</h3>
                            <p>Developer</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Các bác sĩ tiêu biểu</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/team-image1.jpg" class="img-responsive" alt="">
                    <div class="team-info">
                        <h3>Nate Baston</h3>
                        <p>General Principal</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-020-0120</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-linkedin-square"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- NEWS -->
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Cẩm nang</h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="news-detail.html">
                        <img src="images/news-image1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>24-03-201</span>
                        <h3><a href="news-detail.html">Sự thú zị của công nghệ thời đại số</a></h3>
                        <p>Ứng dụng công nghệ trong đặt hẹn lịch khám</p>
                        <div class="author">
                            <img src="images/author-image.jpeg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Mai Công Chuyên</h5>
                                <p>Nhà Phát triển</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="news-detail.html">
                        <img src="images/news-image2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>24-4-2021</span>
                        <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                        <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                        <div class="author">
                            <img src="images/author-image.jpeg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jason Stewart</h5>
                                <p>General Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="news-detail.html">
                        <img src="images/news-image3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>January 27, 2018</span>
                        <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                        <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                        <div class="author">
                            <img src="images/author-image.jpeg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Andrio Abero</h5>
                                <p>Online Advertising</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="images/appointment-image.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="#">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Đặt lịch khám</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="name">Họ và tên</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Họ tên đầy đủ">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Địa chỉ Email">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="date">Chọn ngày khám</label>
                            <input type="date" name="date" value="" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Chuyên khoa</label>
                            <select class="form-control">
                                <option>Răng hàm mặt</option>
                                <option>Da liễu</option>
                                <option>Cơ xương khớp</option>
                                <option>Nội thần kinh</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="telephone">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                            <label for="Message">Ghi chú</label>
                            <textarea class="form-control" rows="5" id="message" name="message"
                                placeholder="Nội dung"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Gửi yêu
                                cầu</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<!-- GOOGLE MAP -->
<section id="google-map">
    <!-- How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
-->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3578173828696!2d105.83940891417917!3d21.018364186003964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2976472f57%3A0xbd0797cd6f690c09!2zQuG7h25oIFZp4buHbiDEkGEgS2hvYSBI4buTbmcgUGjDoXQ!5e0!3m2!1svi!2s!4v1619164673019!5m2!1svi!2s"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

@endsection

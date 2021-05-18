@extends('layouts.app')

@section('content')

    @php
    $specialists = DB::table('departments')
        ->orderBy('id', 'desc')
        ->get();
    $doctors = DB::table('users')
        ->select('users.*')
        ->where('role_id', 1)
        ->limit(4)
        ->get();
    @endphp
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Hồng Phát</span> <br>
                                    Trao y đức - Nhận niềm tin</h3>
                                <p>Trải nghiệm đặt lịch tại nhà <br> Chung tay tránh xa Covid</p>
                                <a href="{{ url('list-appointment') }}" class="boxed-btn3">Đặt lịch hẹn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Hồng Phát</span> <br>
                                    Trao y đức - Nhận niềm tin</h3>
                                <p>Trải nghiệm đặt lịch tại nhà <br> Chung tay tránh xa Covid</p>
                                <a href="{{ url('list-appointment') }}" class="boxed-btn3">Đặt lịch hẹn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Hồng Phát</span> <br>
                                    Trao y đức - Nhận niềm tin</h3>
                                <p>Trải nghiệm đặt lịch tại nhà <br> Chung tay tránh xa Covid</p>
                                <a href="{{ url('list-appointment') }}" class="boxed-btn3">Đặt lịch hẹn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <h3>Nỗ lực vì người bệnh</h3>
                        <p>Bệnh viện Đa khoa Hồng Phát nỗ lực kiến tạo không gian khám chữa bệnh tiện nghi. Quy
                            trình
                            thăm khám khoa học, hợp lý, giúp người bệnh và người nhà tiết kiệm thời gian. Đội ngũ lễ
                            tân
                            hướng dẫn hỗ trợ nhiệt tình đem lại cho khách hàng sự thoải mái khi đến sử dụng dịch vụ.
                        </p>
                        <a href="{{ url('list-appointment') }}" class="boxed-btn3-white">Đặt lịch ngay</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>Dịch vụ hàng đầu</h3>
                        <p>Hội tụ đội ngũ giáo sư, bác sĩ đầu ngành có chuyên môn cao và giàu kinh nghiệm. Hầu hết
                            các
                            y, bác sĩ đang làm việc tại đây đều là những người đã và đang công tác tại các bệnh viện
                            lớn
                            tuyến Trung ương như: Bệnh viện Bạch Mai, Bệnh viện Việt Đức, Bệnh viện E Hà Nội, Bệnh
                            viện
                            K…</p>
                        <a href="#" class="boxed-btn3-white">+84 349 982 248</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>Hệ thống y tế hiện đại</h3>
                        <p>Nỗ lực vì trở thành địa chỉ khám chữa bệnh uy tín hàng đầu cả nước, Bệnh viện Đa khoa
                            Hồng
                            Phát đã cập nhật và ứng dụng những công nghệ điều trị tiên tiến nhất. Hệ thống máy móc,
                            trang thiết bị y khoa hiện đại góp phần hỗ trợ các bác sĩ, chuyên gia chẩn đoán và điều
                            trị
                            hiệu quả, chính xác, an toàn.</p>
                        <a href="{{ url('list-appointment') }}" class="boxed-btn3-white">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="{{ asset('images/about/1.png') }}" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="{{ asset('images/about/2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Đặt và hẹn lịch khám bác sĩ</h2>
                        <h3>Chăm sóc tốt nhất cho sức khoẻ của bạn</h3>
                        <p>Cùng chung tay chống dịch Covid từ những hành động nhỏ nhất. Trải nghiệm dịch vụ đặt lịch
                            khám online.</p>
                        <ul>
                            <li> <i class="flaticon-right"></i>Xem lịch hẹn bác sĩ muốn khám theo ngày</li>
                            <li> <i class="flaticon-right"></i>Đặt hẹn bất cứ lúc nào
                            </li>
                            <li> <i class="flaticon-right"></i>Nhận thông tin lịch hẹn nhanh chóng</li>
                        </ul>
                        <a href="#" class="boxed-btn3-white-2">Và nhiều hơn thế nữa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->

    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Các chuyên khoa</h3>
                        <p>Đa dạng chuyên khoa<br>
                            Đội ngũ bác sĩ theo từng chuyên khoa giàu kinh nghiệm</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($specialists as $item)
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_department">
                            <div class="department_thumb">
                                <img src="{{ asset('images') }}/{{ $item->image }}" alt="">
                            </div>
                            <div class="department_content">
                                <h3><a href="#">{{ $item->name_department }}</a></h3>
                                <p>{{ $item->description_department }}</p>
                                <a href="#" class="learn_more">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Chẳng bao giờ thấy ở đâu mà điều dưỡng chăm sóc bệnh nhân nhẹ nhàng đến thế...!
                                    không quát tháo, không cau có thái độ, chỉ thấy gần gũi đến ấm lòng.<br>
                                    có cụ còn bảo con cái cũng không chăm bằng các cô các chú ở đây.
                                    <br>
                                    Bản thân đến đây cũng thấy thế ... thực sự cảm tình rất tốt với bệnh viện hồng
                                    phát
                                    này
                                </p>
                                <div class="testmonial_author">
                                    <h4>Cướng Chì
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Đưa người nhà đến đây rất nhiều lần thấy vô cùng hài lòng từ khâu đón tiếp ở cửa,
                                    hướng dẫn lên tận phòng khám, bác sĩ điều dưỡng tận tình.<br>
                                    Giá cả thì còn rẻ hơn viện công mà không phải chờ đợi.
                                    <br>
                                    Người già như bà mình chỉ cần dẫn đến rồi tự các bạn lễ tân ở viện sẽ đưa đi
                                    khám
                                    đến nơi đến chốn ko cần người nhà.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Nguyễn Thùy Dương
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Bệnh viện có đội ngũ Giáo sư - Bsi nhiều kinh nghiệm. Đặc biệt về chuyên khoa Cơ
                                    xương khớp của Gs Ân và khoa Thần kinh của Gs Liệu. <br>
                                    Tuy nhỏ nhưng nhân viên rất chu đáo. Mẹ và người nhà mình đã điều trị tại đây
                                    rất
                                    nhiều lần. Vote 5*
                                </p>
                                <div class="testmonial_author">
                                    <h4>Nguyễn Khánh Linh</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- business_expert_area_start  -->
    <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Dịch vụ tốt nhất</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Bác sĩ đầu nghành</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Chuyên khoa đa dạng</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Cung cấp dịch vụ khám chữa bệnh chất lượng hàng đầu</h3>
                                    <p>Với thủ tục khám chữa bệnh thuận tiện và nhanh chóng, đội ngũ lễ tân chu đáo,
                                        tận
                                        tình, bệnh nhân và người nhà có thể an tâm trải nghiệm những dịch vụ y tế
                                        chất
                                        lượng tốt nhất tại Bệnh viện Đa khoa Hồng Phát
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('images/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Cung cấp dịch vụ khám chữa bệnh chất lượng hàng đầu</h3>
                                    <p>Bệnh viện Đa khoa Hồng Phát hội tụ đội ngũ giáo sư, bác sĩ đầu ngành có
                                        chuyên
                                        môn cao và giàu kinh nghiệm. Hầu hết các y, bác sĩ đang làm việc tại đây đều
                                        là
                                        những người đã và đang công tác tại các bệnh viện lớn tuyến Trung ương như:
                                        Bệnh
                                        viện Bạch Mai, Bệnh viện Việt Đức, Bệnh viện E Hà Nội, Bệnh viện K, Bệnh
                                        viện TW
                                        Quân đội 108, Bệnh viện Phụ sản TW,…
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('images/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Chuyên khoa mũi nhọn của Bệnh viện Đa khoa Hồng Phát</h3>
                                    <p>Chuyên khoa nội <br>Chuyên khoa ngoại <br>Cận lâm sàng
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('images/about/business.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business_expert_area_end  -->


    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55">
                        <h3>Bác sĩ hàng đầu</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="expert_active owl-carousel">
                        @foreach ($doctors as $doctor)
                            <div class="single_expert">
                                <a href="{{ url('doctor/detail/' . $doctor->id) }}">
                                    <div class="expert_thumb">
                                        <img src="{{ asset('images') }}/{{ $doctor->image }}" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>BS {{ $doctor->name }}</h3>
                                        <span>{{ $doctor->department }}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- expert_doctors_area_end -->

@endsection

<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="{{ url('/dashboard') }}">
                <div class="logo-img">

                </div>
                <span class="text">Booking</span>
            </a>
        </div>
        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Điều hướng</div>
                    <div class="nav-item active">
                        <a href="{{ url('dashboard') }}"><i class="ik ik-bar-chart-2"></i><span>Thống kê</span></a>
                    </div>
                    @if (auth()->check() && auth()->user()->role->name_role === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Chuyên khoa</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('department.create') }}" class="menu-item">Thêm mới</a>
                                <a href="{{ route('department.index') }}" class="menu-item">Danh sách</a>

                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name_role === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Bác sĩ</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('doctor.create') }}" class="menu-item">Thêm mới</a>
                                <a href="{{ route('doctor.index') }}" class="menu-item">Danh sách</a>

                            </div>
                        </div>
                    @endif
                    @if (auth()->check() && auth()->user()->role->name_role === 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Lịch hẹn khám</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('appointment.create') }}" class="menu-item">Thêm mới</a>
                                <a href="{{ route('appointment.index') }}" class="menu-item">Danh sách lịch hẹn</a>
                            </div>
                        </div>
                    @endif
                    @if (auth()->check() && auth()->user()->role->name_role === 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Lịch đặt khám</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patient.index') }}" class="menu-item">Lượt đặt trong ngày</a>
                                <a href="{{ route('patient.all') }}" class="menu-item">Danh sách lượt đặt</a>
                            </div>
                        </div>
                    @endif

                    @if (auth()->check() && auth()->user()->role->name_role === 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Chuẩn đoán và kê đơn</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patients.today') }}" class="menu-item">Trong ngày</a>
                                <a href="{{ route('prescribed.patients') }}" class="menu-item">Tất cả bệnh nhân đã khám</a>
                            </div>
                        </div>
                    @endif
                    @if (auth()->check() && auth()->user()->role->name_role === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Thống kê đặt khám</span>
                                <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('patient') }}" class="menu-item">Đặt khám trong ngày</a>
                                <a href="{{ route('all.appointments') }}" class="menu-item">Tổng lượt đặt</a>

                            </div>
                        </div>

                    @endif
                    @if (auth()->check() && auth()->user()->role->name_role === 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Bệnh nhân đăng kí ngoài</span> <span
                                    class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{ route('guest.index') }}" class="menu-item"> Xem danh sách</a>

                            </div>
                        </div>
                    @endif

                    <div class="nav-item active">
                        <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            href="{{ route('logout') }}"><i
                                class="ik ik-power dropdown-icon"></i><span>Đăng xuất</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </nav>
            </div>
        </div>
    </div>

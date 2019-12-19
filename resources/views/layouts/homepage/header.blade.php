<header class="navbar-fixed-top navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-left" data-toggle="offcanvas"
                data-target="#leftMenu" data-canvas="body">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">
                <img src="/assets/image/logo-black.png" alt="" class="img-responsive hidden-navbar-inverse">
                <img src="/assets/image/logo-white.png" alt="" class="img-responsive hidden-navbar-default">
            </a>
            @auth

            <a href="#" class="btn navbar-btn navbar-btn-mobile navbar-btn-user pull-right visible-xs"
                data-toggle="offcanvas" data-target="#rightMenu" data-canvas="body">
                <img src="https://storage.lapor.go.id/app/uploads/public/5dd/9a5/075/thumb_240041_60_60_0_0_crop.jpg"
                    class="user-avatar mg-0">
            </a>

            <a href="#" data-toggle="dropdown"
                class="btn navbar-btn navbar-btn-mobile navbar-btn-notification pull-right visible-xs">

                <i class="fa fa-bell"></i>
            </a>
            <div class="dropdown-menu dropdown-notification">
                <div class="notification-header">
                    Tidak ada pemberitahuan
                </div>
            </div>

            @else


            <a href="login" class="btn btn-outline-white btn-sm navbar-btn navbar-btn-mobile pull-right visible-xs"
                style="margin-right: 15px"><i class="fa fa-user"></i></a>

            @endauth

        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left navbar-primary">

                <li role="presentation" class="">
                    <a href="/pengaduan">
                        Pengaduan
                    </a>
                <li role="presentation" class="  ">
                    <a href="/tentang-kami">
                        Tentang Kami
                    </a>
                <li role="presentation" class="  ">
                    <a href="/contact">
                        Contact
                    </a>

                </li>

                </li>

                </li>

            </ul>
            @if (Route::has('login'))
            <div class="nav navbar-nav navbar-right mg-l-10  hidden-sm">
                @auth
                <ul class="nav navbar-nav navbar-right ">

                    <li class="dropdown nav-notification nav-bell">
                        <a href="#" data-toggle="dropdown" data-request="notifications::onReadAll"
                            data-request-update="'account/notifications-dropdown': '.dropdown-notification.bell'"
                            data-attach-loading data-request-flash
                            data-request-success="$(this).parent().addClass('open')">
                            <i class="fa fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-notification bell">
                        </div>
                    </li>
                    <li class="dropdown nav-login">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="https://www.lapor.go.id/../themes/lapor/assets/images/user-placeholder-u.png"
                                class="user-avatar">
                            <div class="user-name"> {{ Auth::user()->name }} </div>
                            <i class="caret hidden-sm"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user-loggin">
                            <li><a href="profile/{{ Auth::user()->id }}">Profil Saya</a></li>
                            <li role="separator" class="divider"></li>
                            <li role="presentation" class="  ">
                                <a href="#">
                                    Ubah Profil
                                </a>

                            </li>
                            <li role="presentation" class="  ">
                                <a href="#">
                                    Notifikasi
                                </a>

                            </li>
                            <li role="presentation" class="  ">
                                <a href="#">
                                    Ubah Password
                                </a>

                            </li>
                            <li role="presentation" class="  ">
                                <a href="#">
                                    Pengaturan
                                </a>

                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>

                        </ul>
                    </li>
                </ul>


                @else
                <a href="{{ route('register') }}" class="btn navbar-btn pull-right btn-outline-white">
                    Daftar
                </a>
            </div>
            @if (Route::has('register'))
            <ul class="nav navbar-nav navbar-right ">
                <li class="nav-login">
                    <a href="{{ route('login') }}">Masuk</a>
                </li>


            </ul>
            @endif
            @endauth
        </div>
        @endif
    </div>
</header>

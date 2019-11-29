<header class="navbar-fixed-top navbar-default headroom headroom--not-bottom headroom--pinned headroom--top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-left" data-toggle="offcanvas"
                data-target="#leftMenu" data-canvas="body">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand">
                <img src="/assets/image/logo-black.png" alt="" class="img-responsive hidden-navbar-inverse">
                <img src="/assets/image/logo-white.png" alt="" class="img-responsive hidden-navbar-default">
            </a>

            <a href="#" class="btn btn-outline-white btn-sm navbar-btn navbar-btn-mobile pull-right visible-xs"
                data-toggle="modal" data-target="#modalLogin" style="margin-right: 15px"><i class="fa fa-user"></i></a>
        </div>

        <div class="collapse navbar-collapse">

            <div class="nav navbar-nav navbar-right mg-l-10  hidden-sm">

                <ul class="nav navbar-nav navbar-right ">

                <li class="dropdown nav-notification nav-bell">
                        <a href="#" data-toggle="dropdown" data-request="notifications::onReadAll"
                            data-request-update="'account/notifications-dropdown': '.dropdown-notification.bell'"
                            data-attach-loading data-request-flash data-request-success="$(this).parent().addClass('open')">
                            <i class="fa fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-notification bell">
                        </div>
                    </li>
                    <li class="dropdown nav-login">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="https://www.lapor.go.id/../themes/lapor/assets/images/user-placeholder-u.png"
                                class="user-avatar">
                            <div class="user-name">  {{ Auth::user()->name }} </div>
                            <i class="caret hidden-sm"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user-loggin">
                            <li><a href="https://www.lapor.go.id/profil-saya">Profil Saya</a></li>
                            <li role="separator" class="divider"></li>
                            <li role="presentation" class="  ">
                                <a href="https://www.lapor.go.id/account/edit">
                                    Ubah Profil
                                </a>

                            </li>
                            <li role="presentation" class="  ">
                                <a href="https://www.lapor.go.id/account/notifications">
                                    Notifikasi
                                </a>

                            </li>
                            <li role="presentation" class="  ">
                                <a href="https://www.lapor.go.id/account/password">
                                    Ubah Password
                                </a>

                            </li>
                            <li role="presentation" class="  ">
                                <a href="https://www.lapor.go.id/account/settings">
                                    Pengaturan
                                </a>

                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>

                        </ul>
                    </li>
                </ul>



            </div>

        </div>

    </div>
</header>

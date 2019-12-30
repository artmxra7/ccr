
<header class="navbar-fixed-top navbar-inverse">
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

            @if ( Auth::user()->avatar == '')

            <a href="#" class="btn navbar-btn navbar-btn-mobile navbar-btn-user pull-right visible-xs"
            data-toggle="offcanvas" data-target="#rightMenu" data-canvas="body">
            <img src="{{ asset('assets/image/user-placeholder-u.png') }}"
                class="user-avatar mg-0">
        </a>

            @else

            <a href="#" class="btn navbar-btn navbar-btn-mobile navbar-btn-user pull-right visible-xs"
            data-toggle="offcanvas" data-target="#rightMenu" data-canvas="body">
            <img src="{{ asset('thumbnail_images/'.Auth::user()->avatar) }}"
                class="user-avatar mg-0">
        </a>

            @endif

        

            @else


            <a href="login" class="btn btn-outline-white btn-sm navbar-btn navbar-btn-mobile pull-right visible-xs"
                style="margin-right: 15px"><i class="fa fa-user"></i></a>

            @endauth

        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left navbar-primary">

                <li role="presentation" class="  ">
                    <a href="/semua-artikel">
                        Artikel
                    </a>
                </li>

                <li role="presentation" class="">
                    <a href="/semua-pengaduan">
                        Pengaduan
                    </a>
                <li role="presentation" class="  ">
                    <a href="/tentang-kami">
                        Tentang Kami
                    </a>
                <li role="presentation" class="  ">
                    <a href="/kontak-kami">
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
                       
                    </li>
                    <li class="dropdown nav-login">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            @if ( Auth::user()->avatar == '')
                            <img src="{{ asset('assets/image/user-placeholder-u.png') }}"
                            class="user-avatar">
                            @else
                            <img src="{{ asset('thumbnail_images/'.Auth::user()->avatar) }}"
                            class="user-avatar">
                            @endif
                         


                            <div class="user-name"> {{ Auth::user()->name }} </div>
                            <i class="caret hidden-sm"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user-loggin">
                            <li><a href="{{ route('profile.users') }}">Beranda</a></li>
                            <li role="separator" class="divider"></li>
                            <li role="presentation" class="  ">
                                <a href="{{ route('profile.edit', ['id' =>  'edit']) }}">
                                    Ubah Profil

                                </a>

                            </li>
                            <li role="presentation" class="  ">
                                <a href="{{ route('profile.password', ['id' =>  'password']) }}">
                                    Ubah Password
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

<nav id="rightMenu" class="navmenu navmenu-default navmenu-inverse navmenu-fixed-right offcanvas" role="navigation">
    <a class="navmenu-brand" href="/"> {{ Auth::user()->name }} </a>
    <ul class="nav navmenu-nav">
        <li role="presentation" class="  ">
            <a href="{{ route('profile.users') }}">
                Beranda
            </a>

        </li>
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
        <li><a href="{{ route('logout') }}" class="logout_user">Logout</a></li>
    </ul>
</nav>


<nav id="leftMenu" class="navmenu navmenu-default navmenu-inverse navmenu-fixed-left offcanvas" role="navigation">
    <ul class="nav navmenu-nav">
        <li role="presentation" class="  ">
            <a href="/semua-artikel">
                Artikel
            </a>
            <a href="/semua-pengaduan">
                Pengaduan
            </a>
            <a href="/tentang-kami">
                Tentang Kami
            </a>
            <a href="/kontak-kami">
                Contact
            </a>

        </li>

    </ul>
</nav>

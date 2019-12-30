



@if (Auth::guest())
@include('layouts.homepage.nav_guest')
@else

@include('layouts.homepage.nav')
@endif


@include('layouts.homepage.header')
@include('layouts.homepage.herotop')
@include('layouts.homepage.artikel')
@include('layouts.homepage.complaintbox')
@include('layouts.homepage.footer')

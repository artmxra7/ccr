



@if (Auth::guest())
@include('layouts.homepage.nav_guest')
@else

@include('layouts.homepage.nav')
@endif
  @include('layouts.homepage.header_user')

  <div class="jumbotron jumbotron-gradient"></div>
  @include('artikel.bumn.content_artikel')

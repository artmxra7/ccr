@extends('layouts.homepage.app')

@section('title', 'Contact')

@section('content')



@if (Auth::guest())
@include('layouts.homepage.nav_guest')
@else

@include('layouts.homepage.nav')
@endif


@include('layouts.homepage.header')
@include('layouts.homepage.herotopcontent')

@endsection

@extends('layouts.homepage.app_article')


@section('title', $artikel->artikels_title)
@section('content')
@include('sweet::alert')
@include('artikel.list_show')

@endsection

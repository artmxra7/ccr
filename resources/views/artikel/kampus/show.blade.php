@extends('layouts.homepage.app_article')


@section('title', $artikel->artikels_title)
@section('content')

<a href="https://api.whatsapp.com/send?phone=+6285352869997&text=Hallo%21%20Bisa Saya%20%20Meminta%20Informasi."
    class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
@include('sweet::alert')
@include('artikel.list_show')


@endsection

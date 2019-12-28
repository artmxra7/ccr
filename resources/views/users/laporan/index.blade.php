@extends('layouts.homepage.daftar')

@section('title', 'Daftar')

@section('style')
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
@endsection()


@section('content')
<div class="full-height block-confirmation">
    <a href="/">
        <img src="/assets/image/logo-white.png" alt="" class="img-responsive  confirmation-brand">
    </a>
    <div class="container">
        <div class="row">

            <div class="panel panel-confirmation">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="panel panel-default panel-complaint">
                        <div class="panel-body">
                            <h5>Laporan Anda:</h5>
                            <p style="white-space: pre-wrap;">  {{$products[0]['laporan']}}</p>

                        </div>

                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 mx-mobile">
                    <div class="panel panel-default panel-complaint">
                        <div class="panel-body body-form">
                            <h2 class="text-justify">Isi Data Anda</h2>

                            <form  method="POST" accept-charset="UTF-8" action="{{ route('guest-daftar.post')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="registerName">Nama Lengkap</label>
                                    {!! Form::text('name', null, array(
                                        'placeholder' => 'Nama',
                                        'class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    <label for="registerEmail">Email</label>
                                    {!! Form::email('email', null, array(
                                        'placeholder' => 'Email',
                                        'class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    <label for="registerUsername">Username</label>
                                    {!! Form::text('username', null, array(
                                        'placeholder' => 'Username',
                                        'class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    <label for="registerPhone">No. Telp</label>
                                    {!! Form::tel('phone', null, array(
                                        'placeholder' => 'Phone',
                                        'class' => 'form-control')) !!}
                                </div>

                                <div class="form-group form-password">
                                    <label for="registerPassword">Password</label>
                                    {!! Form::password('password', array(
                                        'placeholder' => 'Password',
                                        'class' => 'form-control')) !!}
                                    <i class="fa fa-eye"></i>
                                </div>

                                <div class="form-group form-password">
                                    <label for="password_confirmation">Password Confirmation</label>
                                    {!! Form::password('password_confirmation', array(
                                        'placeholder' => 'Password Confirmation',
                                        'class' => 'form-control',
                                        'id' => 'password_confirmation',
                                        )) !!}
                                    <i class="fa fa-eye"></i>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block mg-t-20" data-attach-loading="">Daftar</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection



{{--  @include('layouts.homepage.footer')  --}}

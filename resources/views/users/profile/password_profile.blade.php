@extends('layouts.homepage.appuser')

@section('title', Auth::user()->name )

@section('nav')
@include('layouts.homepage.nav')
@endsection


@section('header')
@include('layouts.homepage.header_user')
@endsection


@section('content')

<a href="https://api.whatsapp.com/send?phone=+6285352869997&text=Hallo%21%20Bisa Saya%20%20Meminta%20Informasi."
    class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<div class="card card-user is-single is-user">
    <div class="user-body">
        <div class="container">
            <a href="#" class="change-cover" data-control="modal" data-handler="laporUserProfile::onLoadUpdateCover"
                data-partial="user/modal-update-cover">
                <i class="fa fa-image"></i> Ubah Foto Sampul
            </a>

            <div class="user-general-information">
                <div class="user-avatar">
                    @if ( Auth::user()->avatar == '')

                    <img src="{{ asset('assets/image/user-placeholder-u.png') }}" class="img-responsive img-circle">
                    </a>

                    @else

                    <img src="{{ asset('thumbnail_images/'.Auth::user()->avatar) }} " class="img-responsive img-circle">



                    @endif
                </div>
                <h1 class="user-name"> {{ $result->name }} </h1>



                <p class="mg-b-20">&nbsp;</p>
            </div>


        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-9">
            <div class="page-header mg-0 mg-b-20">
                <div class="h1 mg-0">Ubah Password</div>
            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            {!! Form::model($result, ['method' => 'PATCH',
            'files' => true,
            'route' => ['profile.password.update', $result->id]]) !!}
            <form accept-charset="UTF-8">
                {{--  <div class="row">
                    <div class="col-md-6">

                    <div class="form-group is-required">
                        <label class="control-label col-sm-4">Password Baru</label>
                        <div class="col-sm-8">
                            {!! Form::password('password', null, array('placeholder' => $result->name,'class' => 'form-control m-input')) !!}
                        </div>
                    </div>

                    <div class="form-group is-required">
                        <label class="control-label col-sm-4">Password Confirm</label>
                        <div class="col-sm-8">

                        </div>
                    </div>



                </div>  --}}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Password Baru</label>
                            {!! Form::password('password', array('placeholder' => 'Password Baru','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group is-required">
                            <label>Konfirmasi Password</label>
                            {!! Form::password('confirm-password', array('placeholder' => 'Konfirmasi Password','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>


                <div class="form-group">

                        <button class="btn btn-primary" type="submit" >Simpan</button>

                </div>

                </div>


            </form>
            {!! Form::close() !!}

        </div>

        <div class="col-md-4">









        </div>
    </div>
</div>

@endsection


@section('script')

<script>
    $(document).ready(function() {

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".change-cover").on('change', function(){
        readURL(this);
    });

    $(".upload-button").on('click', function() {
       $(".change-cover").click();
    });
});
</script>
@endsection


{{--  @include('layouts.homepage.footer')  --}}

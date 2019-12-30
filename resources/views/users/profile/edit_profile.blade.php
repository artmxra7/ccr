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
        <div class="col-md-8">
            <div class="page-header mg-0 mg-b-20">
                <div class="h1 mg-0">Ubah Profil</div>
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

            {!! Form::model($result,


                ['method' => 'PATCH',
                'class' => 'form-horizontal',
            'files' => true,
            'route' => ['profile.update', $result->id]]) !!}
            <form accept-charset="UTF-8" class="form-horizontal">

                    <div class="form-group is-required">
                        <label class="control-label col-sm-4">Nama Lengkap</label>
                        <div class="col-sm-8">
                            {!! Form::text('name', null, array('placeholder' => $result->name,'class' => 'form-control m-input')) !!}
                        </div>
                    </div>

                    <div class="form-group is-required">
                        <label class="control-label col-sm-4">Email</label>
                        <div class="col-sm-8">
                                {!! Form::email('email', null, array('placeholder' => $result->email,'class' => 'form-control m-input')) !!}

                        </div>
                    </div>

                    <div class="form-group is-required">
                        <label class="control-label col-sm-4">No Handphone</label>
                        <div class="col-sm-8">
                            {!! Form::text('phone', null, array('placeholder' => $result->phone,'class' => 'form-control')) !!}
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-sm-4">Jenis Kelamin</label>
                        <div class="col-sm-8">


                            <div class="radio radio-primary radio-inline">
                                {{ Form::radio('gender', 'male', true, ['id' => 'genderMaleRadio']) }}
                                <label for="genderMaleRadio">
                                    Laki - Laki
                                </label>

                            </div>

                            <div class="radio radio-primary radio-inline">
                                {{ Form::radio('gender', 'female', true, ['id' => 'genderFemaleRadio']) }}
                                <label for="genderFemaleRadio">
                                    Perempuan
                                </label>
                            </div>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-4">Foto Profil</label>
                        <div class="col-sm-8">

                            {!! Form::file('avatar', null, array('placeholder' => $result->avatar,'class' => 'form-control m-input')) !!}

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8 col-sm-push-4">
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

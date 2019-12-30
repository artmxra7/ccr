@extends('layouts.homepage.appuser')

@section('content')
@include('layouts.homepage.nav')
@include('layouts.homepage.header_user')

    

<a href="https://api.whatsapp.com/send?phone=085352869997&text=Hallo%21%20Bisa Saya%20%20Meminta%20Informasi."
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
                <h1 class="user-name"> {{ Auth::user()->name }} </h1>



                <p class="mg-b-20">&nbsp;</p>
            </div>


        </div>
    </div>
</div>
<div class="container" id="app">
    <div class="row">
        <div class="col-md-8 ">
           

          
            <form id="laporan" method="POST" accept-charset="UTF-8" action="{{ route('laporan')}}"
                class="complaint-form">
                {{ csrf_field() }}
                <div class="complaint-form-body">
                    {!! Form::textarea('laporan', null, array(
                    'placeholder' => 'Buat Laporan Baru ...',
                    'class' => 'form-control textarea-flex autosize',
                    'rows' => '3')) !!}

                </div>

                <fieldset>

                    <p>Pilih Kategori Anda</p>
                    <label class="control" for="universitas">
                        <input type="checkbox" name="laporan_sub_id[]" id="universitas" value="universitas">
                        <span class="control__content">
                            <svg aria-hidden="true" focusable="false" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <circle cx="15" cy="15" r="15" fill="#1E1B1D"></circle>
                                <path
                                    d="M10.78 21h1.73l.73-3.2h2.24l-.74 3.2h1.76l.72-3.2h3.3v-1.6H17.6l.54-2.4H21v-1.6h-2.5l.72-3.2h-1.73l-.73 3.2h-2.24l.74-3.2H13.5l-.73 3.2H9.5v1.6h2.93l-.56 2.4H9v1.6h2.52l-.74 3.2zm2.83-4.8l.54-2.4h2.24l-.54 2.4H13.6z"
                                    fill="#fff"></path>
                            </svg>
                            KAMPUS
                        </span>
                    </label>
                    <label class="control" for="bumn">
                        <input type="checkbox" name="topics[]" id="bumn" value="bumn">
                        <span class="control__content">
                            <svg aria-hidden="true" focusable="false" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <circle cx="15" cy="15" r="15" fill="#1E1B1D"></circle>
                                <path
                                    d="M10.78 21h1.73l.73-3.2h2.24l-.74 3.2h1.76l.72-3.2h3.3v-1.6H17.6l.54-2.4H21v-1.6h-2.5l.72-3.2h-1.73l-.73 3.2h-2.24l.74-3.2H13.5l-.73 3.2H9.5v1.6h2.93l-.56 2.4H9v1.6h2.52l-.74 3.2zm2.83-4.8l.54-2.4h2.24l-.54 2.4H13.6z"
                                    fill="#fff"></path>
                            </svg>
                            BUMN
                        </span>
                    </label>
                </fieldset>



                <div class="complaint-form-footer">
                    <div class="row-flex flex-align-between">

                        <div class="footer-right">

                            <button class="btn btn-primary" type="submit" data-attach-loading="">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>




            <ul class="nav nav-tabs nav-tabs-secondary contraflow" role="tablist">
                <li class="active">
                    <a href="#">Semua</a>
                </li>
                <li class="">
                    <a href="{{ route('laporan.belum') }}">Belum</a>
                </li>
                <li class="">
                    <a href="{{ route('laporan.selesai') }}">Selesai</a>
                </li>
            </ul>
            
            <div class="complaint-list">
                <div class="infinite-container">
                    @include('users.profile.lapor_list')

                </div>
            </div>
            <div class="text-center infinite-pagination" style="display: none;">
                <a href="">Load More</a>
            </div>
        </div>

        <div class="col-md-4">

            <div class="panel panel-secondary panel-recomended">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h1>Artikel Rekomendasi</h1>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled list-instansi">
                        <li>
                            <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/government-office-13-1101740.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a href="{{ route('artikel.bumn') }}">BUMN</a>

                            </div>
                        </li>
                        <li>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Education%2C_Studying%2C_University%2C_Alumni_-_icon.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a href="{{ route('artikel.kampus') }}">Kampus</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>




        </div>
    </div>
</div>



@endsection
@section('script')
   
@endsection


{{--  @include('layouts.homepage.footer')  --}}
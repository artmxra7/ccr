@extends('../layouts.admin.app')

@section('title', 'Create Artikel')

@section('style')

@endsection()


@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">


    <div class="m-content">
        <div class="row">




            <div class="col-xl-12">

                <div class="m-portlet m-portlet--tab">
                    <div class="row">
                        <div class="col-xl-12 margin-tb">
                            <div class="pull-left">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <span class="m-portlet__head-icon m--hide">
                                                <i class="la la-gear"></i>
                                            </span>
                                            <h3 class="m-portlet__head-text">
                                                Laporan Users
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m--pull-right-mod">
                                <a class="btn btn-primary" href="{{ route('admin.laporan.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height pt-lg-5">





                    <div class="m-form m-form--fit m-form--label-align-right editor-form">
                        <div class="col-6 col-md-6 ">
                            <div class="form-group m-form__group">
                                <h2 class="m-section__heading">Laporan</h2>
                            </div>
                        </div>
                        <div class="container row pt-md-5">
                            <div class="col-6 col-md-6">
                                <div class="form-group m-form__group">
                                    <h5 class="m-section__heading">Nama</h5>
                                    <p> {{ $laporan->pelapor}}</p>
                                </div>
                                <div class="form-group m-form__group">
                                    <h5 class="m-section__heading">Sub Laporan</h5>
                                    <p>{{ $laporan->name}}</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group m-form__group">
                                    <h5 class="m-section__heading">Tanggal Laporan</h5>
                                    <p>  {{ \Carbon\Carbon::parse($laporan->created_at)->diffForHumans() }}</p>
                                </div>
                                <div class="form-group m-form__group">
                                    <h5 class="m-section__heading">Status Laporan</h5>
                                    @if ( $laporan->laporan_status == 0)
                                    <span class="m-badge m-badge--brand m-badge--wide m-badge--rounded">Open</span>

                                    @else
                                    <span class="m-badge m-badge--danger m-badge--wide m-badge--rounded">Closed</span>

                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 pt-md-5">
                            <div class="form-group m-form__group">
                                <h3 class="m-section__heading">Isi Laporan</h3>

                                    <p class="lead">
                                      {{ $laporan->laporan}}
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-12">

                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">





                    <form class="m-form m-form--fit m-form--label-align-right editor-form" enctype="multipart/form-data" >

                        <input type="hidden" value="{{ $laporan->laporan_code }}" name="laporan_code">

                        <div class="m-portlet__body">



                            <div class="row">
                                <div class="col-sm-12 m--padding-top-30">
                                    <div class="form-group m-form__group">
                                        {!! Form::label('content', 'Tanggapan Anda:') !!}
                                        <textarea class="form-control
                                        m-input" cols="30" rows="10" readonly disabled="disabled">{{$laporan->tanggapan}}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection

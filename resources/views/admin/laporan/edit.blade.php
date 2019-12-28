@extends('../layouts.admin.app')

@section('title', 'Create Artikel')

@section('style')

@endsection()


@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">


    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">
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
                                    <p>{{ $laporan->nama}}</p>
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





                    <form class="m-form m-form--fit m-form--label-align-right editor-form" enctype="multipart/form-data"
                        method="POST" action="{{ route('admin.tanggapi.laporan')}}" >

                        <input type="hidden" value="{{ $laporan->laporan_code }}" name="laporan_code">

                        {{ csrf_field() }}
                        <div class="m-portlet__body">



                            <div class="row">
                                <div class="col-sm-12 m--padding-top-30">
                                    <div class="form-group m-form__group">
                                        {!! Form::label('content', 'Tanggapan Anda:') !!}
                                        {{-- <textarea id="froala-editor"></textarea> --}}

                                        {!! Form::textarea('tanggapan', null, array('class' => 'form-control
                                        m-input', 'placeholder' => 'Diisi dengan Tanggapan Terbaik Anda')) !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="row">
                                <div class="col-12">
                                    <div class="m-form__actions text-right">

                                        <a href="{{ url('admin/laporan') }}"
                                            class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder m-btn--icon"><i
                                                class="la la-ban"></i> Batal</a>
                                        <button type="button" onClick="confirmSubmitProcess(this)"
                                            class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"><i
                                                class="la la-plus-circle"></i> Buat</button>
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


<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script src="https://rawgit.com/michelson/Dante/master/dist/js/dante-editor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
<script src="https://rawgit.com/gbirke/Sanitize.js/master/lib/sanitize.js"></script>

<script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
</script>

<script>
    CKEDITOR.replace('editor1', options);
</script>

@endsection

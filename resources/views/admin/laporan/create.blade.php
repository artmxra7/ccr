@extends('../layouts.admin.app')

@section('title', 'Create Artikel')

@section('style')

@endsection()


@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">


    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">

                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">

                        </div>
                    </div>

                    <form class="m-form m-form--fit m-form--label-align-right editor-form" enctype="multipart/form-data"
                        method="POST" action="{{ route('admin.laporan.store')}}">

                        {{ csrf_field() }}
                        <div class="m-portlet__body">

                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="form-group m-form__group">
                                        {!! Form::label('content', 'Sub Laporan:') !!}
                                        {!! Form::select('laporan_sub_id', $artikel_categories, null, ['class' =>
                                        'form-control', 'required' => true, 'placeholder' => '-- Pilih Sub Laporan
                                        --']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 m--padding-top-30">
                                    <div class="form-group m-form__group">
                                        {!! Form::label('content', 'Isi Laporan:') !!}
                                        {{-- <textarea id="froala-editor"></textarea> --}}

                                        {!! Form::textarea('laporan', null, array('class' => 'form-control m-input')) !!}
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

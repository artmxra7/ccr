@extends('../layouts.admin.app')

@section('title', 'Create News')

@section('style')

@endsection()


@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">


    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">

                <div class="pull-left">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">

                        </div>
                    </div>
                    </div>
                <div class="m--pull-right-mod">
                    <a class="btn btn-primary" href="{{ route('admin.buat-artikel.index') }}"> Back</a>
                </div>

                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                        </div>
                    </div>

                    {!! Form::model($artikel, ['method' => 'PATCH',
                    'files' => true,'route' => ['admin.buat-artikel.update', $artikel->id]]) !!}

                    <form class="m-form m-form--fit m-form--label-align-right editor-form" enctype="multipart/form-data">

                        <div class="m-portlet__body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group m-form__group">
                                        <label class="col-6 col-form-label">Judul Artikel:</label>

                                        {!! Form::text('artikels_title', null, array('placeholder' => $artikel->artikels_title,'class' =>
                                        'form-control','required' => true)) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="form-group m-form__group">
                                        <label class="col-6 col-form-label">Kata Kunci Pencarian:</label>
                                        {!! Form::text('artikels_seo', null, array('placeholder' => $artikel->artikels_seo,'class' =>
                                        'form-control','required' => true)) !!}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="form-group m-form__group">
                                        <label class="col-6 col-form-label">Kategori Berita:</label>
                                        {!! Form::select('artikels_category_id', $artikel_categories, null, ['class' =>
                                        'form-control', 'required' => true, 'placeholder' => $artikel->artikels_category_id]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 m--padding-top-30">
                                    <div class="form-group m-form__group">
                                        {!! Form::label('content', 'Content:') !!}
                                        {{-- <textarea id="froala-editor"></textarea> --}}

                                        {!! Form::textarea('artikels_content', null, array('placeholder' => $artikel->artikels_content, 'id' => 'editor1','required' => true)) !!}


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 m--padding-top-30">
                                    <div class="form-group m-form__group">
                                        {!! Form::label('content', 'Cover:') !!}
                                        {{-- <textarea id="froala-editor"></textarea> --}}

                                        <div class="custom-file">
                                            {!! Form::file('artikels_images', null, array('placeholder' => 'Masukan Cover Berita', 'id' => 'customFile', 'class' => 'custom-file-input', 'required' => true)) !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="row">
                                <div class="col-12">
                                    <div class="m-form__actions text-right">

                                        <a href="{{ url('admin/buat-artikel') }}"
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
                    {!! Form::close() !!}
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
    var config = {};
    config.placeholder = 'some value';
    CKEDITOR.replace('editor1', options, config);
</script>

@endsection

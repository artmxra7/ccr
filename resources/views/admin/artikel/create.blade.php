@extends('../layouts.admin.app')

@section('title', 'Create News')

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
                        method="POST" action="{{ route('admin.buat-artikel.store')}}">

                        {{ csrf_field() }}
                        <div class="m-portlet__body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group m-form__group">

                                        {!! Form::text('title', null, array('placeholder' => 'Judul Artikel','class' =>
                                        'editor-title')) !!}
                                        {!! Form::text('seo', null, array('placeholder' => 'Masukan Kata Kunci
                                        Pencarian','class' => 'editor-seo')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="form-group m-form__group">
                                        {!! Form::select('artikels_category_id', $artikel_categories, null, ['class' =>
                                        'form-control', 'required' => true, 'placeholder' => '-- Pilih Kategori Artikel
                                        --']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 m--padding-top-30">
                                    <div class="form-group m-form__group">
                                        {!! Form::label('content', 'Content:') !!}
                                        {{-- <textarea id="froala-editor"></textarea> --}}

                                        {!! Form::textarea('content', null, array('placeholder' => 'Masukan Kata Kunci
                                        Pencarian', 'id' => 'editor1')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 m--padding-top-30">
                                    <div class="form-group m-form__group">
                                        <label for="name">Image News <sup class="text-danger">*</sup></label>
                                        {!! Form::label('photo', 'Photo:') !!}
                                        <div id="image-cropper">
                                            <!-- This is where the preview image is displayed -->
                                            <div class="cropit-preview"></div>

                                            <!-- This range input controls zoom -->
                                            <!-- You can add additional elements here, e.g. the image icons -->
                                            <br>
                                            <input type="range" class="cropit-image-zoom-input" />
                                            <br>
                                            <!-- This is where user selects new image -->
                                            <input type="file" class="cropit-image-input" name="photo" />

                                            @if (isset($news))
                                            <input class="cropit-target hidden" name="photo"
                                                value="{{ asset('storage/news/' . $news->photo) }}" />
                                            @else
                                            <input class="cropit-target hidden" name="photo" />
                                            @endif
                                            <!-- The cropit- classes above are needed
                                                    so cropit can identify these elements -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="row">
                                <div class="col-12">
                                    <div class="m-form__actions text-right">

                                        <a href="{{ url('news') }}"
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js">
</script>

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

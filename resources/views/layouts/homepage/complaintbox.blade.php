<section id="hero">
        <div class="container">
            <div class="block block-aspiration">
                <div class="h2">Mari Berpartisipasi Aktif untuk STOP RADIKALISME!</div>
                <div class="h2">
                    <h2 class="typewrite" data-period="2000"
                        data-type='[ "Stop Radikalisme dari Sekarang.", "Adukan segera jika Anda Terpapar Radikalisme", "#stopradikalisme" ]'>
                        <span class="wrap"></span>
                    </h2>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <section id="complaint-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 mg-b-40">
                    <form method="POST" accept-charset="UTF-8" action="{{ route('buatlaporan')}}"
                        class="complaint-form">
                        {{ csrf_field() }}

                        <div class="complaint-form-body">
                            {!! Form::textarea('laporan', null, array(
                                'placeholder' => 'Anda Terkena Dampak Radikalisme, Isi disini...',
                                'class' => 'form-control textarea-flex autosize',
                                'rows' => '6')) !!}

                        </div>


                        <fieldset>

                            <p>Pilih Kategori Anda</p>
                            <label class="control" for="universitas">
                                <input type="checkbox" name="topics[]" id="universitas" value="universitas">
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
                        <div class="complaint-form-attachments">

                            <div class="responsiv-uploader-fileupload style-file-multi is-multi "
                                data-control="fileupload" data-template="#uploaderTemplatefileUploader"
                                data-unique-id="fileUploader"
                                data-file-types=".jpg,.jpeg,.bmp,.png,.webp,.gif,.svg,.js,.map,.ico,.css,.less,.scss,.ics,.odt,.doc,.docx,.ppt,.pptx,.pdf,.swf,.txt,.xml,.ods,.xls,.xlsx,.eot,.woff,.woff2,.ttf,.flv,.wmv,.mp3,.ogg,.wav,.avi,.mov,.mp4,.mpeg,.webm,.mkv,.rar,.xml,.zip">

                                <!-- Field placeholder -->
                                <input type="hidden" name="_uploader[attachments]" value="" />

                                <!-- Upload Button -->
                                <button type="button" class="ui button btn btn-default oc-icon-upload upload-button">
                                    Upload Lampiran (max 2MB)
                                </button>

                                <!-- Existing files -->
                                <div class="upload-files-container">
                                </div>
                            </div>

                            <!-- Template for new files -->

                            <script type="text/template" id="uploaderTemplatefileUploader">
                                <div class="upload-object dz-preview dz-file-preview">
                                <div class="icon-container">
                                    <img data-dz-thumbnail src="https://#/plugins/responsiv/uploader/assets/images/upload.png" />
                                </div>
                                <div class="info">
                                    <h4 class="filename">
                                        <span data-dz-name></span>
                                    </h4>
                                    <p class="size" data-dz-size></p>
                                    <p class="error"><span data-dz-errormessage></span></p>
                                </div>
                                <div class="meta">
                                    <a
                                        href="javascript:;"
                                        class="upload-remove-button"
                                        data-request="fileUploader::onRemoveAttachment"
                                        data-request-confirm="Are you sure?"
                                        >&times;</a>
                                    <div class="progress-bar"><span class="upload-progress" data-dz-uploadprogress></span></div>
                                </div>
                            </div>
                        </script>

                        </div>

                        <div class="complaint-form-footer">
                            <div class="row-flex flex-align-between">
                                <div class="footer-left">

                                    <!-- <a href="javascript:void(0);" data-toggle="modal" data-target="#modalMap" data-name="location">
                                            <i class="fa fa-fw fa-map-marker"></i> <span data-toggle="tooltip" data-placement="top"><span data-toggle="locationName">Lokasi</span></span>
                                        </a> -->
                                </div>

                                <div class="footer-right">


                                    <button class="btn btn-primary" type="submit" onClick="confirmSubmitProcess(this)">KIRIM</button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </section>

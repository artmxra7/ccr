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


                        <div class="complaint-form-footer">
                            <div class="row-flex flex-align-between">
                                <div class="footer-left">


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

@extends('layouts.homepage.appuser')

@include('layouts.homepage.nav')
@include('layouts.homepage.header_user')

<div class="card card-user is-single is-user">
    <div class="user-body">
        <div class="container">
            <a href="#" class="change-cover" data-control="modal" data-handler="laporUserProfile::onLoadUpdateCover"
                data-partial="user/modal-update-cover">
                <i class="fa fa-image"></i> Ubah Foto Sampul
            </a>

            <div class="user-general-information">
                <div class="user-avatar">
                    <img src="https://www.lapor.go.id/../themes/lapor/assets/images/user-placeholder-u.png"
                        class="img-responsive img-circle">

                    <a href="#" class="change" data-control="modal" data-handler="laporUserProfile::onLoadUpdateAvatar"
                        data-partial="user/modal-update-avatar">
                        <i class="fa fa-camera"></i> Ubah
                    </a>
                </div>
                <h1 class="user-name"> {{ Auth::user()->name }} </h1>



                <p class="mg-b-20">&nbsp;</p>
            </div>


        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <ul class="nav nav-tabs nav-tabs-secondary contraflow" role="tablist">
                <li class="active">
                    <a href="https://www.lapor.go.id/profil/1966294">Semua</a>
                </li>
                <li class="">
                    <a href="https://www.lapor.go.id/profil/1966294/waiting">Belum</a>
                </li>
                <li class="">
                    <a href="https://www.lapor.go.id/profil/1966294/process">Proses</a>
                </li>
                <li class="">
                    <a href="https://www.lapor.go.id/profil/1966294/done">Selesai</a>
                </li>
            </ul>
            <div class="complaint-list">
                <div class="infinite-container">


                    @include('users.profile.lapor_list')
                    @include('users.profile.lapor_list')
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
                        <h1>Instansi Terhangat</h1>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled list-instansi">
                        <li>
                            <img src="https://www.lapor.go.id/themes/lapor/assets/images/institution-placeholder.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a href="https://www.lapor.go.id/instansi/tim-sosialisasi-kks">Tim Sosialisasi KKS</a>
                                <div class="info-rate">
                                    <div data-toggle="tooltip" title="Jumlah Laporan">
                                        <i class="fa fa-file-text fa-fill"></i> <span class="strong"> 50.2k</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="https://www.lapor.go.id/themes/lapor/assets/images/institution-placeholder.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a href="https://www.lapor.go.id/instansi/pemerintah-provinsi-dki-jakarta">Pemerintah
                                    Provinsi DKI Jakarta</a>
                                <div class="info-rate">
                                    <div data-toggle="tooltip" title="Jumlah Laporan">
                                        <i class="fa fa-file-text fa-fill"></i> <span class="strong"> 43.5k</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="https://www.lapor.go.id/themes/lapor/assets/images/institution-placeholder.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a
                                    href="https://www.lapor.go.id/instansi/tim-sosialisasi-kebijakan-penyesuaian-subsidi-bbm">Tim
                                    Sosialisasi Kebijakan Penyesuaian Subsidi BBM</a>
                                <div class="info-rate">
                                    <div data-toggle="tooltip" title="Jumlah Laporan">
                                        <i class="fa fa-file-text fa-fill"></i> <span class="strong"> 40.4k</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="https://www.lapor.go.id/themes/lapor/assets/images/institution-placeholder.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a href="https://www.lapor.go.id/instansi/bpjs-kesehatan-divisi-regional-i">BPJS
                                    Kesehatan Divisi Regional I </a>
                                <div class="info-rate">
                                    <div data-toggle="tooltip" title="Jumlah Laporan">
                                        <i class="fa fa-file-text fa-fill"></i> <span class="strong"> 25.8k</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-secondary panel-report">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h1>Artikel Terbaik </h1>
                        <h1>
                        </h1>
                    </div>
                </div>
                <div class="panel-body pd-t-10">
                    <div class="report-recommendation">
                        <div class="recommendation-heading">
                            <div class="media">


                                <div class="media-body recommendation-title">
                                    <a href="https://www.lapor.go.id/laporan/detil/dugaan-oknum-kementerian-atrbpn">Dugaan
                                        Oknum Kementerian ATR/BPN</a>
                                </div>
                            </div>
                        </div>
                        <div class="recommendation-body">
                            <a href="https://www.lapor.go.id/laporan/detil/dugaan-oknum-kementerian-atrbpn"> Putusan
                                Mahkamah Agung Bersifat Final Dan Mengikat, Tidak Tersedia Dalam Hukum Positif Kita
                                Untuk Tidak Melaksanakan Keputusan Hukum Yang Berkekuatan Hukum Tetap

                                Sebenarnya setelah Putusan Mahkamah Agung Nomor: 214/ PK/ 2017, perdebatan-perdebatan...
                                <br>
                            </a><a href="https://www.lapor.go.id/laporan/detil/dugaan-oknum-kementerian-atrbpn"
                                style="color: blue">Baca Lebih Lanjut</a>
                        </div>
                        <div class="recommendation-gov">
                            <i class="fa fa-arrow-right"></i> <a href=""> Direktorat Jenderal Penanganan Masalah
                                Agraria, Pemanfaatan Ruang dan Tanah </a>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>


{{--  @include('layouts.homepage.footer')  --}}

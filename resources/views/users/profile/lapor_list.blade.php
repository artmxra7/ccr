@foreach ($laporan as $initLaporan)
<div class="post post-complaint panel panel-default panel-complaint" data-complaint-id="5182064"
    data-request-data="complaint_id : 5182064">
    <div class="row-flex">


        <div class="container">
            <div class="complaint-body">
                <div class="complaint-user">
                    <div class="user-information">
                        <div class="meta-date"
                            title="Last Updated {{ \Carbon\Carbon::parse($initLaporan->created_at)->diffForHumans() }}"
                            data-toggle="tooltip">
                            {{ \Carbon\Carbon::parse($initLaporan->created_at)->diffForHumans() }}
                        </div>

                        <span class="text-user">
                            <a href="#">{{ Auth::user()->name }}</a>
                        </span>

                        <span class="text-warning text-secret"><i class="fa fa-fw fa-lock"></i>
                            Rahasia</span>

                        <br class="visiible-xs">

                        <span class="text-muted text-channel">
                            <i class="fa fa-fw fa-globe"></i> Website
                        </span>

                        @if ($initLaporan->laporan_status == 0)

                        <span class="text-status" data-toggle="tooltip" title="" style="color: #607D8B">
                            <i class="fa fa-info-circle fa-fw"></i>

                            Menunggu Jawaban

                        </span>


                        <span class="text-tracking">
                            Menunggu Jawaban Admin
                        </span>

                        @else

                        <span class="text-status" data-toggle="tooltip" title="" style="color: #607D8B">
                            <i class="fa fa-info-circle fa-fw"></i>

                            Telah Selesai

                        </span>


                        <span class="text-tracking">
                            Sudah Ditanggapi Admin
                        </span>

                        @endif


                    </div>
                </div>

                <div class="complaint-track-body mg-t-10 mg-b-10 hidden-xs">
                </div>



                <div class="complaint-excerpt">
                    <p class="readmore" style="max-height: none;">
                        {{$initLaporan->laporan}}
                    </p>
                </div>

                <div class="complaint-info">
                    <p>
                        @if ($initLaporan->laporan_sub_id == 1)
                        <p class="text-muted">Kampus</p>
                        @else
                        <p class="text-muted">BUMN</p>
                        @endif

                    </p>
                </div>


                <div class="complaint-meta margin-out-sm">

                    {{$initLaporan->laporan_code}}

                    @if ($initLaporan->laporan_status == 0)
                    <div></div>
                    @else
                    <div>
                        <a href="javascript:void(0);" class="meta-info is-active">
                       Tanggapan Admin </a>

                    </div>

                    <div class="loadedcontent margin-out-sm">
                        <div class="followup-item-1760082 post post-complaint is-disposition-gov">
                            <div class="row-flex flex-xs">
                                <div class="complaint-head">

                                </div>


                                <div class="complaint-body">
                                    <small class="meta-date pull-right text-muted"
                                    title="Last Updated {{ \Carbon\Carbon::parse($initLaporan->created_at)->diffForHumans() }}" data-toggle="tooltip">
                                    {{ \Carbon\Carbon::parse($initLaporan->created_at)->diffForHumans() }}</small>
                                    <h5 class="complaint-title mg-0">
                                        {{$initLaporan->penanggap_laporan}}

                                    </h5>
                                    <div class="complaint-excerpt followup-excerpt-1760082">
                                        {{$initLaporan->tanggapan}}
                                    </div>


                                </div>
                            </div>
                        </div>






                    </div>

                    @endif



                </div>


            </div>
        </div>
    </div>
</div>

@endforeach

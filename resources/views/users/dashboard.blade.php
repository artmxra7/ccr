@extends('layouts.homepage.app')

@include('layouts.homepage.nav')
@include('layouts.homepage.header')

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

            <div class="user-site-information">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-xs-4 user-stat">
                            <span>0</span><br>
                            laporan
                        </div>

                        <div class="col-xs-4 user-stat">
                            <a href="#" data-control="modal" data-handler="laporUserProfile::onShowFollowings"
                                data-partial="user/modal-user-follow">
                                <span>0</span><br>
                                mengikuti
                            </a>
                        </div>

                        <div class="col-xs-4 user-stat">
                            <a href="#" data-control="modal" data-handler="laporUserProfile::onShowFollowers"
                                data-partial="user/modal-user-follow">
                                <span>0</span><br>
                                pengikut
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">

                    <a href="https://www.lapor.go.id/account/edit"
                        class="btn btn-outline-white btn-follow btn-block">Ubah</a>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.homepage.isiartikel')

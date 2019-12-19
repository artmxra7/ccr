@extends('../layouts/admin.app')

@section('title', 'Dashboard')

@section('style')

@endsection()

@section('sidebar')
    @parent

    @include('../layouts/admin.sidebar')
@endsection

@section('content')
<div class="m-grid__item light m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <!--end:: Widgets/Stats-->

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title "><i class="fas fa-chart-bar fa-sm"></i>&nbsp;Dashboard</h3>
            </div>
        </div>
    </div>
    <div class="m-content">
        <!--begin:: Widgets/Stats-->
        <div class="m-portlet">
            <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                    <div class="col-lg-4">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Laporan
                                </span>
                                <span class="m-widget24__stats m--font-brand">
                                    12.345
                                </span>
                                <div class="m--space-10"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total
                                </h4><br>
                                <span class="m-widget24__desc">
                                    User
                                </span>
                                <span class="m-widget24__stats m--font-info">
                                    12.345
                                </span>
                                <div class="m--space-10"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">
                                    Total
                                </h4><br>
                                <span class="m-widget24__desc">
                                    Pengunjung
                                </span>
                                <span class="m-widget24__stats m--font-danger">
                                    12.345
                                </span>
                                <div class="m--space-10"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">

            </div>

            <div class="col-xl-6">
                <div class="m-portlet m-portlet--full-height ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Pelaporan CCR
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <a href="">Lihat Semua Laporan</a>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-widget3">
                                <div class="m-widget3__item">
                                    <div class="m-widget3__header">
                                        <div class="m-widget3__user-img">
                                            <img class="m-widget3__img" src="assets/app/media/img/users/user1.jpg" alt="">
                                        </div>
                                        <div class="m-widget3__info">
                                            <span class="m-widget3__username">
                                                Melania Trump
                                            </span><br>
                                            <span class="m-widget3__time">
                                                2 day ago
                                            </span>
                                        </div>
                                        <span class="m-widget3__status m--font-info">
                                            Pending
                                        </span>
                                    </div>
                                    <div class="m-widget3__body">
                                        <p class="m-widget3__text">
                                            Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </div>
                                <div class="m-widget3__item">
                                    <div class="m-widget3__header">
                                        <div class="m-widget3__user-img">
                                            <img class="m-widget3__img" src="assets/app/media/img/users/user4.jpg" alt="">
                                        </div>
                                        <div class="m-widget3__info">
                                            <span class="m-widget3__username">
                                                Lebron King James
                                            </span><br>
                                            <span class="m-widget3__time">
                                                1 day ago
                                            </span>
                                        </div>
                                        <span class="m-widget3__status m--font-brand">
                                            Open
                                        </span>
                                    </div>
                                    <div class="m-widget3__body">
                                        <p class="m-widget3__text">
                                            Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
                                        </p>
                                    </div>
                                </div>
                                <div class="m-widget3__item">
                                    <div class="m-widget3__header">
                                        <div class="m-widget3__user-img">
                                            <img class="m-widget3__img" src="assets/app/media/img/users/user5.jpg" alt="">
                                        </div>
                                        <div class="m-widget3__info">
                                            <span class="m-widget3__username">
                                                Deb Gibson
                                            </span><br>
                                            <span class="m-widget3__time">
                                                3 weeks ago
                                            </span>
                                        </div>
                                        <span class="m-widget3__status m--font-success">
                                            Closed
                                        </span>
                                    </div>
                                    <div class="m-widget3__body">
                                        <p class="m-widget3__text">
                                            Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('metronic/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/default/custom/components/charts/morris-charts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/app/js/dashboard.js') }}" type="text/javascript"></script>

@endsection

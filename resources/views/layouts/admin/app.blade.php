<!DOCTYPE html>
<html lang="en">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Stopradikalisme | @yield('title')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
            window.App = {
                siteUrl: "{{ Request::url() }}",
                uriSegment: "",
                qs: "",
            }
        </script>

		<!--end::Web font -->
        <link href="{{ asset('metronic/vendors/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />

		<!--begin::Global Theme Styles -->
		<link href="{{ asset('metronic/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/my-asset/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css" rel="stylesheet" type="text/css" />

        <link href="https://editor-latest.s3.amazonaws.com/v3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://editor-latest.s3.amazonaws.com/v3/css/froala_style.min.css" rel="stylesheet" type="text/css" />

		@yield('style')

		<!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="{{ asset('metronic/assets/default/media/img/logo/favicon.ico') }}" />

	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-content--skin-light2 m-header--fixed m-header--skin-light m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">

            <!-- BEGIN: Header -->
            <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">

                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-stack__item--skin-light m-brand  m-brand--skin-light ">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="" class="m-brand__logo-wrapper">
                                        <img alt="" src="/assets/image/logo-black.png" style="width:167px;height:55px;margin-left: -10px">
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--skin-light m-stack__item--middle m-brand__tools">

                                    <!-- BEGIN: Left Aside Minimize Toggle -->
                                    <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                        <span></span>
                                    </a>

                                    <!-- END -->

                                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>

                                    <!-- END -->

                                    <!-- BEGIN: Responsive Header Menu Toggler -->

                                    <!-- END -->

                                    <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>

                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>

                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--skin-light m-stack__item--fluid m-header-head" id="m_header_nav">

                            <!-- BEGIN: Horizontal Menu -->
                            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

                            <!-- END: Horizontal Menu -->

                            <!-- BEGIN: Topbar -->
                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item  m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                            <li class="m-nav__item m-nav__item--accent m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1" aria-expanded="true">
                                                    <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                                        <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-alarm"></i></span></span>
                                                    </a>
                                                    <div class="m-dropdown__wrapper" style="z-index: 101;">
                                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                        <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__header m--align-center">
                                                                <span class="m-dropdown__header-title">9 New</span>
                                                                <span class="m-dropdown__header-subtitle">User Notifications</span>
                                                            </div>
                                                            <div class="m-dropdown__body">
                                                                <div class="m-dropdown__content">
                                                                    <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                                        <li class="nav-item m-tabs__item">
                                                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                                                                Alerts
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item m-tabs__item">
                                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
                                                                        </li>
                                                                        <li class="nav-item m-tabs__item">
                                                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                                            <div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" data-height="250" data-mobile-height="200" style="height: 250px; overflow: hidden;">
                                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                                    <div class="m-list-timeline__items">
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                                            <span class="m-list-timeline__text">12 new users registered</span>
                                                                                            <span class="m-list-timeline__time">Just now</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge"></span>
                                                                                            <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                                                            <span class="m-list-timeline__time">14 mins</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge"></span>
                                                                                            <span class="m-list-timeline__text">New invoice received</span>
                                                                                            <span class="m-list-timeline__time">20 mins</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge"></span>
                                                                                            <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                                                            <span class="m-list-timeline__time">1 hr</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge"></span>
                                                                                            <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                                                                            <span class="m-list-timeline__time">2 hrs</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                            <span class="m-list-timeline__badge"></span>
                                                                                            <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                                                                            <span class="m-list-timeline__time">7 hrs</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                                            <span class="m-list-timeline__badge"></span>
                                                                                            <span class="m-list-timeline__text">Production server down</span>
                                                                                            <span class="m-list-timeline__time">3 hrs</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge"></span>
                                                                                            <span class="m-list-timeline__text">Production server up</span>
                                                                                            <span class="m-list-timeline__time">5 hrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 4px; height: 250px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 223px;"></div></div></div>
                                                                        </div>
                                                                        <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                                            <div class="m-scrollable m-scroller ps" data-scrollable="true" data-height="250" data-mobile-height="200" style="height: 250px; overflow: hidden;">
                                                                                <div class="m-list-timeline m-list-timeline--skin-light">
                                                                                    <div class="m-list-timeline__items">
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                            <a href="" class="m-list-timeline__text">New order received</a>
                                                                                            <span class="m-list-timeline__time">Just now</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                                            <a href="" class="m-list-timeline__text">New invoice received</a>
                                                                                            <span class="m-list-timeline__time">20 mins</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                                            <a href="" class="m-list-timeline__text">Production server up</a>
                                                                                            <span class="m-list-timeline__time">5 hrs</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                            <a href="" class="m-list-timeline__text">New order received</a>
                                                                                            <span class="m-list-timeline__time">7 hrs</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                            <a href="" class="m-list-timeline__text">System shutdown</a>
                                                                                            <span class="m-list-timeline__time">11 mins</span>
                                                                                        </div>
                                                                                        <div class="m-list-timeline__item">
                                                                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                                            <a href="" class="m-list-timeline__text">Production server down</a>
                                                                                            <span class="m-list-timeline__time">3 hrs</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                                                        </div>
                                                                        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                                            <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                                                <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                                    <span class="">All caught up!<br>No new logs.</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                        <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-topbar__userpic">
                                                    <img src="{{ asset('assets/image/logotujf.png') }}" class="m--img-rounded m--marginless m--img-centered" alt="" style="background-color:#fff" />
                                                </span>
                                                <span class="m-nav__link-icon m-topbar__usericon  m--hide">
                                                    <span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
                                                </span>
                                                <span class="m-topbar__username m--hide">Nick</span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center">
                                                        <div class="m-card-user m-card-user--skin-light">
                                                            <div class="m-card-user__pic">
                                                                <img src="{{ asset('assets/image/logotujf.png') }}" class="m--img-rounded m--marginless" alt="" />
                                                            </div>
                                                            <div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	@if(Auth::user())
																		{{ Auth::user()->name }}
																	@endif
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	@if(Auth::user())
																		{{ Auth::user()->email }}
																	@endif
																</a>
															</div>
                                                        </div>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav m-nav--skin-light">
                                                                <li class="m-nav__section m--hide">
                                                                    <span class="m-nav__section-text">Section</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                        <span class="m-nav__link-title">
                                                                            <span class="m-nav__link-wrap">
                                                                                <span class="m-nav__link-text">Profil</span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit">
                                                                </li>
                                                                <li class="m-nav__item">
																		<a href="{{ route('admin.logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder m-btn--icon">
																			<i class="la la-sign-in"></i>

																			Logout
																		</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- END: Topbar -->
                        </div>
                    </div>
                </div>
            </header>

            <!-- END: Header -->

            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

                @section('sidebar')

                @show

                @yield('content')
            </div>

            <!-- end:: Body -->

            <!-- begin::Footer -->
            <footer class="m-grid__item		m-footer ">
                <div class="m-container m-container--fluid m-container--full-height m-page__container">
                    <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                            <span class="m-footer__copyright">
                                2019 &copy; Crisis Center Radikalisme <a href="#" class="m-link">TUJ Foundation</a>
                            </span>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- end::Footer -->
        </div>

        <!-- end:: Page -->

        <!-- end::Quick Sidebar -->

        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-aside-menu  m-aside-menu--skin-light m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>

        <!-- end::Scroll Top -->


        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


        <script src="{{ asset('metronic/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('metronic/assets/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
	    <script src="{{ asset('metronic/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('metronic/assets/my-asset/script.js') }}" type="text/javascript"></script>
		<script>
			var toastForm = '';
			@foreach($errors->all() as $error)
			var toastForm = '{{ $error }}';
			@endforeach

			var toastInfo = `{{ Session::get('info') }}`;
			var toastError = `{{ Session::get('error') }}`;
			var toastSuccess = `{{ Session::get('success') }}`;

			toastr.options.progressBar = true;
            toastr.options.timeOut = 15000;

			if (toastForm) toastr.error(toastForm);
			if (toastInfo) toastr.info(toastInfo, 'Info');
			if (toastError) toastr.error(toastError, 'Gagal');
			if (toastSuccess) toastr.success(toastSuccess, 'Berhasil');
		</script>
        @yield('script')
	</body>

	<!-- end::Body -->
</html>

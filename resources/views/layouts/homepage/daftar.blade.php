<!DOCTYPE html>
<html lang="en">
	<!-- begin::Head -->
	<head>
        <meta charset="utf-8" />
		<title>STOP Radikalisme | @yield('title')</title>
        <meta name="description" content="Latest updates and statistic charts">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Stop Radikalisme - Stop Radikalisme Laporkan">
        <meta itemprop="description" content="Layanan Pelaporan Radikalisme">
        <meta itemprop="image" content="">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <!-- Styles -->
        {{--  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">  --}}
        <link href="{{ asset('assets/css/users_style.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>



		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		@yield('style')


	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="pd-t-0">

        @yield('content')

        @yield('script')

        <script src="{{ asset('assets/js/config.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/settings_web.js') }}"></script>

        <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>

        <script>

        </script>

        <script>
        </script>
	</body>

	<!-- end::Body -->
</html>

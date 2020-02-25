<!DOCTYPE html>
<html lang="en">
	<!-- begin::Head -->
	<head>
        <meta charset="utf-8" />
		<title>STOP Radikalisme | @yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">

        <meta property="og:description" content="@yield('description')" />
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:image:url" content="@yield('images')" />
        <meta property="og:image:size" content="300" />


        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Stop Radikalisme - Stop Radikalisme Laporkan">
        <meta itemprop="description" content="Layanan Pelaporan Radikalisme">
        <meta itemprop="image" content="">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Styles -->



        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet">

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
	<body class="page-home pd-t-0">

        @yield('content')

        @yield('script')


<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="{{ asset('assets/js/particle.js') }}"></script>

        <script src="{{ asset('assets/js/config.js') }}"></script>

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

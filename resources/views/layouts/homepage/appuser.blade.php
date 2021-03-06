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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
	<body class="page-home pd-t-0">

        <!-- THIS CONTENT -->
        @yield('nav')
        @yield('header')
        @yield('content')

        <!-- THIS script -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ asset('assets/js/config.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


    <script src="{{ asset('metronic/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('metronic/assets/default/base/scripts.bundle.js') }}" type="text/javascript"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('assets/js/settings_web.js') }}"></script>
       

        <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
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

        <script>

        </script>

        <script>
        </script>
	</body>

	<!-- end::Body -->
</html>

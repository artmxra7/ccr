@extends('../layouts/admin.auth')

@section('title', 'Login')

@section('content')
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{ asset('bg-4.jpg') }});">
			<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__logo">
						<a href="#">
							<img src="{{ asset('assets/image/logotujf.png') }}" style="width:100px;">
						</a>
					</div>
					<div class="m-login__signin">
						<div class="m-login__head">
							<h3 class="m-login__title">Sign In To Admin</h3>
						</div>
						<form class="m-login__form m-form" method="post" action="{{ route('admin.login') }}">
							{{ csrf_field() }}
							<div class="form-group m-form__group">
								<input class="form-control m-input" type="text" placeholder="Email" name="email" {{ old('email') }}>
							</div>
							<div class="form-group m-form__group">
								<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" {{ old('password') }}>
							</div>
							<div class="row m-login__form-sub">
								<div class="col m--align-left m-login__form-left">
									<label class="m-checkbox  m-checkbox--focus">
										<input type="checkbox" name="remember"> Remember me
										<span></span>
									</label>
								</div>
								<div class="col m--align-right m-login__form-right">
									<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
								</div>
							</div>
							<div class="m-login__form-action">
								<button id="m_login_signin_submit" type="submit" class="btn m-btn--pill    btn-warning btn-lg m-btn m-btn--custom">Sign In</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')

@endsection

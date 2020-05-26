<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Khôi phục mật khẩu - {{ config('app.name', 'LPortal') }}</title>
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/admin/apple-touch-icon.png') }}" />
	<link rel="shortcut icon" href="{{ asset('public/admin/favicon.ico') }}" />
	<meta name="theme-color" content="#3063A0" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" />
	<link rel="stylesheet" href="{{ asset('public/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/admin/stylesheets/theme.min.css') }}" data-skin="default" />
	<link rel="stylesheet" href="{{ asset('public/admin/stylesheets/theme-dark.min.css') }}" data-skin="dark" />
	<link rel="stylesheet" href="{{ asset('public/admin/stylesheets/custom.css') }}" />
	<script>
		var skin = localStorage.getItem('skin') || 'default';
		var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
		var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
		disabledSkinStylesheet.setAttribute('rel', '');
		disabledSkinStylesheet.setAttribute('disabled', true);
		if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
	</script>
</head>
<body>
	<main class="auth">
		<form action="{{ route('password.update') }}" method="post" class="auth-form auth-form-reflow">
			@csrf
			<div class="text-center mb-4">
				<div class="mb-4">
					<img class="rounded" src="{{ asset('public/admin/apple-touch-icon.png') }}" alt="" height="72" />
				</div>
				<h1 class="h3">KHÔI PHỤC MẬT KHẨU</h1>
			</div>
			<div class="form-group mb-4">
				<label class="d-block text-left" for="email">Địa chỉ email đã đăng ký <span class="text-danger font-weight-bold">*</span></label>
				<input type="email" id="email" name="email" value="{{ $email ?? old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror" required autofocus />
				@error('email')
					<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
				@enderror
			</div>
			<div class="form-group mb-4">
				<label class="d-block text-left" for="password">Mật khẩu mới <span class="text-danger font-weight-bold">*</span></label>
				<input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required />
				@error('password')
					<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
				@enderror
			</div>
			<div class="form-group mb-4">
				<label class="d-block text-left" for="password_confirmation">Xác nhận mật khẩu mới <span class="text-danger font-weight-bold">*</span></label>
				<input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" required />
				@error('password_confirmation')
					<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
				@enderror
			</div>
			<div class="d-block d-md-inline-block mb-2">
				<button class="btn btn-lg btn-block btn-primary" type="submit">Khôi phục mật khẩu</button>
			</div>
		</form>
		<footer class="auth-footer mt-5">
			Bản quyền &copy; {{ date('Y') }} bởi {{ config('app.name', 'LPortal') }}.
		</footer>
	</main>
	<script src="{{ asset('public/admin/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('public/admin/vendor/popper.js/umd/popper.min.js') }}"></script>
	<script src="{{ asset('public/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/admin/javascript/theme.min.js') }}"></script>
</body>
</html>
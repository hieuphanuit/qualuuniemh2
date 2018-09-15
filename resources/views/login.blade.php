<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Hàng lưu niệm H2</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		
		<!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom_js.js') }}"></script>
		
    </head>
    <body id="login">
			<img class="background" src="/upload/travel-souvenirs-4418221737.jpg"/>
			<a href="{{ url('/') }}"><img class="logo" src="upload/logo.png" width="50" height="50"/></a>
			<div class="login-contain">
				<h1>ĐĂNG NHẬP</h1>
				<form action="" id="login-form">
						<h4>Tên tài khoản:</h4>
						<input type= "text" id="iduser" placeholder="Tên đăng nhập"/></br>
						<h4>Mật khẩu:</h4>
						<input type= "password" id="password" /></br>
						<div class="button-holder">
							<button class="btn btn-info" type="button" id="loginbutton">Đăng nhập</button>
						</div>
						<a href="{{url('register')}}">Bạn chưa có tài khoản? </a></br>
						<a href="{{url('forget_password')}}">Quên mật khẩu? </a>
						<input type="hidden" name="action" value="login"/>
				</form>
			</div>

@include('footer')

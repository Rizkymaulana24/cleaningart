<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login CLEANING ART</title>
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('icon.png')}}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('awal/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('awal/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	@if(session('sukses'))
<!-- Modal -->
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
  @if(session('success'))
<!-- Modal -->
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
  @if(session('error'))
<!-- Modal -->
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endif
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" action="/postlogin" >
					{{csrf_field()}}
					<span class="login100-form-title p-b-55">
						Login
					</span>
						
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div class="contact100-form-checkbox m-l-4 m-b-13 p-r-90">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" onclick="pass()">
						<label class="label-checkbox100" for="ckb1">
							Tampilkan Password
						</label>
					</div>
					<div class="txt1 m-l-12 p-r-90">
						<label class="text">
							<a style="color: " href="{{url('/forgot_password')}}"> Lupa kata sandi? </a>
						</label>
					</div>
					<div class="container-login100-form-btn p-t-5">
						<button class="login100-form-btn" >
							Login
						</button>
					</div>
					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Belum punya akun?
						</span>

						<a class="txt1 bo1 hov1" href="/register">
							Regitrasi dulu						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('awal/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('awal/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('awal/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('awal/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('awal/js/main.js')}}"></script>
	<script type="text/javascript">
		function pass(){
 var pass = document.getElementById('password');
 var show = document.getElementById('show');
 if(pass.type == 'password'){
  pass.type = 'text';
 }else{
  pass.type = 'password';
 }
}
	</script>

</body>
</html>
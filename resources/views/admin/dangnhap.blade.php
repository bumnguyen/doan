<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<base href="{{asset('')}}">
	<script type="text/javascript">
		function checkForm(){
			if(document.form.username.value=="")
			{
				alert("vui long nhap username !");
				document.form.username.focus();
				return false;
			}
			if(document.form.password.value=="")
			{
				alert("vui long nhap password !");
				document.form.password.focus();
				return false;
			}
		}
	</script>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #001a33;
		}
		.box{
			width: 400px;
			padding: 40px;
			position: absolute;
			top: 50%;
			left:50%;
			transform: translate(-50%,-50%);
			background: #C1F8FF;
			text-align: center;
			
		}
		.box input[type="text"], .box input[type="password"]{
			border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #3333ff;
			padding: 14px 10px;
			width: 200px;
			outline: none;
			color: black;
			border-radius:30px; 
			transition: 0.25s;
		}
		.box h1{
			text-transform: uppercase;
			color: #16C9FF;
		}
		img {
			width: 100%;
			height: 100%;
		}	
		.box input[type="submit"]{
			border: 0;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #3333ff;
			padding: 14px 10px;
			width: 100px;
			outline: none;
			color: white;
			border-radius:30px; 
			transition: 0.25s;
			color: #000000;
		}
		.box input[type="text"]:focus, .box input[type="password"]:focus{
			width: 200px;
			border-color: #00ff00;
		}
		.box input[type="submit"]:hover{
			background: #00ff00;
		}
	</style>
</head>
<body>
	<img src="upload/tintuc/hoian.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
	<form class="box" name="form" action="admin/dangnhap" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<h1>Login</h1>
		<input type="text" name="email" placeholder="Username" />
		<input type="password" name="password" placeholder="Password"/>
		<input type="submit"  value="Login" />
	</form>
</body>
</html>
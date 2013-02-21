<html>
<head>
	<title>:: Administrator ::</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<script type="text/javascript">
		function validasi(form){
			if (form.username.value == "") {
				alert("Anda Belum mengisikan Username !!");
				form.username.focus();
				return (false);
			};
			if (form.password.value == "") {
				alert("Anda Belum mengisikan Password !!");
				form.password.focus();
				return (false);
			};
			return(true);
		}
	</script>
</head>
<body Onload="document.login.username.focus();">
	<!-- Navbar -->
<!-- 	<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Project Name</span></a>
        </div>
    </div> -->
	<!-- End Navbar -->

	<!-- Container -->	
	<div class="container">
		<form action="cek_login.php" class="login-form" name="login" method="POST" onSubmit="return validasi(this)">
			<div class="header">
				<h1>Login Form</h1>
				<span>Untuk Masuk kedalam Halaman Admin, Masukan Username and Password Anda !</span>
			</div>
			<div class="content">
				<input name="username" type="text" class="input username" placeholder="Username">
				<div class="user-icon"></div>
				<input name="password" type="password" class="input password" placeholder="Password">
				<div class="pass-icon"></div>
			</div>
			<div class="footer">
				<a href="reset-password.html" name="submit" class="register">Forgot your password?</a><input type="submit" name="submit" value="Submit" class="button" />							
			</div>
		</form>			
	</div>
	<!-- End Container -->
</body>
</html>
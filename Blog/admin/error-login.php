<?php
	$error = "Maaf Username dan Password Salah ! atau ID sudah di Blokir oleh Admin";
?>
<html>
<head>
	<title>Login Administrator</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
	<form action="" class="error-login-form">
		<div class="footer">
			<?php echo "<h3><img src=\"img/imglogin/img_login_lock.png \">&nbsp;&nbsp;$error</h3><br>
			<center><a href=\"index.php\" class=\"register\"><b>Ulangi Lagi</b></a></center>"; ?>
		</div>
	</form>
</body>
</html>
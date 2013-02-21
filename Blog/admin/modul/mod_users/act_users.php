<?php
session_start();
$login = "Untuk Mengakses Halaman Ini Harap Login";
if (empty($_SESSION['username'])AND empty($_SESSION['password'])) {
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
<?php
}else{
	include "../../../config/config.php";
	$module = $_GET[module];
	$act = $_GET[act];


	if($module=='users' AND $act=='input') {
		if (isset($_POST['submit'])) {
		$username = strtolower($_POST['username']);
		$password = $_POST['password'];
		$nama = $_POST['namalengkap'];
		$email = strtolower($_POST['email']);
		$telp = $_POST['telp'];
		mysql_query("INSERT INTO users(username,password,namalengkap,email,telp)VALUES('$username','$password','$nama','$email','$telp')");
		header("location:../../media.php?module=".$module);
		}		
	}elseif ($module=='users' AND $act='edit') {
		if (isset($_POST['submit'])) {
			if (empty($_POST['password'])) {		
			$nama = $_POST['namalengkap'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$level = $_POST['level'];
			mysql_query("UPDATE users SET namalengkap='$nama', email='$email', telp='$telp', blokir='$blokir' where username='$_POST[username]' ")or die(mysql_error());
		}else{
			$password = $_POST['password'];
			$nama = $_POST['namalengkap'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$blokir = $_POST['blokir'];
			$level = $_POST['level'];
			mysql_query("UPDATE users SET password='$password', namalengkap='$nama', email='$email', telp='$telp', blokir='$blokir',level='$level' where username='$_POST[username]' ")or die(mysql_error());
		}
		header("location:../../media.php?module=".$module);
	}
		
	} 

}



?>
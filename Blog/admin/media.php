<?php
session_start();
error_reporting(0);
include "timeout.php";
	
	if ($_SESSION[login]==1) {
		if (!cek_login()) {
			$_SESSION[login] == 0;
		}
	}

	if ($_SESSION[login] == 0) {
		header('location:logout.php');
	}else{
		if (empty($_SESSION['username']) and empty($_SESSION['password']) and $_SESSION['login'] == 0) {
			echo "<link href='style.css' rel='stylesheet' type='text/css'>
 					<center>Untuk mengakses modul, Anda harus login <br>";
  			echo "<a href=index.php><b>LOGIN</b></a></center>";
		}else{
?>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="style/default.css">

	<script type="text/javascript" src="style/bootstrap/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="style/bootstrap/js/jquery.validate.js"></script>
	<script type="text/javascript" src="style/bootstrap/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="style/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="style/bootstrap/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<!-- Navbar -->
	<div class="navbar">
		    <div class="navbar-inner">
		    	<div class="nav-collapse collapse">
		    		<a class="brand" href="media.php?module=home"><span class="first">Your</span> <span class="second">Project Name</span></a>		    		
		    			<?php session_start(); include "menu.php"; ?>
		    	</div>
		    	<div class="nav pull-right">		        		        		
		        		<li class="dropdown">
			         		<a href="###" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-fire icon-white"></i> MyAccount <strong class="caret"></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					  		<ul class="dropdown-menu">				           										    	
						    	<li><a href="resume.php">Portofolio</a></li>
						    	<li><a href="logout.php">Logout</a></li>
				    		</ul>
					    </li>	         	 		        		            
		        </div>		        	       
		    </div>	    
		</div>
		<!-- <ul class="breadcrumb">
		  <li><a href="#">Home</a> <span class="divider">/</span></li>
		  <li><a href="#">Library</a> <span class="divider">/</span></li>
		  <li class="active">Data</li>
		</ul> -->
	<!-- End Navbar -->

	<!-- Container -->
		<div class="container-fluid">
			<?php include "content.php"; ?>
		</div>		
	</div>
	<!-- End Container -->
	
	<!-- Footer -->
	<footer class="footer">
		<div class="container-fluid">
			<p>Designed and built with all the love in the world by <a href="">@bayu_nugro</a></p>
			<p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0"> Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a></p>
		</div>
	</footer>
	<!-- End Footer -->
</body>
</html>
<?php
	}
}
?>
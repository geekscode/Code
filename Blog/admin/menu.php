<?php
include "../config/config.php";
if ($_SESSION[level]== "Admin") {
	echo "<ul class=\"nav\">
	<li class=\"\"><a href=\"media.php?module=home\"><i class=\"icon-home icon-white\"></i> Home</a></li>";

	$sql = mysql_query("SELECT * FROM menuutama where aktif='N' and adminmenu = 'Y' ORDER BY idutama ");
	while ($r = mysql_fetch_array($sql)) {
		echo "<li class=\"dropdown\">";
		if (empty($r[link])) {
			echo "<a class=\"dropdown-toggle\" href=\"###\"><strong class=\"caret\"></strong>&nbsp;&nbsp;".$r[namamenu]."</a>";
		}else{
			echo '<a href="'.$r[link].'">'.$r[namamenu].'</a></strong>';
		}
	$sub = mysql_query("SELECT * from submenu, menuutama WHERE submenu.idutama = menuutama.idutama AND submenu.idutama = $r[idutama] AND submenu.aktif='N' ORDER BY idsub ASC");
	$jml = mysql_num_rows($sub);

	// Apabila Sub Menu DItemukan
	if ($jml > 0) {
		echo "<ul class=\"dropdown-menu\">";
		while ($w = mysql_fetch_array($sub)) {
			echo "<li>";
			echo '<a href="'.$w[linksub].'">'.$w[namasub].'</a>';
			echo "</li>";
		}
		echo "</ul>";
		// echo "</li>";
	}else{
		echo "</li>";
	}

	}
	echo "</ul>";
}elseif ($_SESSION[level] == "User") {
	echo "<ul class=\"nav\">
	<li class=\"\"><a href=\"media.php?module=home\"><i class=\"icon-home icon-white\"></i> Home</a></li>";

	$sql = mysql_query("SELECT * from modul where status='User' and aktif= 'Y' order by urutan");
	while ($data = mysql_fetch_array($sql)) {
		echo "<li><a href='$data[link]'>$data[namamodul]</a></li>";
	}
}	echo "</ul>";
?>
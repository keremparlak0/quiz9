<?php
	session_start();
	include("mysqlbaglan.php");

	$sql = "SELECT * FROM konu";

	$cevap = mysqli_query($baglanti,$sql);

	if(!$cevap ){
	echo '<br>Hata:' . mysqli_error($baglanti);
	}

	echo "<html>";

	echo "<meta http-equiv='Content-Type' ";
	echo "content='text/html; charset=UTF-8' />";
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Ba&#351;l&#305;k</th>";
	echo "<th>Aç&#305;klma</th>";
	echo "</tr>";

	while($gelen=mysqli_fetch_array($cevap))
	{

	echo "<tr><td>".$gelen['konu_id']."</td>";
	echo "<td>".$gelen['konu_baslik']."</td>";
	echo "<td>".$gelen['konu_aciklama']."</td>";


	echo "<td><a href=kayitsil.php?id=";
	echo $gelen['konu_id'];
	echo ">Sil</a></td></tr>";
	}

	echo "</table>";
	echo "<br/><a href='uyesayfasi.php'> Geri DÃ¶n</a>";
	echo "</html>";

	mysqli_close($baglanti);
?>
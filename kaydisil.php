<?php
	include("mysqlbaglan.php");
	$sql = "DELETE FROM konu WHERE konu_id=".$_GET['id'];
	$cevap = mysqli_query($baglanti,$sql);
	echo "<html>";


	echo "<meta http-equiv='Content-Type' ";
	echo "content='text/html; charset=UTF-8' />";
	if(!$cevap ){
	echo '<br>Hata:' . mysqli_error($baglanti);
	}
	else
	{
	echo "Kayıt Silindi!</br>";
	echo " <a href='listele.php'> Listele</a>\n";
	}
	echo "</html>";

	mysqli_close($baglanti);
?>

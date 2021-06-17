<?php
	$server = 'localhost';
	$user = '284925';
	$password = '190305kp';
	$database = '284925';
	$baglanti = mysqli_connect($server,$user,$password,$database);
	if (!$baglanti) {
		echo "MySQL sunucu ile baglanti kurulamadi! </br>";
		echo "HATA: " . mysqli_connect_error();
		exit;
	}
	
	
?>
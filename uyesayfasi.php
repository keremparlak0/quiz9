<?php
	session_start();
	
	if (isset($_POST['baslik']) && isset($_POST['aciklama'])){
		extract($_POST);
		header("Location: index.php");
		require ('mysqlbaglan.php');
		$sql="INSERT INTO `konu`(`konu_baslik`, `konu_aciklama`)";
		$sql = $sql . "VALUES ('$baslik', '$aciklama')";
		$cevap = mysqli_query($baglanti, $sql);
		exit();
	}
?>
<html>
	<head>
	<style>
	body {
			  font-family: Arial, Helvetica, sans-serif;
			  background-image: url("pexels-pixabay-267569.jpg");
			background-size: 100%
			  }
	input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  resize: vertical;
	}
	input[type=submit] {
	 background-color: #375259;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
	}

	input[type=submit]:hover {
	background-color: #45a049;
	}
	.main_div {
			margin-left: 30%;
			margin-right: 30%;
			border-radius: 5px;
			padding: 20px;
	}
	.text_{
			background-color: white;
			}
	</style>
	</head>
	<body>
		<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8" />
		
		<div class="main_div" align="center">
		
			<form action="<?php $_PHP_SELF ?>" method="POST">
				<input type="text" name="baslik" placeholder="Konu Başlığı"><br />
				<textarea id="subject" name="aciklama" placeholder="Açıklama.." style="height:200px"></textarea><br />
				<input type="submit" value="Kaydet"><br /><br />
			</form>
			
			<div class="text_">
			<a href="listele.php">Yazdıklarım</a><br />
			</div>
			<br />
			
			<div class="text_">
				<a href='logout.php'>Hesaptan Çıkış</a>
			</div>
		</div>	
	</body>
</html>
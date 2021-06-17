<?php
	//Login dosyasıdır...
	session_start();
	require('mysqlbaglan.php');
	if (isset($_POST['username']) and isset($_POST['password'])){
	extract($_POST);
	

	$password = hash('sha256', $password);
	$sql = "SELECT * FROM `kullanicilar` WHERE ";
	$sql= $sql . "kullaniciadi='$username' and
	sifre='$password'";
	$cevap = mysqli_query($baglanti, $sql);
	

	if(!$cevap ){
		echo '<br>Hata:' . mysqli_error($baglanti);
	}
	

	$say = mysqli_num_rows($cevap);
	if ($say == 1){
	$_SESSION['username'] = $username;
	}else{
	$mesaj = "Hatalı Kullanıcı adı veya Şifre!";
	echo "<script type='text/javascript'>alert('$mesaj');</script>";
	}
	}
	if (isset($_SESSION['username'])){
	header("Location:uyesayfasi.php");
	}else{

?>
<html>
	<meta http-equiv="Content-Type" content="text/html; 
	charset=UTF-8" />
	<head>
	<style>
		body {font-family: Arial, Helvetica, sans-serif;
		background-image: url("pexels-pixabay-261662.jpg");
		background-size: 100%;
		}
		

		input[type=text], input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}

		button {
		  background-color: #375259;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		}

		button:hover {
		  opacity: 0.8;
		}


		.imgcontainer {
		  text-align: center;
		  margin: 24px 0 12px 0;
		}

		img.avatar {
		  width: 40%;
		  border-radius: 50%;
		}

		
		.main_div{
			
			margin-left: 30%;
			margin-right: 30%;
			
		}
		.text_{
			background-color: white;
		}
		
		
	</style>
</head>
	<body>
		<div class="main_div" align="center">
			<form action="<?php $_PHP_SELF ?>" method="POST">
				<?php if(isset($mesaj)){ echo $mesaj;} ?>
				<div class="imgcontainer">
					<img src="user-2160923_1280.png" alt="Avatar" class="avatar">
				</div>
				<input type="text" name="username" placeholder="Kullanıcı Adı"><br />
				<input type="password" name="password" placeholder="Şifre"><br /><br />
				<button type="sumbit">Giriş Yap</button><br /><br />
				<div class="text_">
				<span class="psw">Üye değil misin? <a href="register.php">Üye ol.</a></span>
				</div>
			</form>
		</div>
	</body>
</html>
<?php } ?>

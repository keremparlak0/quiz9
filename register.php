<?php
	require ('mysqlbaglan.php');
	if (isset($_POST['username']) && isset($_POST['password'])){
		extract($_POST);
	
		$password = hash('sha256', $password);
		$sql="INSERT INTO `kullanicilar` (kullaniciadi, sifre, 
		eposta)";
		$sql = $sql . "VALUES ('$username', '$password', 
		'$email')";
		$cevap = mysqli_query($baglanti, $sql);
		if ($cevap){
			$mesaj = "<h1>Kullanıcı oluşturuldu.</h1>";
		}else{
			$mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>";
	}
	}
?>

<html>
	<!-- türkçe karakter desteği ayarı -->
	<meta http-equiv="Content-Type" content="text/html; 
	charset=UTF-8" />
	<head>

		<style>
			body {
			  font-family: Arial, Helvetica, sans-serif;
			  background-image: url("pexels-pixabay-267569.jpg");
			background-size: 100%
			  }

			* {
			  box-sizing: border-box;
			}


			.container {
			  padding: 16px;
			  background-color: white;
			}


			input[type=text], input[type=password], input[type=email] {
			  width: 100%;
			  padding: 15px;
			  margin: 5px 0 22px 0;
			  display: inline-block;
			  border: none;
			  background: #f1f1f1;
			}

			input[type=text]:focus, input[type=password]:focus {
			  background-color: #ddd;
			  outline: none;
			}

			hr {
			  border: 1px solid #f1f1f1;
			  margin-bottom: 25px;
			}
			.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			}

			img.avatar {
				width: 40%;
				border-radius: 50%;
			}
			

			.text_{
			background-color: white;
			}
			.main_div{
			
			margin-left: 30%;
			margin-right: 30%;
			
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
		</style>
	</head>
	<body>
		<?php if (isset($mesaj)) echo $mesaj; ?>
		<div class="main_div" align="center">
			<form action="<?php $_PHP_SELF ?>" method="POST">
				<div class="imgcontainer">
					<img src="user-2160923_1280.png" alt="Avatar" class="avatar">
				</div>
				<input type="text" name="username" placeholder="Kullanıcı Adı"><br />
				
				<input type="email" name="email" placeholder="E-posta"><br />
				
				<input type="password" name="password" placeholder="Şifre"><br />
				<button type="sumbit">Kaydol</button><br /><br />
				
				<div class="text_">
				<span class="psw">Üye misin? <a href="index.php">Giriş Yap.</a></span>
				</div>
			</form>
		</div>
	</body>
</html>
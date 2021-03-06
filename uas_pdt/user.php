<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Perpanjang Anggota
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="proses2.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Nama">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Alamat">
						<input class="input100" type="text" name="alamat" placeholder="Alamat">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Kelamin">
					<select class="form-control" name="Kelamin" id="Kelamin" placeholder="Jenis Kelamin">
						<option value="Laki Laki">Laki Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
						

					</div>

          <div class="wrap-input100 validate-input" data-validate = "Pekerjaan">
						<input class="input100" type="text" name="pekerjaan" placeholder="Pekerjaan">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Jenis">
		  <select class="form-control" name="jenis" id="jenis" placeholder="Jenis Anggota">
						<option value="Bronze">Bronze</option>
						<option value="Silver">Silver</option>
						<option value="Gold">Gold</option>
					</select>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Perpanjang">
						<input class="input100" type="text" name="perpanjang" placeholder="Perpanjang Berapa Lama">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Ibu">
						<input class="input100" type="text" name="ibu" placeholder="Nama Ibu Kandung">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Ajukan
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
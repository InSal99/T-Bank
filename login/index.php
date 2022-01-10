<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>T-Bank-Signin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<a class="main-logo" href="index.php"><img src = "../img/Negative-Logo.png"alt/></a>
								<h2>Masuk dan mulai menabung</h2>
								<p>Belum memiliki akun?</p>
								<a href="sign-up.php" class="btn btn-white btn-outline-white">Sign Up</a>
							</div>
			      		</div>
						<div class="login-wrap p-4 p-lg-5">
			      			<div class="d-flex">
			      				<div class="w-100">
			      					<h3 class="mb-4">Sign In</h3>
			      				</div>
								<!--<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>-->
			      			</div>
							<form action="#" method="POST" class="signin-form">
			      				<div class="form-group mb-3">
			      					<label class="label" for="name">Username</label>
			      					<input type="text" name="username" class="form-control" placeholder="Username" required>
			      				</div>
		            			<div class="form-group mb-3">
		            				<label class="label" for="password">Password</label>
		          					<input type="password" name="password" class="form-control" placeholder="Password" required>
		        				</div>
		        				<div class="form-group">
	            					<button type="submit" name ="SignIn" class="form-control btn btn-primary submit px-3">Sign In</button>
	            				</div>
		            			<div class="form-group d-md-flex">
		            				<div class="w-50 text-left">
			            				<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
								  			<input type="checkbox" checked>
								  			<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            			</div>
		          			</form>

							<!-- Validasi Sign In Page -->
							<?php
								if(isset($_POST['SignIn'])) {
									include "koneksi.php";

									$username = $_POST['username'];
									$pass = $_POST['password'];

									$cek_user = mysqli_query($conn, "SELECT * FROM customer WHERE Username='$username'");
									$row = mysqli_num_rows($cek_user);

									// Seleksi Password
									if($row === 1) {
										$fetch_data = mysqli_fetch_assoc($cek_user);
										$cek_pass = $fetch_data['CustomerPassword'];
										$cek_name = $fetch_data['CustomerName'];
										$cek_gender = $fetch_data['CustomerGender'];
										$cek_phone = $fetch_data['CustomerPhone'];
										$cek_email = $fetch_data['CustomerEmail'];
										$cek_address = $fetch_data['CustomerAddress'];

										if($cek_pass <> $pass) {
											echo "<script>alert('Password salah');</script>";
										} else {
											$_SESSION['log'] = true;
											$_SESSION['auth_cust'] = ['cek_user'=>$cek_user,
																	  'cek_name'=>$cek_name,
																	  'cek_gender'=>$cek_gender,
																	  'cek_phone'=>$cek_phone,
																	  'cek_address'=>$cek_address];
											echo "<script>alert('Login Berhasil');   document.location.href='../index.php' </script>";
										}
									} else {
										echo "<script>alert('Username salah atau belum terdaftar');</script>";
									}

								}
							?>
		        		</div>
		      		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


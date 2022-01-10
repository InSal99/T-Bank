<!doctype html>
<html lang="en">
  <head>
  	<title>T-Bank-Signup</title>
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
								<h2>Daftarkan diri anda dan maju selangkah menuju lingkungan yang lebih baik</h2>
                                <p>Sudah memiliki akun?</p>
								<a href="index.php" class="btn btn-white btn-outline-white">Sign In</a>
							</div>
			            </div>
						<div class="login-wrap p-4 p-lg-5">
			      	        <div class="d-flex">
			      		        <div class="w-100">
			      			        <h3 class="mb-4">Sign Up</h3>
			      		        </div>
								<!--<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>-->
			      	        </div>
							<form action="#" class="signin-form">
                            <div class="form-group mb-3">
			      			    <label class="label" for="name">Nama</label>
			      			    <input type="text" class="form-control" placeholder="Nama" required>
			      		    </div>
							<div class="form-group mb-3">
                                <label class="label" for="name">Jenis Kelamin</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="male" name="gender" class="custom-control-input">
									<label class="custom-control-label" for="male">Laki-Laki</label>
								  </div>
								  <div class="custom-control custom-radio">
									<input type="radio" id="female" name="gender" class="custom-control-input">
									<label class="custom-control-label" for="female">Perempuan</label>
								  </div>
                                <!--<input type="text" class="form-control" placeholder="Jenis Kelamin" required>-->
                            </div>
							<div class="form-group mb-3">
                                <label class="label" for="name">Nomor Telepon</label>
                                <input type="tel" class="form-control" placeholder="Nomor Telepon" pattern="[08[0-9]{10}]" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="name">Email</label>
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
				
			      		    <div class="form-group mb-3">
			      			    <label class="label" for="name">Username</label>
			      			    <input type="text" class="form-control" placeholder="Username" required>
			      		    </div>
		                    <div class="form-group mb-3">
		            	        <label class="label" for="password">Password</label>
		                        <input type="password" class="form-control" placeholder="Password" required>
		                    </div>
                            <div class="form-group mb-3">
		            	        <label class="label" for="password">Konfirmasi Password</label>
		                        <input type="password" class="form-control" placeholder="Konfirmasi Password" required>
		                    </div>
							<div class="form-group d-md-flex">
		            	        <div class="w-40 text-left">
			            	        <label class="checkbox-wrap checkbox-primary mb-0">Saya setuju dengan semua syarat dan ketentuan
									    <input type="checkbox" required>
									    <span class="checkmark"></span>
									</label>
								</div>
		                    </div>
		                    <div class="form-group">
		            	        <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
		                    </div>
		                    </form>
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


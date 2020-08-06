<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/registration.css'?>">
</head>
<body>
	<img class="wave" src="<?php echo base_url(); ?>images/wave.jpg">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url();?>images/departing.svg">
		</div>
		<div class="login-container">
			<form method="post">
				<img src="<?php echo base_url();?>images/biking.svg" class="avatar">
				<h2>Welcome</h2>
				<div class="input-div">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<input type="text" name="name" placeholder="Username" class="input" required>
					</div>	
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div>
						<input type="Password" name="password" placeholder="Password" class="input" required>
					</div>	
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fas fa-mail-bulk"></i>
					</div>
					<div>
						<input type="email" name="email" placeholder="Email" class="input" required>
					</div>	
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fas fa-mobile-alt"></i>
					</div>
					<div>
						<input type="text" name="mobile" placeholder="Mobile" class="input" required>
					</div>	
				</div>
				<!-- <a href="#">Forget Password</a> -->
				<input type="submit" name="submit" value="Register" class="btn">
			</form>
		</div>
	</div>
</body>
</html>
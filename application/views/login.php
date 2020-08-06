<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style type="text/css">
	body{
		/*background-image:url('<?php //echo base_url();?>images/login1.jpg');
		background-repeat: no-repeat;
	     background-size:cover ;
	     background-color: yellow;*/
	}
</style>
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url().'css/login.css'?>">
 --><body>
<div class=contact-form>
	<h2>Login Form</h2>
	<form method="post">
		<p>Email</p>
		<input type="email" name="email" placeholder="Email">
		<p>Password</p>
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Login">
		<a href="<?php echo base_url().'index.php/My_controller/form'?>">Register</a>
		<img src="https://img.icons8.com/bubbles/70/000000/gmail.png"/>
		<img src="https://img.icons8.com/bubbles/70/000000/facebook-new.png"/>
		<img src="https://img.icons8.com/bubbles/70/000000/twitter.png"/>
		<img src="https://img.icons8.com/bubbles/70/000000/instagram.png"/>
		<img src="https://img.icons8.com/bubbles/70/000000/youtube-play.png"/>
	</form>
</div>
</body>

</html>
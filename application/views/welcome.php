<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Admin page</title>
</head>
<style type="text/css">
	.pic{
		width: 100%;
		height: 100%;
		position: fixed;
		left: 0;
		bottom: 0;
		z-index: -1;
	}
</style><center>
<a href="<?php echo base_url().'index.php/Admin_controller/dispdata1' ?>"><h1 style="color: white">click here to see the user registration details</h1></a><br>
<a href="<?php echo base_url().'index.php/Admin_controller/dispdata' ?>"><h1 style="color: white">click here to see the user booking details<h2></a><br>
</center>
<body>
	<img class="pic" src="<?php echo base_url();?>images/admin/login3.jpg">
	<center><h1 style="color: white" width="50px">welcome  <?php echo $username; ?></h1></center>

</body>
</html>
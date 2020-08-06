<!DOCTYPE html>
<html>
<head>
	<title>Log In form</title>
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


</style>
<body>
	<img class="pic" src="<?php echo base_url();?>images/admin/login.jpg">

	<?php echo isset($error) ? $error : ''; ?>
	<?php echo form_open("Admin_controller/process"); ?>

	<center><h1 style="color: blue"> Welcome to Admin Login Page</h1>
	  <form>
	<table cellspacing="2" cellpadding="2" border="2" align="center">
		<tr>
			<td style="color: red">Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td style="color: red">Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
		<td style="color: red">Submit</td>
			<td><input type="submit" name="submit" value="Login"></td>
		</tr>
		</tr>
     <!--  http://localhost/Ci_MINI1/Index.php/login/process -->
	</table>

</form>
</center>
</body>
</html>
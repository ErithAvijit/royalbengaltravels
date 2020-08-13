<!DOCTYPE html>
<html>
<head>
<title>ADMIN UPDATE</title>
</head>

<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Enter USER NAME </td>
    <td width="329">
      <input type="text" name="user" value="<?php echo $row->user; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your PASSWORD </td>
    <td><input type="text" name="password" value="<?php echo $row->password; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your MAIL ID </td>
    <td><input type="text" name="mail" value="<?php echo $row->mail; ?>"/></td>
  </tr>

  <td>Enter MOBILE NUMBER  </td>
  <td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>"/></td>
</tr>


  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update1" value="Update Records1"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>

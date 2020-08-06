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
    <td width="230">Enter USER ID </td>
    <td width="329">
      <input type="text" name="reg_id" value="<?php echo $row->reg_id; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your PASSWORD </td>
    <td><input type="text" name="user" value="<?php echo $row->user; ?>"/></td>
  </tr>
  <tr>
    <td>Enter MAIL ID  </td>
    <td><input type="text" name="no_persons" value="<?php echo $row->no_persons; ?>"/></td>
  </tr>

  <td>Enter MOBILE NUMBER  </td>
  <td><input type="text" name="price" value="<?php echo $row->price; ?>"/></td>
</tr>

<td>Enter Your LOCATION </td>
<td><input type="text" name="location" value="<?php echo $row->location; ?>"/></td>
</tr>

<td>Enter Your TOTAL PRICE </td>
<td><input type="text" name="total_price" value="<?php echo $row->total_price; ?>"/></td>
</tr>

  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>

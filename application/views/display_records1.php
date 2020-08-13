<!DOCTYPE html>
<html>
<head>
  <title>Register Recordes</title>
  <style type="text/css">
  .pic{
    width: 100%;
    height: 100%;
    position: fixed;
    left: 0;
    bottom: 0;
    z-index: -1;
  }
   td {
    color: white;
  }
  th {
    color: red;
  }
</style>
</head>
<body>
<img class="pic" src="<?php echo base_url();?>images/admin/login4.jpg">
<center>
<table width="600" border="1" cellspacing="5" cellpadding="5">
<tr style="background:#CCC">
  <tr>
    <th>SL.</th>
    <th>ID</th>
    <th>USER</th>
    <th>PASSWORD</th>
    <th>MAIL</th>
    <th>MOBILE</th>


    <th colspan="2">ACTION</th>
</tr>


<?php
$i=1;
foreach($data as $row)
{
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row->reg_id."</td>";


  echo "<td>".$row->user."</td>";
  echo "<td>".$row->password."</td>";
  echo "<td>".$row->mail."</td>";
  echo "<td>".$row->mobile."</td>";
echo "<td><a href='deletedata1?id=".$row->reg_id."'style='color: orange;'>Delete</a></td>";
echo "<td><a href='updatedata1?id=".$row->reg_id."'style='color: lightgreen;'>Update</a></td>";
echo "</tr>";
$i++;
}
 ?>

</table>
</center>
</body>
</html>





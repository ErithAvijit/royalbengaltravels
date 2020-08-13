<!DOCTYPE html>
<html>
<head>
<title>Booking Records</title>
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
  td {
    color: white;
  }
 th {
 	color: red;
 }
  
</style>


<body>
	<img class="pic" src="<?php echo base_url();?>images/admin/login5.jpg">
	<center>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
		<tr>
			<th>SL.</th>
      <th>BOOKING ID</th>
			<th>REGISTRATION ID</th>
      <th>EMAIL</th>
			<th>USER NAME</th>
			<th>NUMBER OF PERSONS</th>
			<th>PACKAGE PRICE</th>
			<th>LOCATION</th>
			<th>TOTAL PRICE</th>

			<th colspan="2">ACTION</th>
  </tr>




  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
    echo "<td>".$row->book_id."</td>";
		echo "<td>".$row->reg_id."</td>";
    echo "<td>".$row->email."</td>";
		echo "<td>".$row->user."</td>";
		echo "<td>".$row->no_persons."</td>";
		echo "<td>".$row->price."</td>";
		echo "<td>".$row->location."</td>";
		echo "<td>".$row->total_price."</td>";
  echo "<td><a href='deletedata?id=".$row->book_id."'style='color: orange;'>Delete</a></td>";
  echo "<td><a href='updatedata?id=".$row->book_id."'style='color: lightgreen;'>Update</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</center>
<br>
<br>


</body>
</html>

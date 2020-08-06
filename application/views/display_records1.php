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


<img class="pic" src="<?php echo base_url();?>images/admin/login4.jpg">
<center>
<table width="600" border="1" cellspacing="5" cellpadding="5">
<tr style="background:#CCC">
  <tr>
    <th>SL.</th>

    <th>USER</th>
    <th>PASSWORD</th>
    <th>MAIL</th>
    <th>MOBILE</th>


    <th colspan="2">action</th>
</tr>


<?php
$i=1;
foreach($data as $row)
{
echo "<tr>";
echo "<td>".$i."</td>";


  echo "<td>".$row->user."</td>";
  echo "<td>".$row->password."</td>";
  echo "<td>".$row->mail."</td>";
  echo "<td>".$row->mobile."</td>";
echo "<td><a href='deletedata1?id=".$row->reg_id."'>Delete</a></td>";
echo "<td><a href='updatedata1?id=".$row->reg_id."'>Update</a></td>";
echo "</tr>";
$i++;
}
 ?>

</table>
</center>

<!DOCTYPE html>
<html>
<head>
	<title>book</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/booking.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/booking.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
	</style>
<body>
	  <img class="book" src="<?php echo base_url(); ?>images/malda/login2.jpg">
</body>

<?php
foreach ($data as $value) { 
?> 
		<form method="post" class="f" action="<?php echo base_url().'index.php/My_controller/booking';?>">
			<left><table  cellpadding="20" cellspacing="2" >
        	<!-- <center><h1>Booking details</h1></center> -->
            <tr>
                <td colspan="4"><center><h1 class="h">Booking Details</h1></center></td>
            </tr>
        	<tr>
        		<td>Registration id</td>
        		<td class="d"><input type="text" id="reg_id" name="reg_id" value="<?php echo $value->reg_id ?>" ></td>
        	</tr>
        	 <tr>
        		<td>User</td>
        	<td class="d"><input type="text" id="user" name="user" value="<?php echo $value->user ?>" ></td>
        	</tr>
            <tr>
                <td>Email</td>
                <td class="d"><input type="email" name="email" value="<?php echo $value->mail ?>" ></ins></td>
            </tr>
            <tr>
                <td>location</td>
                <td class="d"><select name="location" onchange="change(this.value)" onselect="change(this.value)"required>
                    <option>Select</option>
                    <option value="hooghly">Hooghly</option>
                    <option value="malda">Malda</option>
                    <option value="jalpaiguri">Jalpaiguri</option>
                    <option value="digha">Digha</option><br> 
                </select></td>
            </tr>
        	<tr>
        		<td>No of persons</td>
        		<td class="d"><input type="number" id="number" name="number" placeholder="Number of persons" onchange="tprice()"required></td>
        	</tr>
        	<tr> 
        		<td>price</td>
        		<td class="d"><input type="text" id="price" name="price" placeholder="price"></td>
            </tr>
            
            <!-- <td id="textarea"><input type="textarea" name="text"></td> -->
            <!-- <td colspan="2" class="text1" id="textarea"></td> -->
            <tr>
            	<td>total price</td>
            	<td class="d"><input type="text" id="total" name="total" placeholder="total price"></td>
            </tr>
            
        	<tr>
        		<td colspan="3"><center><input type="submit" name="submit" value="Submit" class="btn">
                <a href="<?php echo base_url().'index.php/My_controller/logout'?>"><button class="btn1">Logout</button></a></center></td>
        	</tr>		
			</table></left> 
<?php   } ?>      
		</form>	
        <textarea id="textarea" placeholder="Remember, be nice!"></textarea></p>


</body>
</html>

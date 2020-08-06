<!DOCTYPE html>
<html>
<head>
	<title>book</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/booking.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/booking1.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
	</style>
<body>

	  <img class="book" src="<?php echo base_url(); ?>images/malda/login2.jpg">
     <!--  <div class=contact-form> -->
    <center><h2 class="h" style="color: blue">Login Form</h2>
    <form method="post">
        <table >
        <tr>
        <td style="color: rgb(201, 76, 76);">Email</td>
        <td ><input type="email" name="email" placeholder="Email"></td>
        </tr>
        <tr>
        <td style="color: rgb(201, 76, 76);">Password</td>
        <td ><input type="password" name="password" placeholder="Password"></td>
        </tr>
        <tr >
        <td colspan="2"><center><input type="submit" name="submit" value="Login" class="btn">
        <a href="<?php echo base_url().'index.php/My_controller/form'?>"style="color: red;">Register</a></center></td>
        </tr>
        <tr>
        <td colspan="2"><img src="https://img.icons8.com/bubbles/50/000000/gmail.png"/>
        <img src="https://img.icons8.com/bubbles/50/000000/facebook-new.png"/>
        <img src="https://img.icons8.com/bubbles/50/000000/twitter.png"/>
        <img src="https://img.icons8.com/bubbles/50/000000/instagram.png"/>
        <img src="https://img.icons8.com/bubbles/50/000000/youtube-play.png"/>
         </td></tr>
    </table>
     </form></center>
<!-- <?php
//foreach ($data as $value) { 
?> -->
		<!-- <form method="post" class="f" action="<?php //echo base_url().'index.php/My_controller/booking1';?>" >
			<left><table  cellpadding="20" cellspacing="2" > -->
        	<!-- <center><h1>Booking details</h1></center> -->
           <!--  <tr>
                <td colspan="4"><center><h1 class="h">Booking Details</h1></center></td>
            </tr> -->
        	<!-- <tr>
        		<td style="color: rgb(201, 76, 76);">Registration id</td>
        		<td class="d"><input type="text" id="reg_id" name="reg_id" value="<?php //echo $value->reg_id ?>"></td>
        	</tr> -->
        	 <!-- <tr>
        		<td style="color: rgb(201, 76, 76);">User</td>
        	<td class="d"><input type="text" id="user" name="user" value="<?php //echo $value->user ?>"></td>
        	</tr> -->
             <!-- <tr>
                <td style="color: rgb(201, 76, 76);">Email</td>
                <td class="d"><input type="email" name="email" value="<?php //echo $value->mail ?>" ></ins></td>
            </tr> -->
        	<!-- <tr>
        		<td style="color: rgb(201, 76, 76);">No of persons</td>
        		<td class="d"><input type="number" id="number" name="number" placeholder="Number of persons" onchange="tprice()"></td>
        	</tr> -->
        	<!-- <tr> 
        		<td style="color: rgb(201, 76, 76);">price</td>
        		<td class="d"><input type="text" id="price" name="price" placeholder="price"></td>
            </tr> -->
            <!-- <tr>
            	<td style="color: rgb(201, 76, 76);">location</td>
            	<td class="d"><select name="location" onchange="change(this.value)" onselect="change(this.value)">
            		<option value="chuchura">chuchura</option>
            		<option value="malda">malda</option>
            		<option value="jalpaiguri">jalpaiguri</option>
            		<option value="digha">digha</option><br> 
            	</select></td>
            </tr> -->
            <!-- <td id="textarea"><input type="textarea" name="text"></td> -->
            <!-- <td colspan="2" class="text1" id="textarea"></td> -->
            <!-- <tr>
            	<td style="color: rgb(201, 76, 76);">total price</td>
            	<td class="d"><input type="text" id="total" name="total" placeholder="total price"></td>
            </tr> -->
        	<!-- <tr>
        		<td colspan="3"><center><input type="submit" name="submit" value="Submit" class="btn"><input type="reset" name="reset" value="Reset" class="btn1"></center></td>
        	</tr>	 	
			</table></left>-->
<!-- <?php   //}

 ?>  -->           
		<!-- </form>	
        <textarea id="textarea" placeholder="Remember, be nice!"></textarea></p> -->
</body>
</html>

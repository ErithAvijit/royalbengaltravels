<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/home css/home.css">


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- --FONT--- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">


<style type="text/css">

	.bgimg{
	background-image: url("<?php echo base_url();?>images/home page/backgrounds/bg7.jpg");
	background-size: 100% 100%;
	background-attachment: fixed;
	width: 100%;
	height: 650px;
}
.bgimg2{
	background-image: url("<?php echo base_url();?>images/home page/backgrounds/bg8.jpg");
	background-size: 100% 100%;
	background-attachment: fixed;
	width: 100%;
	height: 1500px;
}
.bgimg1{
	background-image: url("<?php echo base_url();?>images/home page/backgrounds/bg9.jpg");
	background-size: 100% 100%;
	background-attachment: fixed;
	width: 100%;
	height: 1000px;
}
.bgimg3{
	background-image: url("<?php echo base_url();?>images/home page/backgrounds/bg6.jpg");
	background-size: 100% 100%;
	background-attachment: fixed;
	width: 100%;
	height: 650px;
}
</style>

</head>

<body>
	<div class="bgimg">

	<div class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="position: fixed;">
		<div class="container">
			<img src="<?php echo base_url();?>images/icon1.jpg" style="width: 150px;height: 70px;box-shadow:6px 6px 29px black ">
			<a href="" class="navbar-brand text-warning font-weight-bold" style="font-family: cursive;">
				ROYAL BENGAL TRAVELS
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="collapsenavbar">


				<ul class="navbar-nav  ml-auto ">
					<li class="nav-item">
						<a href="#home" class="nav-link text-white"> HOME</a>
					</li>

					<li class="nav-item">
						<a href="#servics" class="nav-link text-white"> OUR SERVICES</a>
					</li>

					<li class="nav-item">
						<a href="#places" class="nav-link text-white"> PLACES</a>
					</li>

					<li class="nav-item">
						<a href="#ourteam" class="nav-link text-white"> OUR TEAM</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo base_url().'index.php/My_controller/aboutus'?>" class="nav-link text-white"> ABOUT US</a>
					</li>

					<li class="nav-item">
						<a href="#contactus" class="nav-link text-white"> CONTACT US </a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url().'index.php/Admin_controller/index'?>" class="nav-link text-white">ADMIN LOGIN</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container text-center text-white heardrset " id="home">
		<h2 style="color: black">WELCOME TO OUR Journey</h2>
		<h1>SEE YOU AGIN</h1>
		<a href="<?php echo base_url().'index.php/My_controller/login'?>">
		<button class="btn btn-warning text-white btn-lg">BOOK NOW</button>
	    </a>
	</div>
</div>

<!-- --------OUR SERVICES------- -->

<div class="bgimg2">

<section class="container ourservices text-center" id="servics">
	<div class="bgimg2">
	<h1 style="color: white"> OUR SERVICES</h1>
	<p style="color: white">OUR SERVICE IS OUR FIRST PIROTY</p>
	<div class="row rowsetting">
		<div class="lol-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto ">
			<div class="imgsetting d-block m-auto bg-warning">
		<i class="fa fa-cart-arrow-down fa-3x text-white"></i>
		</div>
		<h2 style="color: white">Get inspiration for your next trip</h2>
		<h2 style="color: white"></h2>
		<p>.......</p>
		</div>


		<div class="lol-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto ">
			<div class="imgsetting d-block m-auto bg-warning">
		<i class="fa fa-desktop fa-3x text-white"></i>
		</div>
		
		<h2 style="color: white">Clean and comfortable, for longer stays</h2>
		<p>.......</p>
		</div>


		<div class="lol-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto ">
			<div class="imgsetting d-block m-auto bg-warning">
		<i class="fa fa-lock fa-3x text-white"></i>
		</div>
		<h2 style="color: white">Homes guests love</h2>
		<p>.......</p>
		</div>


		</div>



	</div>
	</section>


	<!-- -------OUR PLACES---- -->

	

	<section class="Places bg-light" id="places">

		<div class="bgimg1">
		<div class="container text-center">
			<h1>PLACES</h1>
			<p>OUR PLACES HERE</p>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-8 col-8 d-block m-auto">
					<div class="card">
						<a href="<?php echo base_url().'index.php/My_controller/chuchura'?>">
						<img src="<?php echo base_url();?>images/home page/backgrounds/thumbnail.jpg" class="card-img img-fluid">
						<div class="card body">
						<h2 class="card-title">Hooghly</h2>
						<p class="card-text">OPTION DETAILS</p>
						</a>
					</div>
				</div>
			</div>


			<div class="col-lg-5 col-md-5 col-sm-8 col-8 d-block m-auto">
					<div class="card">
						<a href="<?php echo base_url().'index.php/My_controller/darjeeling'?>">
						<img src="<?php echo base_url();?>images/home page/backgrounds/02-thumbnail.jpg" class="card-img img-fluid">
						<div class="card body">
						<h2 class="card-title">Darjeeling</h2>
						<p class="card-text">OPTION DETAILS</p>
						</a>
					</div>
				</div>
			</div>
			</div>

				<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-8 col-8 d-block m-auto">
					<div class="card">
						<a href="<?php echo base_url().'index.php/My_controller/malda'?>">
						<img src="<?php echo base_url();?>images/home page/backgrounds/thumbnail1.jpg" class="card-img img-fluid">
						<div class="card body">
						<h2 class="card-title">Malda</h2>
						<p class="card-text">OPTION DETAILS</p>
						</a>
					</div>
				</div>
			</div>


			<div class="col-lg-5 col-md-5 col-sm-8 col-8 d-block m-auto">
					<div class="card">
						<a href="<?php echo base_url().'index.php/My_controller/digha'?>">
						<img src="<?php echo base_url();?>images/home page/backgrounds/thumbnail2.jpg" class="card-img img-fluid">
						<div class="card body">
						<h2 class="card-title">Digha</h2>
						<p class="card-text">OPTION DETAILS</p>
						</a>
					</div>
				</div>
			</div>
</div>
		</div>
			
		</div>
	</section>

	<!-- -----our Places End---- -->


<!-- 	<-----OUR TEAM----->

	<!-- <section class="ourteam" id="ourteam">
		<div class="bgimg3">
			<div class="container text-center">

			<h2>OUR DESIGNER TEAM</h2>

			<div class="row teamsetting">
			<div class="col-lg-3 col-md-3 col-sm-8 col-8 d-block m-auto">
				<figure class="figure" >
					<img src="<?php //echo base_url();?>images/home page/team/amit.jpg" class="figure-img img-fluid rounded rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>AVIJIT KARMAKAR</h4>
						<p class="figure-caption">PROJECT LEADER</p>
						
					</figcaption>
				</figure>
				
			</div>

			<div class="col-lg-3 col-md-3 col-sm-8 col-8 d-block m-auto">
				<figure class="figure">
					<img src="<?php //echo base_url();?>images/home page/team/amit.jpg" class="figure-img img-fluid rounded rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>AMIT CHAKRABORTY</h4>
						<p class="figure-caption">PROJECT MEMBER</p>
						
					</figcaption>
				</figure>
				
			</div>

			<div class="col-lg-3 col-md-3 col-sm-8 col-8 d-block m-auto">
				<figure class="figure">
					<img src="<?php //echo base_url();?>images/home page/team/amit.jpg" class="figure-img img-fluid rounded rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>ANIK KARMAKAR</h4>
						<p class="figure-caption">PROJECT MEMBER</p>
						
					</figcaption>
				</figure>
				
			</div>

			<div class="col-lg-3 col-md-3 col-sm-8 col-8 d-block m-auto">
				<figure class="figure">
					<img src="<?php //echo base_url();?>images/home page/team/gourav.jpg" class="figure-img img-fluid rounded rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>GOURAV BATYABAL</h4>
						<p class="figure-caption">PROJECT MEMBER</p>
						
					</figcaption>
				</figure>
				
			</div>

</div>

		</div>

		</div>
	</section>
 -->

 <?php include 'ourteam.php';?><div id="ourteam"></div> 
 
 <?php include 'contact.php';?><div id=""></div>
 <div id="" style="margin-top: 100px ! important;">
 <?php include 'footer.php';?>
 	
 </div>
 


</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Bandel</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
  <div class="container-fluid">
    <img src="<?php echo base_url();?>images/icon1.jpg" style="width: 150px;height: 70px;box-shadow:6px 6px 29px gray ">
    <a class="navbar-brand" href="#"><p style="border-width: 0px 0px 0px 20px;border-style: solid;">Amar Sohor Hooghly</p></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="<?php echo base_url().'index.php/My_controller/login'?>">
        <button1 type="button" class="btn btn-outline-light btn-lg" style="background-color: tomato;box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);">Booking Here</button1>
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url().'index.php/My_controller/index'?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-capitalize" href="#">about us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-capitalize" href="#gallery">gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-capitalize" href="#">contuct us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url();?>images/hooghly/carousel1.jpg" class="d-block w-100" alt="" style="width: 100%;height: 93vh;">
      <div class="carousel-caption d-md-block">
        <h4 style="color: black;"><b>Not imitation, not following, find yourself, know yourself, go your own way</b></h4>
        <p>Not imitation, not following, find yourself, know yourself, go your own way</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>images/hooghly/carousel2.jpg" class="d-block w-100" alt=""style="width: 100%;height: 93vh;" >
      <div class="carousel-caption d-md-block">
        <h4 style="color: black"><b>There is no such thing as luck, it is built on the efforts and care of everyonep</b></h4>
        <p>There is no such thing as luck, it is built on the efforts and care of everyonep>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>images/hooghly/carousel3.jpg" class="d-block w-100" alt=""style="width: 100%;height: 93vh;">
      <div class="carousel-caption d-md-block">
        <h4><b>We should spend every day as if it were the last day of our lives</b></h4>
        <p>We should spend every day as if it were the last day of our lives.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>
<section class="main_heading my_5">
  <div class="text-center">
    <h1 class="display-4">Tour Itinerary</h1>
    <hr class="w-25 mx-auto">
   </div><br>
  <div class="container" >
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
        <figure >
          <img src="<?php echo base_url();?>images/hooghly/Journey1.jpg" alt="image" class="img-fluid about_img" style="width: 100%;max-height: 280px;">
        </figure>
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
          <h1>My Journey</h1>
          <p>Hooghly district is one of the districts of the state of West Bengal in India. It can alternatively be spelt Hoogli or Hugli. The district is named after the Hooghly River. The headquarters of the district are at Hooghly-Chinsura.</p>
          <button type="button" class="btn btn-outline-info">More Info</button>
        </div>
    </div>
  </div>
</section>
<br>
<h4 class="container"><marquee direction = "" style="color: white;background-color: mediumBlue;">**10% discount** Your Trip Will be Bandel Church, Tarakeswar Temple, Hanseswari Temple, Rajhat Mandir, Dutch Cemetery Chinsurah, Mayurpankhi Ghat, Rishi Bankim Chandra Chattopadhyay's Residence & Museum with 3 days & 2 night Package 10% discount**</marquee></h4>
<div class="container bg-light">
<table class="table text-center">
  <thead class="table-light">
    <th colspan="2">Proposed Tour Programme for Hooghly</th>
  </thead>
  <tbody>
    <tr>
      <td style="background-color: tomato;color: white;">CHANDANNAGORE STRAND</td>
      <td style="color: red">Chandannagore Strand is a beautiful tourist spot along the banks of the river Ganges. It is about 1 km in length and 7 m in width, and many buildings with historical importance surround the spot. This is a place where people love to take a walk and gaze at the sailing boats in far waters.</td>
    </tr>
    <tr>
      <td style="background-color:dodgerblue ;color:white; ">TARKESHWAR</td>
      <td style="color: dodgerblue">Tarakeshwar is a village and renowned pilgrimage centre, located in Hooghly District in the state of West Bengal. The town of Hooghly is located 58 kilometres away from Kolkata. Every year a number of devotees come here to seek blessings from Lord Shiva and other deities. The place is acknowledged as a pilgrimage of Shiva and most of the temples here are devoted to Lord Shiva.</td>
    </tr>
    <tr>
      <td style="background-color:MediumSeaGreen ;color:white ">BANDEL CHURCH</td>
      <td style="color: MediumSeaGreen">The Basilica of the Holy Rosary commonly known as Bandel Church is one of the oldest Christian churches in West Bengal. Bandel Church is a Roman Catholic Church situated in Bandel, Hooghly district. On November 25, 1988, Pope John Paul II declared the sanctuary a minor basilica.</td>
    </tr>
    <tr>
      <td style="background-color:orange ;color:white ">HOOGHLY IMAMBARA</td>
      <td style="color: orange">Imambara is situated on the bank of River Ganga in Chinsurah. The construction of the building started in the year 1841 and was completed in 1861. The two storied building consists of several rooms and has a wide entrance, with the main gate flanked by two 80 ft tall towers and a massive clock tower between them.</td>
    </tr>
    <tr>
      <td style="background-color:slateblue ;color:white ">CHINSURAH</td>
      <td style="color:slateblue ">The Portuguese founded the town of Ugulim, now Hooghly-Chuchura, in 1579, but the district has thousands of years of heritage in the form of the great kingdom of Bhurshut. The city flourished as a trading port and some religious structures were built. One such structure is a church dedicated to a charismatic statue of the Mother Mary brought by the Portuguese.</td>
    </tr>
    <tr>
      <td style="background-color:chocolate ;color:white ">CHINSURAH CLOCK TOWER (GHORIRMOR)</td>
      <td style="color:chocolate ">Ghorir More: This 19th century Gothic tower, imported by the British in memory of King Edward VI, is Chinsurah’s iconic landmark. Crafted in cast iron, its clock in working condition, Ghorir More, as it is popularly known, stands at the intersection of four important streets.
      EDWARDVS VII DEI GRA BRITT OMN REX which is the Latin abbreviation for Edward the Seventh, by the Grace of God, King of All Britain Defender of the Faith.</td>
    </tr>
    <tr>
      <td style="background-color:gold ;color:black ">HANGSESWARI TEMPLE</td>
      <td style="color:black ">At Hangseswari Temple is located in Bansberia in Hooghly district. This 21 m high 19th century temple has 13 towers. The top of each tower is shaped as a lotus flower.  The main deity is made up of blue-neem wood. The five storey idol of Ira, Pingala, Bajraksha, Sushumna and Chitrini follows the structure of a human body.</td>
    </tr>
  </tbody>
</table>
</div>
<section class="main_heading my-5" id="gallery">
  <div class="text-center">
    <h1 class="display-4">Some Momemnt</h1>
    <hr class="w-25 mx-auto">
  </div>
</section>
<div class="container">
  <div class="row gy-2">
    <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment.jpg" alt="any" class="img-fluid ">
      </figure>
    </div>
     <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment1.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
     <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment3.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
     <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment4.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
     <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment5.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
     <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment6.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
       <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment7.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
     <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment8.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
     <div class="col-md-4 col-10 col-xxl-4 mx-auto">
      <figure>
        <img src="<?php echo base_url();?>images/hooghly/moment9.jpg" alt="any" class="img-fluid">
      </figure>
    </div>
    </div>
</div>
<section class="main_heading my-5 py-2">
  <div class="container-fluid" style="background-color:lightseagreen ;color: white">
    <div class="row">
      <div class="col-xxl-12 col-12 py-5 text-center">
        <h1>We are Family</h1>
        <p>Never give up on something that you can't go a day without thinking about.</p>
        <a href="<?php echo base_url().'index.php/My_controller/login'?>">
        <button type="button" class="btn btn-outline-light btn-lg"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);font-size: 25px;">
        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm5.646 10.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
        </svg> >Booking Here</button>
        </a>
      </div>   
  </div>
</div>
      	<div class="form-popup" id="myform">
      		<form class="form-container"> 
      			<button type="submit" >submit</button>                      
            
      			<button type="button" onclick="closeform()">cancel</button>
      		</form>
      	</div>
      	
      
   
</section>
<script type="text/javascript">
	// function openform(){
	// 	document.getElementById('myform').style.display="block";
	// }
	// function closeform(){
	// 	document.getElementById('myform').style.display="none";
	// }
</script>
<style type="text/css">
.form-popup{
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;

  }
  .form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
.form-container input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
/*button1{
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}*/
@keyframes example {
  0%   {background-color:green; right:0px; top:0px;}
  50%  {background-color:tomato; right:200px; top:0px;}
  100%  {background-color:blue; right:0px; top:0px;}
}
}
</style>
<footer class="bg-secondary text-center text-white" style="margin-bottom: 1px;">
  <p>@Copyright Avijit</p>
</footer>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>

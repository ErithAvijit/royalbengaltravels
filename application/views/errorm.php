<!DOCTYPE html>
<html>
<head>
	<title>Error 404</title>
	<style type="text/css">
		*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;

	}
	body{
	font-family: 'Fondamento', cursive;
	}
	.login-container{
	position: absolute;
	top:20%;
	left: 60%;
	/*transform: translate(-50%,-50%);*/
	width: 400px;
	height: 500px;
	padding: 80px 40px;
	
	}

	.container{
	width: 100vw;
	height: 100vh;
	display: grid;
	grid-template-columns: repeat(2,1fr);
	grid-gap: 7rem;
	padding: 0 2rem;
	}
	.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
	}
	.img img{
	width: 800px;
	}

	form{
	width: 360px;
	}

</style>
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url();?>images/notfound.svg">
		</div>
		<div class="login-container">
			<form>
				
				<center><h2>Aaaah!...Something went wrong</h2><br>
				<p style="
				color: dodgerblue;">You may also refresh the page or try again later</p></center>
				
			</form>
		</div>
	</div>

</body>
</html>
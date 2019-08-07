<?php
session_start();
?>

<!doctype html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

      <title>Services</title>
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
	    font-color : white;
         }

         label {
            font-weight:bold;
            width:150px;
            font-size:18px;
            font-color : white;
         }
         
         .box {
            border:#708090 solid 1px;
         }
		 
		 .logo {
			position: absolute;
			left: 20px;
			top: 0px;
		 }
		 
		 .login {
			position: absolute;
			left: 700px;
			top: 0px;
		 }
		 
		 #navbar {
			position: absolute;
			left: 290px;
			top: 15px;
			width:76%;
		 }
		 
		  .services 
		 {
			position: absolute;
			left: 650px;
			top: 100px; 
			
		 }

		hr 
		{
			margin-top :150px;
			
		}	

		
      </style>
      
   </head>
<body>
   
   <div id="interestsWrapper" class="wrapper">
		<body background="events.jpg" width=500px; bgcolor = "#FFFFFF">
			<div class = "logo">
				<img src="Logo.jpg" class="float-right" width = 200px; height = 150px; >
			</div>
			
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar">
				  <ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="add.php">Add Registration</a> 
					</li>
					
					<li class="nav-item">
					  <a class="nav-link" href="About_page.php">About Us</a> 
					</li>
					
					<li class="nav-item">
					  <a class="nav-link" href="contact_page.php">Contact Us</a> 
					</li>
					
					<li class="nav-item" style="position:absolute;right:30px;">
					  <a class="nav-link disabled" href="login_page.php">Logout</a>	
					</li>
				  </ul>
				</nav>
				

            
	
	
	<legend class ="services" style="color:#030303"><b><i> Welcome Admin</b></i>  </legend>
	
	<hr>
		<div class="container">
  
		  <div  style="position:absolute;top:200px;left:350px;"id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="first.jpg" alt="Los Angeles" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="second.jpg" alt="Chicago" style="width:100%;">
			  </div>
			
			  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
</div>
		

	</div>

   

</form>

    
</body>
</html>
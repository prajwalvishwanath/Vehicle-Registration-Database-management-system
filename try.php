<html>
   
   <head>
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>Home</title>
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
			left: 30px;
			top: 0px;
		 }
		 
		 .login {
			position: absolute;
			left: 700px;
			top: 0px;
		 }
		 
		 #navbar {
			position: absolute;
			left: 310px;
			top: 15px;
			width:75%;
		 }
      </style>
      
   </head>
   
   <div id="interestsWrapper" class="wrapper">
		<body background="events.jpg" width=500px; bgcolor = "#FFFFFF">
			<div class = "logo">
				<img src="Logo.jpg" class="float-right" width = 200px; height = 150px; >
			</div>
			
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar">
				  <ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="about.php">About US</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="services.php">Services</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="contact.php">Contact Us</a> 
					</li>
					<li class="nav-item">
					  <a class="nav-link disabled" href="login.php">Login</a>
					</li>
					<li class="nav-item" style="position:absolute;right:30px;">
					  <a class="nav-link disabled" href="register.php">New User ? Register</a>	
					</li>
				  </ul>
				</nav>
				
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
				<img src="marriage.jpg" alt="Los Angeles" style="width:100%;">
			  </div>

			  <div class="item">
				<img src="Birthday-party.jpg" alt="Chicago" style="width:100%;">
			  </div>
			
			  <div class="item">
				<img src="engagement.jpg" alt="New york" style="width:100%;">
			  </div>
			  
			  <div class="item">
				<img src="cor.jpg" alt="New york" style="width:100%;">
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


      <!--<div class= "login" align = "centre; width:40px">
         <div style = "width:350px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#ffffff; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:70px">

               <form action = "" method = "post">
                  <label><font color="white">Username :</font></label><input type = "text" name = "usrname" class = "box" placeholder=" Enter username"/><br /><br /><br/>
			<label><font color="white">Password :</font></label><input type = "password" name = "usrpwd" class = "box" placeholder=" Enter password"/><br><br>
                  &emsp;&emsp;&emsp;<input type="submit" name="sub" value="Submit"/><br />
		   <br><br>
                   <!--New User?<input type="submit" name="reg" value="Register"/><br />-->
				   <!--<a href="register.php"><p style= "color=:white;">Register</a></p>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>-->

<?php

if(isset($_POST['sub']))
{
	$usn = $_POST['usrname'];

	$pwd = $_POST['usrpwd'];
	
	//echo $_POST['usrname'];

	$con = mysqli_connect("localhost:3306","root","");

	mysqli_select_db($con,"event_mgmt");

	//$getID = mysqli_fetch_assoc(mysqli_query($con,"select cust_role from customer_tbl where cust_name = '$usn' and cust_pwd = '$pwd'"));
	
	//$userID = $getID['cust_role'];

	//echo $userID;
	
	$val = mysqli_query($con,"select cust_role from customer_tbl where cust_name = '$usn' and cust_pwd = '$pwd'");

	$userrole = mysqli_fetch_row($val);
	
	//echo $userrole[0];
	
	$userid = $userrole[0];
	
	//echo $userid;
	
	if(mysqli_num_rows($val) == 1)
	{ 
		if(strcmp($userid,'admin') == 0)
		{
			echo "<script> location.href='admin.php'; </script>";
			exit;
		}
		else
		{
			echo "<script> location.href='event.php'; </script>";
			exit;
		}
	}
	else
	{
	 echo "USER NOT REGISTERED";
	 
	}
}



?>
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	  
   </body>
</html>
<?php
session_start();
?>


	<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<title>Register</title>
    <style> 
      body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
	    font-color : white;
         }

         label {
            font-weight:bold;
            width:150px;
            font-size:14px;
            font-color : white;
         }
         
         .box {
            border:#708090 solid 1px;
         }   
            
    
	
	.logo {
			position: absolute;
			left: 20px;
			top: 5px;
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
		 
		 hr 
		{
			margin-top :120px;
			
		}
		
		.event 
		 {
			position: absolute;
			left: 650px;
			top: 80px; 
			
		 }
		 
		 .event_usrname {
			
			position: absolute;
			left: 100px;
			top: 0px;
		}
		
		.event_date {
			
			position: absolute;
			left: 130px;
			top: 45px;
		}
		
		.eventtype 
		{
			position: absolute;
			left: 150px;
			top: 185px;
		}
		

		.eventcost	{
			
			position: absolute;
			left: 150px;
			top: 225px;
		}
		
		.eventguest	{
			
			position: absolute;
			left: 150px;
			top: 265px;
		}
		
		#event_book {
			position: absolute;
			left: 70px;
			top: 320px;
		}
		
		.event_address {
				position: absolute;
			left: 150px;
			top: 45px;
			
		}
		
		#event_cancel
		{
			position: absolute;
			left: 150px;
			top: 320px;
		}
		
		.event_details {
			position: absolute;
			left: 450px;
			top: 130px;
			width:25%;
		}
}
            
        
    </style>
</head>
<body>
   
    <div id="interestsWrapper" class="wrapper">
<body background="wood.jpg" width=500px; bgcolor = "#FFFFFF">
			<div class = "logo">
				<img src="Logo.jpg" class="float-right" width = 250px; height = 100px; >
			</div>
			
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar">
				  <ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="about_page.php">About US</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link " href="contact_page.php">Contact Us</a> 
					</li>
					<li class="nav-item" style="position:absolute;right:150px;">
					  <a class="nav-link " href="#">Welcome </a>
					  
					</li>
					<li class="nav-item" style="position:absolute;right:30px;">
					  <a class="nav-link" href="login_page.php">Login</a>	
					</li>
				  </ul>
			</nav>
		
		
		
		
		<legend class ="event" style="color:#C70039"> REGISTRATION FORM </legend>
	
	<hr>
		

	</div>
	  


<div class = "event_details">
	<form action="" method="POST">
		
		<div class="form-group">
			<label style="position:absolute;left:0px;top:0px;" class="control-label col-sm-2" >Enter Id:</label>
				
					<input style= "position:absolute;left:100px;top:0px;" type="text" class="form-control" id="cust_id" placeholder="Enter id" name="id">
				
		</div>

		<div class="form-group">
			<label style="position:absolute;left:0px;top:50px;" class="control-label col-sm-2" >Enter name:</label>
				
					<input style= "position:absolute;left:100px;top:50px;" type="text" class="form-control" id="cust_name" placeholder="Enter name" name="user">
				
		</div>

		<div class="form-group">
			<label style="position:absolute;left:0px;top:100px;" class="control-label col-sm-2" >Enter password:</label>
				
					<input style= "position:absolute;left:100px;top:100px;" type="text" class="form-control" id="pass" placeholder="Enter password" name="password">
				
		</div>
		
		
		  <div class="container">
			  <button style="position:absolute;left:150px;top:200px;" type="submit" id= "event_book" class="btn btn-primary" name="submit">Submit</button>
			  
		</div>
						
</form>		
</div>

<?php

if(isset($_POST["submit"]))
{
	
	if(isset($_SESSION['loggedInUserId']) != NULL)
	{
		
		if(!empty($_POST['id']) && !empty($_POST['user']) && !empty($_POST['password'])) 
		{
			$user    = $_POST['id'];
			$addr    = $_POST['user'];
			$date    = $_POST['password'];

			$con = mysqli_connect('localhost','root','') or die(mysqlii_error());
			
			mysqli_select_db($con,'vehicle_registration') or die("cannot select DB");

			
			$sql="INSERT INTO loginform(id,user,password) VALUES('$user','$addr','$date')";
	
			$result = mysqli_query($con,$sql);
					
			if($result)
			{
				echo "<div style='position:absolute;top:80px;left:400px;width:50%;' class='alert alert-success'><strong>Success!</strong></div>";
				
			} 
			else 
			{
				echo "<div style='position:absolute;top:80px;left:400px;width:50%;' class='alert alert-warning'><strong>Failure!</strong></div>";
			}

		} 
		else 
		{
			//echo "All fields are required!";
		}
	}
}
?>


    
</body>
</html>

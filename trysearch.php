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
					  <a class="nav-link " href="#">Welcome : <i><?php echo $_SESSION['loggedInUserId']; ?></i></a>
					  
					</li>
					<li class="nav-item" style="position:absolute;right:30px;">
					  <a class="nav-link" href="login_page.php">Log Out</a>	
					</li>
				  </ul>
			</nav>
		
		
		
		
		<legend class ="event" style="color:#000000"> Search Registration Number </legend>
	
	<hr>
		

	</div>
	  



<div class = "event_details">
	<form action="" method="POST">
		
		<div class="form-group">
			<label style="position:absolute;left:-20px;top:50px;" class="control-label col-sm-2" >Enter Number:-</label>
				
					<input style= "position:absolute;left:100px;top:50px;" type="text" class="form-control" id="name" placeholder="Registration number" name="search">
				
		</div>
  <div class="container">
			  <button style="position:absolute;left:150px;top:200px;" type="submit" id= "sear" class="btn btn-primary" name="search">Search</button>
			  
		</div>
						
</form>		
</div>
<?php

	if(isset($_SESSION['loggedInUserId']) != NULL)
	{
		
		
		$user = $_SESSION['loggedInUserId'];

			$search = $_POST['search'];
				
		$con = mysqli_connect('localhost','root','') or die(mysqlii_error());
			
		mysqli_select_db($con,'vehicle_registration') or die("cannot select DB");

		$result = mysqli_query($con,"select R.reg_no, R.vehicle_name, R.insurance_no, V.manufacturing, V.colour, V.engine_capacity, V.seating, V.no_of_cyl, V.fuel, V.mfg_date, V.model, D.reg_date,D.chassis_no, D.engine_no, D.fc_upto from rto_info AS R, vehicle_details as V, registration_details AS D where V.reg_no=R.reg_no AND R.reg_no=D.reg_no AND D.reg_no='".$search."'");
		
		//$result = mysqli_query($con,"SELECT * FROM event_tbl WHERE event_custid = '".$user."'");
		
		//$result = mysqli_query($con,"Call display_event_data('".$user."')");
		
		echo "<div class='container'><table class='table'><thead><tr><th>Reg No</th><th>Vehicle name</th><th>Insurance No</th><th>Manufacturing</th><th>Colour</th><th>Engine Capacity</th><th>Seating</th><th>No of cyl</th><th>Fuel</th><th>Mfg Date</th><th>Model</th><th>Reg Date</th><th>Chassis No</th><th>Engine No</th><th>FC Upto</th><th>Edit</th><th>Delete</th></tr></thead>";
		
		while($row = mysqli_fetch_array(($result)))
		{   //Creates a loop to loop through results
		
			echo "<tbody><tr class='success'><td>" . $row['regno'] . "</td><td>" . $row['vehiclename'] . "</td><td>" . $row['insuranceno'] . "</td><td>" . $row['manufacturing'] . "</td><td>" . $row['colour'] . "</td><td>" . $row['engine_capacity'] . "</td><td>" . $row['seating'] . "</td><td>" . $row['no_of_cyl'] . "</td><td>" . $row['fuel'] . "</td><td>" . $row['mfg_date'] . "</td><td>" . $row['model'] . "</td><td>" . $row['reg_date'] . "</td><td>" . $row['chassis_no'] . "</td><td>" . $row['engine_no'] . "</td><td>" . $row['fc_upto'] . "</td><td><a href ='' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a></td><td><a href ='' class='btn btn-info btn-lg' data-toggle='modal' data-target='#event_del_Modal'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td></tr>";  
		}

		echo "</table>"; //Close the table in HTML
	
	}	

?>
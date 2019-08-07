<?php
session_start();
?>


	<!doctype html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
		 
		 hr 
		{
			margin-top :160px;
			
		}
		
		.event 
		 {
			position: absolute;
			left: 650px;
			top: 100px; 
			
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
			left: 550px;
			top: 180px;
		}
}
            
        
    </style>
</head>
<body>

<div class="container">
   <!-- Trigger the modal with a button -->
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!-- Modal to delete the event -->

<div class="container">
   <!-- Trigger the modal with a button -->
   <!-- Modal -->
  <div class="modal fade " id="event_del_Modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
		<div class="modal-content">
        <div class="modal-header">
          <button style="position:absolute;top:0px;right:15px;" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		  <h4 id="myModalLabel">Want to Continue?</h4>
        </div>
        <div class="modal-body">
        <center>
        </div>
        <div class="modal-footer">
          <button style= "position:absolute;top:68px;left:180px;" id = "event_del_yes" type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
		  <button style= "position:absolute;top:68px;left:250px;" id = "event_del_no" type="button" class="btn btn-warning" data-dismiss="modal">No</button>
		  
		  <div id="alertCreateHow"></div>
        </div>
		</div>
   </div>
  </div>
  
</div>



   
    <div id="interestsWrapper" class="wrapper">
			<div class = "logo">
				<img src="Logo.jpg" class="float-right" width = 250px; height = 100px; >
			</div>
			
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar">
				  <ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="abcdnetworks.php">Home</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="about.php">About US</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="services.php">Services</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link " href="contact.php">Contact Us</a> 
					</li>
					<li class="nav-item" style="position:absolute;right:150px;">
					  <a class="nav-link " href="#">Welcome : <i><?php echo $_SESSION['loggedInUserId']; ?></i></a>	
					</li>
					<li class="nav-item" style="position:absolute;right:30px;">
					  <a class="nav-link" href="login.php">Log Out</a>	
					</li>
				  </ul>
			</nav>
				
		<legend class ="event" style="color:#58ACFA"> Booked Details </legend>
	
	<hr>
		
</body>
</html>

	</div>
	  

<?php

	
	
	if(isset($_SESSION['loggedInUserId']) != NULL)
	{
		
		
		$user = $_SESSION['loggedInUserId'];
				
		$con = mysqli_connect('localhost','root','') or die(mysqlii_error());
			
		mysqli_select_db($con,'vehicle_registration') or die("cannot select DB");

		$result = mysqli_query($con,"select R.reg_no, R.vehicle_name, R.insurance_no, V.manufacturing, V.colour, V.engine_capacity, V.seating, V.no_of_cyl, V.fuel, V.mfg_date, V.model, D.reg_date,D.chassis_no, D.engine_no, D.fc_upto from rto_info AS R, vehicle_details as V, registration_details AS D where V.reg_no=R.reg_no AND R.reg_no=D.reg_no AND D.reg_no='".$user."'");
		
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


    
</body>
</html>

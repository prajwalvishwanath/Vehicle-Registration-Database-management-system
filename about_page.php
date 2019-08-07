<?php
session_start();
?>

<!doctype html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style> 
	
	<title>Contact  Us</title>
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
		 
		 
		 
		 
		 .reg 
		 {
			position: absolute;
			left: 550px;
			top: 100px; 
			
		 }	

		

		
		
		
	     h1 {
			 position: absolute;
			 left : 650px;
			 top  : 70px;
			
		 }
		 
		
		
		hr 
		{
			margin-top :190px;
			
		}
		
		 
		
			
           
    </style>
</head>
<body>
   
   <div id="interestsWrapper" class="wrapper">
<body background="wood.jpg" width=500px; bgcolor = "#FFFFFF">
			<div class = "logo">
				<img src="Logo.jpg" class="float-right" width = 250px; height = 150px; >
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
					  <a class="nav-link disabled" href="contact_page.php">Contact Us</a> 
					</li>
					<li class="nav-item" style="position:absolute;right:30px;">
					  <a class="nav-link disabled" href="login_page.php">Login</a>	
					</li>
				  </ul>
				</nav>
				  <!--<a class="navbar-brand-home" href="home.php">Home</a>
				  <a class="navbar-brand-abtus" href="about_page.php">About US</a>
				  
				  <a class="navbar-brand-contactus" href="contact_page.php">Contact Us</a> 
				  <a class="navbar-brand-login" href="login_page.php">Login</a>	-->			  
			
		

	</div>
	
   <div class = "contactus"> 
		<h1>About US </h1>
		
		
	</div>

		<center><hr><b></h6> Welcome to Vehicle Registration System<br><center></h6></b>
		<p>In an RTO you will details of thousands of vehicles to store.<br> 
		It is tedious process to find exact vehicle of the particular region, and it consumes time to find all this information by looking at the records.<br>
		This system can help to keep accurate records for any type of vehicle. Its faster, easier, and more accurately keep track the owners and other details.
		
		The purpose of vehicle registration system is to automate the existing manual system by the help of computerized equipments and full-fledged computer software,<br>
		 fulfilling their requirements, so that the information can be stored for a longer period with easy accessing and manipulation of the same.<br>
		A vehicle registration database consists of all the vehicles registered under the RTO (Regional Transport Office).<br>
   		This database comprises of all the State Regions and their corresponding State Codes, the unique vehicle numbers, description of the Owner details, Vehicle Details and much more.<br><br>
		
		Furthermore information you can conatct us and give us the feedback of using this website.</P
		

    
<?php
if(isset($_POST["submit"]))
{
	if(!empty($_POST['custname']) && !empty($_POST['custaddr']) && !empty($_POST['custnum']) && !empty($_POST['custrole']) && !empty($_POST['custpass'])) 
	{
		$user    = $_POST['custname'];
		$addr    = $_POST['custaddr'];
		$contact = $_POST['custnum'];
		$role    = $_POST['custrole'];
		$pass    = $_POST['custpass'];

		$con = mysqli_connect('localhost','root','') or die(mysqlii_error());
		
		mysqli_select_db($con,'event_mgmt') or die("cannot select DB");

		$query = mysqli_query($con,"SELECT * FROM customer_tbl WHERE cust_name = '".$user."'");
		
		$numrows = mysqli_num_rows($query);
		
		$tot_entry_query = mysqli_query($con,"SELECT * FROM customer_tbl");
		
		$tot_num_of_entries = mysqli_num_rows($tot_entry_query);
		
		if($numrows==0)
		{
			if(strcmp($_POST['custrole'],'Admin') == 1)
			{
					
				$tot_num_of_entries = $tot_num_of_entries + 1;
				
				$sql="INSERT INTO customer_tbl(cust_name,cust_pwd,cust_addr,cust_contact,cust_role) VALUES('$user','$pass','$addr','$contact','$role')";

				$result = mysqli_query($con,$sql);

				if($result)
				{
					echo "Customer Details Successfully Created";
				} 
				else 
				{
					echo "Failure!";
				}
			}

		} 
		else 
		{
			echo "That username already exists! Please try again with another.";
		}

	} 
	else 
	{
		echo "All fields are required!";
	}
}
?>

</body>
</html>
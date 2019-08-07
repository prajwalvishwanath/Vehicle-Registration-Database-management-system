<html>
   
   <head>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <title>Login Page</title>
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
		 
		 
		 .login_legend 
		 {
			position: absolute;
			left: 650px;
			top: 100px; 
			
		 }	

		hr 
		{
			margin-top :150px;
			
		}	
		
		.login_form
		{
			position: absolute;
			left: 500px;
			top: 170px;
		}
		
		.login_usrname 
		{
			position: absolute;
			left: 140px;
			top: 35px;
		}
		
		.login_pwd {
			position: absolute;
			left: 140px;
			top: 100px;
		}
		
      </style>
      
   </head>
   
   
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
					  <a class="nav-link disabled" href="register.php">New User ? Register</a>	
					</li>
				  </ul>
				</nav>
		  
		<legend class ="login_legend" style="color:#030303"> LOGIN </legend>
	
	<hr>

	


      <div class= "login_form" align = "centre; width:40px">
         
            <div id="interestsWrapper" class="wrapper">
				
            <div class="login_details" style = "margin:70px">

               <form action = "" method = "post">
			   
			   <div class="form-group">
					<label style="position:absolute;left:25px; top:35px; "class="control-label col-sm-2" for="email">Username:</label>
						<div class="login_usrname" >
							<input style= "width:180px;"  type="text" class="form-control" id="usrname" placeholder="Enter username" name="usrname">
						</div>
				</div><br><br>
				
				<div class="form-group">
					<label style="position:absolute;left:25px; top:100px;" class="control-label col-sm-2" for="email">Password:</label>
						<div class="login_pwd" >
							<input style= "width:180px;" type="password" class="form-control" id="usrname" placeholder="Enter password" name="usrpwd">
						</div>
				</div><br>
				
				</div>
				
				<div class="container">
					<button style= "position:absolute;left:120px;top:160px;" type="submit" id= "login" class="btn btn-primary" name="sub" >Login</button>
					<button style= "position:absolute;left:200px;top:160px;" type="submit" id= "login" class="btn btn-primary" name="login_sub" >Cancel</button>
				</div>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
         </div>
			
      </div>

<?php



if(isset($_POST['sub']))
{
	$usn = $_POST['usrname'];

	$pwd = $_POST['usrpwd'];
	
	//echo $_POST['usrname'];

	$con = mysqli_connect("localhost:3306","root","");

	mysqli_select_db($con,"vehicle_registration");

	//$getID = mysqli_fetch_assoc(mysqli_query($con,"select cust_role from customer_tbl where cust_name = '$usn' and cust_pwd = '$pwd'"));
	
	//$userID = $getID['cust_role'];

	//echo $userID;
	
	$val = mysqli_query($con,"select user from loginform where user = '$usn' and password = '$pwd'");

	$userrole = mysqli_fetch_row($val);
	
	//echo $userrole[0];
	
	$userid = $userrole[0];
	
	//echo $userid;
	
	if(mysqli_num_rows($val) == 1)
	{ 
		if(strcmp($userid,'admin') == 0)
		{
			echo "<script> location.href='admin_page.php'; </script>";
			
			// Start the session
			session_start();
			
			$_SESSION["loggedInUserId"] = $usn;
			exit;
		}
		else
		{
			echo "<script> location.href='change.php'; </script>";
			
			// Start the session
			session_start();
			
			$_SESSION["loggedInUserId"] = $usn;
			
			echo $_SESSION["loggedInUserId"];
			exit;
		}
	}
	else
	{
	 echo "<div style='position:absolute;top:80px;left:400px;width:50%;' class='alert alert-info'><strong>Please verify the details entered!</strong></div>";
	 
	}
}



?>
	  
	  
   </body>
</html>
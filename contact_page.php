
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
		 
		 h5{
			position: absolute;
			 left : 450px;
			 top  : 150px; 
		 }
		 
		 .contactinfo
		 {
			position: absolute;
			 left : 50px;
			 top  : 300px;  
		 }
    
		h3
		{
			position: absolute;
			 left : 650px;
			 top  : 90px; 
		}
		
		hr 
		{
			margin-top :190px;
			
		}
		
		 .getintouch
		 {
			position: absolute;
			 left : 800px;
			 top  : 300px;  
		 }
		 
		 h4
		{
			position: absolute;
			 left : 50px;
			 top  : 250px; 
		}
		
		 h6
		{
			position: absolute;
			 left : 800px;
			 top  : 250px; 
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
		

	</div>
	
   <div class = "contactus"> 
		<h3>CONTACT US </h3>
		<h5> Contact us for more information and we will respond to any of your queries.  </h5>
		
	</div>

		<hr> 
		
		<h4>CONTACT INFO </h4>
		
	<div class = "contactinfo">
		<p>Address : Dr.Vishnuvardhan Road <br>
		Rajarajeshwarinagar,Channasandra,<br>
		Bengaluru - 560098<br><br>
		
		Telephone : +91 8495810102<br><br>
		
		Email : registration.rto@gmail.com 
	</div>
	
	<h6>GET IN TOUCH </h6>
	
	<div class = "getintouch">
		Email: <input id="get_in_touch_email" type="text" name="get_in_touch_email"><br /><br/>	
		Name: <input id="get_in_touch_name" type="text" name="get_in_touch_name"><br /><br/>
		Message : <textarea id="get_in_touch_msg" name="get_in_touch_msg" rows="4" cols="50"></textarea> <br/><br/>		
			
	</div>
    <div class="container">
			  <button style= "position:absolute;right:185px;top:520px;" type="submit" id= "cnt_submit" class="btn btn-primary" name="submit">Submit</button>
			  <button style= "position:absolute;right:85px;top:520px;" type="submit" id ="cnt_cancel" class="btn btn-primary" name="submit">Cancel</button>
			  
		
	</div>


    
<?php
if(isset($_POST["submit"]))
{
	echo "hiiii";
	//if(!empty($_POST['get_in_touch_email']) && !empty($_POST['get_in_touch_name']) && !empty($_POST['get_in_touch_msg'])) 
	//{
		$email    = $_POST['get_in_touch_email'];
		$name    = $_POST['get_in_touch_name'];
		$message = $_POST['get_in_touch_msg'];

		$con = mysqli_connect('localhost','root','') or die(mysqli_error());
		
		mysqli_select_db($con,'vehicle_registration') or die("cannot select DB");

		echo "Hi";
	//}
	//else
	//{
		echo "Hello";
	//}
}
?>

</body>
</html>
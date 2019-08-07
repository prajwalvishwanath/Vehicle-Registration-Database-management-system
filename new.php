<form action="" method="POST">
<label >Enter Number:-</label>	
					<input type="text" class="form-control" id="name"  name="search" value=""/>

 <input type="submit" id= "sear" class="btn btn-primary" name="submit"/>Search

</form>






<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="vehicle_registration";
		
		if(isset($_POST['submit'])){
		
		$reg= $_POST['search'];
		
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if($conn->connect_error)
				die("connection failed:".$conn->connect_error);
				
		$sql="select R.reg_no, R.vehicle_name, R.insurance_no, V.manufacturing, V.colour, V.engine_capacity, V.seating, V.no_of_cyl, V.fuel, V.mfg_date, V.model, D.reg_date,D.chassis_no, D.engine_no, D.fc_upto from rto_info AS R, vehicle_details as V, registration_details AS D where V.reg_no=R.reg_no AND R.reg_no=D.reg_no AND D.reg_no='".$reg."'";
		$result=$conn->query($sql);
		/*print_r($result);
		foreach($result as $i=>$v){
			foreach($v as $i1=>$v1){
				echo " RESULT[$i][$i1]=$v1"."<br>";
			}
		}*/
		echo"<table border='1'>";
		echo"<tr>";
		echo "<th>Reg No</th><th>Vehicle name</th><th>Insurance No</th><th>Manufacturing</th><th>Colour</th><th>Engine Capacity</th><th>Seating</th><th>No of cyl</th><th>Fuel</th><th>Mfg Date</th><th>Model</th><th>Reg Date</th><th>Chassis No</th><th>Engine No</th><th>FC Upto</th>";
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc()){
				echo "<tr>";
				echo "<td>" . $row['reg_no'] . "</td><td>" . $row['vehicle_name'] . "</td><td>" . $row['insurance_no'] . "</td><td>" . $row['manufacturing'] . "</td><td>" . $row['colour'] . "</td><td>" . $row['engine_capacity'] . "</td><td>" . $row['seating'] . "</td><td>" . $row['no_of_cyl'] . "</td><td>" . $row['fuel'] . "</td><td>" . $row['mfg_date'] . "</td><td>" . $row['model'] . "</td><td>" . $row['reg_date'] . "</td><td>" . $row['chassis_no'] . "</td><td>" . $row['engine_no'] . "</td><td>" . $row['fc_upto'] . "</td></tr>";
				
			}
		}	
		}
?>		
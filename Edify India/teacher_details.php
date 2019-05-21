<?php

 session_start();
  $uid=$_SESSION["u_id"];
  $pwd=$_SESSION["password"];
  if($uid=="EdifyIndia" && $pwd=="EdifyIndia@090318")
  {

$servername = "localhost";
$username = "edifyindia";
$password = "edifyindia";
$dbname = "edifyindia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM teacher_reg";
$result = $conn->query($sql);
?>
<!DOCTYPE>
<html>
<head>
	<title>Teacher's Details</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="external_files/stylesheet.css">	
	
	<style type="text/css">
		.content
		{
			width: 100%;
			min-height: 300px;
			padding-bottom: 30px;
			padding-top: 30px;
			border-radius: 10px;
			background-color: #EDF6ED;
			margin-bottom:0px;
			
		}
		.footer
		{
		margin-top:0px;
		float:left;
		}
	</style>			
</head>

<body>
	<div class="header" >
		<img style="border-radius: 100px ; margin-left: 20px" src="images/logo.png">
				
		<li><a href="logout.php">Logout</a></li>
		<li class="dropdown">
  		  	<a class="dropbtn">View
   		 	<div class="dropdown-content">
  				<a href="student_details.php">Student's Details</a>
   		  	 	<a href="#">Teacher's Details</a>
    				<a href="attendance_details.php">Attendance Report</a>
    		</div>
    		</a>
 		</li> 

		<li class="dropdown">
  		  	<a class="dropbtn">Register
   		 	<div class="dropdown-content">
  				<a href="student_reg.html">Student</a>
   		  	 	<a href="teacher_reg.html">Teacher</a>
    		</div>
    		</a>
 		</li> 
	</div>

	 <div class="content" align="center">
		
  <h4>Teacher's Details</h4><br>
  
  
  
  
 <?php 
if ($result->num_rows > 0)
 { 
 ?> 
    <table style="width:90%" border="1px" solid #29A729>
  <tr>
   <th>Name</th><th>Location</th> 
   <th>Qualification</th><th>Specification</th> <th>Subject Preference</th>
   <th>Contact Number</th> <th>User Id(DOR)</th><th>Password(DOB)</th> 
  </tr> 
  <?php                  
    while($row = $result->fetch_assoc()) 
    {
    	$temp= $row["u_id"] ;
    	$result1 = $conn->query("SELECT password FROM login_details where u_id='$temp'");
    	$row1 = $result1->fetch_assoc()
    ?>
   <tr>
    <td><?php   echo $row["tname"] ; ?></td><td><?php echo $row["location"]; ?></td>
    <td><?php   echo $row["quali"] ; ?></td><td><?php   echo $row["spec"] ; ?></td><td><?php   echo $row["subpre"] ; ?></td>
   <td><?php   echo $row["contact_no"] ; ?></td><td><?php echo  $row["u_id"]; ?></td> <td><?php  echo $row1["password"]; ?></td> 
  </tr>
    
    <?php
    }
    ?>
    </table>
    <?php
  
} 
else 
{
    echo "0 results";
}
$conn->close();
?>
	</div>


	<div class="footer" align="center">
		<p>Head Office : Sukanta Nagar, Sector 4, Salt Lake City, Kolkata, West Bengal 700098</br>
		Phone:9304574156 , 7979734022</p>
	</div>

</body>

</html>


<?php
}
else
{
 header("location:index.html");
 }
?>


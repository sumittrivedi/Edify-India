<?php
	session_start();
	$uid=$_SESSION["u_id"];
	$pwd=$_SESSION["password"];
	if($uid=="EdifyIndia" && $pwd=="EdifyIndia@090318")
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="external_files/stylesheet.css">	
	<script type="text/javascript"src="external_files/script.js"></script>	
	<style type="text/css">
		.admin
		{
			width: 100%;
			height: 300px;
			border-radius: 10px;
			font-size:28px;
			background-color: #EDF6ED;
			color: #29A729;
		}
		.admin-left
		{
			width: 15%;
			float:left;
			margin-top:100px;
		
		}
		.admin-right
		{
			width: 85%;
				float:left;
					margin-top:50px;
			
		}
		
	</style>			
</head>

<body>
	<div class="header">
	    
		<img style="border-radius: 100px ; margin-left: 20px" src="images/logo.png">
			
		<li><a href="logout.php">Logout</a></li>
		<li class="dropdown">
  		  	<a class="dropbtn">View
   		 	<div class="dropdown-content">
  				<a href="student_details.php">Student's Details</a>
   		  	 	<a href="teacher_details.php">Teacher's Details</a>
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

	<div class="admin" align="center">
			
				
				<div class="admin-left" align="center">
			  <a href='https://www.symptoma.es/'</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=95f2a5bb02245f93121cf16a4ea1bceee0c319e1'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/473614/t/1"></script>
            	</div>
            	
                <div class="admin-right" align="center">
                    	Hello Admin </br>
			<img style="border-radius: 10px;margin-top:20px;" src="images/welcome.jpg">
			<marquee style="font-style: italic">
				Welcome to Edify India
			</marquee>
				</div>
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

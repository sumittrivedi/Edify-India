<?php
session_start();
 if(!isset($_SESSION["u_id"],$_SESSION["password"]))
        {
                header("location: index.html");
        }
 else
 {
?>
<!DOCTYPE>
<html>
<head>
	<title>Attendance</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="external_files/stylesheet.css">	
	<script type="text/javascript"src="external_files/script.js"></script>	
	<style type="text/css">
		.content
		{
			width: 100%;
			height: 400px;
			padding-bottom: 30px;
			padding-top: 30px;
			border-radius: 10px;
			background-color: #EDF6ED;
		}
		table
		{
			color: white;		
			width: 400px;
			margin-top: 8px;
			border-radius: 20px;
		}
		table input:hover
		{
			background-color:#ED993A;
		}
	</style>			
</head>

<body>
	<div class="header" >
		<img style="border-radius: 100px ; margin-left: 20px" src="images/logo.png">
				
		<li><a href="logout.php">Logout</a></li>
 
 		<li><a href="#">Attendance</a></li>
 		<li><a href="login.php">Profile</a></li>
		
	</div>

	 <div class="content">
		<table align="center" cellpadding="5px" cellspacing="12px" bgcolor="#A0C890">
			<tr><th>Attendance Report</th></tr>
		</table>
		<form action="attendanceReport.php" method="post">
		<table align="center" cellpadding="5px" cellspacing="12px" bgcolor="#72846B">
			<tr></tr>
			<tr><td>Student's Name</td><td><input type="text" name="sname" required></td></tr>
			<tr><td>Teacher's Name</td><td><input type="text" name="tname" required></td></tr>
			<tr><td>Date</td><td><input type="date" name="date" required></td></tr>
			<tr><td>Status</td><td>
				<select name="status">
					<option value="P">Present</option>
					<option value="A">Absent</option>
				</select>
				</td>
			</tr>
			<tr><td>Review</td><td><input type="text" name="review"></td></tr>
			<tr><td></td><td><input type="submit" value="submit" name="submit"></td></tr>		
		</table>
		</form>
		</div>

	<div class="footer" align="center">
		<p>Head Office : Sukanta Nagar, Sector 4, Salt Lake City, Kolkata, West Bengal 700098</br>
		Phone:9304574156 , 7979734022</p>
	</div>

</body>

</html>
<?php
}
?>




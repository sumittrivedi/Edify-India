<?php
	session_start();
	$conn=mysqli_connect("localhost","edifyindia","edifyindia","edifyindia");
	$u_id=$_SESSION["u_id"];
	$que="select * from teacher_reg where u_id='$u_id'";
	$result = $conn->query($que);
	$row = $result->fetch_assoc();
	if(!empty($row))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Welcome ".$row["sname"]; ?></title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="external_files/stylesheet.css">	
	<script type="text/javascript"src="external_files/script.js"></script>	
	<style type="text/css">
		
		.content
		{
			width: 100%;
			min-height: 200px;
			background-color: #EDF6ED;
			border-radius: 10px;
			font-size:28px;
			padding-top:4%;
			padding-bottom:4%;
			display: flex;
  
			
		}
		.content-left
		{
			width: 24%;
			height: 92%;
			float: left;	
			border-radius: 10px;
			padding-left:3%;
			padding-right:3%;
			
		}
		.content-right
		{
			width: 64%;
			height: 92%;
			position:relative; 
			float: left;	
			border-radius: 10px;
			padding-left:3%;
			padding-right:3%;
		}
		.content img 
		{
			
  			border-radius: 10px;
  			
		}
		th
		{
		text-align :left;
		}

	</style>			
</head>

<body>
	<div class="header" >
		<img style="border-radius: 100px ; margin-left: 20px;" src="images/logo.png">
				
		<li><a href="logout.php">Logout</a></li>
 		<li><a href="attendance.php">Attendance</a></li>
 		<li><a href="#">Profile</a></li>
		
	</div>

	<div class="content" align="center">
				
 		<div class="content-left">
 		<marquee >
 		<?php echo "welcome <strong>".$row["sname"]."</strong>"."<br></br>"; ?>
 		</marquee>
		<img style="height:220px;width:220px" src="images/teachers/<?php echo $row["photo"] ?>"/>
		</div>
		
 		<div class="content-right">
 		
 			<table cellpadding="3px" cellspacing="px" align="center" style="padding-top:10px;padding-left:20px">
				<tr>
					<th><?php echo "User ID"; ?></th>
					<td><?php echo $row["u_id"]; ?></td>
				</tr>
				
				<tr>
					<th><?php echo "Qualification"; ?></th>
					<td><?php echo $row["quali"]; ?></td>
				</tr>
					<tr>
					<th><?php echo "Specification"; ?></th>
					<td><?php echo $row["spec"]; ?></td>
				</tr>
					<tr>
					<th><?php echo "Subject Preference"; ?></th>
					<td><?php echo $row["subpre"]; ?></td>
				</tr>
				<tr>
					<th><?php echo "City"; ?></th>
					<td><?php echo $row["location"]; ?></td>
				</tr>
				<tr>
					<th><?php echo "Email"; ?></th>
					<td><?php echo $row["u_email"]; ?></td>
				</tr>
				<tr>
					<th><?php echo "Contact No"; ?></th>
					<td><?php echo $row["contact_no"]; ?></td>
				</tr>
				<tr>
					<th><?php echo "Address"; ?></th>
					<td><?php echo $row["address"]; ?></td>
				</tr>
			</table>
		
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


<!DOCTYPE html>
<html>
<head>
	<title>Registration Status</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="external_files/stylesheet.css">	
	<script type="text/javascript"src="external_files/script.js"></script>	
	<style type="text/css">
		.tea_reg
		{
			width: 100%;
			height: 350px;
			border-radius: 10px;
			
			font-size:22px;
			background-color: #EDF6ED;
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
    				<a href="attendance_report.php">Attendance Report</a>
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

	<div class="tea_reg" align="center">

		<?php
			if(isset($_POST['upload']))
			{
			$target = "images/teachers". basename($_FILES['photo']['name']);
			$name=$_POST['name'];
			$sex=$_POST['sex'];
			$quali=$_POST['qualification'];
            $spec=$_POST['spec'];
            $subpre=$_POST['subpre'];
			$location=$_POST['location'];
			$address=$_POST['address'];
			$pincode=$_POST['pincode'];
			$uemail=$_POST['uemail'];
			$contactno=$_POST['contactno'];
			$uid=$_POST['uid'];
			$password=$_POST['password'];
			$pic=$_FILES['photo']['name'];
			$conn=mysqli_connect("localhost","edifyindia","edifyindia","edifyindia");
			$query1="INSERT INTO teacher_reg(tname,sex,quali,spec,subpre,location,address,pincode,u_email,contact_no,u_id,photo) values('$name','$sex','$quali','$spec','$subpre','$location','$address','$pincode','$uemail','$contactno','$uid','$pic')";
			$query2="INSERT INTO login_details(u_id,password) values('$uid','$password')";
			
			if(move_uploaded_file($_FILES['photo']['tmp_name'],$target))
				{ 
				mysqli_query($conn,$query1);
			  mysqli_query($conn,$query2);
				?>
				<img  src="images/reg_successsful.png" style="width:480px;height:239px;margin-bottom:30px"/></br>
				<?php
				echo "The file ". basename( $_FILES['photo']['name']). 
				" has been uploaded, and your information has been added to the directory"; 
				}
			}	
			else 
			{  
				echo "Sorry, there was a problem uploading your file. Registration failed";
				 
			} 

		?>
	</div>	
	<div class="footer" align="center">
		<p>Head Office : Sukanta Nagar, Sector 4, Salt Lake City, Kolkata, West Bengal 700098</br>
		Phone:9304574156 , 7979734022</p>
	</div>

</body>

</html>
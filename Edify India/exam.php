<?php
        session_start();
        if(!isset($_SESSION["u_id"],$_SESSION["password"]))
        {
                header("location: index.html");
        }
     else
     {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Examination</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="external_files/stylesheet.css">	
	<script type="text/javascript"src="external_files/script.js"></script>
	<style type="text/css">
		.content
		{
			width: 100%;
			min-height: 100px;
			background-color: #EDF6ED;
			border-radius: 10px;
			font-size:28px;
			padding-top:4%;
			padding-bottom:4%;
		    padding-left:4%;
			display: flex;
		}
	
	</style>				
</head>

<body>
	<div class="header">
		<img style="border-radius: 100px ; margin-left: 20px" src="images/logo.png">
			
		<li><a href="logout.php">Logout</a></li>
		<li><a href="payment.php">Payment</a></li>
		<li><a href="attendance.php">Attendance</a></li>   			
		<li><a href="student_home.php">Profile</a></li>
      			
      			
    		  	
	</div>

<div class="content">
<p>
<strong>Instruction</strong><br><br>

1.  Please ensure that you have a reliable internet for the whole duration of the test.</br>
3.  Please take answersheet for subjective Questions.</br> 
4.  You can not pause the test.</br>
5.  This test comprises of multiple-choice questions (MCQ) as well as Subjective questions.</br>
6.  There are a total of 27 Questions in the Test (20 MCQ and 7 SUBJECTIVE).</br>
7.  Total Time Duration of the Test is 75 minutes.</br>
8.  You will get 3 marks for every correct answer for MCQ.</br>
9.  Please submit your answersheet of subjective question to your Teacher.</br>
10. You are advised not to close the browser window before submitting the test.</br>
11. You will get passcode on your registered mobile number 5 minutes before schedule of your examination.</br>
</br>
<a href="https://docs.google.com/forms/d/1D_X7c2bOH2JMNE3Lw1CkVyW8nu311ip1-xgkVg5sgIc/edit">Click here to take examination for class 7(Maths)</a>


<span style="padding : 30px">
<!---
Result will be announced soon
--->
</span>
</p>



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
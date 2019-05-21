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
	<title>Payment</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
	<link rel="stylesheet" type="text/css" href="external_files/stylesheet.css">	
	<script type="text/javascript"src="external_files/script.js"></script>
	<style type="text/css">
		.main
		{
			width:100%;
			height: 630px;
			padding-bottom: 30px;
			padding-top:10px;
			font-size:20px;
			border-radius:10px;
			margin-bottom:0px;
			
		}
		.msg
		{
			width:94%;
			padding-left: 3%;
			padding-right: 3%;
			padding-top:30px;
			padding-bottom:30px;	
		}
		.paytm
 		{
			
			width: 50%;
			height: 470px;
			
			border-radius: 5px;
			float:right;
			
		}
		.upi
		{
			
			width: 50%;
			height: 470px;
			
			float:left;
			
		}
		
	</style>			
</head>

<body>
	<div class="header" >
		<img style="border-radius: 100px ; margin-left: 20px" src="images/logo.png">
      			<li><a href="logout.php">Logout</a></li>
      			<li><a href="exam.php">Examination</a></li>
      			<li><a href="attendance.php">Attendance</a></li>
     			<li><a href="student_home.php">Profile</a></li>
    		
    	</div>

  		<div class="main" align="center">

  			<div class="msg">
  			Please mention remark or add description as <strong>student's name</strong> while paying through UPI or Paytm.</br></br>
			Send screenshot of your payment confirmation page to whatsapp number <strong>7564920904</strong> </br>
			<a href="http://m.p-y.tm/requestPayment?recipient=9304574156&amount=2500">Click here to pay through paytm</a>
  			</div>

  			<div class="upi">
				<img align="center" src="images/upi.jpeg"/>			
			</div>

			<div class="paytm">
				<img align="center" src="images/paytm.jpg"/>			
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
?>
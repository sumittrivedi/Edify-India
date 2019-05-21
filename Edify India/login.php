<?php
    	$user=$_POST['uid'];
    	$pwd=$_POST['password'];
    	$submit_ID=$_POST['submit_ID'];
        	if(!empty($submit_ID) && $user=="EdifyIndia" && $pwd=="EdifyIndia@090318")
        	{
        	    session_start();
        		$_SESSION["u_id"] = $user;
        		$_SESSION["password"] = $pwd;
        		header("location:admin_home.php");
        	}
        	else
        	{
        		$conn=mysqli_connect("localhost","edifyindia","edifyindia","edifyindia");
        		$que1="select * from login_details where u_id='$user' and password='$pwd'";
        		$result = $conn->query($que1);
        		$row = $result->fetch_assoc();
        		if(!empty($submit_ID) && !empty($row))
        		{
        			session_start();
        			$_SESSION["u_id"] = $row["u_id"];
        			$_SESSION["password"] = $row["password"];
        			if(substr($user,-2)=="TE")
        			{
        			    header("location:teacher_home.php"); 
        			}
        			else
        			{
        			    header("location:student_home.php");
        			}
        		}
        		else
        		{
        			echo "Invalid Details";
        			header("location:index.html");
        		}
        	}

?>




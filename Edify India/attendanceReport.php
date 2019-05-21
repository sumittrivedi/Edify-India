<?php
        session_start();
        if(!isset($_SESSION["u_id"],$_SESSION["password"]))
        {
                header("location: index.html");
        }
        else
        {
        $sname=$_POST['sname'];
        $tname=$_POST['tname'];
        $date1=$_POST['date'];
        $status=$_POST['status'];
        $review=$_POST['review'];
        $reportedby=$_SESSION["u_id"];
        $submit_ID=$_POST['submit'];
        $servername = "localhost";
        $username = "edifyindia";
        $password = "edifyindia";
        $dbname = "edifyindia";
        $conn = new mysqli($servername, $username, $password, $dbname);
            if(!empty($submit_ID)) 
            {
             	
            	$to = "welcometoedifyindia@outlook.com";
             	$subject = "Attendance Report";
            	$txt = "Student's Name : $sname. Teacher's Name : $tname. Date : $date1. Status : $status. Review : $review. Report sent by $reportedby.";
            	$headers = "Attention";
            	mail($to,$subject,$txt,$headers);
            	mysqli_query($conn,"INSERT INTO AttendanceReport VALUES ('$sname','$tname','$date1','$status','$review','$reportedby')");	
            	
            	if(substr($_SESSION["u_id"], -2)=="TE")
  				    header("location:teacher_home.php");
		    	else
 				    header("location:student_home.php");
            }
        }
?>
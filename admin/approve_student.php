<?php
	include 'dbcon.php';
	$id	=$_GET['id'];
	$status	=$_GET['status'];
	$sql1="UPDATE login_tb SET status='1' where  user_id='$id'";
	  $result1=mysqli_query($con,$sql1);
	  $sql2="UPDATE user_tb SET status='1' where  user_id='$id'";
	  $result2=mysqli_query($con,$sql2);
	echo "<script>alert('Update Successfully')</script>";
	echo "<script>window.location='view_student.php'</script>";

?>

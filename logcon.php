<?php
include 'dbcon.php';
session_start();

if(isset($_POST['submit']))
{
	
$a=$_POST["user"];
$b=$_POST["pass"];


//echo($a);
}

$sql="SELECT * FROM `login_tb`";
//INSERT INTO `login`(`login_id`, `reg_id`, `email`, `password`, `role`)
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['login_id'];
	//echo $i;
	//echo($row['password']);
	?>
	
	<?php
	if($a ==$row['user_name']&&$b==$row['password']&&$row['user_type']=='staff')
	     {
		 $_SESSION['user_name']=$a;
		$_SESSION['passsword']=$b;
		
		 //echo "hiii";
		 //$sql1="UPDATE `login_tb` SET `status`='1' WHERE login_id=$i";
         //$result=mysqli_query($con,$sql1);
		 header('location:staff/Theme/staffHome.php');
		 }
		elseif($a==$row['user_name']&&$b==$row['password']&&$row['user_type']=='admin')
	    {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		
		 //$_SESSION['utype']='2';
		 //$_SESSION['id']=$i;
		 
		 //$sql1="UPDATE `login_tb` SET `status`='1' WHERE login_id=$i";
        // $result=mysqli_query($con,$sql1);
		 header('location:admin/adminHome.php');
		}
		elseif($a==$row['user_name']&&$b==$row['password']&&$row['user_type']=='student')
	    {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 //$_SESSION['utype']='2';
		 //$_SESSION['id']=$i;
		 
		 //$sql1="UPDATE `login_tb` SET `status`='1' WHERE login_id=$i";
        // $result=mysqli_query($con,$sql1);
		 header('location:student/studentHome.php');
		}
		 else{
		echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
	     }
	
	?>	
	
	<?php

}
?>
<?php
include 'dbcon.php';
session_start();
$id=$_SESSION["id"];
//echo($id);
//$sql1="UPDATE `login` SET `status`='0' WHERE `login_id`='$id'";
//$result=mysqli_query($con,$sql1);
//header('location:index.php');
unset($_SESSION["uname"]);
//unset($_SESSION['passsword']);
//unset($_SESSION['utype']);
unset($_SESSION['id']);
session_destroy();
//include 'AMS-2/index.php'
header("location:../../AMS/index.php");
 ?>
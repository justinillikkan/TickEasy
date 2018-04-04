<html>
<head>
<style>  
img.log 
{
    width: 40%;
    border-radius: 50%;
}
body{
background:url("pics/23.png" );
}
</style>
</head>
<body>
<center>
<div style="background-color:black;10px">
<marquee behavior="alternate"style="color:white;font-size:55"><i>AMS - "ATTENDANCE MANAGEMENT SYSTEM" </i></marquee></font></div>
<form name="myform" method="post">
<input type="submit" name="s5" value="LOGOUT" style="width:100px;float:right;font-weight:bold;height:50px;background-color:black;color:white;">
  <div class="imgcontainer">
    <img src="pics/logo.png" alt="Avatar" class="log">
  </div>
  <div><br><br><br><br><br>
<br><input type="submit" name="s1" value="ADD STAFF"/style="width:300px;font-weight:bold;height:50px;background-color:black;color:white;">
<input type="submit" name="s2" value="ASSIGN DUTY"/style="width:300px;font-weight:bold;height:50px;background-color:black;color:white;">
<br><br><input type="submit" name="s3" value="VIEW ATENDANCE"/style="width:300px;font-weight:bold;height:50px;background-color:black;color:white;">
<input type="submit" name="s4" value="ASSIGN CLASS TEACHERS"/style="width:300px;font-weight:bold;height:50px;background-color:black;color:white;">
</div>

<?php
session_start();
$a=$_SESSION["user_validate"];
if(isset($_POST["s1"]))
{
	header("Location:register.php");
}
if(isset($_POST["s2"]))
{
	header("Location:assign.php");
}
if(isset($_POST["s3"]))
{
	header("Location:admin3.php");
}
if(isset($_POST["s4"]))
{
	header("Location:admin4.php");
}
if(isset($_POST["s5"]))
{
	session_unset($a);
	session_destroy();
	header("Location:login.php");
}
?>
 </form>
</center>
</body>
</html>
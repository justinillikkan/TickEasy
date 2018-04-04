<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
	$uname=$_POST["uname"];
	$pswd=$_POST["psw"];
$res=mysqli_query($con,"select * from `login`,`staff_subject` where `l_user`='$uname' and `l_pswd`='$pswd' and `role`='2'");
$row=mysqli_fetch_array($res);
if(!empty($row))
{

	$_SESSION['uname']=$uname;
	$_SESSION['id']=$row['l_id'];
	header("location:staff.php");
}
else
{
	echo '<script>alert("Invalid username or Password");</script>';
}
}
?>
<html>
<head>
<center>
<h1 style="color:red;"><b>STAFF PORTAL</h1>
</center>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}
li {
    float: left;
}
li a {
    display: block;
    color: red;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:lightblue;
}
body{
background:url("10.png" );
}
</style>
<body>
<ul>
  <li><a class="active" href="login.php">HOME</a></li>
</ul>
<body>
<br><br><br><br><br><br><br><br><br><br>
<center>
<form action="#" method="POST">
<form action="#" method="POST">
<br><fieldset style="height=40px;width:40px;background-color:brown;">
<center>
<table style="border:inset">
    <tr>
	<h1 style="color:black;"><b>STAFF LOGIN</h1>
	<td><label style="color:white; font-size:25"><b>Username</b></label></td>
    <td><br><input type="text" style="width=30px; height:30px;" placeholder="Enter Username" name="uname" style: width="100"/></font></td></tr>

    <tr><td><br><label style="color:white;font-size:25"><b>Password</b></label></td>
   <td> <br><br><input type="password" style="width=30px; height:30px;" placeholder="Enter Password" name="psw" ><br><br></tr></td>
        </table>
		<center>
     <input type="checkbox" checked="checked"><label style="color:orange; font-size:20"> Remember me</label><br><br>
	 <button type="submit" name="submit" style="width:100px;height:50px;backgrond-color:white;color:black;"><b>Login</button><br><br>
	   
	  </center>
	  </table>
	 </div>
	  </form>
	</body>
</html>
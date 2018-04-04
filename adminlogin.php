
<html>
<head>
<center>
<h1 style="color:black;"><b>ADMIN'S LOGIN</h1>
</center>
<style>
ul {
    list-style-type: none;
    margin: 0; 
	<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
	$uname=$_POST["uname"];
	$pswd=$_POST["psw"];
$res="select * from `login_tb` where `user_name`='$uname' and `password`='$pswd' and `user_type`='admin'";
//$res="SELECT * FROM `login_tb` WHERE "
$result=mysqli_query($con,$res);
//while($row=mysqli_fetch_array($result))
$row=mysqli_fetch_array($result);
if(!empty($row))
{
	$_SESSION['id']=$row['user_id'];
	$_SESSION['uname']=$uname;
	 header('location:admin/adminHome.php');
}
else
{
		echo '<script>alert("Invalid username or Password");</script>';
}
}
?>
    padding: 0;
    overflow: hidden;
    background-color: white;
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
background:url("images/301.jpg");
}
</style>
<body>
<ul>
  <li><a class="active" href="index.php">HOME</a></li>
  <tr><li><a href="stafflogin.php">STAFF PORTAL</a></li></tr>
  <tr><li><a href="studentlogin.php">STUDENT PORTAL</a></li></tr>
</ul>
<body>
<br><br><br><br><br><br><br><br><br><br>
<center>
<form action="#" method="POST">
<br><fieldset style="padding:30px; position:absolute;right:300; height=40px;width:40px;background-color:brown;">
<center>
<table style="border:inset">
    <tr>
	<h1 style="color:black;"><b>ADMIN'S LOGIN</h1>
	<td><label style="color:white; font-size:25"><b>Username</b></label></td>
    <td><br><input type="text" style="width=30px; height:30px;" placeholder="Enter Username" name="uname" style: width="100"/></font></td></tr>

    <tr><td><br><label style="color:white;font-size:25"><b>Password</b></label></td>
   <td> <br><br><input type="password" style="width=30px; height:30px;" placeholder="Enter Password" name="psw" ><br><br></tr></td>
        </table>
		<center>
    
	 <button type="submit" name="submit" style="width:100px;height:50px;backgrond-color:white;color:black;"><b>Login</button><br><br>
	   
	  </center>
	  </table>
	 </div>
	  </form>
	</body>
</html>
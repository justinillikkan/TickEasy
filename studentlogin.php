<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
		
//$captcha = $_POST['g-recaptcha-response'];
//$secret = "6Ld0IUEUAAAAAIHpnm9GGqB3R6OnPB4qpg7Ff1_8";
//$ip = $_SERVER['REMOTE_ADDR'];
//$action = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
//$result = json_decode($action,TRUE);

//if($result['success']) {

	$uname=$_POST["uname"];
	$pswd=$_POST["psw"];

			//function encryptIt($q){
    //$cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    //$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    //return( $qEncoded );
//}
	
	//$encrypted = encryptIt($pswd);
	//echo $encrypted;
	//$pw=decryptIt( '$pswd' );
	//echo $pw;
	
//$res=mysqli_query($con,"select * from login_tb where `user_name`='$uname' and `password`='$encrypted' and `user_type`='student' and status='1'");
$res=mysqli_query($con,"select * from login_tb where `user_name`='$uname' and `password`='$pswd' and `user_type`='student' and status='1'");

$row=mysqli_fetch_array($res);
//$pw=decryptIt( $row['password'] );
	//echo $pw;

if(!empty($row))
{
	$_SESSION['id']=$row['user_id'];
	$_SESSION['bid']=$row['batch_id'];
	//$_SESSION['bid']=$row['batch_id'];
	$_SESSION['uname']=$uname;
	header("location:student/studentHome.php");
}
else
{
	echo '<script>alert("Invalid username or Password");</script>';
}
}
//else{
	//echo '<script>alert("Invalid recaptcha ");</script>';
//}
//}
?>
<html>
<head>
<center>
<h1 style="color:black;"><b>STUDENT PORTAL</h1>
</center>
<style>
ul {
    list-style-type: none;
    margin: 0;
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
background:url("images/301.jpg" );
}
</style>
<body>
<ul>
  <li><a class="active" href="index.php">HOME</a></li>
  <tr><li><a href="adminlogin.php">ADMIN PORTAL</a></li></tr>
  <tr><li><a href="stafflogin.php">STAFF PORTAL</a></li></tr>
</ul>

<script src='https://www.google.com/recaptcha/api.js'></script>
<br><br><br><br><br><br><br><br><br><br>

<form action="#" method="POST">
<form action="#" method="POST">
<br><fieldset style="padding:10px; position:absolute;right:300; height=40px;width:50px;background-color:brown;"  >
<div >
<table style="border:inset" align
    <tr>
	<h1 style="color:black;"><b>STUDENT LOGIN</h1>
	<td><label style="color:white; font-size:25"><b>Username</b></label></td>
    <td><br><input type="text" style="width=30px; height:30px;" placeholder="Enter Username" name="uname" style: width="100"/></font></td></tr>

    <tr><td><br><label style="color:white;font-size:25"><b>Password</b></label></td>
   <td> <br><br><input type="password" style="width=30px; height:30px;" placeholder="Enter Password" name="psw" ><br><br></tr></td>
        </table>
		
   <center>
   <div class="g-recaptcha" data-sitekey="6Ld0IUEUAAAAAB7C4-cyR_Zr2XZcrGKjA2rQ-151"></div>
	 <button type="submit" name="submit" style="width:100px;height:50px;backgrond-color:white;color:black;"><b>Login</button><br><br>
	   
	  </center>
	
	   
	  
	  </table>
	 </div>
	  </form>
	</body>
</html>
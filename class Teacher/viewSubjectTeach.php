<?php 
include 'dbcon.php';
session_start();
?>
<html>
<head>
<center>
<link rel="stylesheet" type="text/css" href="exter28-09.css">
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
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
div.heading{
background-color:black;
text_align:center;
width:100%;
height:140px;
border:2px solid black;
color:white;
}
li a:hover {
    background-color:pink;
}
div.form1
{
position:absolute;
width:70%;
margin-top:100px;
border:2px;
}
table, th, td {
    padding: 10px;
	font-weight:bold;
	
}
table {
    border-spacing: 10px;
}
div.main{
position:relative;
margin-top:20px;
margin-left:2px;
margin-right:2px;
width:100%;
height:600px;
background:url(22.jpg);
}
div.logo{
position:absolute;
right:30px;
margin-top:2px;
width:128px;
height:128px;
z-index:1;
}
body
{

background-color:pink;
background:url("25.png");
}

</style>
</head>
<body alink="white" vlink="white" link="white">
<form action="#" method="post"/>
<div class="head" style="background-color:powerblue";>
<i><h1 style="color:black"> <center>EDIT PROFILE</b></i> </center></h1>
</div>

<ul>
  <li><a  href="stlogin.php">HOME</a></li>
   <li><a href="st.php">BACK</a></li>
</ul>
</br>
</br>
</br>
<table border=10 align="center" bgcolor="grey" >
<h1 align="center" style="color:black;"><i>YOUR DETAILS</i></h1>
<?php 
$name=$_SESSION['uname'];
$id=$_SESSION['id'];
$sql="select * from staff_tb,user_tb,login_tb where login_tb.user_id='$id' and login_tb.user_name='$name'";
$result=mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
$ad=$row['address'];
$p=$row['phone'];
$de=$row['designation'];
//$ge=$row['gen'];
$qa=$row['qualification'];
$res=mysqli_query($con,"select * from `designation_tb` where `desi_id`='$de'");
$row1=mysqli_fetch_array($res);
//$res1=mysqli_query($con,"select * from `gen` where `gen_id`='$ge'");
//$row2=mysqli_fetch_array($res1);
$res2=mysqli_query($con,"select * from `quali_tb` where `quali_id`='$qa'");
$row3=mysqli_fetch_array($res2);
	?>
	<tr>
<td>NAME/USERNAME</td><td><?php echo $row['first_Name']?></td>
</tr>

<tr><td>DESIGNATION</td><td>	<select>			  <?php
				  
				  $requst=mysqli_query($con,"select * from designation_tb");
				  
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option value="<?php echo $row1['desi_id'];?>"><?php echo $row1['designation'];?></option>
				 
				  
					
					 <?php
					 
					  }
					 ?></select></td>
</tr>					 
<tr>
<td>ADDRESS</td><td><input type="text" name="add" value="<?php echo $ad; ?>"/></td>
</tr>
<tr>
<td>PHONE</td><td><input type="text" name="phn" value="<?php echo $p; ?>"/></td>
</tr>

<tr>
<td>QUALIFICATION</td><td> <select> 
<?php
				  
				  $requst=mysqli_query($con,"select * from quali_tb");
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option value="<?php echo $row3['quali_id'];?>"><?php echo $row3['qualification'];?></option>
				 
				  
					
					 <?php
					  }
					 ?>
					 
					 </select></td>
                  </tr>
</td>
</tr>
</table>
<input type="submit" name="submit" value="UPDATE"/ style="width:100px;height:50px;">
<?php	
$name=$_SESSION['uname'];
if(isset($_POST['submit']))
{
	$a=$_POST["add"];
	$b=$_POST["phn"];
	$c=$_POST["quali"];
	$sql=mysqli_query($con,"UPDATE `staff` set `add`='$a',`phn`='$b' where sf_name='$name'");
	$id=mysqli_query($con,"select qua_id from staff where sf_name='$name'");
    $res=mysqli_fetch_array($id);
     $z=$res['qua_id'];
	//$res=mysqli_query($con,"UPDATE  `quali` set `Qua_name`='$c' where `Qua_id`='$z'");
		echo '<script>alert("Upadeted Successfully");</script>';
}
?>
</body>
</center>
</html>
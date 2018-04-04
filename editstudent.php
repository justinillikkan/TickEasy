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
    background-color:red;
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
background:url("9.png");
}

</style>
</head>
<body alink="white" vlink="white" link="white">
<form action="#" method="post"/>
<div class="head" style="background-color:powerblue";>
<i><h1 style="color:black"> <center>UPDATE YOUR PROFILE</b></i> </center></h1>
</div>

<ul>
   <li><a href="st.php">BACK</a></li>
</ul>
<table border=10 align="center" bgcolor="grey" >
<?php 
$name=$_SESSION['uname'];
$sql="select * from student where Stud_name='$name'";
$result=mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
$de=$row['Sem_id'];
$ge=$row['Stud_gen'];
$log=$row['l_id'];
$res=mysqli_query($con,"select * from `Semester` where `Sem_id`='$de'");
$row1=mysqli_fetch_array($res);
$res1=mysqli_query($con,"select * from `gen` where `gen_id`='$ge'");
$row2=mysqli_fetch_array($res1);
$res3=mysqli_query($con,"select * from `login` where `l_id`='$log'");
$row4=mysqli_fetch_array($res3);
	?>
	<tr>
<td>NAME/USERNAME</td><td><?php echo $row['Stud_name']?></td>
</tr>
<tr>
<td>STUDENT ID</td><td><?php echo $row['Stud_id']?></td>
</tr>
<tr>

<td>DOB</td><td><?php echo $row['Stud_dob']?></td>
</tr>
<tr>
<td>ADDRESS</td><td><input type="text" name="add" value="<?php echo $row['Stud_add']?>"/></td>
</tr>
<tr>
<td>PHONE</td><td><input type="text"  maxlength="10" name="mobno" id="mobno" onchange="phone()" onkeypress="javascript:return isNumber(event)"  value="<?php echo $row['Stud_phn']?>"/></td>
</tr>
<tr>
<td>GENDER</td><td><?php echo $row2['gender']?></td>
</tr>
<tr>
<td>FATHER'S NAME</td><td><?php echo $row['Stud_fa']?></td>
</tr>
<tr>
<td>FATHER'S PHONE</td><td><input type="text"  maxlength="10" name="mobno" id="mobno" onchange="phone()" onkeypress="javascript:return isNumber(event)"  value="<?php echo $row['Stud_fph']?>"/></td>
</tr>
<tr>
<td>MOTHER'S NAME</td><td><?php echo $row['Stud_mo']?></td>
</tr>
<tr>
<td>MOTHER'S PHONE</td><td><input type="text" name="maphn" value="<?php echo $row['Stud_mph']?>"/></td>
</tr>
				  <tr>
<td>PASSWORD</td><td><input type="text" name="pass" value="<?php echo $row4['l_pswd']; ?>"/></td>
</tr>
</td>
</table>
<input type="submit" name="submit" value="UPDATE"/ style="width:100px;height:50px;">
<?php	
$name=$_SESSION['uname'];
if(isset($_POST['submit']))
{
	$a=$_POST["add"];
	$b=$_POST["phn"];
	$c=$_POST["faphn"];
	$d=$_POST["maphn"];
	$e=$_POST["pass"];
	$sql=mysqli_query($con,"UPDATE `student` set `Stud_add`='$a',`Stud_phn`='$b',`Stud_fph`='$c',`Stud_mph`='$d' where Stud_name='$name'");
	$res=mysqli_query($con,"UPDATE  `login` set `l_pswd`='$e' where `l_id`='$log'");
	/*$id=mysqli_query($con,"select qua_id from staff where sf_name='$name'");
    $res=mysqli_fetch_array($id);
     $z=$res['qua_id'];
	$res=mysqli_query($con,"UPDATE  `quali` set `Qua_name`='$c' where `Qua_id`='$z'");*/
	echo "<script>alert('Upadeted Successfully');window.location.href = 'st.php';</script>";
}
?>
</body>
</center>
</html>
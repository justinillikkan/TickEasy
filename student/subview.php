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
<i><h1 style="color:black"> <center>VIEW SUBJECT TEACHERS</b></i> </center></h1>
</div>

<ul>
   <li><a href="st.php">BACK</a></li>
</ul>
<br><br><br><br><br>
<table border=10 align="center" bgcolor="grey" >
<tr>

<td>SUBJECT </td>
<td>SUBJECT TEACHER</td>
</tr>

<?php 
$id=$_SESSION['id'];
$sql="select * from student_tb where user_id='18'";
$result=mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
$de=$row['semester'];
//$res=mysqli_query($con,"select * from `subteacher` where `Sem_id`='$de'");
//$row4=mysqli_fetch_array($res);
$res=mysqli_query($con,"select `sem` from `seme` where `sem_id`='$de'");
$row1=mysqli_fetch_array($res);
//echo $row1['Sem_name'];
//print_r($row1);
$res1=mysqli_query($con,"select * from `subject_tb` where `sem`='$de'");
//$row2=mysqli_fetch_array($res1);
//print_r($row2);
while($row2=mysqli_fetch_array($res1))
{
	//echo "<br><br><br>";

$a=$row2['batch_id'];
//
//echo $row1['Sem_name'];
//echo $row2['sub_name'];

$res2=mysqli_query($con,"select * from staff_tb,user_tb");
$row3=mysqli_fetch_array($res2);
//echo $row3['sf_name']."<br>";

 
	echo "<td>".$row2['subject_name']."</td>";
	echo "<td>".$row3['first_Name']."</td></tr>";
}



?>
</table>
<?php
	/*
$name=$_SESSION['uname'];
if(isset($_POST['submit']))
{
	$a=$_POST["add"];
	$b=$_POST["phn"];
	$c=$_POST["faphn"];
	$d=$_POST["maphn"];
	$sql=mysqli_query($con,"UPDATE `student` set `Stud_add`='$a',`Stud_phn`='$b',`Stud_fph`='$c',`Stud_mph`='$d' where Stud_name='$name'");
	/*$id=mysqli_query($con,"select qua_id from staff where sf_name='$name'");
    $res=mysqli_fetch_array($id);
     $z=$res['qua_id'];
	$res=mysqli_query($con,"UPDATE  `quali` set `Qua_name`='$c' where `Qua_id`='$z'");*/
	/*	echo '<script>alert("Upadeted Successfully");</script>';
		
}*/
?>

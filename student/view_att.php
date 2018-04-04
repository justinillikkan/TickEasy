<?php 
include 'dbcon.php';

session_start();
    $course= $_SESSION['course'];
    $batch = $_SESSION["bat_id"];
    $sub = $_SESSION['subject'];
	//echo $course;
	//echo $batch;
	//echo $sub;
?>
<html>
<body>
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

background-color:red;
background:url("img/116.jpg");
}
</style>
<ul>
  <li><a href="http://localhost/AMS/class Teacher/view_att1.php">BACK</a></li>
</ul>
<form acton="#" method="post">
<br><br><br>
<div class="head" style="background-color:powerblue";>
<i><h1 style="color:black"> <center>ATTENDANCE SHEET</b></i> </center></h1>
</div>
<br><br><br>
<table border=10 align="center" bgcolor="white" >
<tr>


<td>Subject</td>
<td>Number of Absent</td>
<td>Attendance</td>
</form>
</html>
<?php
 $id=$_SESSION['id'];
$results=mysqli_query($con,"select * from attendance_tb");
$i=1;
while($row=mysqli_fetch_array($results))
{	
 $stdid=$row['student_id'];
 //echo $stdid;
  //$stdid1=$row['staff_id'];
 
		$result_att=mysqli_query($con,"select COUNT(*) from attendance_tb where student_id='$stdid'");
		$rowatt=mysqli_fetch_array($result_att);
		
?>
	<tr>
		
		<td><?php echo $row['subject_id'];?></td>
		
		<td><?php echo $rowatt[0]?> </td>
		<td><?php $tot=100; echo (($tot-$rowatt[0])/$tot)*100;echo "%";?></td>
	</tr>
<?php
}

?>
</table>
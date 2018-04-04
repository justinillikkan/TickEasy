<?php 
include 'dbcon.php';

session_start();
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
    background-color: grey;
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
background:url("images/303.jpg");
}
</style>
<ul>
  <li><a href="http://localhost/AMS/admin/adminHome.php">BACK</a></li>
</ul>
<form acton="#" method="post">
<br>
<div class="head" style="background-color:powerblue";>

</div>
<table border=10 align="center" bgcolor="white" >
<tr>
<td>NO</td>
<td>STAFF ID</td>
<td>NAME</td>
<td>DESIGNATION</td>

<td>QUALIFICATION</td>
</form>
</html>
<?php
$results=mysqli_query($con,"select * from staff_tb,user_tb where staff_tb.desi_id='2' and staff_tb.user_id=user_tb.user_id");
$i=1;
while($row=mysqli_fetch_array($results))
{	
?>
<?php
//$ad=$row['add'];
$de=$row['desi_id'];
$qa=$row['quali_id'];
$res=mysqli_query($con,"select * from `designation_tb` where `desi_id`='$de'");
$row1=mysqli_fetch_array($res);
$res3=mysqli_query($con,"select * from `quali_tb` where `quali_id`='$qa'");
$row4=mysqli_fetch_array($res3);		
?>
	<tr>
	<td><?php echo $i++;?></td>
<td><?php echo $row['user_id']?></td>
<td><?php echo $row['first_Name'] . " ".$row['last_Name'];?></td>
<td><?php echo $row1['designation']?></td>

<td><?php echo $row4['qualification']?></td>
</tr>
<?php
}
?>
</table>
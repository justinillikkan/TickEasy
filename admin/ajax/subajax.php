<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"ams_db");
$q="select * from subject_tb where batch_id='$id'";
$res=mysqli_query($con,$q);
echo "<select name=ddlsub>";
while($r=mysqli_fetch_array($res))

{
echo "<option value=".$r[0].">".$r[1]."</option>"; 

}
echo "</select>"
?>
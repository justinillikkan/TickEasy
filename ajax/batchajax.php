<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"ams_db");
$q="select * from batch_tb where course_id='$id'";
$res=mysqli_query($con,$q);
echo "<select name=ddlbatch>";
while($r=mysqli_fetch_array($res))

{
echo "<option value=".$r[0].">".$r[2]."</option>"; 

}
echo "</select>"
?>

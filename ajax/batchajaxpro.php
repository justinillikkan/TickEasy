<?php

$id=$_GET['id'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("ams_db",$con);
$q="select * from batch_tb where course_id='$id'";
$res=mysql_query($q,$con);
echo "<select name=batch>";
while($r=mysql_fetch_array($res))

{
echo "<option value=".$r[0].">".$r[1]."</option>"; 

}
echo "</select>"
?>

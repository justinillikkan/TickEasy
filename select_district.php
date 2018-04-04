<?php
include_once "connection.php";
if(isset($_POST['data']))
{
	$str="";
	$course=$_POST['data'];
	$data=mysqli_query($con,"select * from course_tb where course_id=". $course);
    while ($row = mysqli_fetch_array($data)) {
        $str .= $row['course_name'] . ",";
    }
    echo rtrim($str, ',');
}
?>
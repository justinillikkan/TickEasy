<?php 
include 'dbcon.php';
	session_start();
    //$a=$_SESSION['Bat_id'];
    $co= $_SESSION['course_id'];
	$ba= $_SESSION['batch_id'];
    $hr = $_SESSION["Hr"];
    $date = $_SESSION['dob'];
    $sem = $_SESSION['sem_id'];
	$id=$_SESSION['id'];
	//echo $sem;
	//echo $co;
	echo $ba;
?>
<html>
<h1 style="color:black;"><center><b>ATTENDANCE</h1></center>
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
background:url("images/303.jpg");
}
</style>
<ul>
  <li><a href="http://localhost/AMS/add_attendance.php">BACK</a></li>
</ul>
<form acton="" method="post">
<div class="head" style="background-color:powerblue";>
<i><h1 style="color:black"> <center>ATTENDANCE SHEET</b></i> </center></h1>
</div>
<table border=10 align="center" bgcolor="grey" >
<tr>
<td>Roll No</td>
<td>Name</td>
<td>
				 <select name="sub_id" required>
				   <option value="">select</option>
				  <?php
				  
				  //$requst=mysqli_query($con,"select * from subject_tb where course_id=$bat");
				 
				 $requst=mysqli_query($con,"select * from subject_tb,staff_subject where subject_tb.subject_id=staff_subject.subject_id and staff_subject.staff_id='$id' and subject_tb.course_id='$co' and subject_tb.batch_id='$ba'");
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;" value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>
				 
				  <?php
				  }
					 ?>
					 
					


</tr>
<?php
$results=mysqli_query($con,"select * from user_tb,student_tb,staff_subject where student_tb.user_id=user_tb.user_id and student_tb.course_id=staff_subject.course_id and staff_subject.course_id='$co' and student_tb.semester='$sem' and staff_subject.staff_id='$id' and student_tb.batch_id='$ba' and student_tb.course_id='$co'" );
$i=1;
while($row=mysqli_fetch_array($results))
{	
?>

	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['first_Name'] . " ".$row['last_Name'];?></td>
		<td><input type="checkbox" value=<?php echo $row["student_id"];?> name="std_<?php echo $i;$i++;?>" </td>

	</tr>
<?php
}
?>
</table>
<br><br><br>
<input type="submit" name="submit_att_mark" style="width:100px;height:50px;></input>">
</form>
</html>
<?php 
	if(isset($_POST["submit_att_mark"])){
		//$sf_id=$_SESSION["Sf_id"];
		$sub_id = $_POST["sub_id"];
		for($j = 1;$j<$i;$j++){
			if(isset($_POST["std_".$j])){
				$std_id = $_POST["std_".$j];
				$query = "INSERT INTO `attendance_tb`(`staff_id`, `student_id`, `subject_id`, `course_id`,`batch_id`,`date`, `hour`)VALUES ('$id', '$std_id', '$sub_id','$co', '$ba','$date', '$hr')";
				 $result = mysqli_query($con,$query);
				 $result;
			}
		}
		echo "<script>alert('Attendance is been Added');window.location.href = 'attendance.php';</script>";
	}
?>
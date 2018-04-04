<?php
include 'dbcon.php';
?>
<html>
<h1 style="color:black;"><center><b>STUDENT REGISTRATION</h1></center>
<style>
body
{

background-color:red;
background:url("new pics/79.jpg");

}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
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

li a:hover {
    background-color:red;
}
</style>
<body>
<ul>
  <li><a href="http://localhost/AMS-2/index.php">BACK</a></li>
</ul>
  <center>  
<form action="#" method="post">
<table style="color:black;"border="0" width="53%" align="center" cellpadding="10" >

<td><b><i><label "font-size=25">FIRST NAME:</label></td><td><input type="text" name="fnm"  pattern="[A-Za-z]{1,32}" 
title="Must Contain only Characters " required/></td></tr>
<td><b><i><label "font-size=25">LAST NAME:</label></td><td><input type="text" name="lnm"  pattern="[A-Za-z]{1,32}" 
title="Must Contain only Characters " required/></td></tr>
<td><b><i><label "font-size=25">ADDRESS:</label>
<td><textarea name="address"></textarea></td></tr>
<td><b><i>MOBILE NUMBER:</td><td><input type="phone" maxlength="10" name="ph"
title="Must contain at least 10 numbers" required/></td></tr>
<tr>
<td><b><i><label "font-size=25">DOB:</label></td>
 <td> <input type="date" name="bday"> </td>
</tr>
<tr><td><b><i><div class="de" style="color:black;font-weight:;font-size:15">COURSE</div></td>
                     <td><div class="de"><select name="course" required>
				  <option value="">select</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from course_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['course_id'];?>><?php echo $row['course_name'];?></option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
					 
					 </select></div></td>
                  </tr>
				 <tr><td><b><i><div class="qu" style="color:black;font-weight:;font-size:15">BATCH</div></td>
                     <td><div class="qu"><select name="batch" required>
				  <option value="">select</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from batch_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['batch_id'];?>><?php echo $row['batch_name'];?></option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
					 
					 </select></div></td>
                  </tr>
				  
				  <td><b><i><label "font-size=25">SEMESTER:</label></td><td><input type="text" name="sem" required/></td></tr>

<tr>
<td><b><i><label "font-size=25">GENDER:</label>

<td>
<input type="radio" name="sex" value="Male" >Male
<input type="radio" name="sex" value="Female">Female
</td>
</tr>
 <td><b><i><label "font-size=25">GUARDIAN NAME:</label></td><td><input type="text" name="gnm" required/></td></tr>
<td><b><i><label "font-size=25">GUARDIAN MOB:</label></td><td><input type="text" name="gph" required/></td></tr> 
 <td><b><i><label "font-size=25">USER NAME:</label></td><td><input type="text" name="unm" required/></td></tr>
<td><b><i>PASSWORD:</td><td><input type="password" name="pwd" required/></td></tr>
<tr><td><td><input type="submit" name="submit" value="SUBMIT"/ style="width:100px;height:50px;">  
</center>	
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	
	$q=$_POST["fnm"];
	$a=$_POST["lnm"];
	$d=$_POST["course"];
	$r=$_POST["address"];
	$k=$_POST["bday"];
	$y=$_POST["ph"];
	$t=$_POST["sex"];
	$e=$_POST["batch"];
	$b=$_POST["gnm"];
	$c=$_POST["gph"];
	$f=$_POST["sem"];
	$u=$_POST["unm"];
	$pwd=$_POST["pwd"];
	
	$sql="INSERT INTO `user_tb`(`first_Name`, `last_Name`, `address`, `phone`, `gender`, `user_type`, `status`) VALUES ('$q','$a','$r','$y','$t','student','1')";
	$result=mysqli_query($con,$sql);
	
	 $requst1=mysqli_query($con,"select * from user_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst1))
				  {
				  $v= $row['user_id'];
				  
				  }
				  $res="INSERT INTO `login_tb`(`user_id`, `user_type`, `user_name`, `password`) VALUES ('$v','student','$u','$pwd')";
	$result1=mysqli_query($con,$res); 
	$z=mysqli_insert_id($con);
	
				  $sql2="INSERT INTO `student_tb`(`user_id`, `dob`, `stud_guard_name`, `stud_gphn`, `course_name`, `batch_name`, `semester`) VALUES  ('$v','$k','$b','$c','$d','$e','$f')";
	$re=mysqli_query($con,$sql2);
				  
}
?>
<?php
include 'dbcon.php';
?>
<html>
<head>
<script src="reg.js"></script>
<link rel="stylesheet" href="reg.css" />
</head>

<style>

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
<form name="treg" id="msform" method="post" action="#">
    <fieldset>
  <table>
    <tr><th style="align:center;"><h2 class="fs-title">Create your account</h2></th></tr>
	<tr><td><input type="text" name="fnm" placeholder="First Name" required/></td>
			<td><input type="text" name="lnm" placeholder="Last Name" /></td></tr>
			
			<tr><td><div class="de"><select name="des" required>
				  <option value="">Designation</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from designation_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['desi_id'];?>><?php echo $row['designation'];?></option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
					 
					 </select></div></td>
                  </tr>
				  <tr><td><textarea name="address" placeholder="Address" required></textarea></td></tr>
				  <tr><td><input type="phone" maxlength="10" placeholder="PHONE" name="ph" title="Must contain at least 10 numbers" required/></td>
	              <tr style="align:center;"><td>Select Gender</td></tr>
				  <tr><td>
				  <tr>
<td><input type="radio" name="sex" value="Male" >Male</td></tr>
<td><input type="radio" name="sex" value="Female">Female
</td></tr>

<tr>
                <td>IMAGE</td>
                <td><input type="file" name="image" id="image"/>
                </td>
                </tr>

<tr>
<td><div class="qu"><select name="qua" required>
				  <option value="">Qualification</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from quali_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['quali_id'];?>><?php echo $row['qualification'];?></option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
					 
					 </select></div></td>
	
	<tr><td><input type="text" name="unm" placeholder="UserName" required/></td></tr>
	<tr>	<td><input type="password" name="pwd" placeholder="Password" required /></td></tr>
	<tr>	<td><input type="password" name="cpass" placeholder="Confirm Password" required/></td></tr>
	
	
    <tr><td><input type="submit" name="submit" class="submit action-button" value="Register" /></td>
	</tr>
	</table>
	</fieldset>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	
	$q=$_POST["fnm"];
	$a=$_POST["lnm"];
	$d=$_POST["des"];
	$r=$_POST["address"];
	$y=$_POST["ph"];
	$t=$_POST["sex"];
	$image="images/".time()."".htmlspecialchars($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$image);
	$e=$_POST["qua"];
	$u=$_POST["unm"];
	$pwd=$_POST["pwd"];
	
	$sql="INSERT INTO `user_tb`(`first_Name`, `last_Name`, `address`, `phone`, `gender`,`photo`, `user_type`, `status`) VALUES ('$q','$a','$r','$y','$t','$image','staff','1')";
	$result=mysqli_query($con,$sql);
	
	 $requst1=mysqli_query($con,"select * from user_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst1))
				  {
				  $v= $row['user_id'];
				  
				  }
				  $res="INSERT INTO `login_tb`(`user_id`, `user_type`, `user_name`, `password`) VALUES ('$v','staff','$u','$pwd')";
	$result1=mysqli_query($con,$res); 
	$z=mysqli_insert_id($con);
	
				  $sql2="INSERT INTO `staff_tb`( `user_id`, `designation`, `qualification`) VALUES ('$v','$e','$d')";
	$re=mysqli_query($con,$sql2);
				  
}
?>
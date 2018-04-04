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
  <li><a href="../../AMS/index.php">BACK</a></li>
</ul>
  <center>  
<form name="treg" id="msform" method="post" action="#" onsubmit="return" enctype="multipart/form-data">
    <fieldset>
  <table>
    <tr><th style="align:center;"><h2 class="fs-title">Create your account</h2></th></tr>
	<tr><td><input type="text" name="fnm" id="f_name" placeholder="First Name" onChange="fn()" onkeypress="return onlyAlphabets(event,this);" required></td>
			<td><input type="text" name="l_name" placeholder="Last Name" onChange="lfn()" onkeypress="return onlyAlphabets(event,this);" required/></td></tr>
			
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
				  <tr><td><input type="phone" maxlength="10" placeholder="PHONE" name="phone" id="phone" title="Must contain at least 10 numbers" onkeypress="javascript:return isNumber(event)" onChange="mob();"></td>
	              <tr><td><label "font-size=25">Gender:</label></td>
				 
				  <br>
<td>Male <input type="radio" style="width:50px;"  name="sex" value="Male" >

Female<input type="radio" style="width:50px;"  name="sex" value="Female"></td>
</tr>

<tr>
                <td>IMAGE</td>
                <td><input type="file" name="image" id="image"/>
                </td>
                </tr>
				<tr><td><input type="text" name="email" id="email" placeholder="Personal Email" onChange="efn()" required/></td></tr>

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
					 
					 </select></div></td></tr>
	
	<tr><td><input type="text" name="unm" placeholder="UserName" required/></td></tr>
	<tr>	<td><input type="password" name="pwd" id="pas" placeholder="Password" required /></td></tr>
	<tr> <td><input type="password" name="cpwd" placeholder="confirm Password" id="conpas" onChange="confirmpassword();" required/></td></tr>
	
	
    <tr><td><input type="submit" name="submit" class="submit action-button" value="Register" /></td>
	</tr>
	</table>
	</fieldset>
</form>
<script src="js/validation.js"></script>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	
	$q=$_POST["fnm"];
	$a=$_POST["l_name"];
	$d=$_POST["des"];
	$r=$_POST["address"];
	$y=$_POST["phone"];
	$t=$_POST["sex"];
	$zz="image/".time()."".htmlspecialchars($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$zz);
    $x=$_POST["email"];
	$e=$_POST["qua"];
	$u=$_POST["unm"];
	$pwd=$_POST["pwd"];
	
	$sql2="select * from user_tb  where `email`='$x'";
    $result2=mysqli_query($con,$sql2);
    if($res=mysqli_fetch_array($result2))
    {
    echo '<script>alert("ALREADY CREATED");</script>';
    }
	
	


	else
	{
			function encryptIt($q){
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

$encrypted = encryptIt($g);
	
	$sql="INSERT INTO `user_tb`(`first_Name`, `last_Name`, `address`, `phone`, `gender`, `photo`, `email`, `user_type`, `status`) VALUES ('$q','$a','$r','$y','$t','$zz','$x','staff','0')";
	$result=mysqli_query($con,$sql);
	
	 $requst1=mysqli_query($con,"select * from user_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst1))
				  {
				  $v= $row['user_id'];
				  
				  }
				  $res="INSERT INTO `login_tb`(`user_id`, `user_type`, `user_name`, `password`) VALUES ('$v','staff','$u','$encrypted')";
	$result1=mysqli_query($con,$res); 
	$z=mysqli_insert_id($con);
	
				  $sql2="INSERT INTO `staff_tb`(`user_id`, `desi_id`, `quali_id`)  VALUES ('$v','$d','$e')";
	$re=mysqli_query($con,$sql2);
	
	echo "<script>alert('Your Profile is Created');window.location.href = 'staff_reg.php';</script>";
				  
}
}
?>
<?php
include 'dbcon.php';
?>
<html>
<head>
<script src="reg.js"></script>
<link rel="stylesheet" href="reg.css" />
<script type="text/javascript" language="javascript">
function getsid(str)
{
/*alert(str)
var s=document.form1.t1.value;
if (str==0)
  { document.getElementById("rose").innerHTML="";
  return;
  }*/
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("rose").innerHTML=xmlhttp.responseText;
    }
  }
  
  
  
xmlhttp.open("GET","ajax/batchajax.php?id="+str,true);
xmlhttp.send(null);
}




 
    </script>
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
<form name="treg" style="width:400px;"id="msform" method="post" action="" onSubmit="return vali()" >

    <fieldset>
  <table>
    <tr><th style="align:center;"><h2 class="fs-title"><center>Create your account</h2></th></tr></center>
	<tr><td><b><i><label "font-size=25">FIRST NAME:</label></td>
	<td><input type="text" name="fnm" id="f_name" onChange="fn()" onkeypress="return onlyAlphabets(event,this);"></td></tr>
	<tr><td><b><i><label "font-size=25">LAST NAME:</label></td>
			<td><input type="text" name="lnm" id="l_name" onChange="lfn()" onkeypress="return onlyAlphabets(event,this);"></td></tr>
			<tr><td><b><i><label "font-size=25">ADDRESS:</label></td>
			 <td><textarea name="address"  required></textarea></td></tr>
			<tr>
<td><b><i><label "font-size=25">DOB:</label></td>
 <td> <input type="date" name="bday" required> </td>
</tr>
			
			<tr><td><b><i><div class="de" style="color:black;font-weight:;font-size:15">COURSE</div></td>
                     <td><div class="de"> <select name="ddlcourse"  value="ddlcourse" onchange="getsid(this.value)" required>
				  <option value="">select</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from course_tb");
				  $i=2;
				 
				  while($r=mysqli_fetch_array($requst))
				  {
                   ?>
    <option value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
    <?php
	}
	?>
					 
					 </select></div></td>
                  </tr>
				  
				   <tr><td><b><i><div class="qu" style="color:black;font-weight:;font-size:15">BATCH</div></td>
                     <td><div id="rose"><select name="ddlbatch" id="ddlbatch" onchange="getsid1(this.value)" required>
				  
				  
				  
					 
					 </select></div></td>
                  </tr>
				 
                  </tr>
				  
				 <tr><td><b><i><label "font-size=25">PHONE:</label></td>
				    
				  <td><input type="phone" maxlength="10" name="phone" id="phone" title="Must contain at least 10 numbers" onkeypress="javascript:return isNumber(event)" onChange="mob();"></td></tr>
	              <tr><td><b><i><label "font-size=25">GENDER:</label></td>
				 
				  <br>
<td>Male <input type="radio" style="width:50px;"  name="sex" value="Male" >

Female<input type="radio" style="width:50px;"  name="sex" value="Female"></td>
</tr>


<tr>
               <tr><td><b><i><label "font-size=25">IMAGE:</label></td>
                <td><input type="file" name="image" id="image"/>
                </td>
                </tr>
				 <tr><td><b><i><label "font-size=25">PERSONAL EMAIL:</label></td>
	</td><td><input type="text" name="email" id="email" onChange="efn()"></td></tr>

	
	 <tr><td><b><i><label "font-size=25">GUARDIAN NAME:</label></td>
	</td><td><input type="text" name="gnm" id="l_district" onChange="disfn()"onkeypress="return onlyAlphabets(event,this);"></td></tr>
<td><b><i><label "font-size=25">GUARDIAN MOB:</label></td><td><input type="text" maxlength="10" name="phone" id="phone" onkeypress="javascript:return isNumber(event)" onChange="mob();" required/></td></tr> 
 <tr><td><b><i><label "font-size=25">USER NAME:</label></td><td><input type="text" name="unm" required/></td></tr>
<tr><td><b><i>PASSWORD:</td><td><input type="password" name="pwd" id="pas"  required/></td></tr>
<tr><td><b><i> CONFIRM PASSWORD:</td><td><input type="password" name="cpwd" id="conpas" onChange="confirmpassword();" required/></td></tr>

	
    <tr><td><input type="submit" name="submit" value="Register" /></td>
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
	$a=$_POST["lnm"];
	$d=$_POST["ddlcourse"];
	$r=$_POST["address"];
	$k=$_POST["bday"];
	$y=$_POST["phone"];
	$t=$_POST["sex"];
	$image="image/".time()."".htmlspecialchars($_FILES['image']['name']);
     move_uploaded_file($_FILES['image']['tmp_name'],$image);
	$e=$_POST["ddlbatch"];
	$b=$_POST["gnm"];
	$x=$_POST["email"];
	$c=$_POST["phone"];
	//$f=$_POST["sem"];
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

$encrypted = encryptIt($pwd);
	
	$sql="INSERT INTO `user_tb`(`first_Name`, `last_Name`, `address`, `phone`, `gender`,`photo`,`email`,`user_type`, `status`) VALUES ('$q','$a','$r','$y','$t','$image','$x','student','0')";
	$result=mysqli_query($con,$sql);
	
	 $requst1=mysqli_query($con,"select * from user_tb");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst1))
				  {
				  $v= $row['user_id'];
				  
				  }
				  $res="INSERT INTO `login_tb`(`user_id`, `user_type`, `batch_id`, `user_name`, `password`, `status`) VALUES ('$v','student','$e','$u','$encrypted','0')";
	$result1=mysqli_query($con,$res); 
	$z=mysqli_insert_id($con);
	
				  $sql2="INSERT INTO `student_tb`(`user_id`, `dob`, `stud_guard_name`, `stud_gphn`, `course_id`, `batch_id`) VALUES  ('$v','$k','$b','$c','$d','$e')";
	$re=mysqli_query($con,$sql2);
	echo "<script>alert(' Successfully Created');window.location.href = 'student_reg.php';</script>";
				  
}
}
?>
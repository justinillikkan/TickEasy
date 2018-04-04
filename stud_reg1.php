<?php
include 'dbcon.php';
?>
<html>
<h1 style="color:black;"><center><b>ASSIGN STAFF</h1></center>
<style>
body
{

background-color:red;
background:url("images/7.png");

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
<head>
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


function fname()
{
  var fnam=/^[a-zA-Z]{4,15}$/;
   if(document.treg.fnm.value.search(fnam)==-1)
    {
	 alert("Enter correct  first name");
	 document.treg.fnm.focus();
	 return false;
	 }
}

function lname()
{
  var lnam=/^[a-zA-Z]{4,15}$/;
   if(document.treg.lnm.value.search(lnam)==-1)
    {
	 alert("Enter correct  last name");
	 document.treg.lnm.focus();
	 return false;
	 }
}



function phone()
	{
	var phn=/^[0-9]{10}$/;
	var len=document.msform.ph.value.length;
  if(document.treg.ph.value.search(phn)==-1)
    {
		if(len!=10)
		{
	 alert("Enter correct phone no");
	 document.treg.ph.focus();
	 return false;
	 }
	 }

}
	
	function vali()
{
  var nam=/^[a-zA-Z]{4,15}$/;
  var phn=/^[0-9]{9,14}$/;


	    if(document.treg.fnm.value.search(nam)==-1)
    {
	 alert("Enter correct  first name");
	 document.treg.fnm.focus();
	 return false;
	 }
	 
	 else if(document.treg.lnm.value.search(nam)==-1)
    {
	 alert("Enter correct  last name");
	 document.treg.lnm.focus();
	 return false;
	 }
	 
	 
	  else if(document.treg.ph.value.search(phn)==-1)
    {
	 alert("Enter Correct phone no");
	 document.treg.ph.focus();
	 return false;
	 }
	 	 else
	{
	 return true;
	 }

	 }


</script>
</head>
<body>
<ul>
  <li><a href="http://localhost/AMS-2/index.php">BACK</a></li>
</ul>
  <center>  
<form action="#" method="post">
<table style="color:black;"border="0" width="53%" align="center" cellpadding="10" >

<tr><td><b><i><div class="de" style="color:black;font-weight:;font-size:15">COURSE</div></td>
                     <td><div class="de"> <select name="ddlcourse" id="ddlcountry" onchange="getsid(this.value)">
				  <option value="">select</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from course_tb");
				  $i=1;
				 
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
                     <td><div id="rose"><select name="ddlbatch" id="ddlbatch" onchange="getsid1(this.value)">
				  
				  
				  
					 
					 </select></div></td>
                  </tr>
				  <td><b><i><div class="de" style="color:black;font-weight:;font-size:15">SELECT STAFF</div></td>
				  <td><div class="de"><select name="des" required>
				  <option value="">select</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from user_tb where user_type='staff'");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['user_id'];?>><?php echo $row['first_Name'] . " ".$row['last_Name'];?></option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
					 
					 </select></div></td>
                  </tr>
				  </table>

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
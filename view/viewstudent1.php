<?php
include 'dbcon.php';
?>
<html>
<head>
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
  width:110%;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

// display design
div.heading{
background-color:black;
text_align:center;
width:100%;
height:140px;
border:2px solid black;
color:white;
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
div.view
{
	position:center;
	margin-top:10%;
	margin-left:10px;
	
}
body{
background:url("images/113.jpg");
}
</style>
<script>
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
  
  
  
xmlhttp.open("GET","view/ajax/batchajax.php?id="+str,true);
xmlhttp.send(null);
}
</script>
<body>
<div class="topnav">
  <a class="active" href="http://localhost/AMS/admin/adminHome.php">Home</a>
  
  
  
</div>

<form name="myform" action="#" method="post">
<table style="color:black;"border="0" width="53%" align="bottom" cellpadding="10">

<tr><td><b><i><div class="de" style="color:black;font-weight:;font-size:15">COURSE</div></td>
                     <td><div class="de"> <select name="ddlcourse" id="ddlcountry" onchange="getsid(this.value)" required>
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
                     <td><div id="rose"><select name="ddlbatch" id="ddlbatch" onchange="getsid2(this.value)" required>
					 
				  
					 
					 </select></div></td>
                  </tr> 
			  </table>
			  <table>	
<tr><td>	<td> <td> <td> <td>	<td> <td> <td> <td><td> <td> <td> <td>	
<input type="submit" name="submit1"  value="VIEW">
</form> </td></tr></table>
<div class="view">

<table border=5px style="width:10px; margin-left:20%; margin-top:-10%;">
<tr><th>NAME</th><th>MOBILE</th><th>EMAIL</th></tr>
<?php
if(isset($_POST['submit1']))
    { 
$sl=$_POST['ddlbatch'];
$cl=$_POST['ddlcourse'];
//echo($sl);
//echo($cl);
		?>
<?php 
//$tid=$_SESSION['id'];
$sql="select * from user_tb,student_tb,course_tb,batch_tb where user_tb.user_id=student_tb.user_id and student_tb.batch_id='$sl' and batch_tb.batch_id='$sl' and course_tb.course_id='$cl'";
$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	
	<tr>	
	<form name="myform" action="viewstudent1.php" method="post">
	<td><input type="button" name="Name" value="<?php echo $row['first_Name'] . " ".$row['last_Name'];?>"readonly></td>
	
	<td><input type="text" name="phone" value="<?php echo $row['phone']?>"readonly></td>
	
	<td><input type="text" name="batch" value="<?php echo $row['email']?>"readonly></td>

	
	<input type="hidden" name="sid" value="<?php echo $row['id']?>"/>
	<!-- <td><input type="submit" name="edit"  value="Edit"></td>
	 <td><input type="button" name="delete" value="Delete"></td> -->
	</tr>
	</form>
	<?php
}

}
?>
</table>
</div>
</body>
</html>
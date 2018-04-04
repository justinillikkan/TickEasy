<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
  
xmlhttp.open("GET","batchajax.php?id="+str,true);
xmlhttp.send(null);
}
</script>


</head>

<body>
<form id="form1" name="form1" method="post" action="">
<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"ams_db");
$q="select * from course_tb";
$res=mysqli_query($con,$q);
?>
  <label></label>
  Country
  <select name="ddlcountry" id="ddlcountry" onchange="getsid(this.value)">
    <?php
	while($r=mysqli_fetch_array($res))
	{
	?>
    <option value="<?php echo $r[0];?>"><?php echo $r[1];?></option>
    <?php
	}
	?>
  </select>
  <p>&nbsp;</p>
  <p>state
    <label>
  <div id="rose">  <select name="ddlstate" id="ddlstate">
    </select></div>
    </label>
  </p>
</form>
</body>
</html>

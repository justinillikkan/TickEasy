<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	//echo "aa";
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["address"];
$d=$_POST["contactno"];
$e=$_POST["pin"];

$g=$_POST["sem"];
$sql=mysqli_query($con,"select * from seme where course_id='$g'");
while($row=mysqli_fetch_array($sql)){
	$g=$row['districtid'];
}
//echo "$district";
$h=$_POST["email"];
$i=$_POST["password"];
$j=$_POST["repassword"];
$k=$_POST["seq_qus"];
$l=$_POST["seq_ans"];

if($i!=$j)
{
	echo"not equal";
}
else
{

//
$sql2="SELECT * FROM tbl_registration WHERE email='$h'";
$result2=mysqli_query($con,$sql2);
if($res=mysqli_fetch_array($result2))
{
echo "ALREADY REGISTRED";
}
else
{			
$sql="INSERT INTO `tbl_registration`(`fname`, `lname`, `address`,`districtid`, `contactno`, `seq_qus`, `seq_ans`, `pin`, `email`) VALUES ('$a','$b','$c','$g','$d','$k','$l','$e','$h')";
$result=mysqli_query($con,$sql);  
$sql1="INSERT INTO `tbl_login`(`email`, `password`, `status`) VALUES ('$h','$i',1)";
$result1=mysqli_query($con,$sql1);
echo "SUCESSFULLY REGISTRED";
}
}}
?>
<!DOCTYPE html>

<html lang="en">

<head>

   
	
</head>

<body>
<table>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
</table>


              
<form action="#" name="myregform" id="myregform" onsubmit="return" method="post" align="centre">
<fieldset>
<legend>REGISTRATION FORM</legend>
<table align="centre" border="0" width="100" style="width:50%;color:black;font-family:Calibri Light (Headings);font-size:80%;">
<tr class="spaceUnder"><td>FIRST NAME:</TD><TD><INPUT TYPE="TEXT"id="fname" NAME="firstname" ></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr class="spaceUnder"><td>LAST NAME:</TD><TD><INPUT TYPE="TEXT" id="lname" NAME="lastname" ></td></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr class="spaceUnder"><td>ADDRESS</td><td><input type="text" id="address" name="address" required></td></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr class="spaceUnder"><td>CONTACT NO:</td><td><input type="text" id="phno" name="contactno"></td></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr class="spaceUnder"><td>PIN CODE:</td><td><input type="text" id="pin" name="pin"</td></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>


<tr class="spaceUnder"><td>STATE:</td>
  <td><select name="course" id="state">
                  <option value="">--select--</option>
                <?php
                $results= mysqli_query($con,"select * from course_tb");
                $i=1;
                while($row=mysqli_fetch_array($results))
                { ?>
                  <option value="<?php echo $row['course_id']; ?>"><?php echo $row['course_name']; ?></option>

                <?php }
                ?></select></td></tr>
                <tr class="spaceUnder"><td>DISTRICT</td>
                <td><select name="sem" id="sem"></select></td></tr>


<tr></tr><tr></tr>
</td></tr>

<tr class="spaceUnder"><td>EMAIL</td><td><input type="email" id="email" name="email" ></td></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>

<tr class="spaceUnder"><td>PASSWORD</TD><TD><INPUT TYPE="password" id="pwd" NAME="password"></td></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr class="spaceUnder"><td>RE-ENTER PASSWORD</TD><TD><INPUT TYPE="password"id="repwd" NAME="repassword"></td></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
  
  <tr class="spaceUnder"><td>SECURITY QUESTION</td>
		<td>
		  <select name="seq_qus" >
			<option value="">--select--</option>
			<option value="Nick name">NICK NAME</option>
			<option value="pet name">pet name</option>
		  </select>
		 </td>
	</tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
	
	

  
  <tr class="spaceUnder"><td>SECURITY ANSWER</td><td><input type="text" name="seq_ans" ></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>

<tr class="spaceUnder"><td><input type="submit" value="submit" name="submit" class="button button5"></td></tr>
</table></form>
<script src="js/jquery.js"></script>
<script src="js/validation.js"></script>   

<div class="sis4"></div>

<script>
	$(document).ready(function(){
		$("#state").on("change",function(){
			var state=$(this).val();
			alert(state);
			$.ajax( {
				type:"POST",
				url:"select_district.php",
				data:{ 'data':state},
				success: function(response){
					//alert(json);
					$ar = response.split(",");
                            $str = "";
                            for (var i = 0; i < $ar.length; i++)
                     		 {
                      			$str += '<option>' + $ar[i] + "</option>";
                      		 }
                      		$('#district').html($str);
				}
			});
		});
	});
</script>
</div>
    
</body>

</html>

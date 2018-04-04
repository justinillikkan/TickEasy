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
                            $query = "SELECT * FROM course_tb";
                            $results = mysqli_query($con, $query);
                            foreach ($results as $records) {
                        ?>
                   <option value="<?php echo $records["course_id"]; ?>"> <?php echo  ucfirst($records["course_name"]); ?></option>

                        <?php
                            }
                         ?>
					 
					 </select></div></td>
                  </tr>
				  
				   <tr><td><b><i><div class="qu" style="color:black;font-weight:;font-size:15">BATCH</div></td>
                     <td><div id="rose"><select name="ddlbatch" id="ddlbatch" onchange="getsid2(this.value)">
					 
				  
					 
					 </select></div></td>
                  </tr>
				  
				  <tr><td><b><i><div class="qu" style="color:black;font-weight:;font-size:15">SUBJECT</div></td>
                     <td><div id="sub"><select name="ddlsub" id="ddlsub">
				  
				  
				  
					 
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
					 
					 </select>
					     <tr><td> <center><input type="submit" name="submit" value="submit"/ style="width:100px;height:50px;"></td>
	                </tr>

					 </div></td>
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
				 
				  
}
?>
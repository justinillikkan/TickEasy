<?php
include 'dbcon.php';
?>
<html>
<h1 style="color:black;"><center><b>ADD ATTENDANCE</h1></center>
<style>
body
{

background-color:pink;
background:url("7.png");

}
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

li a:hover {
    background-color:red;
}
</style>
<body>
<ul>
  <li><a href="staff.php">BACK</a></li>
</ul>

  <center>  
<form action="" method="post">  
<table style="color:black;"border="0" width="53%" align="center" cellpadding="10" >
<tr><td><b><i><div class="de" style="color:black;font-weight:;font-size:15">SELECT THE BATCH</div></td>
                     <td><div class="de"><select name="bat" required>
				  <option value="">select</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from batch");
				 
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;" value=<?php echo $row['Bat_id'];?>><?php echo $row['Bat_name'];?></option>
				 
				  <?php
				  $_SESSION['Bat_id']=$row['Bat_id'];
					  }
					 ?>
					 
					 </select></div></td>
                  </tr>
				      <tr><td><b><i><div class="qu" style="color:black;font-weight:;font-size:15">SELECT THE SEMESTER</div></td>
                     <td><div class="qu"><select name="sem" required>
				  <option value="">select</option>
				  <?php
				  $requst=mysqli_query($con,"select * from semester");
				  
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['Sem_id'];?>><?php echo $row['Sem_name'];?></option>
				 
				  
					
					 <?php
			
					  }
					 ?>
					 
					 </select></div></td>
					<tr><td><b><i>Hour</td><td><select name="hr">
                      <option value="0" selected="selected">select</option>
					 <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
					 <option value="4">4</option>
					 <option value="5">5</option>
					 <option value="6">6</option>
                     <option value="7">7</option>
						</select>
						</td></tr>
                  </tr>
				  <td><b><i>DATE</td><td><input type="date" name="dob" max="<?php echo date("Y-m-d")?>"required/></td></tr>
<tr><td><td><input type="submit" name="submit" value="SUBMIT"/ style="width:100px;height:50px;">  
</center>	
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	$bat = $_POST["bat"];
	$_SESSION['bat_id']= $_POST["bat"];
	$_SESSION['sem_id']=$_POST["sem"];
	$_SESSION["Hr"]= $_POST["hr"];
	$_SESSION['dob']=$_POST["dob"];
	
	
	header("location:attendance.php");
}
?>
<script src="js/myscript.js"></script>


<?php 
include 'dbcon.php';
session_start();
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
   <!-- <script type="text/javascript" src="js/validation.js"></script>-->
    <link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/s.css">
	 <script type="text/javascript" src="js/validation.js"></script>
 <script>
$(document).ready(function(){
	$('#hid_hus').hide();
	$('#marital').on("change",function(){
		$x=$('#marital').val();
		if($x==0){
			$('#hid_hus').hide();
		}
		else{
			$('#hid_hus').show();
			$('#hid_hus').val().required;
		}
	})
})
</script>
	
	
<?php 
$name=$_SESSION['uname'];
$id=$_SESSION['id'];
//echo $name;
//echo $id;
$sql="select * from student_tb,user_tb,login_tb,staff_tb where login_tb.user_id='$id' and user_tb.user_id='$id'";
$result=mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
$ad=$row['address'];
$p=$row['phone'];
//$e=$row['email'];
$dob=$row['dob'];
$gn=$row['stud_guard_name'];
$gpn=$row['stud_gphn'];

//$de=$row['designation'];
//$ge=$row['gen'];
$qa=$row['quali_id'];
$im=$row['photo'];
//echo $im;

//echo $qa;
//$res=mysqli_query($con,"select * from `designation_tb` where `desi_id`='$de'");
//$row1=mysqli_fetch_array($res);
//$res1=mysqli_query($con,"select * from `gen` where `gen_id`='$ge'");
//$row2=mysqli_fetch_array($res1);
$res2=mysqli_query($con,"select * from `quali_tb` where `quali_id`='$qa'");
$row3=mysqli_fetch_array($res2);
	?>
	
	<?php	
$name=$_SESSION['uname'];
$id=$_SESSION['id'];
echo $id;
if(isset($_POST['submit']))
{
	$a=$_POST["add"];
	$b=$_POST["phone"];
	//$c=$_POST["email"];
	$d=$_POST["bday"];
	$e=$_POST["gn"];
	$f=$_POST["gp"];
	echo $a;
	echo $b;
	echo $c;
	$sql=mysqli_query($con,"UPDATE `user_tb` set `address`='$a',`phone`='$b' where user_id='$id'");
	$sql1=mysqli_query($con,"UPDATE `student_tb` set `dob`='$d',`stud_guard_name`='$e',`stud_gphn`='$f' where user_id='$id'");
	//$id=mysqli_query($con,"select qua_id from staff_tb where login_tb.user_name='$name'");
    //$res=mysqli_fetch_array($id);
     //$z=$res['qua_id'];
	//$res=mysqli_query($con,"UPDATE  `quali` set `Qua_name`='$c' where `Qua_id`='$z'");
	echo "<script>if(confirm('Upadeted Successfully!!!!')){document.location.href='edit_profile.php'}else{document.location.href='edit_profile.php'};</script>";
		
}
?>


    <style>
	

.padd{
	
	padding-top:10px;
}


footer{
  
   background-color: #424558;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 55px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
      body{
    padding: 50px;
}




    </style>
    
</head>


    
    <div class="row" style="size: 100%;">
        <div style="width:40%; height: 150px; float: left;">
            <img src="img/TickEasy_logo.jpg" style="width:40%; height: 150px;">
            
        </div>
        <div style="width:60%; height: 150px;float: right;" >
                  
            
        <div class="container">
 
            <ul class="nav nav-tabs" style="margin-top: 35px;">
    
                <li class="current"><a href="classT_home.php"><h2>Home</h2></a></li>
                  <li><a href=""><h2>Edit profile</h2></a></li>
                    <li><a href="change_password.php"><h2>Change password</h2></a></li>
                    <li><a href="logout.php"><h2>Log out</h2></a></li>
          </ul>
                    
 
  <br>
  </div>
        </div>
        
        
       
    </div>
		
		
    
       <div class="row">
       
        <form class="f" height="auto" width="auto" action="#" method="POST" name="my_form" enctype='multipart/form-data'  enctype='multipart/form-data'>

		
		   
		
			<div class="col-md-2 offset-1 padd">
			<h2>First Name</h2>  
			</div>
			<div class="col-md-3 padd">
			<input  type="text"  name="name" class=" form-control" value="<?php echo $row['first_Name']?>" readonly />
			</div>
			
			<div class="col-md-2 offset-1 padd">
			<h2> photo</h2>  
			</div>
			<div class="col-md-2 padd">
			<img src="../<?php echo $row['photo']?>" height="150px" width="100px"/>
		    <input type="file" name="photo"  class=" form-control" />
		   </div>
			
			<div class="col-md-2 offset-1 padd">
			<h2>Last Name</h2>  
			</div>
			<div class="col-md-3 padd">
			<input  type="text"  name="group_name" id="group_name" class=" form-control" 
			value="<?php echo $row['last_Name']?>"  readonly required />
			</div>
			
			
			
			
			
		   
		   
		   <div class="col-md-2 offset-1 padd">
			<h2>Email</h2> 
			</div>
			<div class="col-md-3 padd">
			<input  type="text"  name="group_name" id="group_name" class=" form-control" 
			value="<?php echo $row['email']?>"  readonly required />
			</div>
		
		 
		    <div class="col-md-2 offset-1 padd">
			<h2>Address</h2>  
			</div>
			<div class="col-md-3 padd">
			<input  type="textarea"  name="add" id="group_name" class=" form-control" 
			value="<?php echo $ad; ?>" required />
			</div>
				
				
				
			<div class="col-md-2 offset-1 padd">
			<h2>Contact No</h2>  
			</div>
			<div class="col-md-3 padd">
		   <input  type="number"  name="phone" id="mobno" class=" form-control" 
		    onchange="phone()" onkeypress="javascript:return isNumber(event)" value="<?php echo $p; ?>" required>
		   </div>
		   
		   <div class="col-md-2 offset-1 padd">
			<h2>DOB</h2>  
			</div>
			<div class="col-md-3 padd">
			<input type="date" name="bday" value="<?php echo $dob; ?>"  required />
			</div>
				
				<div class="col-md-2 offset-1 padd">
			<h2>Guard Name</h2>  
			</div>
			<div class="col-md-3 padd">
			<input  type="text"   id="group_name" class=" form-control" 
			name="gn" value="<?php echo $gn; ?>" required />
			</div>
				
				<div class="col-md-2 offset-1 padd">
			<h2>Guard Phone</h2>  
			</div>
			<div class="col-md-3 padd">
			<input  type="textarea"  maxlength="10" name="gp" id="mobno" onchange="phone()" onkeypress="javascript:return isNumber(event)"  value="<?php echo $gpn; ?>"   required />
			</div>
		
		
			
		  
		<div class="col-md-4  offset-7 padd">
		  <input type ="submit" name="submit" id="submit" value="Update" class="btn btn-lg btn-success btn-block"/>
		  </div>
		  
		  	  </form>
			  
		</div><!-- div inner row close-->
		 
  
    
    
   
   
<footer>
       <p><h1> Amal Jyothi College of Engineering  </h1> 
        <h1>KERALA'S LARGEST INFRASTRUCTURE FOR ENGINEERING EDUCATION WITH NAAC 'A' & NBA ACCREDITATION</h1></p> /p>
    </footer>




    
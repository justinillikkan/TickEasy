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
    
    <link rel="stylesheet" href="./css/bootstrap.css">
    
   
       <div id='item_img'>
</div> 
        
      
 

 <style>
 
 
 /* make sidebar nav vertical */ 
@media (min-width: 768px){
  .affix-content .container {
    width: 700px;
  }   

  html,body{
    background-color: #f8f8f8;
    height: 100%;
    
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }
  .sidebar-nav{
        position:fixed; 
        
  }
  .affix-sidebar{
    padding-right:0; 
    font-size:small;
    padding-left: 0;
  }  
  .affix-row, .affix-container, .affix-content{
    height: 100%;
    margin-left: 0;
    margin-right: 0;    
  } 
  .affix-content{
    background-color:white; 
  } 
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar{
    border-radius:0; 
    margin-bottom:0; 
    border:0;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }  
}

@media (min-width: 769px){
  .affix-content .container {
    width: 600px;
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }  
}

@media (min-width: 992px){
  .affix-content .container {
  width: 900px;
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }
}

@media (min-width: 1220px){
  .affix-row{
    
  }

  .affix-content{
    overflow: auto;
  }

  .affix-content .container {
    width: 1000px;
  }

  .affix-content .container .page-header{
    margin-top: 0;
  }
  .affix-content{
    padding-right: 30px;
    padding-left: 30px;
  }  
  .affix-title{
    border-bottom: 1px solid #ecf0f1; 
    padding-bottom:10px;
  }
  .navbar-nav {
    margin: 0;
  }
  .navbar-collapse{
    padding: 0;
  }
  .sidebar-nav .navbar li a:hover {
    background-color: #428bca;
    color: white;
  }
  .sidebar-nav .navbar li a > .caret {
    margin-top: 8px;
  }  
}

.form-module .form {
    display: none;
    padding: 40px;
    background-color: #e9e9e9;
}
.td_pad{
		font-size:15px;
		padding-left:20px;	
	}
	
	.td2_pad{
		padding-left:20px;	
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
 .form-module {
  position: relative;
  background: lightgray;
  max-width: 320px;
  width: 100%;
  border-top: 5px solid #33b5e5;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  margin: 0 auto;
 border-color:#e9e9e9;
}
        body{
    padding: 50px;
}
.modal-dialog {
    width: 300px;
}
.modal-footer {
    height: 70px;
    margin: 0;
}
.modal-footer .btn {
    font-weight: bold;
}
.modal-footer .progress {
    display: none;
    height: 32px;
    margin: 0;
}
.input-group-addon {
    color: #fff;
    background: #3276B1;
}
.active1{background-color:#BBDEFB;}
    </style>
    
</head>






<div class="container-fluid">
    
    <div class="row" style="size: 100%;">
        <div  style="width:40%; height: 150px; float: left;">
          <img src="images/TickEasy_logo.jpg" style="width:40%; height: 150px;">
            
        </div>
        <div style="width:60%; height: 150px;float: right;" >
                  
            
        <div class="container">
 
				<ul class="nav nav-tabs" style="margin-top: 35px;">
    
<!--                    <li><a href="group_reg.php"><h2>Group registration<h2></a></li>-->
					<li><a href="classT_home.php"><h2>Home<h2></a></li>
                    
					 <li><a href="logout.php"><h2>Log out<h2></a></li>
                     <li><a href=""><h2><h2></a></li>
                   </ul>
					<br>
				</div>
        </div>  
  </div>
 <!-- container class-->
   <form action="attendance.php" method="post">  
    <div class="row">
		

<div class="col-md-5 offset-4">
	<div class="row">
		<div class="col-md-3 offset-2 padd">
		  <h2> Course</h2>
		 </div> 
		<div class="col-md-4 offset-1">
			<select name="course_name" id="course_name" style="width:50%; height:30px;align-content: flex-start;" required>
                    <option value="">Course</option>
                        <?php
						 $id=$_SESSION['id'];
                            $query = "SELECT * FROM course_tb,staff_subject where course_tb.course_id=staff_subject.course_id and staff_subject.staff_id='$id'";
                            $results = mysqli_query($con, $query);
                            foreach ($results as $records) {
                        ?>
                   <option value="<?php echo $records["course_id"]; ?>"> <?php echo  ucfirst($records["course_name"]); ?></option>

                        <?php
						
                            }
							//$q=$_POST["course_name"];
                         ?>
                </select>
		</div>
		</div>
		
			<div class="row" style="margin-top:20px;">
		<div class="col-md-3 offset-2 padd">
		  <h2> Batch</h2>
		 </div> 
		<div class="col-md-4 offset-1" id="rose">
				<select  class=" form-control" name="batch" id="batch" name="batch" onchange="getsid2(this.value)" value="Batch" style="width:50%; height:30px;"required>
					
					<option value="-1">select</option>
					
				</select>
		</div>
		</div>
		
		<div class="row" style="margin-top:20px;">
		<div class="col-md-3 offset-2 padd">
		  <h2> Hour</h2>
		 </div> 
		<div class="col-md-4 offset-1" id="rose">
				<select name="hr" style="width:50%; height:30px;">
                      <option value="0" selected="selected" required>select</option>
					 <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
					 <option value="4">4</option>
					 <option value="5">5</option>
					 <option value="6">6</option>
                     <option value="7">7</option>
						</select>
		</div>
		</div>
		
		<div class="row" style="margin-top:20px;">
		<div class="col-md-3 offset-2 padd">
		  <h2> Date</h2>
		 </div> 
		 
		 <div class="col-md-3 offset-1 padd">
                 <input type="date" name="dob" max="<?php echo date("Y-m-d")?>" style="width:80%; height:20px;"required/>
				 
			</div>
			</div>
		
		<div class="row" style="margin-top:20px;">
		<div class="col-md-3 padd">
			
		</div>
		<div class="col-md-3  offset-3 padd">
		  <input type ="submit" name="submit" id="submit" value="View" class="btn btn-lg btn-success btn-block"/>
		  </div>
		</div>
		
	
		<div id='spare_img'>
		</div>
	</div>
</div>

<script>

   $('#course_name').on('change', function(){
        $course_id = $(this).val();
        //alert($course_id);
        $.ajax({
          type: "POST",
          url: "getdata.php",
          data: "course_id="+$course_id,
          success: function(data){
            $("#batch").html(data);
            // alert(data);

      }
      });
   });

   $('#batch').on('change', function(){
        $batch_id = $('#batch').val();
        //alert($batch_id);
        $.ajax({
          type: "POST",
          url: "getdata2.php",
          data: "batch_id="+$batch_id,
          success: function(data){
            $("#subject").html(data);
                
      }
      });
   });
   
  
   //loads pic on cat_list change
  





</script>

<?php
if(isset($_POST["submit"]))
{
	//$bat = $_POST["bat"];
	//$_SESSION['bat_id']= $_POST["bat"];
	$_SESSION['course_id']= $_POST["course_name"];
	$_SESSION['batch_id']= $_POST["batch"];
	//$_SESSION['sem_id']=$_POST["sem"];
	$_SESSION["Hr"]= $_POST["hr"];
	$_SESSION['dob']=$_POST["dob"];
	$x=$_POST["dob"];
	$y=$_POST["hr"];
	$sql2="select * from attendance_tb where `date`='$x' and `hour`='$y'";
    $result2=mysqli_query($con,$sql2);
    if($res=mysqli_fetch_array($result2))
    {
    echo '<script>alert("ALREADY CREATED");</script>';
    }
	else
	{
	
	header("location:attendance.php");
}
}
?>
<script src="js/myscript.js"></script>
	
    <!-- container class closing-->
   

    <script src="js/jqueryori.min.js"></script>
	
	   </form>
 <footer>
       <p><h1> Amal Jyothi College of Engineering  </h1> 
        <h1>KERALA'S LARGEST INFRASTRUCTURE FOR ENGINEERING EDUCATION WITH NAAC 'A' & NBA ACCREDITATION</h1></p> /p>
    </footer>




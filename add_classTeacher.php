<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="./css/bootstrap.css">
	 <script type="text/javascript" src="js/validation_group.js"></script>
    
    <style>
/*          .form-module .form {
    display: none;
    padding: 40px;
    background-color: #e9e9e9;
}*/
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

    </style>
    
</head>

<?php
include 'dbcon.php';
//sms function

?>

<style>
.padd{
	
	padding-bottom:10px;
}
</style>



<div class="container-fluid">
    
    
    
    
    <div class="row" style="size: 100%;">
        <div  style="width:40%; height: 150px; float: left;">
            <img src="images/ams_logo.png" style="width:50%; height: 100px;">
            
        </div>
        <div style="width:60%; height: 150px;float: right;" >
                  
            
        <div class="container">
 
            <ul class="nav nav-tabs" style="margin-top: 35px;">
    
<!--                    <li><a href="group_reg.php"><h2>Group registration<h2></a></li>-->
                    <li><a href="adminHome.php"><h2>Home<h2></a></li>
                     <li><a href="http://localhost/AMS/admin/add_staff.php"><h2>Add Staff<h2></a></li>
					 <li><a href="logout.php"><h2>Logout<h2></a></li>
                    
  </ul>
  <br>
  </div>
        </div>
         </div>
        
       
    </div>
 
 
    
    <div class="row">
       
        <form class="f" height="auto" width="auto" action="#" method="POST" name="my_form" enctype='multipart/form-data'  enctype='multipart/form-data'>
	  
		    <div class="col-md-2 offset-7 padd">
		  <h2> Course</h2>
		  
		 </div> 
			<div class="col-md-3 padd">
			<select class=" form-control" id="course_name" name="course_name" required >
			
					
            <?php
                            $query = "SELECT * FROM course_tb";
                            $results = mysqli_query($con, $query);
                            foreach ($results as $records) {
                        ?>
                   <option value="<?php echo $records["course_id"]; ?>"> <?php echo  ucfirst($records["course_name"]); ?></option>

                        <?php
                            }
                         ?>
					
				</select>
			</div>
		 
			  
			   <div class="col-md-2 offset-7 padd">
		  <h2> Batch</h2> 
		 </div> 
		 
		 <div class="col-md-3 padd">
				<select id="batch" class=" form-control" name="batch" required>

						   
						<option value=" ">Batch</option>			   
				</select>
			</div>
			
			   <div class="col-md-2 offset-7 padd">
		  <h2>  Staff</h2>
		  
		 </div> 
			<div class="col-md-3 padd">
			<select class=" form-control" id="course_name" name="des" required >
			
					
            <?php
				
				  
				  $requst=mysqli_query($con,"select * from user_tb where user_tb.user_type='staff' and user_tb.status='1'");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['user_id'];?>>
					<?php 
					echo $row['first_Name'] . " ".$row['last_Name'];
					?>
					</option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
                         
			
		 
		  <div class="col-md-7  offset-9 padd">
		  <input type ="submit" name="submit" id="submit" class="btn btn-lg btn-success btn-block"/>
		  </div>
		   <script src="js/jqueryori.min.js"></script>
		  
		 <?php
if(isset($_POST["submit"]))
{
	
	$q=$_POST["course_name"];
	$a=$_POST["batch"];
	$d=$_POST["des"];
	echo $q;
    echo $a;
	echo $d;

$sql2="select * from classteacher_tb  where `staff_id`='$d' and `batch_id`='$a' and `course_id`='$q'";
$result2=mysqli_query($con,$sql2);
if($res=mysqli_fetch_array($result2))
{
echo '<script>alert("ALREADY SELECTED");</script>';
}
	
	


	else
	{
	$sql="INSERT INTO `classteacher_tb`(`staff_id`, `batch_id`, `course_id`) VALUES ('$d','$a','$q')";
	$result=mysqli_query($con,$sql);
	$sql1="UPDATE `login_tb` SET `user_type`='classTeacher',`batch_id`='$a'  WHERE `user_id`='$d'";
	$result1=mysqli_query($con,$sql1);
	echo '<script>alert("Successfully Added");</script>';
	
	
				 
	}		  

}
?>
		  
		  	  </form>
			  
		</div><!-- div inner row close-->
		 
       
    
    
   <footer>
       <p><h1> AmalJyothi College Of Engineering,Kanjirapally, Kerala, 
         Phone: 91-471-2554714, Fax: 91-471-2554714</h1></p> /p>
    </footer>
 

	
	
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
   $('#load_pic').on('click', function(){
        $subject_id = $('#subject').val();
        if($.isNumeric($item_id))
        {
          $.ajax({
            type: "POST",
            url: "getpic.php",
            data: "subject_id="+$subject_id,
            success: function(data){
            //  alert(data);
              $("#item_img").html(data);

        }
        });
        $('#buy').toggleClass('buy_visibility');
        }
        else {
          alert('No item found');
        }
        // alert($spare_id);
   });





        $('body').on('change', '#district_select', function () {
//            alert("countryslected");
            $index = $('#district_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_panchayath.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                            $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#panchayath_select').html($str);
                }
                    });
                    
    });
    
         $('body').on('change', '#panchayath_select', function () {
//            alert("countryslected");
            $index = $('#panchayath_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_ward.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                            $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#ward_select').html($str);
                }
                    });
                    
    });
    
    </script>


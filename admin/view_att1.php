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
.topnav {
  overflow: hidden;
  background-color: #333;
  width:19%;
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
</style>
<head>

</head>
<body>
<div class="topnav">
  <a class="active" href="http://localhost/AMS/admin/adminHome.php">Home</a>
  <a href="http://localhost/AMS-2/index.php">Logout</a>
  
  
</div>
  <center>  
<form action="#" method="post">
<table style="color:black;"border="0" width="53%" align="center" cellpadding="10" >

<tr><td><b><i><div class="de" style="color:black;font-weight:;font-size:15">COURSE</div></td>
                     <td> <select name="course_name" id="course_name" style="width:20%;align-content: flex-start;">
                    <option value="">Course</option>
                        <?php
                            $query = "SELECT * FROM course_tb";
                            $results = mysqli_query($con, $query);
                            foreach ($results as $records) {
                        ?>
                   <option value="<?php echo $records["course_id"]; ?>"> <?php echo  ucfirst($records["course_name"]); ?></option>

                        <?php
                            }
                         ?>
                </select></td>
                  </tr>
				  
				   <tr><td><b><i><div class="qu" style="color:black;font-weight:;font-size:15">BATCH</div></td>
                                    <td><select name="batch" id="batch" name="batch" style="width:20%;align-content: flex-start;">
                    <option value=" ">batch</option
                </select>></td>
                  </tr>
				  
				 
				  
				  <td><b><i><div class="de" style="color:black;font-weight:;font-size:15">SELECT YOUR SUBJECT</div></td>
				  <td><div class="de"><select name="des" required>
				  <option value="">select</option>
				  <?php
				  $id=$_SESSION['id'];
				  $requst=mysqli_query($con,"select * from subject_tb,staff_subject where subject_tb.subject_id=staff_subject.subject_id and staff_subject.staff_id='$id'");
				  $i=1;
				 
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['subject_id'];?>><?php echo $row['subject_name'];?></option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
					 <tr><td>
					 </select>
					     <button class="gl_item_addbtn"  type="submit" name="submit" id='load_pic' style="width:30%;height:20px;" >ADD</button>
                      </td> </tr>
					 </div></td>
                  </tr>
				  </table>

</form>
    <script src="js/jqueryori.min.js"></script>

<div id='item_img'>
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






</script>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	
	$q=$_POST["course_name"];
	$a=$_POST["batch"];
	$d=$_POST["subject"];
	$r=$_POST["des"];
	echo $q;
	echo $a;
	echo $d;
	echo $r;
	
	$sql="INSERT INTO `staff_subject`(`course_id`, `batch_id`, `subject_id`, `staff_id`) VALUES ('$q','$a','$d','$r')";
	$result=mysqli_query($con,$sql);
	echo "<script>alert(' Successfully Added');window.location.href = 'assign_staff.php';</script>";
	 
				  
				  
}
?>
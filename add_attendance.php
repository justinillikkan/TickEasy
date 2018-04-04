<?php
include 'dbcon.php';
session_start();
?>
<html>
<h1 style="color:black;"><center><b>ADD ATTENDANCE</h1></center>
<style>
body
{

background-color:pink;
background:url("images/311.jpg");

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
  <li><a href="http://localhost/AMS/staff/staffHome.php">BACK</a></li>
</ul>

  <center>  
<form action="" method="post">  
<table style="color:black;"border="0" width="53%" align="center" cellpadding="10" >

<tr><td><b><i><div class="de" style="color:black;font-weight:;font-size:20">course</div></td>
                     <td> <select name="course_name" id="course_name" style="width:20%;align-content: flex-start;" required>
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
                </select></td>
                  </tr>
				  
				   <tr><td><b><i><div class="qu" style="color:black;font-weight:;font-size:20">batch</div></td>
                                    <td><select name="batch" id="batch" name="batch" style="width:20%;align-content: flex-start;" required>
                    <option value=" ">batch</option
                </select></td>
                  </tr>
				  
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
  





</script>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	//$bat = $_POST["bat"];
	//$_SESSION['bat_id']= $_POST["bat"];
	$_SESSION['course_id']= $_POST["course_name"];
	$_SESSION['batch_id']= $_POST["batch"];
	$_SESSION['sem_id']=$_POST["sem"];
	$_SESSION["Hr"]= $_POST["hr"];
	$_SESSION['dob']=$_POST["dob"];
	
	
	header("location:attendance.php");
}
?>
<script src="js/myscript.js"></script>


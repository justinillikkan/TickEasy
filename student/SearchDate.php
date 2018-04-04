<?php 
include 'dbcon.php';

?>
<html>
  
<body>
  
<form action="#" name="myform" method="POST" class="form-inline">
 <div class="span12" style="border-radius: 5px; border-style: solid; border-width: 1px; margin-left: 20px;" >
   <h1 style="margin-left: 10px; "> <b> View Attendance Search By Date</b></h1>
   Select By Date
   <input type="date" name="mydate" id="mydate" class="input-medium" />
   &nbsp;
   
   &nbsp;
   <input type="submit" class="btn-primary  " name="myday" value="Search" id='myday' />
   <br/> <br/>
   <table border="2" width="300" cellspacing="2" cellpadding="1" class="table table-striped" style=" border-radius: 5px; border-style: solid; border-width: 1px; ">
     
     </body>
     <?php
     
     if(isset($_POST['submit']))
     {
     }
     if(isset($_POST['myday']))
      {
        $mydate=$_POST["mydate"];
		//echo $mydate;
        
        $result=mysqli_query($con,"select * from attendance_tb where `date`='$mydate' and `student_id`=7");



        while($row=mysqli_fetch_array($result))

        {
			//echo $row['first_Name'] . " ".$row['last_Name']
			if($row!='')
			{
				echo "Attendance Status on ".$mydate." Is Present";
		
			}
			else if($row==0)
		{
			echo "Attendance not entered on selected date !!";
			
		}
		

      ?>
      <form name="form" action="#" method="POST" id="form">
	  




    <?php
    }
	  }
  
    ?>
    </table>

          

    </body>
    </html>

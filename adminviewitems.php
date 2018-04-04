<?php
include 'dbcon.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <head>
        <meta charset="utf-8">
	<title>Global Store </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.ico">
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
        <style>
            .buy_visibility{
                visibility: hidden;
            }
        </style>
    </head>	
    </head>
    <body>
        
        <center><b>assign class teacher</b>
            <br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp
            <select name="course_name" id="course_name" style="width:20%;align-content: flex-start;">
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
                </select>
            &nbsp&nbsp&nbsp&nbsp&nbsp
                <select name="batch" id="batch" name="batch" style="width:20%;align-content: flex-start;">
                    <option value=" ">batch</option>
                </select>
            &nbsp&nbsp&nbsp&nbsp&nbsp
                <select name="subject" id="subject" style="width:20%;align-content: flex-start;">
                     <option value=" ">subject</option>
                </select>
            &nbsp&nbsp&nbsp&nbsp&nbsp
                
            <button class="gl_item_addbtn"  type="submit" name="submit" id='load_pic' style="width:20%;" >Go</button>


<div id='item_img'>
</div>
           



<!--<a href="item_edit.php"><input type="button" style="font-face: 'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey" value="Edit" name="buy"  id="buy"  class="buy_visibility"></a>-->
    <script src="js/jqueryori.min.js"></script>



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
</center>
     
    </body>
</html>

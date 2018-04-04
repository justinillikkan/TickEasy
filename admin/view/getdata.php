<?php
include 'dbcon.php';


if (!empty($_POST["course_id"])) {

  $course_id = $_POST["course_id"];
 // $_SESSION['category_id']=$_POST["category_id"];
  $query = "SELECT * FROM batch_tb WHERE course_id =$course_id";

  $results = mysqli_query($con, $query);
  ?>
  <option >Batch</option>
  <?php

  foreach($results as $subc){
    ?>

  <option value="<?php echo $subc["batch_id"]; ?>"> <?php echo ucfirst($subc["batch_name"]); ?></option>

     <?php
}
}
?>

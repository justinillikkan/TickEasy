<?php
include 'dbcon.php';


if (!empty($_POST["batch_id"])) {
  $batch_id = $_POST["batch_id"];
  //$dd=  $_SESSION['spid'];

  $query = "SELECT * FROM `subject_tb` WHERE batch_id = $batch_id ";
  $results = mysqli_query($con, $query);
  ?>
  <option >subject</option>
  <?php

        foreach($results as $sub){
    ?>

    <option value="<?php echo $sub['subject_id']; ?>"><?php echo ucfirst($sub['subject_name']); ?></option>

     <?php
}
}
?>

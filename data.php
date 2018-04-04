<?php

$dbcon = mysqli_connect("localhost", "root", "", "ams_db");
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($dbcon, "SELECT batch_id,batch_name FROM batch_tb where batch_id='" . $index . "'");


    $str = "";
    while ($row = mysqli_fetch_array($q)) {
        $str .= $row['batch_id'].":".$row['batch_name'] . ",";
    }
    
    echo rtrim($str, ',');
}


if (isset($_POST['index1'])) {
    $index2 = $_POST['index1'];
    
    $q1 =  "SELECT `subject_id`, `subject_name` FROM `subject_tb` WHERE `batch_id`= '" . $index2 . "'";
    
   
    //echo $q1;
    $q2=mysqli_query($dbcon,$q1);
    
    //var_dump($q2);
    
//    foreach ($q2 as $value){
//        $str3=$value['district_id'].":".$value['district_name'].',';
//    }
//    
    $str2 = "";
    while ($row1 = mysqli_fetch_array($q2)) {
        $str2 .= $row1['batch_id'].":".$row1['batch_name'] . ",";
    }
    echo rtrim($str2, ',');
}






if (isset($_POST['index2'])) {
    $index3 = $_POST['index2'];
    
    $q1 =  "SELECT `subject_id`, `subject_name` FROM `subject_tb` WHERE `batch_id`='" . $index3 . "'";
    
   
    
    $q2=mysqli_query($dbcon,$q1);
    
    
    
//    foreach ($q2 as $value){
//        $str3=$value['district_id'].":".$value['district_name'].',';
//    }
//    
    $str5 = "";
    while ($row4 = mysqli_fetch_array($q2)) {
        $str5 .= $row4['subject_id'].":".$row4['subject_name'] . ",";
    }
    echo rtrim($str5, ',');
}




if (isset($_POST['index3'])) {
    $index3 = $_POST['index3'];
    
    $q1 =  "SELECT `subject_id`, `subject_name` FROM `subject_tb` WHERE `batch_id`='" . $index3 . "'";
    
   
    
    $q2=mysqli_query($dbcon,$q1);
    
    
    
//    foreach ($q2 as $value){
//        $str3=$value['district_id'].":".$value['district_name'].',';
//    }
//    
    $str5 = "";
    while ($row4 = mysqli_fetch_array($q2)) {
        $str5 .= $row4['subject_id'].":".$row4['subject_name'] . ",";
    }
    echo rtrim($str5, ',');
}




?>
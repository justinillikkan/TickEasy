//<?php
//include 'dbcon.php';
//session_start();
//if(!isset($_SESSION['login_id']))
//{
  //header("location:login.php");
//}
// echo $_SESSION['login_id'];
//?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Delicious
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!--banner-->
    <section id="admin">
      <div class="bg-color">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="viewstaff.php">View Staff Details</a>
                  <a href="editfooditems.php">Edit food Details</a>
                  <a href="editstaff.php">Edit Staff Details</a>
                  <a href="viewbulorders.php">view bulk orders</a>
                  <a href="assigntask.php">Assign task to members</a>
                </div>
                <!-- Use any element to open the sidenav -->


                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h2 class="logo-name">AMS</h2>

            <a href="index.php">  <img src="img/home.jpg" height="50px" title="home" onmouseover="this.height=100;" onmouseout="this.height=50"/>
        <a href="staffregistration.php">    <img src="img/viewstaff.png" height="50px" title="Add staff details" onmouseover="this.height=100;" onmouseout="this.height=50"/></a>
          <a href="addfooditems.php">    <img src="img/addfoo.png" height="50px" title="Add Food Items" onmouseover="this.height=100;" onmouseout="this.height=50"/ >
            <a href="viewfeedback.php">  <img src="img/viewfeed.png" height="50px" title="view Feedback" onmouseover="this.height=100;" onmouseout="this.height=50"/>
            <a href="logout.php">  <img src="img/logout3.jpg" height="50px" title="logout" onmouseover="this.height=100;" onmouseout="this.height=50"/>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- / banner -->
    <!--about-->

   
    <!-- / footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>
</html>

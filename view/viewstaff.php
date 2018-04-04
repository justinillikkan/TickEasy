<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>viewstaff</title>
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
    <section id="viewst">
      <div class="bg-colorr">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.html">Home</a>
                  <a href="viewfooditems.html">View Food Items</a>
                  <a href="uviewmyprofile.html">View My Profile</a>
                  <a href="feedback.html">Send Feedback</a>
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h2 class="logo-name">STUDENT DETAILS</h2>
            <form name="form" action="#" method="POST" id="form">
              <center>
              <br><br>
              <table border='1' align='center'  height="70" width="800" >
                <tr>
                  <td>NAME</td>
                  <td>MOBILE</td>
                <!--<td>HOUSENAME</td>-->
                 <!-- <td>CITY</td>-->
                      <!--<td>PHONE</td>-->
                  <!--<td>PHOTO</td>-->


                </tr>
              <?php
              include 'dbcon.php';

              $result=mysqli_query($con,"select * from user_tb where user_type='student' and status='1'");



              while($row=mysqli_fetch_array($result))
              {
            ?>

<tr>

<td><?php echo $row['first_Name'];?></td>
<td><?php echo $row['phone'];?></td>


</tr>
<?php
}
?>
</table>


</center>

	 </div>
	 </form>


        </div>

        </center>

          </div>
          </form>

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

<?php 
include 'dbcon.php';

session_start();
    //$course= $_SESSION['course'];
    //$batch = $_SESSION["bat_id"];
    //$sub = $_SESSION['subject'];
	//echo $course;
	//echo $batch;
	//echo $sub;
	$bid=$_SESSION['bid'];
    //echo $bid;
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="./css/bootstrap.css">
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery lib from google server ===================== -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery lib from google server ===================== -->
	<script src="js/jquery-1.7.2.min.js"></script>
		<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
<!--  javaScript -->
<script>  
<!--  // building select nav for mobile width only -->
$(function(){
	// building select menu
	$('<select />').appendTo('nav');

	// building an option for select menu
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Choise Page...'
	}).appendTo('nav select');

	$('nav ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav select');

	});

	// on clicking on link
	$('nav select').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

// show and hide sub menu
$(function(){
	$('nav ul li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(150);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(150);			
		}
	);
});
//end
</script>
<!-- end -->
<style>


@font-face {
  font-family: Lato-Regular;
  src: url('../fonts/Lato/Lato-Regular.ttf'); 
}

@font-face {
  font-family: Lato-Bold;
  src: url('../fonts/Lato/Lato-Bold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: sans-serif;
}

/* ------------------------------------ */
a {
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
	outline: none;
	border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

/* ------------------------------------ */
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}

/*//////////////////////////////////////////////////////////////////
[ Scroll bar ]*/
.js-pscroll {
  position: relative;
  overflow: hidden;
}

.table100 .ps__rail-y {
  width: 9px;
  background-color: transparent;
  opacity: 1 !important;
  right: 5px;
}

.table100 .ps__rail-y::before {
  content: "";
  display: block;
  position: absolute;
  background-color: #ebebeb;
  border-radius: 5px;
  width: 100%;
  height: calc(100% - 30px);
  left: 0;
  top: 15px;
}

.table100 .ps__rail-y .ps__thumb-y {
  width: 100%;
  right: 0;
  background-color: transparent;
  opacity: 1 !important;
}

.table100 .ps__rail-y .ps__thumb-y::before {
  content: "";
  display: block;
  position: absolute;
  background-color: #cccccc;
  border-radius: 5px;
  width: 100%;
  height: calc(100% - 30px);
  left: 0;
  top: 15px;
}


/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 600px;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #fff;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 3px 30px;
}

.wrap-table100 {
  width: 1000px;
}

/*//////////////////////////////////////////////////////////////////
[ Table ]*/
.table100 {
  background-color: #fff;
}

table {
  width: 100%;
  
}

#select_subject{
  width: 30%;
  
}

th, td {
  font-weight: unset;
  padding-right: 10px;
}

.column1 {
  width: 20%;
  padding-left: 40px;
}

.column2 {
  width: 13%;
}

.column3 {
  width: 10%;
}

.column4 {
 <!-- width: 19%;-->
}

.column5 {
  width: 13%;
}

.table100-head th {
  padding-top: 18px;
  padding-bottom: 18px;
}

.table100-body td {
  padding-top: 16px;
  padding-bottom: 16px;
}

/*==================================================================
[ Fix header ]*/
.table100 {
  position: relative;
  padding-top: 60px;
}

.table100-head {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
}

.table100-body {
  max-height: 585px;
  overflow: auto;
}


/*==================================================================
[ Ver1 ]*/

.table100.ver1 th {
  font-family: Lato-Bold;
  font-size: 18px;
  color: #fff;
  line-height: 1.4;

  background-color: #6c7ae0;
}

.table100.ver1 td {
  font-family: Lato-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver1 .table100-body tr:nth-child(even) {
  background-color: #f8f6ff;
}

/*---------------------------------------------*/

.table100.ver1 {
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
}

.table100.ver1 .ps__rail-y {
  right: 5px;
}

.table100.ver1 .ps__rail-y::before {
  background-color: #ebebeb;
}

.table100.ver1 .ps__rail-y .ps__thumb-y::before {
  background-color: #cccccc;
}


/*==================================================================
[ Ver2 ]*/

.table100.ver2 .table100-head {
  box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.1);
}

.table100.ver2 th {
  font-family: Lato-Bold;
  font-size: 18px;
  color: #fa4251;
  line-height: 1.4;

  background-color: transparent;
}

.table100.ver2 td {
  font-family: Lato-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver2 .table100-body tr {
  border-bottom: 1px solid #f2f2f2;
}

/*---------------------------------------------*/

.table100.ver2 {
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
}

.table100.ver2 .ps__rail-y {
  right: 5px;
}

.table100.ver2 .ps__rail-y::before {
  background-color: #ebebeb;
}

.table100.ver2 .ps__rail-y .ps__thumb-y::before {
  background-color: #cccccc;
}

/*==================================================================
[ Ver3 ]*/

.table100.ver3 {
  background-color: #393939;
}

.table100.ver3 th {
  font-family: Lato-Bold;
  font-size: 15px;
  color: #00ad5f;
  line-height: 1.4;
  text-transform: uppercase;
  background-color: #393939;
}

.table100.ver3 td {
  font-family: Lato-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.4;
  background-color: #222222;
}


/*---------------------------------------------*/

.table100.ver3 {
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
}

.table100.ver3 .ps__rail-y {
  right: 5px;
}

.table100.ver3 .ps__rail-y::before {
  background-color: #4e4e4e;
}

.table100.ver3 .ps__rail-y .ps__thumb-y::before {
  background-color: #00ad5f;
}


/*==================================================================
[ Ver4 ]*/
.table100.ver4 {
  margin-right: -20px;
}

.table100.ver4 .table100-head {
  padding-right: 50px;
}

.table100.ver4 th {
  font-family: Lato-Bold;
  font-size: 18px;
  color: #4272d7;
  line-height: 1.4;

  background-color: transparent;
  border-bottom: 2px solid #f2f2f2;
}

.table100.ver4 .column1 {
  padding-left: 7px;
}

.table100.ver4 td {
  font-family: Lato-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.4;
}

.table100.ver4 .table100-body tr {
  border-bottom: 1px solid #f2f2f2;
}

/*---------------------------------------------*/

.table100.ver4 {
  overflow: hidden;
}

.table100.ver4 .table100-body{
  padding-right: 20px;
}

.table100.ver4 .ps__rail-y {
  right: 0px;
}

.table100.ver4 .ps__rail-y::before {
  background-color: #ebebeb;
}

.table100.ver4 .ps__rail-y .ps__thumb-y::before {
  background-color: #cccccc;
}


/*==================================================================
[ Ver5 ]*/
.table100.ver5 {
  margin-right: -30px;
}

.table100.ver5 .table100-head {
  padding-right: 40px;
}

.table100.ver5 th {
  font-family: Lato-Bold;
  font-size: 14px;
  color: #555555;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: transparent;
}

.table100.ver5 td {
  font-family: Lato-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.4;

  background-color: #f7f7f7;
}

.table100.ver5 .table100-body tr {
  overflow: hidden; 
  border-bottom: 10px solid #fff;
  border-radius: 10px;
}

.table100.ver5 .table100-body table { 
  border-collapse: separate; 
  border-spacing: 0 10px; 
}
.table100.ver5 .table100-body td {
    border: solid 1px transparent;
    border-style: solid none;
    padding-top: 10px;
    padding-bottom: 10px;
}
.table100.ver5 .table100-body td:first-child {
    border-left-style: solid;
    border-top-left-radius: 10px; 
    border-bottom-left-radius: 10px;
}
.table100.ver5 .table100-body td:last-child {
    border-right-style: solid;
    border-bottom-right-radius: 10px; 
    border-top-right-radius: 10px; 
}

.table100.ver5 tr:hover td {
  background-color: #ebebeb;
  cursor: pointer;
}

.table100.ver5 .table100-head th {
  padding-top: 50px;
  padding-bottom: 50px;
}

/*---------------------------------------------*/

.table100.ver5 {
  overflow: hidden;
}

.table100.ver5 .table100-body{
  padding-right: 30px;
}

.table100.ver5 .ps__rail-y {
  right: 0px;
}

.table100.ver5 .ps__rail-y::before {
  background-color: #ebebeb;
}

.table100.ver5 .ps__rail-y .ps__thumb-y::before {
  background-color: #cccccc;
}

/* make sidebar nav vertical */ 
@media (min-width: 768px){
  .affix-content .container {
    width: 700px;
  }   

  html,body{
    background-color: #f8f8f8;
    height: 100%;
    
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }
  .sidebar-nav{
        position:fixed; 
        
  }
  .affix-sidebar{
    padding-right:0; 
    font-size:small;
    padding-left: 0;
  }  
  .affix-row, .affix-container, .affix-content{
    height: 100%;
    margin-left: 0;
    margin-right: 0;    
  } 
  .affix-content{
    background-color:white; 
  } 
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar{
    border-radius:0; 
    margin-bottom:0; 
    border:0;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }  
}

@media (min-width: 769px){
  .affix-content .container {
    width: 600px;
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }  
}

@media (min-width: 992px){
  .affix-content .container {
  width: 900px;
  }
    .affix-content .container .page-header{
    margin-top: 0;
  }
}

@media (min-width: 1220px){
  .affix-row{
    
  }

  .affix-content{
    overflow: auto;
  }

  .affix-content .container {
    width: 1000px;
  }

  .affix-content .container .page-header{
    margin-top: 0;
  }
  .affix-content{
    padding-right: 30px;
    padding-left: 30px;
  }  
  .affix-title{
    border-bottom: 1px solid #ecf0f1; 
    padding-bottom:10px;
  }
  .navbar-nav {
    margin: 0;
  }
  .navbar-collapse{
    padding: 0;
  }
  .sidebar-nav .navbar li a:hover {
    background-color: #428bca;
    color: white;
  }
  .sidebar-nav .navbar li a > .caret {
    margin-top: 8px;
  }  
}

.form-module .form {
    display: none;
    padding: 40px;
    background-color: #e9e9e9;
}
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
.active1{background-color:#BBDEFB;}

</style>
</head>
<body>

       <!-- <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h2 class="logo-name">SHOP DETAILS</h2>
            <form name="myform" action="#" method="POST" id="form"
			 style=" padding-top: 0px;
                      height: 1000px;
                      width: 1000px;">
             
                       <br><br>
              <table border='1' align='center'  height="300" width="1000" >
                <tr>
                  
                  <td>SHOP NAME</td>
                <td>DISTRICT</td>
                  <td>LOCATION</td>
                      <td>PHONE NUMBER</td>
                


                </tr>
              
</table>


</center>

	 </div>
	 </form>


        </div>

        </center>

          </div>-->
		  <form action="" method="post">
		   <div class="row" style="size: 100%;">
        <div  style="width:40%; height: 150px; float: left;">
          <img src="img/TickEasy_logo.jpg" style="width:40%; height: 150px;">
            
        </div>
        <div style="width:60%; height: 150px;float: right;" >
                  
          <div class="container-fluid">  
        
 
				<ul class="nav nav-tabs" style="margin-top: 35px;">
    
<!--                    <li><a href="group_reg.php"><h2>Group registration<h2></a></li>-->
					<li><a href="classT_home.php"><h2>Home<h2></a></li>
                    
					 <li><a href="logout.php"><h2>Log out<h2></a></li>
                     <li><a href=""><h2><h2></a></li>
                   </ul>
					<br>
				</div>
        </div>  
  </div>
  
		  
		  <div class="limiter">
	 
		<div class="container-table100">
		
			<div class="wrap-table100">
			
			<select id="select_subject" class="form-control" name="sub" required>
			<option value="">Select Subject</option>
				  <?php
				  
				  $requst=mysqli_query($con,"select * from subject_tb where batch_id=$bid");
				  $i=1;
				  //$sid=$_REQUEST['batch_id'];
				  //echo $sid;
				  while($row=mysqli_fetch_array($requst))
				  {
                   ?>
					<option style="width:100px;height:100px;"value=<?php echo $row['subject_id'];?>><?php echo $row['subject_name'];?></option>
				 
				  
					
					 <?php
					 $i++;
					  }
					 ?>
					 </select>
					 
					 <input type="submit" name="submit" value="VIEW"/ style="width:70px;height:30px;">
			
				<div class="table100 ver1 m-b-110">
				
				
				
					<div class="table100-head">
					
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Number of Absent</th>
									<th class="cell100 column2">Total No Of Hours</th>
									<th class="cell100 column3">Attendance</th>
								
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
			    
					 
					


</tr>

            
							<tbody>
								<tr class="row100 body">
								<?php
if(isset($_POST["submit"]))
{
	//$bat = $_POST["bat"];
	//$_SESSION['bat_id']= $_POST["bat"];
	$bid=$_POST["sub"];
	//$_SESSION['sem_id']=$_POST["sem"];
	//$_SESSION["Hr"]= $_POST["hr"];
	//$_SESSION['dob']=$_POST["dob"];
	
	//echo $bid;
	
//header("location:viewAtt.php");

 $id=$_SESSION['id'];
 //echo $id;
$results=mysqli_query($con,"select * from student_tb,user_tb where student_tb.user_id=user_tb.user_id  and user_tb.user_id='$id'");
$i=1;

while($row=mysqli_fetch_array($results))
{	
 $stdid=$row['student_id'];
 //echo $stdid;
  //$stdid1=$row['staff_id'];
 
		$result_att=mysqli_query($con,"select  COUNT(*) from attendance_tb where attendance_tb.student_id='$stdid' and attendance_tb.subject_id='$bid'");
		$rowatt=mysqli_fetch_array($result_att);
		$result_att1=mysqli_query($con,"select COUNT(*) from att_hr_tb where subject_id='$bid'");
		$rowatt1=mysqli_fetch_array($result_att1);

		
?>
	<tr>
		<?php
      $today=date("Y/m/d") ;
	  //echo $today;
     $date1=date_create("2018-01-01");
     $date2=date_create($today);
     $diff=date_diff($date1,$date2);
	 //echo $diff;
     //echo $diff->format("%R%a days");
	   //echo $diff->format("%a");
	   
?>
									<td style="text-align:center;"class="cell100 column1"><p><?php echo $rowatt[0]?> </p></td>
									<?php $tot=intval($diff->format("%a"));//echo $diff->format("%a");?>
									<td style="text-align:center;"class="cell100 column2"><?php echo $rowatt1[0]?></td>
									<td style="text-align:center;" class="cell100 column3"><?php echo round((($tot-$rowatt[0])/$tot)*100,2);echo "%";?></td>
									</tr>
									
								
							</tbody>
							
							
							<?php
							
}
}
?>
						</table>
						<br><br><br>

					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
	

	<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	  
		  
		  
		  
		  
		  
</body>
<script>
(function ($) {
	"use strict";
	$('.column100').on('mouseover',function(){
		var table1 = $(this).parent().parent().parent();
		var table2 = $(this).parent().parent();
		var verTable = $(table1).data('vertable')+"";
		var column = $(this).data('column') + ""; 

		$(table2).find("."+column).addClass('hov-column-'+ verTable);
		$(table1).find(".row100.head ."+column).addClass('hov-column-head-'+ verTable);
	});

	$('.column100').on('mouseout',function(){
		var table1 = $(this).parent().parent().parent();
		var table2 = $(this).parent().parent();
		var verTable = $(table1).data('vertable')+"";
		var column = $(this).data('column') + ""; 

		$(table2).find("."+column).removeClass('hov-column-'+ verTable);
		$(table1).find(".row100.head ."+column).removeClass('hov-column-head-'+ verTable);
	});
    

})(jQuery);

</script>



</body>
</html>

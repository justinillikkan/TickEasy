<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
@import url('https://fonts.googleapis.com/css?family=Nunito');
@import url('https://fonts.googleapis.com/css?family=Poiret+One');

body, html {
	height: 100%;
	background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
	background:black;
	position: relative;
}
#login-box {
	position: absolute;
	top: 0px;
	left: 50%;
	transform: translateX(-50%);
	width: 350px;
	margin: 0 auto;
	border: 1px solid black;
	background: rgba(48, 46, 45, 1);
	min-height: 250px;
	padding: 20px;
	z-index: 9999;
}
#login-box .logo .logo-caption {
	font-family: 'Poiret One', cursive;
	color: white;
	text-align: center;
	margin-bottom: 0px;
}
#login-box .logo .tweak {
	color: #ff5252;
}
#login-box .controls {
	padding-top: 30px;
}
#login-box .controls input {
	border-radius: 0px;
	background: rgb(98, 96, 96);
	border: 0px;
	color: white;
	font-family: 'Nunito', sans-serif;
}
#login-box .controls input:focus {
	box-shadow: none;
}
#login-box .controls input:first-child {
	border-top-left-radius: 2px;
	border-top-right-radius: 2px;
}
#login-box .controls input:last-child {
	border-bottom-left-radius: 2px;
	border-bottom-right-radius: 2px;
}
#login-box button.btn-custom {
	border-radius: 2px;
	margin-top: 8px;
	background:#ff5252;
	border-color: rgba(48, 46, 
45, 1);
	color: white;
	font-family: 'Nunito', sans-serif;
}
#login-box button.btn-custom:hover{
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
	background: rgba(48, 46, 45, 1);
	border-color: #ff5252;
}
#particles-js{
  	width: 100%;
  	height: 100%;
  	background-size: cover;
  	background-position: 50% 50%;
  	position: fixed;
	</script>
<div class="container">
	<div id="login-box">
		<div class="logo">
			<img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img img-responsive img-circle center-block"/>
			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
		</div><!-- /.logo -->
		<div class="controls">
			<input type="text" name="username" placeholder="Username" class="form-control" />
			<input type="text" name="username" placeholder="Password" class="form-control" />
			<button type="button" class="btn btn-default btn-block btn-custom">Login</button>
		</div><!-- /.controls -->
	</div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"></div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->
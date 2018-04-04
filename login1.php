
<html>
<head>
<center>
<h1 style="color:black;"><b>LOGIN</h1>
</center>
<style>
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
    color: red;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:lightblue;
}
body{
background:url("AMS\pics\28.png" );
}
</style>
<body style=img src="pics\20.png">
<ul>
  <li><a class="active" href="login.php">HOME</a></li>
  <tr><li><a href="sflogin.php">STAFF PORTAL</a></li></tr>
  <tr><li><a href="stlogin.php">STUDENT PORTAL</a></li></tr>
</ul>
<body>
<br><br><br><br><br><br><br><br><br><br>
<center>
<form action="#" method="POST">
<br><fieldset style="height=40px;width:40px;background-color:red;">
<center>
<table style="border:inset">
    <tr>
	<h1 style="color:black;"><b>LOGIN</h1>
	<td><label style="color:white; font-size:25"><b>Username</b></label></td>
    <td><br><input type="text" style="width=30px; height:30px;" placeholder="Enter Username" name="uname" style: width="100"/></font></td></tr>

    <tr><td><br><label style="color:white;font-size:25"><b>Password</b></label></td>
   <td> <br><br><input type="password" style="width=30px; height:30px;" placeholder="Enter Password" name="psw" ><br><br></tr></td>
        </table>
		<center>
     <input type="checkbox" checked="checked"><label style="color:orange; font-size:20"> Remember me</label><br><br>
	 <button type="submit" name="submit" style="width:100px;height:50px;backgrond-color:white;color:black;"><b>Login</button><br><br>
	   
	  </center>
	  </table>
	 </div>
	  </form>
	</body>
</html>
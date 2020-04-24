 <?php
// starting the session
session_start();
//connecting to database
$con=mysqli_connect('localhost','root','');	
mysqli_select_db($con,'week5');
//Assigning username and password values
if(isset($_POST['username'])){
$name=$_POST['username'];
}
if(isset($_POST['password'])){
$password=$_POST['password'];
$password=md5($password);
}
//getting username and password values from database after user clicks on submit button
if(isset($_POST['submit'])){
	$query="select * from users where Username='$name'&& Password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
// checking if user is already registered or not and then navigating to respective page
if($num>0){
	header('location:home.php');
}
else{
	echo '<p style="color:red; font-size:20px;">Incorrect username or password.Please try again';
}
//destroying the session
session_destroy();
}
    ?>
<html>
   <head>
   
   <title>Login page</title>
	<!--importing external style sheet to style the page -->
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Using bootstrap libraries to design the home page-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<form action="login.php" method="post">
	<h1>MULTI CUISINE RESTAURANT</h1>
	<!--Code to display icons on the navigation bar and navigate to respective pages-->
		<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">MULTI CUISINE RESTAURANT</a>
        </div>
        <ul class="nav navbar-nav">
		<li><a >MY INFO</a></li>
          <li><a >HOME</a></li>
          
          <li><a >MENU</a></li>

          <li><a>CONTACT US</a></li>

		  <li><a >ORDER ONLINE</a></li> &nbsp
		<li><a >LOGOUT</a></li>
		
		
        </ul> 
		      </div>
    </nav>
<h1>Login Page</h1>
<h3>Please login if you are an existing customer,if not </br>
please register to become one and explore our menu options.</h3>
           
		   <table class="login-table">
        <!--username input field-->
		<tr>
        <td><label> username: </label></td>
        <td><input type="text" name="username" id="user" placeholder="username" required></td>
		</tr>
        <br>
        <!--password input field-->
		<tr>
        <td><label> password:</label></td>
        <td><input type="password" name="password" id="pwd" placeholder="password" required></td>
		</tr>
        <br>
		<!-- submit button to submit the form-->
		<tr>
        <td colspan="2"> <input type="submit" name="submit" value="Submit" > &nbsp
		<a href="registration.php">Register</a></td>
			</tr>
			</table>
			<!--link to navigate to next page to reset username-->
			<a href="reset.php" >Forgot username</a>&nbsp
			<!--link to navigate to next page to reset the password-->
			<a href="reset.php" >Forgot password</a>
    		</form>
			<!--Footer to display copyright-->
			 <footer id="footer">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved. </footer>
        </body>
		
</html>
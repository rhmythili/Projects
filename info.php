<html>
  <head>
    <title>My Info Page</title>
	<!--importing external style sheet to style the page -->
	<link rel="stylesheet" type="text/css" href="Table.css">
	<meta charset="utf-8">
	<!--Using bootstrap libraries to design the home page-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<h1>MULTI CUISINE RESTAURANT</h1>
	<!--Code to display icons on the navigation bar and navigate to respective pages-->
	<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">MULTI CUISINE RESTAURANT</a>
        </div>
        <ul class="nav navbar-nav">
		<li class="active"><a href="info.php">MY INFO</a></li>
          <li><a href="home.php">HOME</a></li>
          <li><a href="menu.php">MENU</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
		  <li><a href="https://www.grubhub.com/delivery/de-newark" target="_blank">ORDER ONLINE</a></li>
		  <li><a href="logout.php">LOGOUT</a></li>
		  
        </ul>
        </div>
    </nav>
		<form  action="info.php" method="post">
 <!--username input field-->
        <label> Please enter the Username: </label>
        <input type="text" name="username" id="user" placeholder="Username" required>
	<!-- submit button to submit the form-->	
       <input type="submit" name="submit" value="Submit" > &nbsp
					
    		</form>
			<!--Table to display the data retrieved from the database-->
				<table align="center">
				<tr>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>State</th>
				<th>Zip</th>
				</tr>
				<?php
// starting the session
session_start();
//connecting to database
$con=mysqli_connect('localhost','root','');	
mysqli_select_db($con,'week5');
//retrieveing data from database based on the username
if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$query="select * from users where Username='$name'";
	$result=mysqli_query($con,$query);
	$num=mysqli_num_rows($result);
//checking if given username exists in the database or not
	if($num==0){
	echo "No Records Found";
	}
	while($row=mysqli_fetch_array($result)){
		?>
		<tr>
		<td><?php echo $row['Username']?></td>
		<td><?php echo $row['First_name']?></td>
		<td><?php echo $row['Last_name']?></td>
		<td><?php echo $row['Email_Id']?></td>
		<td><?php echo $row['Phone']?></td>
		<td><?php echo $row['Address']?></td>
		<td><?php echo $row['State']?></td>
		<td><?php echo $row['Zip']?></td>
		
				</tr>
		<?php
	}
}
//destroying the session
session_destroy();
?>
</table>
	<!--Footer to display copyright-->
 <footer id="footer">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved.</footer>
</body>
	</html>
<?php
// starting the session
session_start();
//check if user is already logged in, if yes direct him to success page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    header("Location:success.php");
}
//destroying the session
else{
	session_destroy();
}
?>  
  <html>
  <head>
    <title>Contact Page</title>
	<!--importing external style sheet to style the page -->
	<link rel="stylesheet" type="text/css" href="styles.css">
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
		<li><a href="info.php">MY INFO</a></li>
          <li><a href="home.php">HOME</a></li>
          <li><a href="menu.php">MENU</a></li>
          <li class="active"><a href="contact.php">CONTACT US</a></li>
		  <li><a href="https://www.grubhub.com/delivery/de-newark" target="_blank">ORDER ONLINE</a></li>
		  <li><a href="logout.php">LOGOUT</a></li>
		 
        </ul>
        </div>
    </nav>
	<!--Details about the timings of the restaurant-->
	<p>
	<h2>CONTACT:</h2>
	<h3>Call us at : 123-456-6789</h3>
	<h3>We are located at Newark,Delaware,19702</h3>
	<h2>TIMINGS:</h2>
	<h3>Weekdays:
	11:30 A M – 2:30 P M</br>

	05:30 P M – 10:00 P M</br>

	Weekends:
	12:00 P M – 3:30 P M</br>

	5:30 P M – 10:30 P M</h3>
	<h2>KINDLY NOTE:</h2>
	<h3>Buffet Lunch on all 7 days</h3>

	<h3>A-la-carte at Dinner on all 7 days</h3>

	<h3>Special buffet on weekends and holidays</h3>

	<h3>Monthly special menu available</h3>
	
	</p>
	<!--Footer to display copyright-->
 <footer id="footer">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved.</footer>
</body>
	</html>
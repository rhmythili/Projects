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
    <title>Home Page</title>
	<!--importing external style sheet to style the page -->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Using bootstrap libraries to design the home page-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<form action="home.php" method="post">
	<h1>MULTI CUISINE RESTAURANT</h1>
	<!--Code to display icons on the navigation bar and navigate to respective pages-->
		<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">MULTI CUISINE RESTAURANT</a>
        </div>
        <ul class="nav navbar-nav">
		<li><a href="info.php">MY INFO</a></li>
          <li class="active"><a href="home.php">HOME</a></li>
          
          <li><a href="menu.php">MENU</a></li>

          <li><a href="contact.php">CONTACT US</a></li>

		  <li><a href="https://www.grubhub.com/delivery/de-newark" target="_blank">ORDER ONLINE</a></li> &nbsp
		<li><a href="logout.php">LOGOUT</a></li>
		
		
        </ul> 
		      </div>
    </nav>
	<!--Carousel to display dynamic pictures-->
	<div class="container containerCarousel">       
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>

          </ol>

          <!--Images in the carousel and some styilng-->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/seafood.jpg" alt="1" style="width:100%;height:60%;"/>
            </div>
            <div class="item">
              <img src="images/sizzler.jpg" alt="2" style="width:100%;height:60%;">
            </div>

            <div class="item">
              <img src="images/scallops.jpg" alt="3" style="width:100%;height:60%;">
            </div>

            <div class="item">
              <img src="images/snack.jpg" alt="4" style="width:100%;height:60%;">

            </div>
            <div class="item">
              <img src="images/dessert.jpg" alt="5" style="width:100%;height:60%;">
            </div>
			
			<div class="item">
              <img src="images/jamun.jpg" alt="6" style="width:100%;height:60%;">
            </div>
			
			<div class="item">
              <img src="images/samosa.jpg" alt="7" style="width:100%;height:60%;">
            </div>
			
			<div class="item">
              <img src="images/biryani.jpg" alt="8" style="width:100%;height:60%;">
            </div>
          </div>
          <!--Code to navigate to next or previous pics in the carousel-->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> 
	  <!--Some info about the restaurant-->
	  <h3>Multi Cuisine Restaurant is one of the top rated restaurants in Delaware.</br>
	  We are famous for our authentic South Indian Dishes,Sea food and Desserts.</br>
	  We offer catering services for all kinds of parties.</br>
	  Contact Us for more details.
	  </h3>
	  
</form>
<!--Footer to display copyright-->
      <footer id="footer">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved.</footer>
	</body>
	</html>
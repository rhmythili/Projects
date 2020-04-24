<link rel="stylesheet" type="text/css" href="styles.css">
<?php
// starting the session
session_start();
echo "Registered Successfully.Please login with your new username and password for security reasons";
//destroying the session
session_destroy();
?>

<html>
   <body>

          <form  action="reg_success.php" method="post">
		  <!--link to navigate to the login page-->
		 		<a href="login.php">Login</a></br>
							    		</form>
				<footer id="footer">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved. </footer>
      </body>
</html>

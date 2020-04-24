<link rel="stylesheet" type="text/css" href="styles.css">
<html>
   <body>
	<h1>Reset Page</h1>
	<?php
	// starting the session
	session_start();
	echo "Please enter your email id or phone number to reset";
	//destroying the session
	session_destroy();
?>
          <form  action="reset.php" method="post">
		  <label>Email Id or Phone Number</label>
		  <!--Input field to enter email id or phone number to reset userame or password-->
		 		<input type="text" name="reset" required>
				<input type="submit" value="Submit" >
							    		</form>
				<footer id="footer">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved. </footer>
      </body>
</html>

<?php
// starting the session
session_start();
// destroying the session
session_destroy();
//navigating the user to login page
header('location:login.php');

?>
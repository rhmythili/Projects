<?php
// starting the session
session_start();
//connecting to database
$con=mysqli_connect('localhost','root','');	
mysqli_select_db($con,'week5');
//Checking if input variables are set or not and assigning input values
if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['firstname'])&&isset($_POST['lastname'])
	&& isset($_POST['phone']) && isset($_POST['state']) && isset($_POST['email'])&& isset($_POST['address'])
	&& isset($_POST['zipcode'])){
$name=$_POST['username'];
$password=$_POST['password'];
$cnfmpassword=$_POST['cnfmpassword'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$middlename=$_POST['middlename'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$email=$_POST['email'];
$address=$_POST['address'];
$zip=$_POST['zipcode'];

}

//getting username value from database after user clicks on register button
if(isset($_POST['create'])){
$query="select * from users where Username='$name'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
//validates the username, if it is already taken or not
if($num==1){
	echo "Username already taken";
	}
	}
//defining text patterns to compare the input field values
$phone_pattern="/^[0-9]{3}[0-9]{3}[0-9]{4}$/";
$username_pattern="#.*^(?=.{5,15})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
$pass_pattern="#.*^(?=.{5,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
$text_pattern="/^[a-zA-Z ]*$/";
$address_pattern="/^[^@]{1,63}@[^@]{1,255}$/";
//initializing the string variables
$firstname_error='';
$lastname_error='';
$phone_error='';
$state_error='';
$username_error='';
$pass_error='';
$cnfmPass_error='';
$add_error='';

//checking the validations for the input fields, after the form is submitted and navigating to next page if valid
	 if (
	 (isset($_POST['firstname'])&& preg_match($text_pattern,$_POST['firstname']))&& 
	 (isset($_POST['lastname'])&& preg_match($text_pattern,$_POST['lastname']))&& 
	 (isset($_POST['phone'])&&preg_match($phone_pattern, $_POST['phone']))&&
	 (isset($_POST['state'])&& preg_match($text_pattern,$_POST['state']))&&
	 (isset($_POST['username'])&& preg_match($username_pattern,$_POST['username']))&&
	 (isset($_POST['password'])&& preg_match($pass_pattern, $_POST['password']))&&
	 ($_POST['password']  == $_POST['cnfmpassword'])&&
	 (isset($_POST['create'])&& $_POST['create']==true)&& $num!=1)
	 {
		 $reg="insert into users(First_Name,Middle_Name,Last_Name,Email_Id,Phone,Address,State,Zip,Username,Password) 
		 values('".$firstname."','".$middlename."','".$lastname."','".$email."','".$phone."','".$address."','".$state."',
			'".$zip."','".$name."','".md5($password)."')";
		 mysqli_query($con,$reg);
		header("Location:reg_success.php");
} 

//checking the validations for the input fields, after the form is submitted and displaying
// the error message for invalid inputs
else if(isset($_POST['create'])&&(!preg_match($text_pattern,$_POST['firstname']))){
	$firstname_error='Invalid first name.Please follow the instructions and enter it again';
}
else if(isset($_POST['create'])&&(!preg_match($text_pattern,$_POST['lastname']))){
	$lastname_error='Invalid last name.Please follow the instructions and enter it again';
}
else if(isset($_POST['create'])&&(!preg_match($phone_pattern, $_POST['phone']))){
	$phone_error="Invalid phone number.Please follow the instructions and enter it again";
}
else if(isset($_POST['create'])&&(!preg_match($text_pattern,$_POST['state']))){
	$state_error="Invalid state.Please follow the instructions and enter it again";
}
else if(isset($_POST['create'])&&(!preg_match($username_pattern,$_POST['username']))){
	$username_error="Invalid username.Please follow the instructions and enter it again";
}
else if(isset($_POST['create'])&&(!preg_match($pass_pattern, $_POST['password']))){
	$pass_error="Invalid password format.Please follow the instructions and enter it again";
}
else if(isset($_POST['create'])&&(!($_POST['password'] == $_POST['cnfmpassword']))){
	$cnfmPass_error="Password does not match.Please enter the correct password again";
}
else{
	session_destroy();
}

?>

<html>
<head>
<title>User Registration</title>
<!--using external css for styling the page-->
<link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body>
 <!--Instructions to user for filling the form-->
<h1>Registration Form</h1>
<h4>Instructions to the user</h4>
<p>Please fill in all the mandatory fields indicated with * in the form to register successfully.</br>
No special characters for firstname,lastname, address and state fields</br>
Middle name is optional and it takes only one character</br>
Email :Should contain '@' and '.'</br>
Phone Format: Should contain 10 digits without hyphen('-')</br>
Zip Code: Only 5 digits</br>
Password,Username Format: Should contain atleast 1 Capital leter,Numeric and Special Character. Min length of 5.
</p>	
 <form action="registration.php" method="post">
   <table>
<tr>
<!--First Name input field-->
<td width="30%"><b>First Name*</b></td>
<td width="70%"><input type="text" name="firstname" value="
<?php echo htmlentities(isset($_POST['firstname'])?$firstname:"")?>"required>
<span class='error'><?php echo $firstname_error ?></span>
</td>

<br>
</tr>

<tr>
<!--Middle Name input field-->
<td><b>Middle Name</b></td>
<td><input type="text" name="middlename" pattern="[a-zA-Z]" maxlength="1"><br></td>
</tr>

<tr>
<!--Last Name input field-->
<td><b>Last Name*</b></td>
<td><input type="text" name="lastname" value="
<?php echo htmlentities(isset($_POST['lastname'])?$lastname:"")?>"required>
<span class='error'><?php echo $lastname_error ?></span></td><br>
</tr>

<tr>
<!--Email input field-->
<td><b>Email Id*</b></td>
<td><input type="email" name="email" value="
<?php echo htmlentities(isset($_POST['email'])?$_POST['email']:"")?>"required></td><br>
</tr>

<tr>
<!--Phone number input field-->
<td><b>Phone Number*</b></td>
<td><input type="tel" name="phone" min="10" maxlength="10" value="
<?php echo htmlentities(isset($_POST['phone'])?$phone:"")?>"required>
<span class='error'><?php echo $phone_error ?></span>
</td><br>
</tr>

<tr>
<!--Address input field-->
<td><b>Street Address*</b></td>
<td><input type="text" name="address" 
value="
<?php echo htmlentities(isset($_POST['address'])?$address:"")?>"required></td><br>
</tr>
<tr>
<!--State input field-->
<td><b>State*</b></td>
<td><input type="text" name="state" value="
<?php echo htmlentities(isset($_POST['state'])?$state:"")?>"required>
<span class='error'><?php echo $state_error ?></span></td><br>
</tr>
<tr>
<!--Zip code input field-->
<td><b>ZipCode*</b></td>
<td><input type="text" pattern="[0-9]{5}" name="zipcode" value="
<?php echo htmlentities(isset($_POST['zipcode'])?$zip:"")?>" required></td><br>
</tr>

<tr>
<!--username  input field-->
<td><b>Username*</b></td>
<td><input type="text" name="username" value="
<?php echo htmlentities(isset($_POST['username'])?$name:"")?>"required>
<span class='error'><?php echo $username_error ?></span></td><br>
</tr>

<tr>
<!--Password input field-->
<td><b>Password*</b></td>
<td><input type="password" name="password"  value="
<?php echo htmlentities(isset($_POST['password'])?$password:"")?>"required>
<span class='error'><?php echo $pass_error ?></span></td><br>
</tr>

<tr>
<!--Reenter Password input field-->
<td><b>Re-enter Password*</b></td>
<td><input type="password" name="cnfmpassword" required>
<span class='error'><?php echo $cnfmPass_error ?></span></td><br>
</tr>

<tr>
<!--Submit and reset buttons-->
<td colspan="2"><input type="reset" name="reset" value="Reset Form">
<input type="submit" name="create" value="Register">
</td>
</tr>
</table>
</form>
<!--Footer to display copyright-->
<footer id="footer_reg">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved. </footer>
</body>
</html>
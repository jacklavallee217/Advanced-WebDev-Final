<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>REGISTER</title>
</head>
<?php
require("includes/config.php");
require("includes/connect.php");

function print_errors ($errors) {
	
	$errorCount = count($errors);
	
	print "<p style='color:red';>";
	if ($errorCount > 0) {
		foreach($errors as $mistake){
			echo $mistake;
		}		
	}
	print "</p>";
}	  


$errors = array();

if (isset ($_POST['submit']))
{
	$username = trim($_POST['User_Name']);
    $email = trim($_POST["Email"]);
	$password1 = trim($_POST["Enter_Password_1"]);
	$password2 = trim($_POST["Enter_Password_2"]);
	
	if ($password1 == $password2) {
		if (!preg_match ("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password1)) {
		$errors[] = "Password must contain at least 8 characters 
					and include 1 lower case, 1 upper case, 1 number
		, and 1 special character<br /><br />";
		}
		else { print "Your password match is successful <br><br>"; 
		}
	}	
	else { 
		$errors[] = "Your were not a match. <br><br>";
	}	

	
	
  
	if (count($errors) > 0) 
		print_errors($errors);
	else {  
		$query = "SELECT username, password FROM users WHERE username = '$username' ";
		$result = mysqli_query($db, $query); 
		if(!$result){
			die(mysqli_error($db)); 
		}
		$numRows = mysqli_num_rows($result); 
		
		if($numRows > 0)
		{
			$errors[] = "username already exists.";
		}
		else { 
		   $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
           $insert =  "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
           $result = mysqli_query ($db, $insert); 
		   if (!$result)
			    die ("SELECT error:" . mysqli_error($db));
		
		   echo "<p>Thank you for registering. Please <a href=\"login.php?username=$username\">login.</a></p>";
		  
        }		   
	  
		if (count($errors) > 0) {
            print_errors($errors); 
			echo "<p><a href=\"register.php\">Click Here to Try Again</a></p>";
		}	
	}
}
else { 
?>
    <!-- THIS IS WHERE YOU WILL PUT ALL THE HTML FOR THE REGISTRATION FORM --> 
	
	<form action="" method="post">
		
			<fieldset>
				<legend>Registration Form</legend>
				<br />
				<label name="User_Name">UserName</label>
					<input type="text" name="User_Name" required="required"/><br /><br />
				
				<label name="Email">Email Address</label>
					<input type="text" name="Email" required="required"/><br /><br />
				
				<label name="Enter_Password_1">Enter Password</label>
					<input type="password" name="Enter_Password_1" required="required"><br /><br />
				
				<label name="Enter_Password_2">Verify Password</label>
					<input type="password" name="Enter_Password_2" required="required"><br /><br />
				
				<input type="submit" value="Submit" name="submit" class="button"/>
				
				<blockquote>Already registered? <a href="login.php">Click here</a></blockquote>
			</fieldset>
</form>
	
<?php } ?>
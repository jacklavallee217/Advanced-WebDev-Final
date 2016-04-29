<!DOCTYPE html>

<!--
	Jack Lavallee
	3/8/2016
	lab5
-->

<?php
session_start();
?>

<html>      
		<head>
                <title>SoxCrops: The Future of the Boston Red Sox</title>
                <link rel="stylesheet" href="css/main.css" type="text/css" />
                <link rel="stylesheet" href="css/gallery.css" type="text/css" />
                <link rel="stylesheet" href="css/input.css" type="text/css" />
                <link rel="stylesheet" href="css/media.css" type="text/css" />
				<link rel="stylesheet" href="css/table.css" type="text/css" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
				<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        </head>

        <body>
	
			<header>
			
				<nav>
				
				<?php include "header.php"; ?>
				
				</nav>
				
			</header>
				
				<div class="wrapper wrapper_padding clearfix sign_up">
				
				
				<?php
require("includes/config.php");
require("includes/connect.php");

function print_errors ($errors) {
	
	$errorCount = count($errors);
	
	print "<p style='color: #C60C30';>";
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
		else { print "<blockquote id='logQuote'>Your password match is successful </blockquote><br><br>"; 
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
		
		   echo "<blockquote id='logQuote'>Thank you for registering. Please <a href=\"log_in.php?username=$username\">login.</a></blockquote>";
		  
        }		   
	  
		if (count($errors) > 0) {
            print_errors($errors); 
			echo "<p><a href=\"sign_up.php\">Click Here to Try Again</a></p>";
		}	
	}
}
else { 
?>
				
				
			<form action="" method="post" id="form">
				
				<div id="input">
					
					<div id="sign_up_div">
					<div class="page_title sign_up_title">
						<h2>Sign Up!</h2>
					</div>
					<br />
						
						<label name="User_Name">UserName</label><br />
						<input type="text" name="User_Name" required="required"/><br />
				
						<label name="Email">Email Address</label><br />
						<input type="text" name="Email" required="required"/><br />
				
						<label name="Enter_Password_1">Enter Password</label><br />
						<input type="password" name="Enter_Password_1" required="required"><br />
				
						<label name="Enter_Password_2">Verify Password</label><br />
						<input type="password" name="Enter_Password_2" required="required"><br /><br />
					
						<input type="submit" value="Sign Up" name="submit" class="button"/>
				
					<blockquote>Already registered? <a href="log_in.php">Click here</a></blockquote>
						
					</div>
						
				</div>
					
			</form>
				
<?php } ?>			
				
				</div>
			
			<footer>
				<!--
				<p class="copyright">&copy;2015 Jack Lavallee</p>
				<a href="#"><i class="fa fa-instagram fa-2x"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
				<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
				-->
				<?php include "footer.php"; ?>
			</footer>
        
		</body>

</html>
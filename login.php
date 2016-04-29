<?PHP

// INSERT the CALL to START SESSIONS for this file (See Lab7_Essentials for details)

session_start();

include "authenticate.php";        // This contains the function isLoggedIn(). Download this file from Moodle

// PUT THE REQUIRE OR INCLUDE STATEMENTS HERE THAT YOU NEED FOR CONNECTING TO THE DATABASE.  

require("includes/config.php");
require("includes/connect.php");

$errors = array();
//---------------------------------------------------------------------------------------------

// COPY AND PASTE YOUR PRINT_ERRORS() FUNCTION HERE. 
  
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
  
//--------------------------------------------------------------------------------------------
// EXECUTION BEGINS HERE
//--------------------------------------------------------------------------------------------

// INSERT a PHP statement here to test whether the user pressed the submit button. 

	if (isset($_POST['submit'])) {
	
   // GET THE USERNAME AND PASSWORD ENTERED BY THE USER IN THE FORM
   
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);
   
   // YOU SHOULD BE GETTING THIS DATA FROM THE POST ARRAY AND CREATING "shortname" VARIABLES
		
		// WRITE A SQL QUERY THAT SELECTS THE USERNAME AND PASSWORD FROM THE USERS TABLE  
		// AND USES A WHERE CLAUSE TO TEST WHETHER THE USERNAME FROM THE DATABASE IS = TO 
		// THE USERNAME ENTERED BY PERSON LOGGING IN. (remember to use single quotes around any data that is a string)
        // (See Lab 7 Essentials) 
		
	$query = "SELECT username, password FROM users  
			 WHERE username = '$username' ";

    $result = mysqli_query($db, $query); // CALL THE MYSQLI() FUNCTION THAT WILL SEND $query TO THE DATABASE. 

	if(!$result) {
        $errors[] =  "Error in SELECT statement." .   mysqli_error($db);
	}
    else {
		// CALL THE MYSQL FUNCTION THAT WILL FETCH ONE ROW FROM $result AS AN ASOOCIATIVE ARRAY 
		// (see slide 25, 07_Accessing MySQL_with_PHP.pdf)
		
		$row = $result->fetch_assoc();
		
		if ($row) {
			// ENTER THE CONDITIONAL EXPRESSION THAT WILL TEST WHETHER THE USER'S PASSWORD IS = TO PASSWORD FROM THE DATABASE
			// (See lab 7 Essentials) 
			
			if(password_verify($password, $row['password'])){

				$_SESSION['user_name'] = $username;// Enter the name of the variable that stores the user's login name from POST. 
				print "Please <a href='index.php'>Click Here</a> to get to the home page";// Optional: PRINT A LINK HERE to go to your homepage? 
			}
			else {
				$errors[]= "Your login credentials could not be verified";
			}
		}    // end of the if ($row) condition.
		else { 
			$errors[] =  "Your login credentials could not be verified";
		}
	}    // end of the else condition that follows if (!$result)

	if (count($errors) > 0) {
		print "<font color='red'>";
		print_errors($errors);
		print "Please try again."; 
		print "</font><br />";
	}	
}

if(isLoggedIn()) {
	$username = $_SESSION['user_name'];
    print "You are currently logged in as: $username <br>";
	// THIS IS WHERE YOU MIGHT WANT TO PROVIDE A LINK TO YOUR HOME PAGE

	// You will also want a link that allows you to logout. Here's the link: 
	print "Please <a href='index.php'>Click Here</a> to get to the home page";
    print " or use this link to <a href='logout.php'>logout.</a>";  
} 
else {   // user is not logged in, display the login form.
?>
	

	<form action="" method="post" id="form">		
		<div id="input">		
			<div id="log_in_div">			
				<div id="page_title">
					<h2>Log In!</h2>
				</div>
				<br />		
				<label>UserName</label><br />
				<input name="username" type="text" value="<?php echo isset($_POST['username']) ?$_POST['username']: "";?>"/><br />	
				
				<label>Password</label><br />
				<input name="password" type="password" value="<?php echo isset($_POST['password']) ?$_POST['password']: "";?>"/><br /><br /><br />		
				
				<input type="submit" value="Log In" class="button" name="submit"/><br /><br /><br />		
				
				<blockquote>Not registered yet? <a href="register.php">Click here</a> to begin your registration</blockquote>
				<blockquote>Need to logout? <a href="logout.php">Click here</a></blockquote>
			</div>				
		</div>			
	</form>
	
<?PHP
// here we just end the else condition with a curly brace that we started before the html. 
}
?>


<!DOCTYPE html>
<?php
session_start();
?>
<!--
	Jack Lavallee
	3/8/2016
	lab5
-->

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
				
				<div class="wrapper wrapper_padding clearfix log_in">


<?php

if (isset($_SESSION['user_name'])) {
    unset($_SESSION['user_name']);                    // clear the session variable
	print "<blockquote id='logQuote'>You are currently logged out. Please use this link to <a href='log_in.php'>Login Again</a></blockquote>";
}
else {
    print "<blockquote id='logQuote'>You are currently logged out. Please use this link to <a href='log_in.php'>Login</a></blockquote>";
}	
?>


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


			
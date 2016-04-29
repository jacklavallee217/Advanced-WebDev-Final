<!DOCTYPE html>
<html>
		<head>
        <?php include "styling.php"; ?>
    </head>

        <body>

			<header>
				<nav>
					<?php include "header.php"; ?>
				</nav>
			</header>

			<div class="wrapper wrapper_padding">

				<div class="page_title">
					<h1>Catchers</h1>
				</div>

					<?php
						include "includes/config.php";
					  include "includes/connect.php";

						$category = "catchers";
						$cols = " HR, RBI, R, SB, AVG, OBP, OPS ";
						$table = "hittingstats";
						
						include "player_info.php";

					?>

				<div id="position_links">
					<a href="infielder.php"><img src="img/next-arrow.png" width="120px" height="120px" id="next"></a>
				</div>

			</div>

			<footer>
				<p class="copyright">&copy;2015 Jack Lavallee</p>
				<a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
				<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
				<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
			</footer>

		</body>
</html>

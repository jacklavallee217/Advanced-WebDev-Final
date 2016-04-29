<!--
	Jack Lavallee
	3/8/2016
	lab5
-->

		<div id="sign_in">
			<div id="sign_in_links">
			<?php

				include_once "authenticate.php";

				if(isLoggedIn()) { ?>
				      <h3><a href="logout.php" id="logActive">Log Out</a></h3>
				<?php }
				else { ?>
				      <h3><a href="log_in.php">Log In</a></h3>
				      <h3><a href="sign_up.php">Sign Up</a></h3>

        <?php } ?>
			</div>
		</div>


		<h1><a href="index.php">SoxCrops</a></h1>

		<ul id="nav_links">
				<li id="nav_link"><a href="recap.php" class="main_links">2014-2015 Recap</a></li>
				<li id="nav_link"><a href="prospects.php" class="main_links">Prospects</a>
					     <ul>
						           <li><a href="catcher.php" class="sub_links">Catchers</a></li>
						           <li><a href="infielder.php" class="sub_links">Infielders</a></li>
						           <li><a href="outfielder.php" class="sub_links">Outfielders</a></li>
					             <li><a href="pitcher.php" class="sub_links">Pitchers</a></li>
					     </ul>
			  </li>
			  <li id="nav_link"><a href="contact.php" class="main_links">Contact</a></li>
		</ul>

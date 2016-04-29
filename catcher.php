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

						$query = "SELECT * FROM player WHERE category = 'Catchers' ";
						$result = mysqli_query($db, $query);

						if (!$result) {
						 die ("SELECT error:" . mysqli_error($db));
						}

						$numrows = mysqli_num_rows($result);
						for($i = 0; $i < $numrows; $i++) {
							$row = mysqli_fetch_assoc($result);

							print "<div id='player'>";

								$image = $row['image'];

						  	print "<img id='player_profile' class='catcher_profile' src='$image' width='400' height='225'>";

								$fname = $row['fName'];
								$lname = $row['lName'];
	            	$name = "$fname $lname";

								print "<h2 id='player_title'>$name</h2>";

							print "</div>";

							print "<h2 id='player_summary'>2015 Summary</h2>";

							$summary = $row['summary'];
							print "<p>$summary</p>";

              $jnum = $row['jNumber'];
							$query2 = "select HR, RBI, R, SB, AVG, OBP, OPS from hittingstats where jNumber = '$jnum'";
							$result2 = mysqli_query($db, $query2);

							if (!$result2) {
								die ("SELECT error:" . mysqli_error($db));
							}

							$numrows2 = mysqli_num_rows($result2);

							print "<legend>2015 Statistics</legend>";

								for($i = 0; $i < $numrows2; $i++) {
									$row2 = mysqli_fetch_assoc($result2);
									print "<table class='player_stats'>";
										print "<tbody>";
										print "<tr class='stat_cats'>";
										foreach($row2 as $key => $value) {
												print "<td>$key</td>";
										}
										print "</tr>";
										print "<tr>";
											foreach($row2 as $key => $value) {
												print "<td>$value</td>";
											}
										print "</tr></tbody></table>";
								}

							print "<form id='favForm' action='' method='post'>";
							print "<input type='submit' value='Favorite Player' class='button' id='favPlayer' name='submit'/>";
							print "<input type='hidden' value='jNumber' name='jNumber'/>";
			 				print "</form>";

					}

					?>

				<!--<div id="player">
					<img id="player_profile" class="catcher_profile" src="img/vazquez_profile.jpg" width="400" height="225">
					<h2 id="player_title">Christian Vazquez</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					As opposed to Blake Swihart, Christian Vazquez is your prototypical catcher with exceptional catching talent.
					Vazquez may not offer the team as much in terms of hitting as Swihart does, but he does provide defensive skills
					that only the most elite catchers can provide. Christian Vazquez's average delivery time from home plate to second
					base takes roughly 1.85 seconds which is in the 90th percentile of all Major League catchers. Almost every facet of
					Christian's catching abilities is exceptional. His quick-release, footwork, pitch-framing, body-control and other
					catching intangibles make him a known commodity in the Association. Vazquez has shown some of the fundamentals
					necessary to become a quality bottom of the order hitter in the Major Leagues with his short, compact swing and simple
					swing mechanics. In order to become an everyday catcher for the Red Sox he must expand upon those abilities.
				</p>

				<legend>2014 Statistics</legend>

				<table class="player_stats" id="vazquez_stats">
				  <tbody>
					<tr class="stat_cats">
						<td>HR</td>
						<td>RBI</td>
						<td>R</td>
						<td>SB</td>
						<td>AVG</td>
						<td>OBP</td>
						<td>OPS</td>
					</tr>
					<tr class="vaz_stats" id="prospect_stats">
						<td id="vaz_stat" class="stat">1</td>
						<td id="vaz_stat" class="stat">20</td>
						<td id="vaz_stat" class="stat">15</td>
						<td id="vaz_stat" class="stat">0</td>
						<td id="vaz_stat" class="stat">.240</td>
						<td id="vaz_stat" class="stat">.308</td>
						<td id="vaz_stat" class="stat">.617</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>-->

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

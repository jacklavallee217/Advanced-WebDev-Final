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
					<h1>Outfielders</h1>
				</div>

				<div id="betts">
					<img id="betts_profile" class="outfielders_profile" src="img/betts_profile.jpg" width="400" height="225">
					<h2 id="player_title">Mookie Betts</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Mookie Betts might have been the most pleasant surprise for the Red Sox during 2014-2015. Mookie spent 4 years in the Red Sox farm system before joining the Red Sox full time last season and in his first full season he did not disappoint. Mookie hit .291, stole 21 bases and provided gold glove quality defense. But perhaps the most surprising aspect of last season had to have been Mookie's 18 homeruns which amounted to be second on the team only behind David Ortiz. Mookie showed exceptional power at the leadoff position, which normally does not provide much power. Mookie's next challenge that lays ahead of him would have to be his move from Center Field to Right Field. But so long as Mookie keeps expanding upon his already quality hitting, it should be smooth sailing for him.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="betts_stats">
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
					<tr class="betts_stats" id="prospect_stats">
						<td id="betts_stat" class="stat">18</td>
						<td id="betts_stat" class="stat">77</td>
						<td id="betts_stat" class="stat">92</td>
						<td id="betts_stat" class="stat">21</td>
						<td id="betts_stat" class="stat">.291</td>
						<td id="betts_stat" class="stat">.341</td>
						<td id="betts_stat" class="stat">.818</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>


				<div id="bradleyjr" class="player_profile">
					<img id="bradleyjr_profile" class="outfielders_profile" src="img/bradleyjr_profile.jpg" width="400" height="225">
					<h2 id="player_title">Jackie Bradley Jr.</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Jackie Bradley Jr. had already proven to be a transcendant outfielder displaying near perfect fielding and throwing abilities in years past. But in 2014-2015 Jackie showed what might be a glimpse into the future. Jackie Bradley Jr. in the month August hit .354 and a 1.163 OPS and was truly the most exciting player in baseball. Every night it seemed Jackie was hitting a homerun or a couple of extra basehits or making an incredible catch or throwing someone out at home plate; and some nights he would make all of those plays. Now the only problem with Jackie was how wildly inconsistent he was during the season. All of the athletic and fundamental prerequisites for Bradley are there, the only challenge for him is to find his rhythm and try to ride it for a whole season.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="bradleyjr_stats">
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
					<tr class="brad_stats" id="prospect_stats">
						<td id="brad_stat" class="stat">10</td>
						<td id="brad_stat" class="stat">43</td>
						<td id="brad_stat" class="stat">43</td>
						<td id="brad_stat" class="stat">3</td>
						<td id="brad_stat" class="stat">.249</td>
						<td id="brad_stat" class="stat">.335</td>
						<td id="brad_stat" class="stat">.833</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>


				<div id="benintendi" class="player_profile">
					<img id="benintendi_profile" class="outfielders_profile" src="img/benintendi_profile.jpg" width="400" height="225">
					<h2 id="player_title">Andrew Benintendi</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Andrew Benintendi was drafted by the Boston Red Sox in 2015 with number 7 overall pick.  Andrew has shown the ability to become an everyday 5-tool outfielder. Surprisingly with his 5'10 170lb frame he is capable of lauching the ball out of the ballpark with the best of leadoff hitters. He also is accompanied by the speed necessary of becoming a quality leadoff hitter in the MLB. Andrew is also renowned for winning the College Baseball Player of the year in the Southeastern Conference for the University of Arkansas showing that he is capable of producing against worthy competition. The next step for Andrew is to refine his skillset, spend a couple of years in Minor League Baseball, and prepare for his spot with the Red Sox.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="benintendi_stats">
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
					<tr class="ben_stats" id="prospect_stats">
						<td id="ben_stat" class="stat">11</td>
						<td id="ben_stat" class="stat">31</td>
						<td id="ben_stat" class="stat">36</td>
						<td id="ben_stat" class="stat">10</td>
						<td id="ben_stat" class="stat">.313</td>
						<td id="ben_stat" class="stat">.416</td>
						<td id="ben_stat" class="stat">.972</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>


				<div id="position_links">
					<a id="last_links" href="infielder.php"><img src="img/last-arrow.png" width="120px" height="120px" id="last"></a>
					<a id="next_links" href="pitcher.php"><img src="img/next-arrow.png" width="120px" height="120px" id="next"></a>
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

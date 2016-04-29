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

				<div id="swihart">
					<img id="swihart_profile" class="catcher_profile" src="img/swihart_profile.jpg" width="400" height="225">
					<h2 id="player_title">Blake Swihart</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Blake Swihart is one of the most well known up and coming catchers in all of baseball.
					What differentiates him from your normal prototypical catcher is his versatility. not only is
					he capable of supplying the necessary Major League catching skills, he also offers you the ability
					to hit from both sides of the plate, uncommon baserunning and speed, and noteworthy contact hitting.
					The play that best summarizes Blake Swihart's abilities last season would have had to have been his
					inside-the-park homerun he hit against the New York Mets; a rare feat for any player much less a
					catcher to accomplish. Another factor that led to success for Swihart's 2014-2015 campaign was the
					leadership he provided for the young Red Sox pitching staff. Swihart figures to be a staple for the
					Boston Red Sox for years to come.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="swihart_stats">
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
					<tr class="swi_stats" id="prospect_stats">
						<td id="swi_stat" class="stat">5</td>
						<td id="swi_stat" class="stat">31</td>
						<td id="swi_stat" class="stat">47</td>
						<td id="swi_stat" class="stat">4</td>
						<td id="swi_stat" class="stat">.274</td>
						<td id="swi_stat" class="stat">.319</td>
						<td id="swi_stat" class="stat">.712</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>

				<div id="vazquez" class="player_profile">
					<img id="vazquez_profile" class="catcher_profile" src="img/vazquez_profile.jpg" width="400" height="225">
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
 				</form>

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

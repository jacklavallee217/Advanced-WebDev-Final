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
					<h1>Pitchers</h1>
				</div>

				<?php
					include "includes/config.php";
					include "includes/connect.php";

					$category = "pitchers";
					$cols = " W, L, ERA, IP, SO, BB, WHIP ";
					$table = "pitchingstats";

					include "player_info.php";

				?>

				<!--<div id="rodriguez">
					<img id="rodriguez_profile" class="pitcher_profile" src="img/rodriguez_profile.jpg" width="400" height="225">
					<h2 id="player_title">Eduardo Rodriguez</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Eduardo Rodriguez has some large shoes to fill with the departure of Jon Lester. With a dominant left-handed starter now out of the rotation lefty Eduardo Rodriguez is now the heir to the throne. Eduardo has a fastball that rests in the mid 90's and has topped out at 97 miles per hour. He also has a changeup with a sharp bite that travels at 86-88 MPH, this is considered the best pitch in his arsenal. His last pitch is a slider that goes 82-85 MPH with average movement. In order to really get the best out of his pitches he really needs to focus on his control. If he is capable of doing that he has the potential to become a David Price quality pitcher.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="rod_stats">
				  <tbody>
					<tr class="stat_cats">
						<td>W</td>
						<td>L</td>
						<td>ERA</td>
						<td>IP</td>
						<td>SO</td>
						<td>BB</td>
						<td>WHIP</td>
					</tr>
					<tr class="rod_stats" id="prospect_stats">
						<td id="rod_stat" class="stat">10</td>
						<td id="rod_stat" class="stat">6</td>
						<td id="rod_stat" class="stat">3.85</td>
						<td id="rod_stat" class="stat">121.1</td>
						<td id="rod_stat" class="stat">98</td>
						<td id="rod_stat" class="stat">37</td>
						<td id="rod_stat" class="stat">1.29</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>


				<div id="owens" class="player_profile">
					<img id="owens_profile" class="pitcher_profile" src="img/owens_profile.jpg" width="400" height="225">
					<h2 id="player_title">Henry Owens</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Henry Owens is not the type of pitcher who is going to overpower opposing hitters, his success is completely dependent on his control and on the mind-games he plays against opposing batters. While his 2014-2015 campaign might not have gone exactly as planned, he has shown the capacity to become a very good pitcher. His fastball normally runs between 88-91 MPH with a deceptive downward action. His best pitch his changeup runs at 76-79 MPH, he has complete control of the pitch being able to hit both sides of the zone and is a consistent out pitch. He also has a curveball and slider which are both works in progress. If those two pitches ae able to develop into stable options he could become a Cole Hamels type of pitcher.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="owens_stats">
				  <tbody>
					<tr class="stat_cats">
						<td>W</td>
						<td>L</td>
						<td>ERA</td>
						<td>IP</td>
						<td>SO</td>
						<td>BB</td>
						<td>WHIP</td>
					</tr>
					<tr class="owens_stats" id="prospect_stats">
						<td id="owens_stat" class="stat">4</td>
						<td id="owens_stat" class="stat">4</td>
						<td id="owens_stat" class="stat">4.57</td>
						<td id="owens_stat" class="stat">63</td>
						<td id="owens_stat" class="stat">50</td>
						<td id="owens_stat" class="stat">24</td>
						<td id="owens_stat" class="stat">1.37</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>


				<div id="kelly" class="player_profile">
					<img id="kelly_profile" class="pitcher_profile" src="img/kelly_profile.jpg" width="400" height="225">
					<h2 id="player_title">Joe Kelly</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Joe Kelly is a pitcher who has quite a few years in the Majors but is just now starting to reach his potential. Kelly has some electrifying pitches including a fastball that ranges from mid to high 90's, a power sinker with great movement and control, and as for secondary pitches he has a slider, curveball and changeup that are all reliable options for Kelly to go to whenever he pleases. Kelly's career has been held back by his inability to stay healthy, however during a stretch in 2014-2015 Kelly managed to win 8 out of his last 9 and average an ERA under 3.00. If Kelly is able to stay healthy for 2015-2016 I believe he will be able to put up a career season.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="kelly_stats">
				  <tbody>
					<tr class="stat_cats">
						<td>W</td>
						<td>L</td>
						<td>ERA</td>
						<td>IP</td>
						<td>SO</td>
						<td>BB</td>
						<td>WHIP</td>
					</tr>
					<tr class="kelly_stats" id="prospect_stats">
						<td id="kelly_stat" class="stat">10</td>
						<td id="kelly_stat" class="stat">6</td>
						<td id="kelly_stat" class="stat">4.82</td>
						<td id="kelly_stat" class="stat">134.1</td>
						<td id="kelly_stat" class="stat">110</td>
						<td id="kelly_stat" class="stat">49</td>
						<td id="kelly_stat" class="stat">1.44</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>


				<div id="kopech" class="player_profile">
					<img id="kopech_profile" class="pitcher_profile" src="img/kopech_profile.png" width="400" height="225">
					<h2 id="player_title">Michael Kopech</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Michael Kopech could be the right handed starter of the future for the Boston Red Sox. He has exceptional movement on all of his pitches. He throws a 93-96 MPH fastball that tops out at 98, it also features a very difficult sinking movement. His changeup while firm with some drop, is rather easy to pick out due to his drop in arm speed. He also features two very dangerous breaking pitches in his slider and curveball. Kopech is only 19 years of age so he is still a raw prospect, but all factors point to Kopech becoming a quality pitcher for the Red Sox for years to come.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="kop_stats">
				  <tbody>
					<tr class="stat_cats">
						<td>W</td>
						<td>L</td>
						<td>ERA</td>
						<td>IP</td>
						<td>SO</td>
						<td>BB</td>
						<td>WHIP</td>
					</tr>
					<tr class="kop_stats" id="prospect_stats">
						<td id="kop_stat" class="stat">4</td>
						<td id="kop_stat" class="stat">5</td>
						<td id="kop_stat" class="stat">2.63</td>
						<td id="kop_stat" class="stat">65</td>
						<td id="kop_stat" class="stat">70</td>
						<td id="kop_stat" class="stat">27</td>
						<td id="kop_stat" class="stat">1.23</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>


				<div id="johnson" class="player_profile">
					<img id="johnson_profile" class="pitcher_profile" src="img/johnson_profile.jpg" width="400" height="225">
					<h2 id="player_title">Brian Johnson</h2>
				</div>

				<h2 id="player_summary">2015 Summary</h2>

				<p>
					Brian Johnson is a 24 year-old left-handed pitcher who is probably next in line to become a Red Sox pitcher in the farm system. He has an average fastball with average velocity. An average changeup that runs from 83-86 MPH. But where Johnson really makes his bacon is his Curveball it has a 1-7 movement that can be control on both sides of the plate. While Johnson may not have top of the rotation potential he could be quality starter at the bottom of the rotation, Which is the type of playe that any team in the majors could utilize.
				</p>

				<legend>2015 Statistics</legend>

				<table class="player_stats" id="john_stats">
				  <tbody>
					<tr class="stat_cats">
						<td>W</td>
						<td>L</td>
						<td>ERA</td>
						<td>IP</td>
						<td>SO</td>
						<td>BB</td>
						<td>WHIP</td>
					</tr>
					<tr class="john_stats" id="prospect_stats">
						<td id="john_stat" class="stat">9</td>
						<td id="john_stat" class="stat">6</td>
						<td id="john_stat" class="stat">2.53</td>
						<td id="john_stat" class="stat">96</td>
						<td id="john_stat" class="stat">90</td>
						<td id="john_stat" class="stat">32</td>
						<td id="john_stat" class="stat">1.104</td>
					</tr>
				  </tbody>
				</table>

				<form id="favForm" action="" method="post">
					<input type="submit" value="Favorite Player" class="button" id="favPlayer" name="submit"/>
					<input type="hidden" value="jNumber" name="jNumber"/>
 				</form>-->


				<div id="position_links">
					<a href="outfielder.php"><img src="img/last-arrow.png" width="120px" height="120px" id="last"></a>
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

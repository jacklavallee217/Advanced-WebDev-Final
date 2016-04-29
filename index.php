<!DOCTYPE HTML>
<html>

		<head>
			<?php include "styling.php"; ?>

			<script type="text/javascript">

				var slideImages = new Array()

					slideImages[0] = new Image()
					slideImages[0].src = "img/fenway1.jpg"
					slideImages[1] = new Image()
					slideImages[1].src = "img/fenway2.jpg"
					slideImages[2] = new Image()
					slideImages[2].src = "img/fenway3.jpg"
					slideImages[3] = new Image()
					slideImages[3].src = "img/fenway4.jpg"
					slideImages[4] = new Image()
					slideImages[4].src = "img/fenway5.jpg"
					slideImages[5] = new Image()
					slideImages[5].src = "img/fenway6.jpg"

			</script>
		</head>

    <body>
				<header>
					<nav>
						<?php include "header.php"; ?>
					</nav>
				</header>

			<?php
				/*$Img1 = "https://i.ytimg.com/vi/Hq7pjZSuj6s/maxresdefault.jpg";
				$Url1 = "http://www.redsox.com";

				$Img2 = "http://cambridge.hyatt.com/content/dam/Multimedia/regency/bosrc/BOSRC_P067_Fenway_Park_1280x720_54569.jpg";
				$Url2 = "http://www.redsox.com";

				$Img3 = "http://d.fastcompany.net/multisite_files/fastcompany/imagecache/1280/poster/2014/03/3027590-poster-p-1-grommets-product-pitch-competition-takes-over-fenway-park.jpg";
				$Url3 = "http://www.redsox.com";

				$Img4 = "http://im.ziffdavisinternational.com/ign_nl/screenshot/default/fenway-park-real-2_ykep.jpg";
				$Url4 = "http://www.redsox.com";

				$Img5 = "http://m.wsj.net/video/20120427/042712fenwaylawn/042712fenwaylawn_1280x720.jpg";
				$Url5 = "http://www.redsox.com";

				$Img6 = "http://im.ziffdavisinternational.com/ign_nl/screenshot/default/fenway-park-real-1_2jr7.jpg";
				$Url6 = "http://www.redsox.com";

			$randNum = rand(1,6);
			$img =${'Img'.$randNum};
			$URL =${'Url'.$randNum};

			Print "<div id='homepage_content'>
						<h1>Welcome to SoxCrops!</h1>
						<p>The Boston Red Sox are one of the most storied franchises in
						all of baseball with one of the largest fanbases in professional
						sports. While recent seasons have been pretty difficult for the Red
						Sox, their prospects are on the rise. SoxCrops is going to try and
						give you a first hand look into those prospects future.</p>

						<a href= $URL>
							<img id='fenway_background' src= $img border=0>
						</a>
				   </div>";*/
					?>

            <div id="homepage_content">
                <h1>Welcome to SoxCrops!</h1>

								<div id="inner_content">

									<p>The Boston Red Sox are one of the most storied franchises in
							  	all of baseball with one of the largest fanbases in professional
									sports. While recent season have been pretty difficult for the
									Red Sox, their prospect's are on the rise. SoxCrops is going to
									try and give you a first hand look into those prospects future.</p>

									<div id="player_card">
											<h3 id="fav_title">Favorite Player</h3>
											<img id="fav_profile" src="img/swihart_profile.jpg" width="400" height="225">
											<h2 id="player_title">Blake Swihart</h2>

											<legend class="index_legend">2015 Statistics</legend>

											<table class="player_stats index_stats" id="swihart_stats">
											  <tbody>
												<tr class="stat_cats">
													<td class="index_stat">HR</td>
													<td class="index_stat">RBI</td>
													<td class="index_stat">R</td>
													<td class="index_stat">SB</td>
													<td class="index_stat">AVG</td>
													<td class="index_stat">OBP</td>
													<td class="index_stat">OPS</td>
												</tr>
												<tr class="swi_stats" id="prospect_stats">
													<td id="swi_stat" class="stat index_stat">5</td>
													<td id="swi_stat" class="stat index_stat">31</td>
													<td id="swi_stat" class="stat index_stat">47</td>
													<td id="swi_stat" class="stat index_stat">4</td>
													<td id="swi_stat" class="stat index_stat">.274</td>
													<td id="swi_stat" class="stat index_stat">.319</td>
													<td id="swi_stat" class="stat index_stat">.712</td>
												</tr>
											  </tbody>
											</table>

									</div>

								</div>

								<img id="slide" src="img/fenway1.jpg">

								<script type="text/javascript">
									var step = 0

									function slideIt() {
										if (!document.images) {
											return document.getElementByID('slide').src = slideImages[step].src
											if (step < 6) {
												step++
											}
											else {
												step = 0
												setTimeout("slideIt()", 5000)
											}
										}
									}

									slideIt();
								</script>
            </div>

			<footer>
				<?php include "footer.php"; ?>
			</footer>

		</body>
</html>

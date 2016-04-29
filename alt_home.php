<!DOCTYPE html>
<html>      
		<head>
                <title>SoxCrops: The Future of the Boston Red Sox</title>
                <link rel="stylesheet" href="css/main.css" type="text/css" />
                <link rel="stylesheet" href="css/gallery.css" type="text/css" />
                <link rel="stylesheet" href="css/input.css" type="text/css" />
				<link rel="stylesheet" href="css/table.css" type="text/css" />
				<link rel="stylesheet" href="css/media.css" type="text/css" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
				<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
        </head>

        <body>
        
			<header>
				<nav>
				
					<?php include "header.php"; ?>
				
					<!--<h1><a href="index.html">SoxCrops</a></h1>

					<ul id="nav_links">
						<li id="nav_link"><a href="recap.html" class="main_links">2014-2015 Recap</a></li>
						<li id="nav_link"><a href="prospects.html" class="main_links">Prospects</a>
							<ul>
								<li><a href="catcher.html" class="sub_links">Catchers</a></li>
								<li><a href="infielder.html" class="sub_links">Infielders</a></li>
								<li><a href="outfielder.html" class="sub_links">Outfielders</a></li>
								<li><a href="pitcher.html" class="sub_links">Pitchers</a></li>
							</ul>
						</li>	
						<li id="nav_link"><a href="contact.html" class="main_links">Contact</a></li>
					</ul>-->
				</nav>
			</header>
            
			<?php
			$Img1 = "https://i.ytimg.com/vi/Hq7pjZSuj6s/maxresdefault.jpg";
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
						sports. While recent season have been pretty difficult for the Red
						Sox, their prospect's are on the rise. SoxCrops is going to try and
						give you a first hand look into those prospects future.</p>
			
						<a href=$URL>
							<img id='fenway_background' src=$img border=0>
						</a>
				   </div>";
					?>
			
			
			
			
            <!--<div id="homepage_content"> 
                <h1>Welcome to SoxCrops!</h1>
                <p>The Boston Red Sox are one of the most storied franchises in all of baseball with one of the largest fanbases in professional sports. While recent season have been pretty difficult for the Red Sox, their prospect's are on the rise. SoxCrops is going to try and give you a first hand look into those prospects future.</p>
                <img id="fenway_background" src="img/fenway.jpg">
            </div>-->
		
			<footer>
				<p class="copyright">&copy;2015 Jack Lavallee</p>
				<a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
				<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
				<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
			</footer>

		</body>
</html>

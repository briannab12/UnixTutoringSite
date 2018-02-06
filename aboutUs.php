<!-- About Us
By Duncan Okes
Date: 4/30/2017 -->
<?php
	$path = './';
	$page = 'About Us';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">

		<?php include $path.'assets/php/localMenu.php'; ?>

		<div class="content">
			<!--TITLE SECTION-->
			<div class="fullwidth">

				<!-- COMMENT HERE -->
				<h1 class="float-center">About Us</h1>
				
				<div class="seperator100"></div>
				<ul>
					<li><img class="about" src="<?echo $path;?>assets/images/aboutUs/brianna.jpg" alt="Brianna Buttaccio"><h3>Brianna</h3>Brianna Buttaccio is a third-year student at RIT. She is majoring in Web and Mobile Computing. One day, she hopes to build a career building website and mobile apps for small businesses. In her free time, she loves to cook and try new restaurants from international cuisines.<br /> <div class="seperator20"></div></li>
					<li><img class="about" src="<?echo $path;?>assets/images/aboutUs/tiff.jpg" alt="Tiffany Ellis"><h3>Tiff</h3>Tiffany Ellis is a second-year student at RIT. She is majoring in Web and Mobile Computing. One day, she hopes to build a career in developing mobile apps. In her free time, she loves to watch anime, write fiction and play the piano. <div class="seperator20"></div></li>
					<li><img class="about" src="<?echo $path;?>assets/images/aboutUs/duncan.jpg" alt="Duncan Okes"><h3>Duncan</h3>Duncan Okes is a first-year student at RIT. He is majoring in Human-Centered Computing. One day, he hopes to build a career as a user experience designer. In his free time, he loves to travel, watch old movies, and get lost on Wikipedia. <div class="seperator20"></div></li>
					<li><img class="about" src="<?echo $path;?>assets/images/aboutUs/nathan.jpg" alt="Nathan Wunderlich"><h3>Nate</h3>Nathan Wunderlich is a second-year student at RIT. He is majoring in Computing Information Technologies. One day, he hopes to build a career designing and maintaining secure networks. In his free time, he loves to practice martial arts, watch sports, and play videogames. <div class="seperator20"></div></li>
					<li><img class="about" src="<?echo $path;?>assets/images/aboutUs/matt.jpg" alt="Matt Fitzgerald"><h3>Matt</h3>Matt Fitzgerald is a second-year student at RIT. He is majoring in Networking and Systems Administration. One day, he hopes to build a career building and managing networks. In his free time, he loves to row boats with his crew team. <div class="seperator20"></div></li>
					<li><img class="about" src="<?echo $path;?>assets/images/aboutUs/dan.jpeg" alt="Daniel Ruano"><h3>Dan</h3>Daniel Ruano is a second-year student at RIT. He is majoring in Network and Systems Administration. One day, he hopes to build a career managing company networks. In his free time, he loves to give back to his community by organizing his own philanthropic events.<div class="seperator20"></div></li>
				</ul>
				<div class="seperator40"></div>
		   </div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

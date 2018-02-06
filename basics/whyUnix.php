<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'whyUnix';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
			<h1 class="float-center">Basics:</h1>
			<h2 class="float-center">Why Unix?</h2>
			<p>Free - Almost all versions of Unix based operating systems are free and open source,
				 while macOS (OSx) is the most popular and comes with a price premium.
				 All Unix based OS’s share the same characteristics that separate them from Windows.</p>

			<p>Lightweight - One of the best features of Unix based OSs is they are lightweight and can run on almost any system.
				 Thus, you do not have to purchase an expensive machine to utilize all its capabilities.</p>

			<p>Development Environment – It easy transfer from development to production. The transition is easy because the environment is similar to the Apache production environment,
				 which is used for web servers on top of a Linux base.</p>
			<div class="seperator100"></div>
			<div class="button-container float-right">
				<div class="button purple">
					<a href="<?php echo $path;?>basics/breifHistory.php">Next</a>
				</div>
			</div>
		</div>
 	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

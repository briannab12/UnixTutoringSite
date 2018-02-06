<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 
By Brianna Buttaccio
Date: 5/2/2017 
-->

<?php
	$path = './';
	$page = 'home';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="homepage-first">		
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">
			<div class="one-half">			
				<h1>Unix For You</h1>
				<h2>Unix <em>tutorials</em> and <em>references</em> for web developers of all skill level.</h2>
			</div>
		</div>
	</div>
	<div class="wrapper">		
		<div class="content">
			<div class="fullwidth">			
				<h2 class="float-center">Unix Expert?</h2>
				<h3 class="float-center">Experts can quickly lookup commands using our command index.</h3>
				<div class="button-container float-center">
					<div class="button purple">
						<a href="<?php echo $path;?>commandIndex/searchByFunctionality.php">See Command Index</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" id="homepage-third">
		<div class="content">
			<div class="one-half float-right">
				<h2 class="float-right">New to Unix?</h2>
				<h3 class="float-right">Beginners, Unix can be fun and easy to learn. Check out our easy to follow and interactive tutorials.</h3>
				<div class="button-container float-right">
					<div class="button orange">
						<a href="<?php echo $path;?>basics/index.php">Start Tutorials</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

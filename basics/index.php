<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 
By Brianna Buttaccio
Date: 5/1/2017
-->
<?php
	$path = '../';
	
	$page = 'basics';
	include $path.'assets/php/header.php';
?>	
<div id="container">
	<div class="wrapper">		
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">
			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<h1 class="float-center">Basics:</h1>
				<h2 class="float-center">Overview</h2>
				
				<div class="seperator40"></div>
	
				<p>
					Before you become unix geniuses you’ll need to take some learn the basics. In this tutorial you will learn why so many people use unix and how the program was created. We want to make your learning experience as effortless as possible so we will also walk you through the installation and initialization of terminal window on your machines. Next we will discuss how to navigate through the terminal along with basic manipulation of files. We will end this tutorial by discussing important flags and their functionality. You don’t need any prior knowledge on unix to begin this tutorial. Have fun!
				</p>
				<div class="button-container float-center">
					<div class="button orange">
						<a href="<?php echo $path;?>basics/whyUnix.php">Start Now!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>
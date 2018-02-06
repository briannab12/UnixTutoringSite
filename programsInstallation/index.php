<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 
By Brianna Buttaccio
Date: 5/1/2017
-->
<?php
	$path = '../';
	$page = 'programsInstallation';
	include $path.'assets/php/header.php';
?>
<div id="container">
	<div class="wrapper">		
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">
			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<h1 class="float-center">Programs and Installation:</h1>
				<h2 class="float-center">Overview</h2>
				
				<div class="seperator40"></div>
	
				<p>
					Already have an idea of what unix is and how to use it? Thats great! Now it's time to learn about all the different 
					programs you can use to advance your coding experience. In this tutorial we will discuss a program called Vim; what it is, 
					how to open and edit files with it, and how to exit the program. We’ll also introduce you to other programs like Atom, 
					Brackets and Filezilla. Lets get started! 
				</p>
				<div class="button-container float-center">
					<div class="button purple">
						<a href="<?php echo $path;?>programsInstallation/vim.php">Start Now!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>
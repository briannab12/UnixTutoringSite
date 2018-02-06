<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 
By Brianna Buttaccio
Date: 5/1/2017
-->
<?php
	$path = '../';
	$page = 'directoriesFiles1';
	include $path.'assets/php/header.php';
?>
<div id="container">
	<div class="wrapper">		
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">
			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Create and Delete Overview</h2>
				
				<div class="seperator40"></div>
	
				<p>
					Learned the basics? Now we’ll discuss what you can do while working with files and directories. 
					In this tutorial we will teach you about the different files and directories used in unix. 
					Then we will discuss the differences between absolute and relative paths and how these paths 
					make navigating through and accessing files a no brainer. After we will learn the various ways 
					that you can create and delete files and directories. Take a look at our 
					basics tutorial to better understand topics in this tutorial. 
				</p>
				<div class="button-container float-center">
					<div class="button blue">
						<a href="<?php echo $path;?>directoriesFiles1/introductionToFileStructure.php">Start Now!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>
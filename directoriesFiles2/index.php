<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 
By Brianna Buttaccio
Date: 5/1/2017
-->
<?php
	$path = '../';
	$page = 'directoriesFiles2';
	include $path.'assets/php/header.php';
?>
<div id="container">
	<div class="wrapper">		
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">
			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Permissions Overview</h2>
				
				<div class="seperator40"></div>
	
				<p>
					You’ve learned the basics and you’ve learned how to create/delete files and directories. 
					Now it’s time to learn how to set permissions and restrict which users can access your files and directories and what they can do with them. 
					In this tutorial we will learn about the permissions you can set for both files and directories. 
					Then we will teach you the two ways in which you can change permissions; absolute mode or symbolic mode. 
					Look over the basics tutorial and the directories and files: create and delete tutorial prior to start this tutorial 
					to get a better understanding of the topics.
				</p>
				<div class="button-container float-center">
					<div class="button blue">
						<a href="<?php echo $path;?>directoriesFiles2/ownershipPermissions.php">Start Now!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>
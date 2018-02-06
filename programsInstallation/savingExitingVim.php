<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'savingExitingVim';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
		<h1 class="float-center">Programs and Installation:</h1>
			<h2 class="float-center">Saving and Exiting Vim</h2>
 		 	<p>To save your work in Vim from Command Mode, type :w command. This tells Vim to save your work under the current filename. If you need to change the name of the save file, just append the new filename after the command: :w filename. This will create a copy of the file with a new name. To exit the Vim editor and get back to the terminal, type :q command. This will quit the editor without saving any changes. If you have not saved and attempt to quit, Vim will alert you and stay open. To override this, use the :q! command. The ! tells Vim that you know what you are doing and to override its safety settings.  Vim also lets you combine commands together. If you wanted to quit and save your changes at the same time, just type :wq command. Another shortcut is the ZZ command. This functions the same as :wq.</p>
			<div class="button-container float-right">
			<div class="button purple">
				<a href="../programsInstallation/atom.php">Next</a>
			</div>
		</div>
  	</div>
 	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

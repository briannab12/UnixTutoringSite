<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'openingFilesInVim';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
		<h1 class="float-center">Programs and Installation:</h1>
			<h2 class="float-center">Opening a file in Vim:</h2>
				<p>To open a file in Vim, first you must be in the current directory of the file you wish to edit, or have the path to the 
				file. Next, you want to type the filename into Vim. If the filename already exists, it will open the file into Vim. If 
				it doesn’t exist, it will create a new file with the given name.</p>
				<div class="button-container float-right">
				<div class="button purple">
					<a href="../programsInstallation/vimTextEditor.php">Next</a>
  	</div>
		</div>
	</div>
 	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

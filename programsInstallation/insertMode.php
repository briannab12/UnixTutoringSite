<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'insertMode';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
		<h1 class="float-center">Programs and Installation:</h1>
			<h2 class="float-center">Insert Mode:</h2>
				<p>After entering the insert mode by typing “I”, the text editor will now look like the image below:
				</p>
				<img src="<?php echo $path;?>assets/images/tutorial/programsInstallation/insert.png" />
				<p>
		 		At the bottom of the editor, you can see the mode you are in. In insert mode, you can type the same way you would in any other basic text editor. After you have finished editing the document, you can hit the Esc key to enter back into Command Mode.</p>
				<div class="button-container float-right">
				<div class="button purple">
					<a href="../programsInstallation/savingExitingVim.php">Next</a>
				</div>
			</div>
	</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

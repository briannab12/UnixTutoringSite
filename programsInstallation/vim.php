<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'vim';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
		<h1 class="float-center">Programs and Installation:</h1>
			<h2 class="float-center">Vim</h2>
				<p>Found in every Unix and Unix-like OS, Vi and Vim are basic text editors. After learning the basics, VI and Vim become 
				the bread and butter for any terminal user wanting to quickly write a script or edit an existing file from within the 
				terminal.</p>
					<p>For more information on Vim visit: <a href="https://Vim.sourceforge.io/">https://Vim.sourceforge.io/</a></p>
					<div class="button-container float-right">
					<div class="button purple">
						<a href="../programsInstallation/openingFilesInVim.php">Next</a>
					</div>
				</div>
 	</div>
</div>

<?php
	include $path.'assets/php/footer.php';
?>

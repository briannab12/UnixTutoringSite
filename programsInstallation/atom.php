<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'atom';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
			<h1 class="float-center">Programs and Installation:</h1>
			<h2 class="float-center">Atom</h2>
				<p>Atom is a lightweight customizable text editor that works on Windows, macOS, and Linux. This text editor allows complete control over how your text editor looks and functions. The user can install community created packages through its built-in package manager. Atom allows the user to have a completely customized experience.</p>
				<p>For more information on Atom visit: <a href="http://atom.io/">http://atom.io/</a></p>
				<div class="button-container float-right">
				<div class="button purple">
					<a href="../programsInstallation/brackets.php">Next</a>
				</div>
			</div>
  	</div>
 	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

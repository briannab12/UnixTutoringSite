<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'brackets';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
	<h1 class="float-center">Programs and Installation:</h1>
	<h2 class="float-center">Brackets</h2>
		<p>Just like Atom, Brackets is another lightweight cross platform text editor that is as customizable. However, Brackets is more tailored for web developers with the inclusion of a live preview feature. This allows the user to see the product as they build it.</p>
		<p>For more information on Brackets visit: <a href="http://brackets.io/">http://brackets.io/</a></p>
		<div class="button-container float-right">
		<div class="button purple">
			<a href="../programsInstallation/filezilla.php">Next</a>
		</div>
	</div>
  	</div>
 	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

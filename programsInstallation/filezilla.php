<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'filezilla';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
	<h1 class="float-center">Programs and Installation:</h1>
	<h2 class="float-center">Filezilla</h2>
		<p>FileZilla is a free and open source file transfer protocol solution. It allows for quick and easy file transfers. It is available on Windows and Mac. It is the recommended solution for all FTP needs. FileZilla has a simple layout and makes FTP a breeze.</p>
		<p>For more information on FileZilla visit: <a href="https://filezilla-project.org/">https://filezilla-project.org/</a></p>
		<div class="button-container float-right">
		<div class="button purple">
			<a href="../programsInstallation/checkpointPrograms.php">Next</a>
		</div>
	</div>
  	</div>
 	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'breifHistory';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
			<h1 class="float-center">Basics:</h1>
			<h2 class="float-center">Brief History</h2>
			<p>UNIX is used as a blanket term when discussing operating systems that were derived from the original software.
				 Unix was developed by Ken Thompson, Dennis Ritchie and other employees in 1970 at Bell Labs in Murray Hill,
				 New Jersey. The original goal was to provide a portable platform for the development of software.
				 Unix can be placed on many different systems because it was written in C. This lead to Unix spreading
				 throughout academia and commercially. Many people adapt the operating system to fit the needs
				 of their operation. Currently, the most popular operating system that meets the Unix standard is macOS (OSx).</p>

			<p>All of Unix is controlled by the kernel. It controls the starting and stopping of tasks, along with access to
				 the resources on the machine. The kernel also has control over the hierarchical file system used on Unix-like systems.
				 Before the implementation and popularization of graphical user interfaces, everything done in an operating system
				 was from a command line. Because of this ancestry, everything you need to do in Unix and Unix-like operating systems
				 can be done right from the terminal.</p>
			
			<div class="seperator100"></div>
			<div class="button-container float-right">
				<div class="button purple">
					<a href="<?php echo $path;?>basics/startingTerminal.php">Next</a>
				</div>
			</div>
		</div>
 	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>
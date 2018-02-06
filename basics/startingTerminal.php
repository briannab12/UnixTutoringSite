<!-- Starting Terminal Tutorial
By Duncan Okes
Date: 4/23/2017 -->
<?php
	$path = '../';
	$page = 'Starting Terminal';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">

		<?php include $path.'assets/php/localMenu.php'; ?>

		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">

				<!-- Header -->
				<h1 class="float-center">Basics:</h1>
				<h2 class="float-center">Starting Terminal</h2>

				<div class="seperator40"></div>
		   </div>



			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
				<h4>Starting a Unix Terminal in Windows</h4>
				<p>
					<!-- Windows Text -->
					Using Unix on a Windows machine requires a little bit of effort, but it is doable. The standard way for logging into and using a Unix server is by means of a Secure Shell (SSH) client. Secure Shell was designed to provide better security when accessing other remote devices. SSH not only encrypts your session, but it also provides better authentication and features like secure file transfer. A popular (and free) client for Windows platforms is PuTTY, developed originally by Simon Tatham.
				</p>
					<ul>
						<li> - Download PuTTY from <a style="display:inline;" href="www.putty.org">www.putty.org</a> and install it using the default settings on your computer</li>
						<li> - Once installed, double click the PuTTY icon</li>
						<li> - Enter the Unix server host name in the 'Host Name' box, and press 'Open' at the bottom of the dialog box</li>
						<li><img src="<?php echo $path ?>assets/images/tutorial/basics/startingTerminalPutty.jpg" alt="unix image putty"></li>
						<li> - Log into the server with your username and password when prompted.
					</ul>

				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL2 TEXT SECTION-->
			<div class="fullwidth">
				<h4>Starting a Unix Terminal in macOS/OS X</h4>
				<p>
					<!-- Mac Test -->
					To open the Terminal on macOS/OS X, do the following:
				</p>
					<ul>
						<li> - Open your Applications folder</li>
						<li> - Inside Applications, open your Utilities folder</li>
						<li> - Inside Utilities, double click the Terminal icon.</li>
						<li><img src="<?php echo $path ?>assets/images/tutorial/basics/startingTerminalTerminal.jpg" alt="unix image terminal"></li>
						<li> - Use the ssh command to connect to the server as necessary</li>
					</ul>

			</div>
			<div class="seperator100"></div>
				<div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>basics/navigationCommands.php">Next</a>
					</div>
				</div>
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

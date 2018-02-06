<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'vimTextEditor';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
			<h1 class="float-center">Programs and Installation:</h1>
			<h2 class="float-center">Vim Text Editor:</h2>
				<p>By default, you are going to open into command mode. While Vim has many modes, the most important are the Command Mode and Insert Mode. In command mode, your keyboard is bound to shortcuts. For example, typing in the character I will change your current mode from Command to Insert Mode. Some of the most important Commands are found below:</p>
			<table>
				<tr>
					<th>Command</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>vim FILENAME</td>
					<td>Opens or creates the filename in vim</td>
				</tr>
				<tr>
					<td>H (Left Arrow)</td>
					<td>Move cursor left</td>
				</tr>
				<tr>
					<td>K (Up Arrow)</td>
					<td>Move cursor up</td>
				</tr>
				<tr>
					<td>L (Right Arrow)</td>
					<td>Move cursor right</td>
				</tr>
				<tr>
					<td>J (Down Arrow)</td>
					<td>Move cursor down</td>
				</tr>
				<tr>
					<td>I</td>
					<td>Enter Insert Mode</td>
				</tr>
				<tr>
					<td>Esc</td>
					<td>Exit mode back to command</td>
				</tr>
				<tr>
					<td>U</td>
					<td>Undo</td>
				</tr>
				<tr>
					<td>dd</td>
					<td>Delete line</td>
				</tr>
				<tr>
					<td>dw</td>
					<td>Delete word</td>
				</tr>
				<tr>
					<td>Ctrl+r</td>
					<td>Redo</td>
				</tr>
				<tr>
					<td>:wq</td>
					<td>Exit</td>
				</tr>
				
		</table>




		<!--TUTORIAL1 TEXT SECTION-->
		<div class="fullwidth">
			<div class="seperator40"></div>
		</div>

		<!--Launching Vim INPUT SECTION-->
		<div class="one-half float-left">

			<!-- UPDATE ME --------------------->
			<h4>Open a file named <i>test.html</i> in Vim</h4>

			<input type="text" name="input1" id="input1" value =""/>
			<input type="button"  class="orange" onclick = "tutorialOne()" value="Enter"/>

		</div>

		<!--Vim Launch SIMULATED UNIX TERMINAL-->
		<div class="one-half float-left last">

			<!-- UPDATE ME --------------------->
			<img src="../assets/images/tutorial/programsInstallation/vimLaunchBefore.png" id="tutorialImage1" alt="Terminal before launching Vim"/>

			<div class="seperator40"></div>
		</div>

		<!--TUTORIAL2 TEXT SECTION-->
		<div class="fullwidth">
			<p>

			</p>
			<div class="seperator40"></div>
		</div>

		<!--Delete Line Vim INPUT SECTION-->
		<div class="one-half float-left">

			<!-- UPDATE ME --------------------->
			<h4>Run the command for deleting a line</h4>

			<input type="text" name="input2" id="input2" value =""/>
			<input type="button"  class="orange" onclick = "tutorialTwo()" value="Enter"/>

		</div>

		<!--Vim Delete SIMULATED UNIX TERMINAL-->
		<div class="one-half float-left last">

			<!-- UPDATE ME --------------------->
			<img src="../assets/images/tutorial/programsInstallation/vimDeleteLineBefore.png" id="tutorialImage2" alt="Terminal before deleting a line "/>

			<div class="seperator40"></div>
		</div>

		<!--TUTORIAL3 TEXT SECTION-->
		<div class="fullwidth">
			<p>
				<!-- Undoing Vim --------------------->
			</p>
			<div class="seperator40"></div>
		</div>

		<!--Undo Command Vim INPUT SECTION-->
		<div class="one-half float-left">

			<!-- UPDATE ME --------------------->
			<h4>Run the command for undoing and action</h4>

			<input type="text" name="input3" id="input3" value =""/>
			<input type="button"  class="orange" onclick = "tutorialThree()" value="Enter"/>

		</div>

		<!--Vim Undo SIMULATED UNIX TERMINAL-->
		<div class="one-half float-left last">

			<!-- UPDATE ME --------------------->
			<img src="../assets/images/tutorial/programsInstallation/vimDeleteLineAfter.png" id="tutorialImage3" alt="Terminal before line undo"/>

			<div class="seperator40"></div>
		</div>

		<!--TUTORIAL4 TEXT SECTION-->
		<div class="fullwidth">
			<p>
				<!-- Write Quiting Vim --------------------->

			</p>
			<div class="seperator40"></div>
		</div>

		<!--Delete Line Vim INPUT SECTION-->
		<div class="one-half float-left">

			<!-- UPDATE ME --------------------->
			<h4>Run the write quit command </h4>

			<input type="text" name="input4" id="input4" value =""/>
			<input type="button"  class="orange" onclick = "tutorialFour()" value="Enter"/>

		</div>

		<!--Vim Write Quit SIMULATED UNIX TERMINAL-->
		<div class="one-half float-left last">

			<!-- UPDATE ME --------------------->
			<img src="../assets/images/tutorial/programsInstallation/vimWriteQuit.png" id="tutorialImage4" alt="Terminal before quitting Vim"/>

			<div class="seperator40"></div>
		</div>
		<div class="button-container float-right">
		<div class="button purple">
			<a href="../programsInstallation/insertMode.php">Next</a>
		</div>
	</div>
	</div>
	</div>
</div>
<script src = "../assets/js/tutorial/programsInstallation/vimTextEditor.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>

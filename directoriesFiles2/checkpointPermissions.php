<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017
Edited By Tiffany Ellis
Date: 5/8/2017
-->
<?php
	$path = '../';
	$page = 'checkpointpermissions';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="checkpoint-page">

		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">

				<h1 class="float-center">Ownership and Permissions:</h1>
				<h2 class="float-center">Checkpoint</h2>

				<div class="seperator100"></div>
		   </div>

			<div class="fullwidth">
				<form id="checkpointPermissionsQ1">
					<h4>1. What are the three types of permissions?</h4>
					<fieldset>
						<legend>Select all that apply</legend>
							<input type="checkbox" name="question1" id="read" value="read"><label for="read">A. Read</label><br />
							<input type="checkbox" name="question1" id="owner" value="owner"><label for="owner">B. Owner</label><br />
							<input type="checkbox" name="question1" id="write" value="write"><label for="write">C. Write</label><br />
							<input type="checkbox" name="question1" id="edit" value="edit"><label for="edit">D. Edit</label><br />
							<input type="checkbox" name="question1" id="execute" value="execute"><label for="execute">E. Execute</label><br />
					</fieldset>
					<div class="error-message "> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>
					
					<br />
			
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionOne()" />
				</form>

				<div class="seperator100"></div>


				<form id="checkpointPermissionsQ2">
					<h4>2. What is the command to change a permission?</h4>
					<input type="text" id="q2" name="question2" />
					
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>
					
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionTwo()" />
				</form>

				<div class="seperator100"></div>

				<form id="checkpointPermissionsQ3">

					<h4>3. What is the command to add reading permissions to the Owner Permissions of file1?(Using Symbolic Mode)</h4>
					<input type="text" id="q3" name="question3" />
					
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>
					
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionThree()" />
				</form>

				<div class="seperator100"></div>

				<form id="checkpointPermissionsQ4">
					<h4>4. What does the command chmod 755 myfile change the permissions to?</h4>
					<fieldset class="radio-input">
						<label for="a"><input id="a" type="radio" name="mode" value="a" checked="checked"/> A. myfile  rwx-wx-wx</label>
						<label for="b"><input id="b" type="radio" name="mode" value="b" /> B. myfile  r-xrwx--x</label>
						<label for="c"><input id="c" type="radio" name="mode" value="c" /> C. myfile  rwxr-xr-x</label>
						<label for="d"><input id="d" type="radio" name="mode" value="d" /> D. myfile	-wxr--rwx</label>
					</fieldset>
 						
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>

					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFour()" />
				</form>

				<div class="seperator100"></div>

				<form id="checkpointPermissionsQ5">
					<h4>5. The Read permission allows user to:</h4>
					<fieldset>
						<legend>Select all that apply</legend>
							<input type="checkbox" name="question2" id="a1" value="a"><label for="a1">A. read the filenames</label><br />
							<input type="checkbox" name="question2" id="b1" value="b"><label for="b1">B. Allows user to execute the file</label><br />
							<input type="checkbox" name="question2" id="c1" value="c"><label for="c1">C. Read the contents of the file</label><br />
							<input type="checkbox" name="question2" id="d1" value="d"><label for="d1">D. View the contents of a directory</label><br />
							<input type="checkbox" name="question2" id="e1" value="e"><label for="e1">E. Edit the contents of the file</label><br />
					</fieldset>
					
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>

				<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFive()" />
				</form>

				<div class="seperator100"></div>
				<div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>programsInstallation/index.php">Next</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src = "<?php echo $path; ?>assets/js/checkpoints/checkpointPermissions.js"> </script>

<?php
	include $path.'assets/php/footer.php';
?>
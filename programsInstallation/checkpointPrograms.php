<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017
By Brianna Buttaccio
Date: 5/2/2017
-->
<?php
	$path = '../';
	$page = 'checkpointPrograms';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="checkpoint-page">

		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">

				<h1 class="float-center">Programs and Installation:</h1>
				<h2 class="float-center">Checkpoint</h2>

				<div class="seperator100"></div>
		   </div>

			<div class="fullwidth">
				<form id="checkpointProgramsQ1">
					<h4>1. What is the default mode VIM is in?</h4>
					<fieldset class="radio-input">
						<label for="command"><input id="command" type="radio" name="mode" value="command" checked="checked"/> A. Command</label>
						<label for="insert"><input id="insert" type="radio" name="mode" value="insert" /> B. Insert</label>
						<label for="visual"><input id="visual" type="radio" name="mode" value="visual" /> C. Visual</label>
					</fieldset>
					<div class="error-message"> Incorrect answer,please try again. Click <a href="../programsInstallation/vimTextEditor.php"> HERE </a> to review this topic again.</div>
					<div class="correct-message">Correct answer! Way to go!</div>

					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionOne()" />
				</form>

				<div class="seperator100"></div>


				<form id="checkpointProgramsQ2">
					<h4>2. What is the command shortcut to delete a line?</h4>
					<input type="text" id="q2" name="question2" />
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionTwo()" />
				<div class="error-message"> Incorrect answer,please try again. Click <a href="../programsInstallation/vimTextEditor.php"> HERE </a> to review this topic again.</div>
				<di<div class="correct-message">Correct answer! Way to go!</div>
				</form>
				<div class="seperator100"></div>

				<form id="checkpointProgramsQ3">

					<h4>3. What is the command to enter insert mode?</h4>
					<fieldset class="radio-input">
						<label for="c"><input id="c" type="radio" name="insert" value="c" checked="checked"/> A. “c”</label>
						<label for="p"><input id="p" type="radio" name="insert" value="p" /> B. “p”</label>
						<label for="y"><input id="y" type="radio" name="insert" value="y" /> C. “y”</label>
						<label for="i"><input id="i" type="radio" name="insert" value="i" /> C. “i”</label>
					</fieldset>
					<div class="error-message"> Incorrect answer,please try again. Click <a href="../programsInstallation/vimTextEditor.php"> HERE </a> to review this topic again.</div>
					<div class="correct-message">Correct answer! Way to go!</div>
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionThree()" />
				</form>

				<div class="seperator100"></div>

				<form id="checkpointProgramsQ4">
					<h4>4. Which of these are ways to move the cursor?</h4>
					<fieldset>
						<legend>Select all that apply</legend>
						<input type="checkbox" name="question4" id="leftArrow" value="leftArrow"><label for="leftArrow">A. ←</label><br />
						<input type="checkbox" name="question4" id="rightArrow" value="rightArrow"><label for="rightArrow">B. →</label><br />
						<input type="checkbox" name="question4" id="K" value="K"><label for="K">C. K</label><br />
						<input type="checkbox" name="question4" id="J" value="J"><label for="J">D. J</label><br />

					</fieldset>
					<div class="error-message"> Incorrect answer,please try again. Click <a href="../programsInstallation/vimTextEditor.php"> HERE </a> to review this topic again.</div>
					<div class="correct-message">Correct answer! Way to go!</div>

					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFour()" />
				</form>

				<div class="seperator100"></div>

				<form id="checkpointProgramsQ5">
					<h4>5. What is one of the ways you can save and exit VIM?</h4>
					<input type="text" name="question5" id="q5"/>

				<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFive()" />
					<div class="error-message"> Incorrect answer,please try again. Click <a href="../programsInstallation/savingExitingVim.php"> HERE </a> to review this topic again.</div>
					<div class="correct-message">Correct answer! Way to go!</div>
				</form>

				<div class="seperator100"></div>
			</div>
		</div>
	</div>
</div>

<script src = "<?php echo $path; ?>assets/js/checkpoints/checkpointProgramsJS.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>

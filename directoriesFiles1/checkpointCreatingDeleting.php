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
			
				<h1 class="float-center">File and Directories:</h1>
				<h2 class="float-center">Checkpoint</h2>
				
				<div class="seperator100"></div>
		   </div>    
		
			<div class="fullwidth">
				<form id="checkpointFilesandDirectoriesQ1">
					<h4>1. What is a regular file?</h4>
					<fieldset class="radio-input">
						<label for="reg"><input id="reg" type="radio" name="mode" value="reg" checked="checked"/> A. Regular files are used to store files, special files and sometimes other files.</label>
						<label for="reg1"><input id="reg1" type="radio" name="mode" value="reg1" /> B. Regular files are files which contain data, text or code.</label>
						<label for="reg2"><input id="reg2" type="radio" name="mode" value="reg2" /> C. Regular files allows access to various hardware and devices on the system.</label>
                        <label for="reg3"><input id="reg3" type="radio" name="mode" value="reg3" /> D. Regular files do not exist.</label>
					</fieldset>
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
                    <div class="correct-message"> Correct answer! Way to go! </div>
					
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionOne()" />
				</form>
				
				<div class="seperator100"></div>

					
				<form id="checkpointFilesandDirectoriesQ2">
					<h4>2. Which of these are valid ways to create a file?</h4>
					<fieldset>
						<legend>Select all that apply</legend>
						<input type="checkbox" name="question2" id="vimfilename" value="vimfilename"><label for="vimfilename">A. vim filename</label><br />
						<input type="checkbox" name="question2" id="touchfilename" value="touchfilename"><label for="touchfilename">B. touch filename</label><br />
						<input type="checkbox" name="question2" id="createfilename" value="createfilename"><label for="createfilename">C. create filename</label><br />
						<input type="checkbox" name="question2" id="mkfilename" value="mkfilename"><label for="mkfilename">D. mkfile filename</label><br />
					</fieldset>
                    <div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
                    <div class="correct-message"> Correct answer! Way to go! </div>
                    
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionTwo()" />
				</form>
				
				<div class="seperator100"></div>
				
				<form id="checkpointFilesandDirectoriesQ3">
					<h4>3. What is the command to make a directory?</h4>
					<input type="text" id="q3" name="question3" />
                    <div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
                    <div class="correct-message"> Correct answer! Way to go! </div>
                    
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionThree()" />
				</form>
				
				<div class="seperator100"></div>
				
				<form id="checkpointFilesandDirectoriesQ4">
					<h4>4. What is the command to remove a directory?</h4>
					<input type="text" id="q4" name="question4" />
                    <div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
                    <div class="correct-message"> Correct answer! Way to go! </div>
                    
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFour()" />
				</form>
				
				<div class="seperator100"></div>

				<form id="checkpointFilesandDirectoriesQ5">
					<h4>5. Is this a valid command: rm ex01.txt ex02.txt ex03.txt?</h4>
					<fieldset class="radio-input">
						<label for="yes"><input id="yes" type="radio" name="mode1" value="yes" checked="checked"/> A. Yes</label>
						<label for="no"><input id="no" type="radio" name="mode1" value="no" /> B. No</label>
					</fieldset>
                    <div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
                    <div class="correct-message"> Correct answer! Way to go! </div>
					
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFive()" />
				</form>
				
				<div class="seperator100"></div>
				<div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles2/index.php">Next</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src = "<?php echo $path; ?>assets/js/checkpoints/checkpointFilesDirectoriesJS.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>



<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017

By Duncan Okes
Date: 5/3/2017 
-->
<?php
	$path = '../';
	$page = 'Checkpoint Basics';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="checkpoint-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
		
			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<h1 class="float-center">Basics:</h1>
				<h2 class="float-center">Checkpoint</h2>
				
				<div class="seperator100"></div>
		   </div>    
		
			<div class="fullwidth">
			
				<form id="checkpointProgramsQ1">
						<h4>1. What is the command to copy a file?</h4>

						<input type="text" id="q1" name="question1" />
						<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
						<div class="correct-message"> Correct answer! Way to go! </div>

						<!-- cp -->
						<br />
						<input class="blue float-right" type="button" value="Check Answer" onclick = "questionOne()" />
				</form>

				<div class="seperator100"></div>

				<form id="checkpointProgramsQ2">
						<h4>2. What is the command to move a file?</h4>

						<input type="text" id="q2" name="question2" />
						<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
						<div class="correct-message"> Correct answer! Way to go! </div>

						<!-- mv -->
						<br />
						<input class="blue float-right" type="button" value="Check Answer" onclick = "questionTwo()" />
				</form>
					
					<div class="seperator100"></div>
					
				<form id="checkpointProgramsQ3">
					<h4>3. What command shows you detailed information about your current directory?</h4>
					<!-- ls-l -->
					<fieldset class="radio-input">
						<label for="ls"><input id="ls" type="radio" name="insert" value="ls" checked="checked"/> A. ls</label>
						<label for="ls-l"><input id="ls-l" type="radio" name="insert" value="ls-l" /> B. ls -l</label>
						<label for="cd"><input id="cd" type="radio" name="insert" value="cd" /> C. cd</label>
						<label for="cd-l"><input id="cd-l" type="radio" name="insert" value="cd-l" /> D. cd -l</label>
					</fieldset>
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/navigationCommands.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>

					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionThree()" />
				</form>
					
					<div class="seperator100"></div>
					
				<form id="checkpointProgramsQ4">
					<h4>4. What command allows you to rename files?</h4>
					<!-- mv -->
					<fieldset class="radio-input">
						<label for="rm"><input id="rm" type="radio" name="ques4" value="rm" checked="checked"/> A. rm</label>
						<label for="cp"><input id="cp" type="radio" name="ques4" value="cp" /> B. cp</label>
						<label for="mv"><input id="mv" type="radio" name="ques4" value="mv" /> C. mv</label>
						<label for="ls2"><input id="ls2" type="radio" name="ques4" value="ls" /> D. ls</label>
					</fieldset>
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/basicUNIXCommands.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>
							
					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFour()" />
				</form>
					
					<div class="seperator100"></div>
				
				<form id="checkpointProgramsQ5">
					<h4>5. What command shows filenames as they are being copied?</h4>
					<!-- cp-v -->
					<fieldset class="radio-input">
						<label for="cp-v"><input id="cp-v" type="radio" name="ques5" value="cp-v" checked="checked"/> A. cp -v</label>
						<label for="cp-i"><input id="cp-i" type="radio" name="ques5" value="cp-i" /> B. cp -i</label>
						<label for="mv-p"><input id="mv-p" type="radio" name="ques5" value="mv-p" /> C. mv -p</label>
						<label for="mv-v"><input id="mv-v" type="radio" name="ques5" value="mv-v" /> D. mv -v</label>
					</fieldset>
					<div class="error-message"> Incorrect answer, please try again. Click<a href="<?php echo $path;?>basics/importantFlags.php"> Here </a>to review this topic again.</div>
					<div class="correct-message"> Correct answer! Way to go! </div>

					<br />
					<input class="blue float-right" type="button" value="Check Answer" onclick = "questionFive()" />
				</form>	
				
				<div class="seperator100"></div>
				<div class="button-container float-right">
				<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles1/index.php">Next</a>
				</div>	
			</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo $path;?>assets/js/checkpoints/checkpointBasicsJS.js"></script>
<?php
	include $path.'assets/php/footer.php';
?>



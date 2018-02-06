<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'creatingFiles';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!-- TITLE SECTION -->
			<div class="fullwidth">
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Creating Files</h2>
				
				<div class="seperator40"></div>
		   </div>     
            
			<!-- Input for first tutorial -->
			<div class="fullwidth">
				<p>
					
					There are many ways to create a file in Unix. You can use the echo command or printf command, cat command, 
					touch command, Vim or any other console based editor depending on your needs.
					<br>
					Using echo command:  echo ‘message’ > file

				</p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- CREATEFILE1 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the echo command to write 'I love learning about unix' into ex0.txt</h4>
				
				<input type="text" name="input1" id="input1" value =""/>
				<input type="button"  class="orange" onclick = "CreateFileOne()" value="Enter"/>
				
			</div>

			<!--CREATEFILE1 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png"
                     id="CreateFileImage1" alt="Unix Screenshot"  />
				
				<div class="seperator40"></div>
			</div>
            
            <!-- Input for third tutorial -->
			<div class="fullwidth">
				<p>
					The 'printf' command also allows you to write into a new file.
					<br><br>
					Using printf command:	printf ‘message \n.’ > file
				</p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- CREATEFILE3 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the printf command to write 'I love learning about unix' into ex1.txt</h4>
				
				<input type="text" name="input3" id="input3" value =""/>
				<input type="button"  class="orange" onclick = "CreateFileThree()" value="Enter"/>
				
			</div>

			<!-- CREATEFILE3 SIMULATED UNIX TERMINAL -->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="CreateFileImage3" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
            
            
            
            
            
            
            <!-- Input for the fouth tutorial -->
			<div class="fullwidth">
				<p>
					This command allows you to display whats in a file.
					<br><br>
					E.g. cat file
		
				</p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- CREATEFILE4 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the cat command to display what is in ex0.txt</h4>
				
				<input type="text" name="input4" id="input4" value =""/>
				<input type="button"  class="orange" onclick = "CreateFileFour()" value="Enter"/>
				
			</div>

			<!-- CREATEFILE4 SIMULATED UNIX TERMINAL -->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="CreateFileImage4" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
            
            <!-- input for the fifth tutorial -->
			<div class="fullwidth">
				<p>
					Lets get some practice using the 'touch' command.
					Using touch command: touch file

					
				</p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- CREATEFILE5 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the touch command to make a file called file1</h4>
				
				<input type="text" name="input5" id="input5" value =""/>
				<input type="button"  class="orange" onclick = "CreateFileFive()" value="Enter"/>
				
			</div>

			<!--CREATEFILE5 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="CreateFileImage5" alt="Unix Screenshot"/>
				
				<div class="seperator40"></div>
			</div>
            
            <!-- Input for the sixth tutorial -->
			<div class="fullwidth">
				<p>
					This command allows you to create mutiple files at the same time.
					<br><br>
					E.g. touch filea fileb filec filed
				</p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- CREATEFILE6 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the touch command to create mutiple files called file2 file3 file4</h4>
				
				<input type="text" name="input6" id="input6" value =""/>
				<input type="button"  class="orange" onclick = "CreateFileSix()" value="Enter"/>
				
			</div>

			<!-- CREATEFILE6 SIMULATED UNIX TERMINAL -->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="CreateFileImage6" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
            
            <!-- CREATING FILES TEXT SECTION -->
			<div class="fullwidth">
				<p>
                    You now have three new empty files.
                </p>
                
				<div class="seperator40"></div>
                <div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles1/deletingFiles.php">Next</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- UPDATE ME -->
<script src = '<?php echo $path?>assets/js/tutorial/directoriesFiles/creatingFiles.js'> </script>
<?php
	include $path.'assets/php/footer.php';
?>


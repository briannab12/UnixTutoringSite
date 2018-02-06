<!-- Basic UNIX Commands
By Duncan Okes
Date: 4/24/2017 -->
<?php
	$path = '../';
	$page = 'Basic Commands';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
	
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<!-- Headers for the section and subsection -->
				<h1 class="float-center">Basics:</h1>
				<h2 class="float-center">Basic Unix Commands</h2>
				
				<div class="seperator40"></div>
		   </div>     

			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Explanation of the cp command -->
					Files can be copied by using the cp command to do so, type in "cp" followed by the file you want to be copied followed by the name of the copy.<br><br>
					E.g. cp file1 file2 <br><br>
					The cp command can also copy a file to a directory by using path as a second parameter.
				</p>
				<div class="seperator40"></div>
			</div>

			<!-- TUTORIAL1 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-- Question -->
				<h4>Copy the file "trial.html" to a file named "newTrial.html"</h4>
				
				<input type="text" id="input1" name="input1" value =""/>
				<input type="button"  class="orange" onclick = "tutorialOne()" value="Enter"/>

			</div>

			<!--TUTORIAL1 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
			
				<!-- Before image of the terminal -->
				<img src="<?php echo $path ?>assets/images/tutorial/basics/comCPBefore.jpg" id="tutorialImage1" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL2 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Explanation of the cat command -->
					To print out the contents of a file, use the cat command. To do so, simply type in "cat" followed by the name of the file you wish to print out.<br><br>
					E.g. cat filename <br><br>
					You can also concatenate the contents of other files.<br><br>
					E.g. cat file1 file2 file3 <br><br>
					This will add the contents of file1 and file2 to file3.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL2 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-- Question -->
				<h4>Print out the contents of the file named "newTrial.html"</h4>
				
				<input type="text" id="input2" name="input2" value =""/>
				<input type="button"  class="orange" onclick = "tutorialTwo()" value="Enter"/>

			</div>

			<!--TUTORIAL2 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
			
				<!-- Before image of the terminal -->
				<img src="<?php echo $path ?>assets/images/tutorial/basics/comCATBefore.jpg" id="tutorialImage2" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Explanation of the mv command -->
					The mv command moves a file to the specified directory path.<br><br>
					E.g. mv filename directory path <br><br>
					"mv" can also be used to rename files.<br><br> 
					E.g. mv unix Unix <br><br>
					This will rename the file unix to Unix.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-- Question -->
				<h4>Move the file named "newTrial.html" up a directory</h4>
				
				<input type="text" id="input3" name="input3" value =""/>
				<input type="button"  class="orange" onclick = "tutorialThree()" value="Enter"/>

			</div>

			<!--TUTORIAL3 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
			
				<!-- Before image of the terminal -->
				<img src="<?php echo $path ?>assets/images/tutorial/basics/comMVBefore.jpg" id="tutorialImage3" alt="Unix Screenshot" />
			</div>
			<div class="seperator100"></div>
				<div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>basics/importantFlags.php">Next</a>
					</div>
				</div>
		</div>
	</div>
</div>
<!-- COMMENT HERE -->
<script src = "<?php echo $path ?>assets/js/tutorial/basics/basicUNIXCommandsJS.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>



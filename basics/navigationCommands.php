<!-- Important Unix Flags
By Duncan Okes
Date: 4/29/2017 -->
<?php
	$path = '../';
	$page = 'Navigation';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<!-- Header that displays the section and subsection -->
				<h1 class="float-center">Basics:</h1>
				<h2 class="float-center">Navigation</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">

					<!-- Table of all the commands -->
					<table>
						<tr>
							<th>Command</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>ls</td>
							<td>Lists all filenames in your current directory</td>
						</tr>
						<tr>
							<td>ls -l</td>
							<td>Lists all files in your current directory in a long format; contains more information (permissions, file ownership, the last time it was updated)</td>
						</tr>
						<tr>
							<td>cd</td>
							<td>Short for “change directory”. You can supply file paths relative to your current directory (ex. cd Documents) or an absolute file path (ex. cd users/student/Documents)</td>
						</tr>
						<tr>
							<td>cd ..</td>
							<td>Takes you to the directory containing your current working directory. To go up multiple levels, add  /.. to the command for every desired level</td>
						</tr>
						<tr>
							<td>cd ~ and cd -</td>
							<td>cd ~ takes you back to your home directory, while cd - returns you to the previous directory you were in.</td>
						</tr>
						<tr>
							<td>pwd</td>
							<td>Short for “print working directory”. Shows you your current location in your file hierarchy.</td>
						</tr>
					</table>

				<div class="seperator40"></div>
			</div>
			
			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Short explanation of the ls command -->
					The ls command lists all the filenames in the current directory.
				</p>
				<div class="seperator40"></div>
			</div>
			<!--TUTORIAL1 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-- Question -->
				<h4>Type in the command to display all the filenames in the current directory</h4>
				
				<input type="text" id="input1" name="input1" value =""/>
				<input type="button"  class="orange" onclick = "tutorialOne()" value="Enter"/>

			</div>

			<!--TUTORIAL1 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
			
				<!-- Before image of Terminal -->
				<img src="<?php echo $path ?>assets/images/tutorial/basics/navLSBefore.jpg" id="tutorialImage1" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
		  
		  	<!--TUTORIAL2 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Short explanation of the cd command -->
					The cd command changes the current directory.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL2 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-- Question -->
				<h4>Change the current directory to the Desktop</h4>
				
				<input type="text" id="input2" name="input2" value ="" />
				<input type="button"  class="orange" onclick = "tutorialTwo()" value="Enter"/>
			</div>

			<!--TUTORIAL2 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">	

				<!-- Before image of Terminal -->		
				<img src="<?php echo $path ?>assets/images/tutorial/basics/navCDBefore.jpg" id="tutorialImage2" alt="Unix Screenshot" />
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Short explanation of the the pwd command -->
					The pwd command prints out the path to your current location.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-- Question -->
				<h4>Print out the current location</h4>
				
				<input type="text" id="input3" name="input3" value ="" />
				<input type="button"  class="orange" onclick = "tutorialThree()" value="Enter"/>
			</div>

			<!--TUTORIAL3 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">	

				<!-- Before image of Terminal -->		
				<img src="<?php echo $path ?>assets/images/tutorial/basics/navPWDBefore.jpg" id="tutorialImage3" alt="Unix Screenshot" />
			</div>
			<div class="seperator100"></div>
				<div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>basics/basicUNIXCommands.php">Next</a>
					</div>
				</div>
		</div>
	</div>
</div>
<!-- COMMENT HERE -->
<script src = "<?php echo $path ?>assets/js/tutorial/basics/navigationCommandsJS.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>


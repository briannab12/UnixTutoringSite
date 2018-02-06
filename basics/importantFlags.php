<!-- Important Unix Flags
By Duncan Okes
Date: 4/23/2017 -->
<?php
	$path = '../';
	$page = 'Important Flags';
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
				<h2 class="float-center">Important Flags</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Table for the flags -->
					Flags are settings that enable or disable optional features of a command.<br><br> 
					E.g. ls -l <br><br>
					The following table lists commonly used flags associated with commonly used Unix commands related to file system utilities and what functionalities they add to them:
				</p>
					<table>
						<tr>
							<th>Flag</th>
							<th>Associated Command</th>
							<th>Functionality</th>
						</tr>
						<tr>
							<td>-l</td>
							<td>ls</td>
							<td>Long-listing: lists additional information about files in a directory, such as permissions, who owns the file, and timestamps of when the file was last accessed and updated.</td>
						</tr>
						<tr>
							<td>-p</td>
							<td>cp</td>
							<td>Preserves permissions, ownership, and timestamps when copying files</td>
						</tr>
						<tr>
							<td>-i</td>
							<td>cp, mv</td>
							<td>Issues a confirmation prompt before copying or moving a file.</td>
						</tr>
						<tr>
							<td>-v</td>
							<td>cp</td>
							<td>Verbose mode: shows filenames as they are being copied.</td>
						</tr>
					</table>

				<div class="seperator40"></div>
			</div>
			
			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Short explanation of the -l flag -->
					The -l flag with the ls command makes the ls result have a long listing. With more information than would be given with just the ls command.
					
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL1 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-- Question -->
				<h4>Print out the filenames with a long listing</h4>
				
				<input type="text" id="input1" name="input1" value =""/>
				<input type="button"  class="orange" onclick = "tutorialOne()" value="Enter"/>

			</div>

			<!--TUTORIAL1 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
			
				<!-- Before image of the terminal -->
				<img src="<?php echo $path ?>assets/images/tutorial/basics/flagsLBefore.jpg" id="tutorialImage1" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Short explanation of the -i flag -->
					The -i flag prompts the user to confirm that they want to go ahead with the command.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-- Question -->
				<h4>Move the file with a confirmation of the command</h4>
				
				<input type="text" id="input3" name="input3" value ="" />
				<input type="button"  class="orange" onclick = "tutorialThree()" value="Enter"/>
			</div>

			<!--TUTORIAL3 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">			
				<img src="<?php echo $path ?>assets/images/tutorial/basics/flagsIBefore.jpg" id="tutorialImage3" alt="Unix Screenshot" />
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL4 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Short explanation of the -v flag -->
					The -v flag adds a more verbose response to the command.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL4 INPUT SECTION-->
			<div class="one-half float-left">
			
				<!-- Question -->
				<h4>Copy the file so that a verbose response is given</h4>
				
				<input type="text" id="input4" name="input4" value ="" />
				<input type="button"  class="orange" onclick = "tutorialFour()" value="Enter"/>
			</div>

			<!--TUTORIAL4 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">			
				<img src="<?php echo $path ?>assets/images/tutorial/basics/flagsVBefore.jpg" id="tutorialImage4" alt="Unix Screenshot" />
			</div>
			<div class="seperator100"></div>
				<div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>basics/checkpointBasics.php">Next</a>
					</div>
				</div>
		</div>
	</div>
</div>
<script src = "<?php echo $path ?>assets/js/tutorial/basics/importantFlagsJS.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>


<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'creatingDirectories';
	include $path.'assets/php/header.php';
?>
<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!-- TITLE SECTION -->
			<div class="fullwidth">
			
				<!-- UPDATE ME -->
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Creating Directories</h2>
				
				<div class="seperator40"></div>
		   </div>     

			<!--INTRO TO FILE STRUCTURE TEXT SECTION-->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					In Unix you will eventually come across having to create your own directories to stores your files. 
				</p>
                
                <p>
                    Directories are created using the 'mkdir' command.
                </p>
                
                <p>
                    E.g. mkdir d1
                </p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- DE2 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the mkdir command to make a directory called mydir</h4>
				
				<input type="text" name="input1" id="input1" value =""/>
				<input type="button"  class="orange" onclick = "CreateDirectoryOne()" value="Enter"/>
				
			</div>

			<!--DELETEFILE2 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="CreateDirectoryImage1" alt="Unix Screenshot"  />
				
				<div class="seperator40"></div>
			</div>
            
            
            
            
            <!-- INTRO TO FILE STRUCTURE TEXT SECTION -->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					You can also create a directory at a specific location using a pathname.
				</p>
                
                <p>
                    E.g. mkdir d2/a
                </p>
                
                
				<div class="seperator40"></div>
			</div>
            
            <!-- DE2 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the mkdir command to make a directory called b within the mydir directory</h4>
				
				<input type="text" name="input2" id="input2" value =""/>
				<input type="button"  class="orange" onclick = "CreateDirectoryTwo()" value="Enter"/>
				
			</div>

			<!-- DELETEFILE2 SIMULATED UNIX TERMINAL -->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="CreateDirectoryImage2" alt="Unix Screenshot"  />
				
				<div class="seperator40"></div>
                <div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles1/deletingDirectories.php">Next</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script src = '<?php echo $path?>assets/js/tutorial/directoriesFiles/creatingDirectories.js'> </script>
<?php
	include $path.'assets/php/footer.php';
?>

<!-- UPDATE ME -->

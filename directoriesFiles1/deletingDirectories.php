<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'deletingDirectories';
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
				<h2 class="float-center">Deleting Directories</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!-- INTRO TO FILE STRUCTURE TEXT SECTION -->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					When working with Unix you will eventually have to delete directories. 
				</p>
                
                <p>
                    Directories are deleted using the 'rmdir' command.
                </p>
                
                <p>
                    E.g. rmdir d1
                </p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- DE2 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the rmdir command to remove a directory called mydir</h4>
				
				<input type="text" name="input1" id="input1" value =""/>
				<input type="button"  class="orange" onclick = "DeleteDirectoryOne()" value="Enter"/>
				
			</div>

			<!-- DELETEFILE2 SIMULATED UNIX TERMINAL -->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="DeleteDirectoryImage1" alt="Unix Screenshot"  />
				
				<div class="seperator40"></div>
			</div>
            
            <!-- INTRO TO FILE STRUCTURE TEXT SECTION -->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					You can also delete a directory at a specific location by using a pathname. 
				</p>
                <p>
                    E.g. rmdir d2/a
                </p>
                
				<div class="seperator40"></div>
			</div>
            
            <!-- DE2 INPUT SECTION -->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the rmdir command to remove the b directory within the mydir directory</h4>
				
				<input type="text" name="input2" id="input2" value =""/>
				<input type="button"  class="orange" onclick = "DeleteDirectoryTwo()" value="Enter"/>
				
			</div>

			<!-- DELETEFILE2 SIMULATED UNIX TERMINAL -->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="<?php echo $path?>assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="DeleteDirectoryImage2" alt="Unix Screenshot"  />
				
				<div class="seperator40"></div>
			</div>
            
            <!-- INTRO TO FILE STRUCTURE TEXT SECTION -->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					In this case it will go into the mydir folder and then delete the b directory. Each directory must be empty in order to be deleted. 
				</p>
                
				<div class="seperator40"></div>
                <div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles1/checkpointCreatingDeleting.php">Next</a>
					</div>
				</div>
			</div>
            
		</div>
	</div>
</div>

<!-- UPDATE ME -->
<script src = '<?php echo $path?>assets/js/tutorial/directoriesFiles/deletingDirectories.js'> </script>
<?php
	include $path.'assets/php/footer.php';
?>

<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'deletingFiles';
	include $path.'assets/php/header.php';
?>
<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<!-- UPDATE ME -->
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Deleting a File</h2>
				
				<div class="seperator40"></div>
		   </div>     
            
			<!--Input for the first tutorial-->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					You'll want to be careful when deleting a file as they can contain important information. If you have thought it through and still want to delete the file then you'll use the 'rm' command. 
				</p>
                
                <p>
                    E.g. rm file
                </p>
                
				<div class="seperator40"></div>
			</div>
            
            <!--DELETEFILE1 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the rm command to remove a file called filename</h4>
				
				<input type="text" name="input1" id="input1" value =""/>
				<input type="button"  class="orange" onclick = "DeleteFileOne()" value="Enter"/>
				
			</div>

			<!--DELETEFILE1 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="../assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="DeleteFileImage1" alt="Unix Screenshot"  />
				
				<div class="seperator40"></div>
			</div>
            
            <!-- DELETE FILE TEXT SECTION -->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					You can even delete mutiple files at once with the 'rm' command.
				</p>
                
                <p>
                    E.g. rm file1 file2
                </p>
                
				<div class="seperator40"></div>
			</div>
            
            <!--DELETEFILE2 INPUT SECTION-->
			<div class="one-half float-left">
				
				<!-- UPDATE ME -->
				<h4>Use the rm command to remove these files ex0.txt ex1.txt ex2.txt</h4>
				
				<input type="text" name="input2" id="input2" value =""/>
				<input type="button"  class="orange" onclick = "DeleteFileTwo()" value="Enter"/>
				
			</div>

			<!-- DELETEFILE2 SIMULATED UNIX TERMINAL -->
			<div class="one-half float-left last">

				<!-- UPDATE ME -->			
				<img src="../assets/images/tutorial/directoriesFiles/unix-screenshot.png" id="DeleteFileImage2" alt="Unix Screenshot"  />
				
				<div class="seperator40"></div>
			</div>
            <!-- DELETE FILE TEXT SECTION -->
			<div class="fullwidth">
				<p>
					<!-- Into for file structure -->
					This should delete all three files.
				</p>
                
				<div class="seperator40"></div>
                <div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles1/creatingDirectories.php">Next</a>
					</div>
				</div>
			</div>    
			
		</div>
	</div>
</div>
<!-- UPDATE ME -->
<script src = '<?php echo $path?>assets/js/tutorial/directoriesFiles/deletingFiles.js'> </script>
<?php
	include $path.'assets/php/footer.php';
?>
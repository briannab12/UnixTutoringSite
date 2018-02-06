<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Edited by Tiffany Ellis
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'symbolicMode';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
		
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Changing Permissions Symbolic Mode</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					With symbolic mode, we use an operator and two operands, to add, remove and modify permissions. 
					The command used would be: chmod who &lt; operator &gt; permission file/directory. This is referring to which level permissions you want to modify. 
					We will use the following symbols to signify the level permissions we want to use:
				</p>
				
				<ul>
					<li> u - user permissions which is referring to the owner permissions </li>
					<li> g - group permissions </li>
					<li> o- other permissions which is referring to the world’s permissions</li>
					<li> a - for all </li>

				</ul>
	
				<p>
					We are also allowed to use a combination such as ug, go etc. Operators are what we will use to add, subtract and set 
					permissions. We use:
				</p>
				
				<ul>
				
					<li> +  - to add the permission </li>
					<li> - to remove the permission </li>
					<li> = - to set the permission </li>
				</ul>

				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL1 INPUT SECTION-->
			<div class="one-half float-left">
				
				
				<h4>List the files in your directory:</h4>
				
				<input type="text" name="input1" id="input1" value =""/>
				<input type="button"  class="orange" onclick = "tutorialOne()" value="Enter"/>
				
			</div>

			<!--TUTORIAL1 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

							
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/symbolic/symbolic_tutorial.png" id="tutorialImage1" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL2 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					A list of your current files and directories is listed. We are going to add on execute onto the world permissions on file1
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL2 INPUT SECTION-->
			<div class="one-half float-left">
				
				
				<h4>Add execute permssions to the world of file1:</h4>
				
				<input type="text" id="input2" name="input2" value =""/>
				<input type="button"  class="orange" onclick = "tutorialTwo()" value="Enter"/>

			</div>

			<!--TUTORIAL2 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
			
				
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/symbolic/symbolic_tutorial1.png" id="tutorialImage2" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL3 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					We have added on execute specifically onto the world permissions in file1. The permissions should have been -rwxr--r-- 
					but now they should be -rwxr--r-x. List and view the files new permissions.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL3 INPUT SECTION-->
			<div class="one-half float-left">
			
				
				<h4>List the files in your directory:</h4>
				
				<input type="text" id="input3" name="input3" value ="" />
				<input type="button"  class="orange" onclick = "tutorialThree()" value="Enter"/>
			</div>

			<!--TUTORIAL3 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">			
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/symbolic/symbolic_tutorial3.png" id="tutorialImage3" alt="Unix Screenshot" />
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL4 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					
					Now we are going to change the group permissions to Read, Write and Execute.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL4 INPUT SECTION-->
			<div class="one-half float-left">
			
				
				<h4>Change the group permissions of file2 to read,write,execute:</h4>
				
				<input type="text" id="input4" name="input4" value ="" />
				<input type="button"  class="orange" onclick = "tutorialFour()" value="Enter"/>
			</div>

			<!--TUTORIAL4 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">

				
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/symbolic/symbolic_tutorial4.png" id="tutorialImage4" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL5 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					We have changed the group permissions in file2 to Read, Write and Execute. The permissions should have been -rw-r--r--
					but now they should be -rw-rwxr--. List and view the files new permissions.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL5 INPUT SECTION-->
			<div class="one-half float-left">
			
				
				<h4>List the files in your directory:</h4>
				
				<input type="text" id="input5" name="input5" value ="" />
				<input type="button"  class="orange" onclick = "tutorialFive()" value="Enter"/>
			</div>

			<!--TUTORIAL5 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">		
				
				
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/symbolic/symbolic_tutorial5.png" id="tutorialImage5" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL6 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					Finally we are going to change the group and World permissions in the directory mydir. We are going to take away the
					Write and Execute permissions.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL6 INPUT SECTION-->
			<div class="one-half float-left">
			
				
				<h4>Remove the read and execute permissions from the group and world permissions of the mydir directory:</h4>
				
				<input type="text" id="input6" name="input6" value ="" />
				<input type="button"  class="orange" onclick = "tutorialSix()" value="Enter"/>
			</div>

			<!--TUTORIAL6 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">	
				
				
				<img src="<?php echo $path?>assets/images/tutorial/permissions/symbolic/symbolic_tutorial6.png" id="tutorialImage6" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			<!--TUTORIAL7 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					
					We have taken away the Read and Execute rights in group and world permissions in mydir. The permissions should have been drwxr-xr-x
					but now they should be drwx------. List and view the files new permissions.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL7 INPUT SECTION-->
			<div class="one-half float-left">
			
				
				<h4>Type the command: ls -l</h4>
				
				<input type="text" id="input7" name="input7" value ="" />
				<input type="button"  class="orange" onclick = "tutorialSeven()" value="Enter"/>
			</div>

			<!--TUTORIAL7 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">	
				
				
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/symbolic/symbolic_tutorial7.png" id="tutorialImage7" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			<div class="seperator100"></div>
			<div class="button-container float-right">
				<div class="button purple">
					<a href="<?php echo $path;?>directoriesFiles2/checkpointPermissions.php">Next</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script src = "<?php echo $path ?>assets/js/tutorial/permissions/symbolic.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>

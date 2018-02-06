<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Edited By Tiffany Ellis
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'changingPermissions';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Changing Permissions Absolute Mode</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!--TUTORIAL1 TEXT SECTION-->
			<div class="fullwidth">
			
				<p>
					To change the permissions of a file or directory we use the command chmod. With chmod there are two way we can change permissions 
					absolute mode or symbolic mode.

				</p>
				
				<p>
					Absolute mode is using numbers to help assign permissions to the files and directories. 
					Each number represents a different set of permissions, starting from zero and ending at seven.
				</p>
				<br/>
				<table>
					<tr>
						<td> Number </td>
						<td> Permission </td>
						<td> Reference </td>
					</tr>

					<tr>
						<td> 0 </td>
						<td> None </td>
						<td> --- </td>
					</tr>
					
					<tr>
						<td> 1 </td>
						<td> Execute </td>
						<td> --x </td>
					</tr>
					
					<tr>
						<td> 2 </td>
						<td> Write </td>
						<td> -w- </td>
					</tr>
					
					<tr>
						<td> 3 </td>
						<td> Write and Execute </td>
						<td> -wx </td>
					</tr>
					
					<tr>
						<td> 4 </td>
						<td> Read </td>
						<td> r-- </td>
					</tr>
					
					<tr>
						<td> 5 </td>
						<td> Read and Execute </td>
						<td> r-x </td>
					</tr>
					
					<tr>
						<td> 6 </td>
						<td> Read and Write </td>
						<td> rw- </td>
					</tr>
					
					<tr>
						<td> 7 </td>
						<td> Read, Write and Execute </td>
						<td> rwx </td>
					</tr>
					
				</table>
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

				<img src="<?php echo $path ?>assets/images/tutorial/permissions/absolute/absolute_tutorial.png" id="tutorialImage1" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL2 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					A list of your current files and directories is listed. Notice the permissions of the directory 'mydir'.
					The permissions begins with 'd' to tell the user that 'mydir' is a directory. Now we are going to change the permissions
					of the directory 'mydir'.
				</p>
				<div class="seperator40"></div>
			</div>

			<!--TUTORIAL2 INPUT SECTION-->
			<div class="one-half float-left">
				
				<h4>Change the permissions of directory mydir to 755:</h4>
				
				<input type="text" id="input2" name="input2" value =""/>
				<input type="button"  class="orange" onclick = "tutorialTwo()" value="Enter"/>

			</div>

			<!--TUTORIAL2 SIMULATED UNIX TERMINAL-->
			<div class="one-half float-left last">
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/absolute/absolute_tutorial1.png" id="tutorialImage2" alt="Unix Screenshot" />
				
				<div class="seperator40"></div>
			</div>
			
			
			
			<!--TUTORIAL3 TEXT SECTION-->
			<div class="fullwidth">
				<p>
					Previously the permissions for the directory 'mydir' were drw-rwxr-x. The owner permissions were Read and Write
					the group permissions were Read, Write and Execute and the world permissions were Reand and Execute. After using the command to change
					the permissions they should now list drwxr-xr-x. 
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
				<img src="<?php echo $path ?>assets/images/tutorial/permissions/absolute/absolute_tutorial2.png" id="tutorialImage3" alt="Unix Screenshot" />
				<div class="seperator40"></div>
			</div>
			
			<div class="fullwidth">
				<p>
					You have changed the permissions of the directory. The owner permissions are now Read, Write and Execute, the group
					permissions are now Read and Execute and the world permissions are now Read and Execute. 
				</p>
				<div class="seperator40"></div>
			</div>
			
			<div class="seperator100"></div>
			<div class="button-container float-right">
				<div class="button purple">
					<a href="<?php echo $path;?>directoriesFiles2/symbolicMode.php">Next</a>
				</div>
			</div>
</div>
</div>
</div>
<script src = "<?php echo $path ?>assets/js/tutorial/permissions/absolute.js"> </script>
<?php
	include $path.'assets/php/footer.php';
?>

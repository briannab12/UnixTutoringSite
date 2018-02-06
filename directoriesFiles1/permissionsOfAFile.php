<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'permisssionsOfAFile';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class ="wrapper"> 
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class ="content"> 
			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<!-------------------- UPDATE ME --------------------->
				<h1 class="float-center">Diretories and Files:</h1>
				<h2 class="float-center">Ownership and Permissions</h2>
				
				<div class="seperator40"></div>
		   </div>    
		   
		   <div class = "fullwidth" >
		   

				<p> There are three different levels at which permissions are assigned to files, Owner, Group and World. <p>
				<ul>
					<li> Owner Permissions decide the actions that the owner of file can do on the file.</li>
					<li> Group Permissions decide the actions the group of the file can perform on the file.</li>
					<li> World Permissions decides actions everyone else can perform on the file.</li>
				<p>
					Each level is assigned the permissions, read, write and execute. 
					The kind of access granted and actions allowed varies depending on whether it is a file or directory. 
				</p>
	
		   		<p>Permissions of a file</p>
					<ul>
						<li>Read - allows the user to view the contents of the file</li>
						<li>Write - gives user the ability to edit the file and delete content</li>
						<li>Execute - allows user to execute the file.</li>
					</ul>

				<p>Permissions of a Directory</p>
					<ul>
						<li>Read - grants user the access to view the content of the directory and read the filenames</li>
						<li>Write - allows user to modify directory contents such as creating and deleting files</li>
						<li>Execute - grants user the ability to make the directory its home directory or to cd into it. 
						You need to be able to execute a directory to access its files.</li>
					</ul>
		   
		   </div> 
		</div>
	
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

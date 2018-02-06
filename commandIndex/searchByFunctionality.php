<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017

By Duncan Okes
Date: 5/8/2017
-->
<?php
	$path = '../';
	$page = 'Search by Functionality';
	include $path.'/assets/php/header.php';
?>
<div id="container">
	<div class="wrapper" id="checkpoint-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		<div class="content">
			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				<h1 class="float-center">Index:</h1>
				<h2 class="float-center">Search By Functionality</h2>
			</div> 
			
			<div class="button purple ">
				<a href="<?php echo $path;?>commandIndex/searchByFunctionality.php">Order by Topic</a>
			</div>

			<div class="button orange">
				<a href="<?php echo $path;?>commandIndex/searchByName.php">Order Alphabetically</a>
			</div>

			<ul id="index-list">
				<li><h3>Basics: Navigation</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>basics/navigationCommands.php">ls</a></strong> Lists all filenames in your current directory</li>
						<li><strong><a href="<?php echo $path;?>basics/navigationCommands.php">ls -l</a></strong> Lists all files in your current directory in a long format; contains more information (permissions, file ownership, the last time it was updated)</li>
						<li><strong><a href="<?php echo $path;?>basics/navigationCommands.php">cd</a></strong> Short for “change directory”. You can supply file paths relative to your current directory (ex. cd Documents) or an absolute file path (ex. cd users/student/Documents)</li>
						<li><strong><a href="<?php echo $path;?>basics/navigationCommands.php">cd ..</a></strong> Takes you to the directory containing your current working directory. To go up multiple levels, add  /.. to the command for every desired level</li>
						<li><strong><a href="<?php echo $path;?>basics/navigationCommands.php">cd ~</a></strong> Takes you back to your home directory</li>
						<li><strong><a href="<?php echo $path;?>basics/navigationCommands.php">cd -</a></strong> Returns you to the previous directory</li>
						<li><strong><a href="<?php echo $path;?>basics/navigationCommands.php">pwd</a></strong> Short for “print working directory”. Shows you your current location in your file hierarchy.</li>
					</ul>
				</li>
				<li><h3>Basics: Basic Commands</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>basics/basicUNIXCommands.php">cp [file1] [file2]</a></strong> Copies a file. Can also copy a file to a directory by using a path as the second parameter.</li>
						<li><strong><a href="<?php echo $path;?>basics/basicUNIXCommands.php">cat [filename]</a></strong> Reads the contents of a file. You can also concatenate the contents of other files.</li>
						<li><strong><a href="<?php echo $path;?>basics/basicUNIXCommands.php">mv [filename] [directory path]</a></strong> Moves a file to the specified directory path. mv can also be used to rename files. Ex. mv Unix will rename the file Unix to Unix.</li>
					</ul>
				</li>
				<li><h3>Basics: Important Flags</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>basics/importantFlags.php">cp -p</a></strong> Preserves permissions, ownership, and timestamps when copying files</li>
						<li><strong><a href="<?php echo $path;?>basics/importantFlags.php">cp -i</a></strong> Issues a confirmation prompt before copying a file</li>
						<li><strong><a href="<?php echo $path;?>basics/importantFlags.php">mv -i</a></strong> Issues a confirmation prompt before moving a file</li>
						<li><strong><a href="<?php echo $path;?>basics/importantFlags.php">cp -v</a></strong> Verbose mode: shows filenames as they are being copied</li>
					</ul>
				</li>
				<li><h3>Directories and Files: Creating Files</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>directoriesFiles/creatingFiles.php">echo 'file contents' > [newFileName]</a></strong> Creates a new file with the given contents</li>
						<li><strong><a href="<?php echo $path;?>directoriesFiles/creatingFiles.php">printf 'file contents' > [newFileName]</a></strong> Creates a new file with the given contents</li>
						<li><strong><a href="<?php echo $path;?>directoriesFiles/creatingFiles.php">touch [newFileName]</a></strong> Creates a new file</li>
					</ul>
				</li>
				<li><h3>Directories and Files: Deleting Files</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>directoriesFiles/deletingFiles.php">rm [fileName]</a></strong> Removes designated file</li>
					</ul>
				</li>
				<li><h3>Directories and Files: Creating Directories</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>directoriesFiles/creatingDirectories.php">mkdir [newDirectoryName]</a></strong> Creates a directory with the given name</li>
					</ul>
				</li>
				<li><h3>Directories and Files: Deleting Directories</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>directoriesFiles/deletingDirectories.php">rmdir [directoryName]</a></strong> Removes the designated directory</li>
					</ul>
				</li>
				<li><h3>Programs and Instillation: Vim</h3>
					<ul>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">vim [filename]</a></strong> Opens or creates the designated filename in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">H</a></strong> Moves cursor left in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">K</a></strong> Moves cursor up in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">L</a></strong> Moves cursor right in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">J</a></strong> Moves cursor down in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">I</a></strong> Enters insert mode in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">Esc</a></strong> Exit mode back to command in vim<li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">U</a></strong> Undoes a command in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">dd</a></strong> Deletes an entire line in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">dw</a></strong> Deletes a word in vim</li>
						<li><strong><a href="<?php echo $path;?>programsInstallation/vim.php">Ctrl + r</a></strong> Redoes a command in vim</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
	include $path.'/assets/php/footer.php';
?>

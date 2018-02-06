<div id="side-nav" class="open">
	<div id="tab">
		&#8250;
	</div>
	<h2>Tutorials</h2>
	<nav>
		<ul>
			<li><div <?php echo ($page == 'basics') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/index.php">Basics</a></div>
				<ul <?php echo (strpos($_SERVER['REQUEST_URI'], "basics/")) ? 'class="active"' : '';?>>
					<li <?php echo ($page == 'whyUnix') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/whyUnix.php">Why Unix</a></li>
					<li <?php echo ($page == 'breifHistory') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/breifHistory.php">Breif History</a></li>
					<li <?php echo ($page == 'Starting Terminal') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/startingTerminal.php">Starting Terminal</a></li>
					<li <?php echo ($page == 'Navigation') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/navigationCommands.php">Navigation</a></li>
					<li <?php echo ($page == 'Basic Commands') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/basicUNIXCommands.php">Basic Unix Commands</a></li>
					<li <?php echo ($page == 'Important Flags') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/importantFlags.php">Important Flags</a></li>
					<li <?php echo ($page == 'Checkpoint Basics') ? 'class="active"' : '';?>><a href="<?php echo $path;?>basics/checkpointBasics.php">Checkpoint</a></li>
				</ul>
			</li>
			<li><div <?php echo ($page == 'directoriesFiles1') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/index.php">Directories and Files: Create and Delete</a></div>
				<ul <?php echo (strpos($_SERVER['REQUEST_URI'], "directoriesFiles1/")) ? 'class="active"' : '';?>>
					<li <?php echo ($page == 'introductionToFileStructure') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/introductionToFileStructure.php">Introduction to File Structure</a></li>
					<li <?php echo ($page == 'AbsoluteRelativePaths') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/AbsoluteRelativePaths.php">Absolute and Relative Paths</a></li>
					<li <?php echo ($page == 'creatingFiles') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/creatingFiles.php">Creating Files</a></li>
					<li <?php echo ($page == 'deletingFiles') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/deletingFiles.php">Deleting Files</a></li>
					<li <?php echo ($page == 'creatingDirectories') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/creatingDirectories.php">Creating Directories</a></li>
					<li <?php echo ($page == 'deletingDirectories') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/deletingDirectories.php">Deleting Directories</a></li>
					<li <?php echo ($page == 'checkpointPrograms') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles1/checkpointCreatingDeleting.php">Checkpoint</a></li>

				</ul>
			</li>
			<li><div <?php echo ($page == 'directoriesFiles2') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles2/index.php">Directories and Files: Permissions</a></div>
				<ul <?php echo (strpos($_SERVER['REQUEST_URI'], "directoriesFiles2/")) ? 'class="active"' : '';?>>
					<li <?php echo ($page == 'ownershipPermissions') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles2/ownershipPermissions.php">Ownership and Permissions</a></li>
					<li <?php echo ($page == 'changingPermissions') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles2/changingPermissions.php">Absolute Mode</a></li>
					<li <?php echo ($page == 'symbolicMode') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles2/symbolicMode.php">Symbolic Mode</a></li>
					<li <?php echo ($page == 'checkpointpermissions') ? 'class="active"' : '';?>><a href="<?php echo $path;?>directoriesFiles2/checkpointPermissions.php">Checkpoint</a></li>
				</ul>
			</li>
			<li><div <?php echo ($page == 'programsInstallation') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/index.php">Programs and Installation</a></div>
				<ul <?php echo (strpos($_SERVER['REQUEST_URI'], "programsInstallation/")) ? 'class="active"' : '';?>>
					<li <?php echo ($page == 'vim') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/vim.php">Vim</a></li>
					<li <?php echo ($page == 'openingFilesInVim') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/openingFilesInVim.php">Opening Files in Vim</a></li>
					<li <?php echo ($page == 'vimTextEditor') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/vimTextEditor.php">Vim Text Editor</a></li>
					<li <?php echo ($page == 'insertMode') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/insertMode.php">Insert Mode</a></li>
					<li <?php echo ($page == 'savingExitingVim') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/savingExitingVim.php">Saving and exiting Vim</a></li>
					<li <?php echo ($page == 'atom') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/atom.php">Atom</a></li>
					<li <?php echo ($page == 'brackets') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/brackets.php">Brackets</a></li>
					<li <?php echo ($page == 'filezilla') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/filezilla.php">FileZilla</a></li>
					<li <?php echo ($page == 'checkpointPrograms') ? 'class="active"' : '';?>><a href="<?php echo $path;?>programsInstallation/checkpointPrograms.php">Checkpoint</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
<div id="nav-trigger">
	<img onclick="mobileMenuHome()" src="<?php echo $path;?>assets/images/home_icon.png" alt="Logo" />
	<img onclick="mobileMenuMenu()" src="<?php echo $path;?>assets/images/hamburger.png" alt="Logo" />
	<img onclick="mobileMenuIndex()" src="<?php echo $path;?>assets/images/tutorial_icon.png" alt="Logo" />
	<img onclick="mobileMenuAbout()" src="<?php echo $path;?>assets/images/about_us_icon.png" alt="Logo" />
</div>
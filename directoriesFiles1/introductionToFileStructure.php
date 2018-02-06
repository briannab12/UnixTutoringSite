<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'introductionToFileStructure';
	include $path.'assets/php/header.php';
?>
<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Introduction to File Structure</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!--INTRO TO FILE STRUCTURE TEXT SECTION-->
			<div class="fullwidth">
				
				<p>
					
					In Unix, you will often find yourself working with files. There are essentially three types of files:
				</p>
                <ol>
                    <li>Regular Files</li>
                    <li>Directories</li>
                    <li>Special Files</li>
                </ol>
                <p>
                    Regular files are files which contain data, text or code. These are the usual word documents, pictures, videos, text files, compressed files, HTML code etc. 
                </p>
                
                <p>
                    Directory files are used to store files, special files and sometimes other directories.
                </p>
                
                <p>
                    Special files allow access to various hardware and devices on the system. It is divided into five sub categories: 
                </p>
                
                <ol>
                    <li>Block Files</li>
                    <li>Character Device File</li>
                    <li>Pipe File</li>
                    <li>Symbolic link File</li>
                    <li>Socket File</li>
                </ol>
                
                <p>
                    In this tutorial, we will be working with regular files and directories.
                </p>
                
				<div class="seperator40"></div>
                <div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles1/AbsoluteRelativePaths.php">Next</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

<!-- Test HTML and PHP for Unix4Ux index page
By Matthew Fitzgerald
Date: 4/4/2017 -->
<?php
	$path = '../';
	$page = 'AbsoluteRelativePaths';
	include $path.'assets/php/header.php';
?>

<div id="container">
	<div class="wrapper" id="tutorial-page">
		
		<?php include $path.'assets/php/localMenu.php'; ?>
		
		<div class="content">

			<!--TITLE SECTION-->
			<div class="fullwidth">
			
				
				<h1 class="float-center">Directories and Files:</h1>
				<h2 class="float-center">Absolute and Relative Paths</h2>
				
				<div class="seperator40"></div>
		   </div>     

		   
		   
			<!--ABSOLUTE AND RELATIVE PATH TEXT SECTION-->
			<div class="fullwidth">
			
				<p>
					A path is a distinct location to a file. In Unix, we use paths to navigate and have quicker access to files. A pathname can be absolute or relative.
				</p>
                
                <p>
                    A pathname is absolute if it is written in relation to the root. This means that all absolute pathnames begin with a slash (/). 
                </p>
                
                <p>
                    E.g. /home/work/homework/assignment1 
                </p>
                
                <p>
                	
                    An absolute pathname will always yield the same result.
                </p>
                
                <p>
                    A relative pathname is not written in relation to the root but instead is dependent on its current directory. A relative pathname will never begin with a slash (/).
                </p>
                
                <p>
                    E.g. projects/project1/index.html
                </p>
                
                <p>
                    The result of the relative pathname will always be dependent on its current directory.
                </p>
                
				<div class="seperator40"></div>
                <div class="button-container float-right">
					<div class="button purple">
						<a href="<?php echo $path;?>directoriesFiles1/creatingFiles.php">Next</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php
	include $path.'assets/php/footer.php';
?>

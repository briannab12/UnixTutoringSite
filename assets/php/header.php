<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/mystyle.css" />
	<script type="text/javascript" src="<?php echo $path;?>assets/js/generalJS.js"></script>
</head>
    <body>
		<div class="wrapper" id ="header">
			<header>
				<figure class="logo">
					<a href="/~bab7607/ISTE240/Group/index.php"><img src="<?php echo $path;?>assets/images/logo.png" alt="Logo"/></a>
				</figure>
                <div id="search">
                    <script>
						(function() {
							var cx = '004990877261735106004:6okc7inyk6u';
							var gcse = document.createElement('script');
							gcse.type = 'text/javascript';
							gcse.async = true;
							gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(gcse, s);
						 })();
					</script>
                    <gcse:search></gcse:search>
                </div>
				<nav id="global">
					<ul>
						<li><div <?php echo ($page == 'home') ? 'class="active"' : '';?> ><a href="<?php echo $path;?>index.php">Home</a></div>
						</li>
						<li><div <?php echo ($page == 'basics') ? 'class="active"' : '';?> ><a href="<?php echo $path;?>basics/index.php">Basics</a></div>
						</li>
						<li><div <?php echo ($page == 'directoriesFiles') ? 'class="active"' : '';?> ><a href="<?php echo $path;?>directoriesFiles1/index.php">Directories and Files</a></div>
						</li>
						<li><div <?php echo ($page == 'programsInstallation') ? 'class="active"' : '';?> ><a href="<?php echo $path;?>programsInstallation/index.php">Programs and Installation</a></div>
						</li>
						<li><div <?php echo ($page == 'commandIndex') ? 'class="active"' : '';?> ><a href="<?php echo $path;?>/commandIndex/searchByFunctionality.php">Command Index</a></div>
						</li>
					</ul>
				</nav>
			</header>
		</div>

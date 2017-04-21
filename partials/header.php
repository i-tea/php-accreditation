<?php 
	
	$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');
	if ( $page_name == 'index' ) $page_name = 'home';

?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo ucfirst($page_name) ?> / Kickass Website</title>
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?php echo $page_name ?>">

	<header class="site-header">
		<nav class="container">
			<ul class="menu">
			<?php
				
				print_r( glob('*.php') );
				/*
				if ($page_name =='home') echo '<li><strong>Home</strong></li>';
				else echo '<li><a href="index.php">Home</a></li>';

				if ($page_name =='gallery') echo '<li><strong>Gallery</strong></li>';
				else echo '<li><a href="gallery.php">Gallery</a></li>';

				if ($page_name =='blog') echo '<li><strong>Blog</strong></li>';
				else echo '<li><a href="blog.php">Blog</a></li>';
				
				if ($page_name =='contact') echo '<li><strong>Contact</strong></li>';
				else echo '<li><a href="contact.php">Contact</a></li>';
				*/
			?>
			</ul>
		</nav>
	</header>

	<main>
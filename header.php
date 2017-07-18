<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'title' ); ?></title>
	<link rel="stylesheet" href="wp-content/themes/harik/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div style="background: yellow;"><?php wp_nav_menu( );
?></div>

<div class="jumbotron">
	<?php bloginfo(); ?>
	 <h2><?php bloginfo( 'description' ); ?></h2>

</div>


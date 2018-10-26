<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge" /><![endif]-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

	<?php //wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper clearfix">
	<!-- BEGIN header -->
	<header id="header" class="<?php echo apply_filters( 'basic_header_class', 'clearfix' ); ?>">

	<nav class="navbar navbar-expand list-group-item">
		<?php if ( has_nav_menu( 'top_menu' ) ) {
			wp_nav_menu( array(
				'theme_location' => 'top_menu',
				'menu_id'        => 'navpages',
				'container'      => false,
				'menu_class'     => 'nav m-2 pl-3',
			) );
		}
		?>
	</nav>
	</header>

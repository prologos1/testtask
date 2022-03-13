<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title( ' - ', true, 'right' ); bloginfo( 'name' ); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php //wp_head(); ?>
</head>
<body>
<div class="underhead"><?php wp_body_open(); ?></div>
	<header class="page-header alignwide">
	
				<div class="header-navigation-wrapper">
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						?>
						 <div>
							<nav  class="navbar navbar-dark bg-dark" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'nanotheme' ); ?>">
								<ul class="navbar-nav bd-navbar-nav flex-row"  style="color: #e3f2fd;">
								<?php
								if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);
								} 
								?>
								</ul>
							</nav><!-- .primary-menu-wrapper -->
							</div>
						<?php
					}
					?>
					</div>
		<?php if( !is_single() ) { ?> 
		<h1 class="page-title"><?php single_post_title(); ?></h1>
		<?php } ?>
	</header><!-- .page-header -->
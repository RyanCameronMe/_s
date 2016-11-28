<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site-container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thegardens' ); ?></a>
	
	<div class="before-header">
		<div class="column row">
		<?php
		if ( is_active_sidebar( 'before-header' ) ) {
			dynamic_sidebar( 'before-header' );
		} 
		?>
		</div><!-- .column.row -->
	</div>
	<header id="masthead" class="site-header" role="banner">

		<div class="column row">
			
			<div class="site-branding">

				<?php		
				$logo = sprintf('<img src="%s" alt="%s"/>', THEME_IMG .'/logo.svg', get_bloginfo( 'name' ) );
				$site_url = site_url();
				printf('<div class="site-title"><a href="%s" title="%s">%s</a></div>', $site_url, get_bloginfo( 'name' ), $logo );
				?>

			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="wrap">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'menu dropdown',
							'link_before'	 => '<span>',
							'link_after'	 => '</span>'
						) );
						
					?>
				</div>
			</nav><!-- #site-navigation -->
		
		</div><!-- .column.row -->

	</header><!-- #masthead -->
	
	<div class="after-header">
		
		<div class="column row">
		<?php
		if ( is_active_sidebar( 'after-header' ) ) {
			dynamic_sidebar( 'after-header' );
		}
		?>
		</div><!-- .column.row -->
		
	</div>

	<div id="content" class="site-content">

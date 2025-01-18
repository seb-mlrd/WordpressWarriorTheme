<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_warrior
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wordpress_warrior' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			$wordpress_warrior_description = get_bloginfo( 'description', 'display' );
			if ( $wordpress_warrior_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wordpress_warrior_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="container-burger-logo">
			<div class="container-logo">
				 <?php 
				the_custom_logo(); 
				?>
			</div>
			<div class="burger-icon">
				<span class="others"></span>
				<span class="middle"></span>
				<span class="others"></span>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'		 => false,
						'menu_class' 	 => 'container-menu',
					)
				);
			?>
			<a href="" class="contact-button">Contact</a>
		</nav>


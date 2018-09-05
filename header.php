<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package positivestart
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic">
	<?php wp_head(); ?>
</head>

<body class="homepage is-preload" <?php body_class(); ?>>

<div id="page-wrapper">
<!-- custom Header-->
<section id="header">
	<?php
	the_custom_logo();
	if ( is_front_page() && is_home() ) :
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	else :
		?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php
	endif;
	$positivestart_description = get_bloginfo( 'description', 'display' );
	if ( $positivestart_description || is_customize_preview() ) :
		?>
		<p class="site-description"><?php echo $positivestart_description; /* WPCS: xss ok. */ ?></p>
	<?php endif; ?>
<!-- Nav -->
<style type="text/css">
	#header #banner{
		background: url("<?php bloginfo('tempalte_directory') ?> /images/pic01.jpg")>
	}
	</style>
<nav id="nav">

		<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	) );
	?>

	</nav>
<!-- Banner -->
	<section id="banner">

		<header>
		
			<h2><?php bloginfo( 'name' ); ?></h2>
			<p><?php echo $positivestart_description; /* WPCS: xss ok. */ ?></p>
		</header>
		</div>




  </section>

</div>

	<div id="content" class="site-content">
	<div id="page-wrapper">


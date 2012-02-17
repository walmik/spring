<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<title><?php global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ari' ), max( $paged, $page ) );
	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />
	<?php if (get_option('ari_dark-style') == 'checked') : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" type="text/css">
	<?php endif; ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap" class="clearfix">
	<div id="sidebar-primary">
	<div class="logo">
	<?php if (get_option('ari_logo-image') ) : ?>
	<a href="<?php echo home_url(); ?>"><img src="<?php echo (get_option('ari_logo-image')) ? get_option('ari_logo-image') : get_template_directory_uri() . '/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>" /></a>

	<?php else : ?>

	<a href="http://walmik.info" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		<img src="<?php bloginfo('template_directory'); ?>/images/walmik-logo.png" /><br />
		<p class='spring-red'><?php bloginfo( 'description' ); ?></p>
	</a>
	<?php endif; ?>
	</div><!--end Logo-->
	
	<!-- motif image--><img style="margin-top: 100px;" src="<?php bloginfo('template_directory'); ?>/images/motif.png" />
	
	<?php //get_sidebar('primary'); ?>

	</div>
	<!--end Sidebar One-->
﻿<!DOCTYPE html>
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

	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
   	 } else {
       		 bloginfo('name'); echo " - "; bloginfo('description');
   	 }
	    ?>" />
	<meta name="keywords" content="walmik, walmik deshpande, walmik frontend developer, san francisco frontend developers, javascript, backbone, angular js, require js, jquery, walmik designer, grunt js">
	<meta name="author" content="Walmik Deshpande">
        <meta charset="UTF-8">
        <link rel="canonical" href="http://www.walmik.com" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />
	<?php if (get_option('ari_dark-style') == 'checked') : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" type="text/css">
	<?php endif; ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8347688-7', 'walmik.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
	
</head>

<body <?php body_class(); ?>>

<div id="wrap" class="clearfix">
	<div id="sidebar-primary">
	<div class="logo">
	<a href="http://walmik.info" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		<h1 id='logo'>Walmik Deshpande</h1>
		<p class='spring-red'><?php bloginfo( 'description' ); ?></p>
	</a>
	</div><!--end Logo-->
	
	<!-- motif image--><img style="margin-top: 100px;" src="<?php bloginfo('template_directory'); ?>/images/motif.png" />
	
	<?php //get_sidebar('primary'); ?>

	</div>
	<!--end Sidebar One-->

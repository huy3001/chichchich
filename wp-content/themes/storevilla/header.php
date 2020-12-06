<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Store_Villa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storevilla_html_tag_schema(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Meta tags for sharing -->
<meta property="fb:app_id" content="2381269902019530"/>
<meta property="fb:pages" content="111060810637742"/>
<meta property="og:url" content="<?php bloginfo( 'url' ) ?>"/>
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php bloginfo( 'name' ) ?>"/>
<meta property="og:description" content="<?php bloginfo( 'description' ) ?>"/>
<meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/images/fb-share.jpg' ?>"/>
<meta property="og:image:alt" content="<?php bloginfo( 'description' ) ?>"/>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image:alt" content="<?php bloginfo( 'description' ) ?>">
<!-- End meta tags for sharing -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
   wp_body_open();
} ?>

<div id="page" class="hfeed site">

	<?php do_action( 'storevilla_before_header' ); ?>

		<header id="masthead" class="site-header" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . '); background-size:cover;"'; } ?>>
				<?php
					/**
					 * @see  storevilla_skip_links() - 0
					 * @see  storevilla_top_header() - 10
						**@see storevilla_top_nav (filter for top header navigation)
					 * @see  storevilla_button_header() - 20
					 * @see  storevilla_primary_navigation() - 30
					 */			
					do_action( 'storevilla_header' ); 
				?>
		</header><!-- #masthead -->
	
	<?php do_action( 'storevilla_after_header' ); ?>

	<div id="content" class="site-content">
	<?php if( !( is_home() || is_front_page() ) ) { ?>
		<div class="store-container clearfix">
			<div class="store-container-inner clearfix">
	<?php } 
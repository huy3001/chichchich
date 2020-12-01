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
<meta property="fb:app_id" content="409988653483224"/>
<meta property="fb:pages" content="107849391107269"/>
<!-- End meta tags for sharing -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Facebook analytics -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '409988653483224',
      cookie     : true,
      xfbml      : true,
      version    : '9.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- End facebook analytics -->

<?php if ( function_exists( 'wp_body_open' ) ) {
   wp_body_open();
} ?>

<div id="page" class="hfeed site">
	<div id="snow"></div>

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
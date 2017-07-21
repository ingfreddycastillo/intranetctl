<?php
/**
 * @package firmasite
 */

global $firmasite_settings;

?><!DOCTYPE html>
<!--[if IE 8]> <html class="lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php if ( !isset($firmasite_settings["no-responsive"]) || empty($firmasite_settings["no-responsive"]) ) { ?>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php } ?>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link
  rel="stylesheet"
  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj"
  crossorigin="anonymous">

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>
<?php flush(); ?>

<body <?php body_class(); ?>>

<a href="#primary" class="sr-only"><?php _e("Skip to content", 'firmasite' );?></a>

<div id="page" class="hfeed site <?php echo $firmasite_settings["layout_page_class"]; ?> <?php echo $firmasite_settings["style"].'-theme'; ?>">

	<?php do_action( 'before_header' ); ?>
    
	<?php get_template_part( 'templates/header', $firmasite_settings["header-style"] ); ?>
    
	<?php do_action( 'after_header' ); ?>


	<div id="main" class="site-main <?php echo $firmasite_settings["layout_container_class"]; ?>">
        <div class="row">
        	
        <?php do_action( 'before_content' ); ?> 



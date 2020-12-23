<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeHunk
 * @subpackage Open Shop
 * @since 1.0.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="<?php echo esc_attr(get_theme_mod('open_shop_mobile_header_clr','#fff')); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>	
<?php 
$classes = '';
if(!is_404() && !is_search() && is_page()){ 
	$page_post_meta_sidebar = get_post_meta( $post->ID, 'open_shop_disable_page_sidebar', true );
		if ($page_post_meta_sidebar=='on'){
			$classes = 'no-sidebar';
		}
}elseif(is_single()){
	    $page_post_meta_sidebar = get_post_meta( $post->ID, 'open_shop_disable_page_sidebar', true );
		if ($page_post_meta_sidebar=='on'){
			$classes = 'no-sidebar';
		}
}elseif(open_shop_is_blog()){
	    $blog_page_id = get_option( 'page_for_posts' );
        $page_post_meta_sidebar = get_post_meta( $blog_page_id, 'open_shop_disable_page_sidebar', true );
		if ($page_post_meta_sidebar=='on'){
			$classes = 'no-sidebar';
		}
}elseif(class_exists( 'WooCommerce' ) && is_shop()){
	    $shop_page_id = get_option( 'woocommerce_shop_page_id' );
        $page_post_meta_sidebar = get_post_meta( $shop_page_id, 'open_shop_disable_page_sidebar', true );
		if ($page_post_meta_sidebar=='on'){
			$classes = 'no-sidebar';
		}
}elseif(class_exists( 'WooCommerce' ) && is_product()){
	    $page_post_meta_sidebar = get_post_meta( $post->ID, 'open_shop_disable_page_sidebar', true );
		if ($page_post_meta_sidebar=='on'){
			$classes = 'no-sidebar';
		}
}
?>
<?php do_action('open_shop_site_preloader'); ?>
<div id="page" class="openshop-site  <?php echo esc_attr($classes);?>">
	<header>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'open-shop' ); ?></a>
		<?php do_action( 'open_shop_sticky_header' ); ?> 
        <!-- sticky header -->
		<?php if(get_theme_mod('open_shop_above_mobile_disable')==true){
		if (wp_is_mobile()!== true):
             do_action( 'open_shop_top_header' );  
            endif;
		}elseif(get_theme_mod('open_shop_above_mobile_disable',false)==false){
			 do_action( 'open_shop_top_header' );  
		} ?> 
		<!-- end top-header -->
        <?php do_action( 'open_shop_main_header' ); ?> 
		<!-- end main-header -->
		<?php if ( class_exists( 'WooCommerce' ) ){ do_action( 'open_shop_below_header' );} ?> 
		<!-- end below-header -->
	</header> <!-- end header -->
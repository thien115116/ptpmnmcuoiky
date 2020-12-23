<?php
/**
 * The WooCommerce template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#woocommerce
 * @package ThemeHunk
 * @subpackage Open Shop
 * @since 1.0.0
 */
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
get_header();?>
<div id="content" class="page-content">
        	<div class="content-wrap" >
        		<div class="container">
        			<div class="main-area">
        				<div id="primary" class="primary-content-area">
        					<div class="primary-content-wrap">
                                <div class="page-head">
                   <?php open_shop_get_page_title();?>
                   <?php open_shop_breadcrumb_trail();?>
                    </div>
                            <?php woocommerce_content();?>	
                           </div> <!-- end primary-content-wrap-->
        				</div> <!-- end primary primary-content-area-->
        				<?php 
                if(class_exists( 'WooCommerce' ) && is_shop()){
                 $shoppage_id = get_option( 'woocommerce_shop_page_id' );
                       if(get_post_meta($shoppage_id, 'open_shop_disable_page_sidebar', true )!=='on'){
                         get_sidebar();
                        }
                }elseif(get_post_meta( get_the_ID(), 'open_shop_disable_page_sidebar', true )!=='on'){
                         get_sidebar();
                    }
                 ?><!-- end sidebar-primary  sidebar-content-area-->
        			</div> <!-- end main-area -->
        		</div>
        	</div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
<?php get_footer();?>

<?php 
/**
 * Template Name: Homepage Template
 * @package ThemeHunk
 * @subpackage Open Shop
 * @since 1.0.0
 */
get_header();?>
   <div id="content">
        	<div class="content-wrap" >
        		<div class="container">
        			<div class="main-area">
        				<div id="primary" class="primary-content-area">
        					<div class="primary-content-wrap">
               <?php
                if( shortcode_exists( 'open-shop' ) ){
                do_shortcode("[open-shop section='open_shop_show_frontpage']");
                }
                ?>
        					</div>  <!-- end primary-content-wrap-->
        				</div>  <!-- end primary primary-content-area-->
        				<?php get_sidebar(); ?><!-- end sidebar-primary  sidebar-content-area-->
        			</div> <!-- end main-area -->
        		</div>
        	</div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
<?php get_footer();
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * @package ThemeHunk
 * @subpackage Open Shop
 * @since 1.0.0
 */ 
?>
<footer>
         <?php 
          // top-footer 
          do_action( 'open_shop_top_footer' ); 
          // widget-footer
		      do_action( 'open_shop_widget_footer' );
		      // below-footer
          do_action( 'open_shop_below_footer' );  
        ?>
     </footer> <!-- end footer -->
    </div> <!-- end openshop-site -->
<?php wp_footer(); ?>
</body>
</html>
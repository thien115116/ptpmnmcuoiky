<?php
/**
 * Perform all main WooCommerce configurations for this theme
 *
 * @package OPEN SHOP WordPress theme
 */
// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ){
	return;
}
if ( ! function_exists( 'is_plugin_active' ) ){
         require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
/**
 * OPEN SHOP WooCommerce Compatibility
 */
if ( ! class_exists( 'Open_Shop_Woocommerce_Ext' ) ) :
	/**
	 * Open_Shop_Woocommerce_Ext Compatibility
	 *
	 * @since 1.0.0
	 */
	class Open_Shop_Woocommerce_Ext{

        /**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
        /**
		 * Constructor
		 */
		public function __construct(){
		    add_action( 'wp_enqueue_scripts',array( $this, 'open_shop_add_scripts' ));	
		    add_action( 'wp_enqueue_scripts',array( $this, 'open_shop_add_style' ));	

		    add_filter( 'post_class', array( $this, 'open_shop_post_class' ) );
		   
		    add_action( 'after_setup_theme', array( $this, 'open_shop_common_actions' ), 999 );
		    add_filter( 'open_theme_js_localize', array( $this, 'open_shop_js_localize' ) );
		    
		    // Register Store Sidebars.
			add_action( 'widgets_init', array( $this, 'open_shop_store_widgets_init' ), 15 );
			add_action( 'after_setup_theme', array( $this, 'open_shop_setup_theme' ) );
			// Replace Store Sidebars.
			add_filter( 'open_shop_get_sidebar', array( $this, 'open_shop_replace_store_sidebar' ) );
		    // quick view ajax.
			add_action( 'wp_ajax_thnk_load_product_quick_view', array( $this, 'open_shop_load_product_quick_view_ajax' ) );
			add_action( 'wp_ajax_nopriv_thnk_load_product_quick_view', array( $this, 'open_shop_load_product_quick_view_ajax' ) );
			add_action('open_shop_woo_quick_view_product_summary', array( $this, 'open_shop_woo_single_product_content_structure' ), 10, 1 );
			//shop
			 add_action('woocommerce_before_shop_loop', array($this, 'open_shop_before_shop_loop'), 35);
			 add_action('woocommerce_after_shop_loop_item', array($this, 'open_shop_list_after_shop_loop_item'),5);
			
			// Custom Template Quick View.
			$this->open_shop_pro_quick_view_content_actions();
			
		    add_action( 'wp', array( $this, 'open_shop_single_product_customization' ) );
           
            // Alter cross-sells display
			remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
			if ( '0' != get_theme_mod( 'open_shop_cross_num_col_shw', '2' ) ) {
				add_action( 'woocommerce_cart_collaterals', array( $this, 'open_shop_cross_sell_display' ) );
			}


		 }
		 // woocommerce sidebar
		/**
		 * Store widgets init.
		 */
		function open_shop_store_widgets_init(){
			register_sidebar(array(
		              'name'          => esc_html__( 'WooCommerce Sidebar', 'open-shop' ),
		              'id'            => 'open-woo-shop-sidebar',
		              'description'   => esc_html__( 'Add widgets here to appear in your WooCommerce Sidebar.', 'open-shop' ),
		              'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="open-shop-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	        ) );
			register_sidebar(array(
		              'name'          => esc_html__( 'Product Sidebar', 'open-shop' ),
		              'id'            => 'open-woo-product-sidebar',
		              'description'   => esc_html__( 'This sidebar will be used on Single Product page.', 'open-shop' ),
		              'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="open-shop-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	        ) );
	        
		}
		/**
		 * Assign shop sidebar for store page.
		 *
		 * @param String $sidebar Sidebar.
		 *
		 * @return String $sidebar Sidebar.
		 */
		function open_shop_replace_store_sidebar( $sidebar ){

			if ( is_shop() || is_product_taxonomy() || is_checkout() || is_cart() || is_account_page() ){
				$sidebar = 'open-woo-shop-sidebar';
			}elseif ( is_product() ){
				$sidebar = 'open-woo-product-sidebar';
			}
			return $sidebar;
		}
       /**
		 * Setup theme
		 *
		 * @since 1.0.3
		 */
		function open_shop_setup_theme(){
			// WooCommerce.
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
		}
		
		/**
		 * Post Class
		 *
		 * @param array $classes Default argument array.
		 *
		 * @return array;
		 */
		function open_shop_post_class( $classes ){
			if (!open_shop_is_blog()|| is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
                $classes[] = 'thunk-woo-product-list';
				$qv_enable = get_theme_mod( 'open_shop_woo_quickview_enable',true);
				if ( true == $qv_enable ){
					$classes[] = 'opn-qv-enable';

				}
			}
			if (is_shop() || is_product_taxonomy() ||  post_type_exists( 'product' )){
				$hover_style = get_theme_mod( 'open_shop_woo_product_animation' );
				if ( '' !== $hover_style ) {
					$classes[] = 'open-woo-hover-' . esc_attr($hover_style);
				}
				
			}
			if (is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
			$single_product_tab_style = get_theme_mod( 'open_shop_single_product_tab_layout','horizontal' );
				if ( '' !== $single_product_tab_style ){
					$classes[] = 'open-single-product-tab-'.esc_attr($single_product_tab_style);
				}
			}
			if (is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
			$shadow_style = get_theme_mod( 'open_shop_product_box_shadow' );
				if ( '' !== $shadow_style ){
					$classes[] = 'open-shadow-' . esc_attr($shadow_style);
				}	
			}
			if (is_shop() || is_product_taxonomy() || post_type_exists( 'product' )){
			$shadow_hvr_style = get_theme_mod( 'open_shop_product_box_shadow_on_hover' );
				if ( '' !== $shadow_hvr_style ){
					$classes[] = 'open-shadow-hover-' . esc_attr($shadow_hvr_style);
				}	
			}
			if ( 'swap' === $hover_style ){
            global $product;
			$attachment_ids = $product->get_gallery_image_ids();
			if(count($attachment_ids) > '0'){
                $classes[] ='open-shop-swap-item-hover';
			  }
			

		    }
			return $classes;
		}
		/**
		 * Infinite Products Show on scroll
		 *
		 * @since 1.1.0
		 * @param array $localize   JS localize variables.
		 * @return array
		 */
		function open_shop_js_localize( $localize ){
			global $wp_query;
			
			$localize['ajax_url']                   = admin_url( 'admin-ajax.php' );
			$localize['is_cart']                    = is_cart();
			$localize['is_single_product']          = is_product();
			$localize['query_vars']                 = json_encode( $wp_query->query );
			$localize['shop_quick_view_enable']     = get_theme_mod('open_shop_woo_quickview_enable','true' );
			$localize['shop_infinite_nonce']        = wp_create_nonce( 'opn-shop-load-more-nonce' );
			$localize['shop_infinite_count']        = 2;
			$localize['shop_infinite_total']        = $wp_query->max_num_pages;
			
			$localize['query_vars']                 = json_encode( $wp_query->query );
			$localize['shop_no_more_post_message']  = apply_filters( 'open_shop_no_more_product_text', __( 'No more products to show.', 'open-shop' ) );
			return $localize;
			
		}
       /**
		 * Common Actions.
		 *
		 * @since 1.1.0
		 * @return void
		 */
		function open_shop_common_actions(){
		
			// Quick View.
			$this->open_shop_shop_init_quick_view();

		}
		/**
		 * Init Quick View
		 */
		function open_shop_shop_init_quick_view(){
			$qv_enable = get_theme_mod( 'open_shop_woo_quickview_enable','true' );
			if ( true == $qv_enable ){
				add_filter( 'open_theme_js_localize', array( $this, 'open_shop_qv_js_localize' ) );
				add_action( 'quickview', array( $this,'open_shop_add_quick_view_on_img' ),15);
				// load modal template.
				add_action( 'wp_footer', array( $this,'open_shop_quick_view_html' ) );
			}
		}
		/**
		 * Add Scripts
		 */
		function open_shop_add_scripts(){
		   wp_enqueue_script( 'open-shop-woocommerce-js', OPEN_SHOP_THEME_URI .'/inc/woocommerce/js/woocommerce.js', array( 'jquery' ), '1.0.0', true );
           $localize = array(
				'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
				
			);
           wp_localize_script( 'open-shop-woocommerce-js', 'openshop',  $localize );	
           wp_enqueue_script('open-quick-view', OPEN_SHOP_THEME_URI.'inc/woocommerce/quick-view/js/quick-view.js', array( 'jquery' ), '', true );
           wp_localize_script('open-quick-view', 'openshopqv', array('ajaxurl' => admin_url( 'admin-ajax.php' )));
           
		   }
		/**
		 * Add Style
		 */
		function open_shop_add_style(){
        wp_enqueue_style( 'open-quick-view', OPEN_SHOP_THEME_URI. 'inc/woocommerce/quick-view/css/quick-view.css', null, '');
		}
        /**
		 * Quick view localize.
		 *
		 * @since 1.0
		 * @param array $localize   JS localize variables.
		 * @return array
		 */
		function open_shop_qv_js_localize( $localize ){
			global $wp_query;
			$loader = '';
			if ( ! isset( $localize['ajax_url'] ) ){
				$localize['ajax_url'] = admin_url( 'admin-ajax.php', 'relative' );
			}
			$localize['qv_loader'] = $loader;
			return $localize;
		}
		/****************/
        // add to compare
        /****************/
        function open_shop_add_to_compare($pid=''){
        if( is_plugin_active('yith-woocommerce-compare/init.php') ){
          return '<div class="thunk-compare"><span class="compare-list"><div class="woocommerce product compare-button"><a href="'.esc_url(home_url()).'?action=yith-woocompare-add-product&id='.$pid.'" class="compare button" data-product_id="'.$pid.'" rel="nofollow">Compare</a></div></span></div>';

           }
        }
		/**
		 * Quick view on image
		 */
		function open_shop_add_quick_view_on_img(){
			global $product;
            $button='';
			$product_id = $product->get_id();

			// Get label.
			$label = __( 'Quick View', 'open-shop' );

			$button.='<div class="thunk-quik">
			             <div class="thunk-quickview">
                               <span class="quik-view">
                                   <a href="#" class="opn-quick-view-text" data-product_id="' . esc_attr($product_id) . '">
                                      <span>'.esc_html($label).'</span>
                                    
                                   </a>
                            </span>
                          </div>';
            $button.= '</div>';
			$button = apply_filters( 'open_woo_add_quick_view_text_html', $button, $label, $product );
			echo $button;
		}
		/**
		 * Quick view html
		 */
		function open_shop_quick_view_html(){
			$this->open_shop_pro_quick_view_dependent_data();
			require_once OPEN_SHOP_THEME_DIR . 'inc/woocommerce/quick-view/quick-view-modal.php';
		}
		/**
		 * Quick view dependent data
		 */
		function open_shop_pro_quick_view_dependent_data(){
			wp_enqueue_script( 'wc-add-to-cart-variation' );
			wp_enqueue_script( 'flexslider' );
		}
        /**
		 * Quick view ajax
		 */
		function open_shop_load_product_quick_view_ajax(){
			if ( ! isset( $_REQUEST['product_id'] ) ){
				die();
			}
			$product_id = intval( $_REQUEST['product_id'] );
			// set the main wp query for the product.
			wp( 'p=' . $product_id . '&post_type=product' );
			// remove product thumbnails gallery.
			remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
			ob_start();
			// load content template.
			require_once OPEN_SHOP_THEME_DIR . 'inc/woocommerce/quick-view/quick-view-product.php';
			echo ob_get_clean();
			die();
		}
		/**
		 * Quick view actions
		 */
		public function open_shop_pro_quick_view_content_actions(){
			// Image.
			add_action('open_shop_woo_qv_product_image', 'woocommerce_show_product_sale_flash', 10 );
			add_action('open_shop_woo_qv_product_image', array( $this, 'open_shop_qv_product_images_markup' ), 20 );
		} 
			
		/**
		 * Footer markup.
		 */
		function open_shop_qv_product_images_markup(){
           require_once OPEN_SHOP_THEME_DIR . 'inc/woocommerce/quick-view/quick-view-product-image.php';
		}
        function open_shop_woo_single_product_content_structure(){
							/**
							 * Add Product Title on single product page for all products.
							 */
							do_action( 'open_shop_woo_single_title_before' );
							woocommerce_template_single_title();
							do_action( 'open_shop_woo_single_title_after' );
							/**
							 * Add Product Price on single product page for all products.
							 */
							do_action( 'open_shop_woo_single_price_before' );
							woocommerce_template_single_price();
							do_action( 'open_shop_woo_single_price_after' );
							/**
							 * Add rating on single product page for all products.
							 */
							do_action( 'open_shop_woo_single_rating_before' );
							woocommerce_template_single_rating();
							do_action( 'open_shop_woo_single_rating_after' );
							
							do_action( 'open_shop_woo_single_short_description_before' );
							woocommerce_template_single_excerpt();
							do_action( 'open_shop_woo_single_short_description_after' );
							
							do_action( 'open_shop_woo_single_add_to_cart_before' );
							woocommerce_template_single_add_to_cart();
							do_action( 'open_shop_woo_single_add_to_cart_after' );
							
							do_action( 'open_shop_woo_single_category_before' );
							woocommerce_template_single_meta();
							do_action( 'open_shop_woo_single_category_after' );
			
		}
        /**
		 * Single Product customization.
		 *
		 * @return void
		 */
		function open_shop_single_product_customization(){
			if ( ! is_product() ){
				return;
			}
            remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
            add_filter('woocommerce_product_description_heading', '__return_empty_string');
            add_filter('woocommerce_product_reviews_heading', '__return_empty_string');
            add_filter('woocommerce_product_additional_information_heading', '__return_empty_string');
            add_action( 'woocommerce_after_single_product_summary','woocommerce_template_single_meta',15 );
			
			/* Display Related Products */
			if ( ! get_theme_mod( 'open_shop_related_product_display',true ) ) {
				remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
			}
			/* Display upsell Products */
			if ( ! get_theme_mod( 'open_shop_upsell_product_display',true ) ) {
				remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 20 );
			}

			if(get_theme_mod( 'open_shop_upsell_product_display',true )==true){
			  add_action( 'woocommerce_after_single_product_summary',array( $this, 'open_shop_woocommerce_output_upsells' ),15);
             }else{
             remove_action( 'woocommerce_after_single_product_summary',array( $this, 'open_shop_woocommerce_output_upsells' ));	
             }
             add_filter( 'woocommerce_output_related_products_args', array( $this, 'open_shop_related_no_col_product_show' ) );

		}
	    /*****************/
		// upsale product
       /*****************/
		function open_shop_woocommerce_output_upsells(){
		$upsell_columns = get_theme_mod('open_shop_upsale_num_col_shw','4');
		$upsell_no_product = get_theme_mod( 'open_shop_upsale_num_product_shw','4');	
        woocommerce_upsell_display($upsell_no_product,$upsell_columns); // Display max 3 products, 3 per row
         }
        /*****************************/ 
        // realted product argument pass
        /*****************************/ 
        function open_shop_related_no_col_product_show( $args){
		$rel_columns = get_theme_mod('open_shop_related_num_col_shw','4');
		$rel_no_product = get_theme_mod( 'open_shop_related_num_product_shw','4');
		$args['posts_per_page'] = $rel_no_product; // related products
	    $args['columns'] = $rel_columns; // arranged in columns
	    return $args;
		}   
		
        /**
		 * Shop page view list and grid view.
		 */
        function open_shop_before_shop_loop(){
        $viewshow = get_theme_mod('open_shop_prd_view','grid-view');
        
        echo '<div class="thunk-list-grid-switcher">';
        if($viewshow == 'grid-view'){
             echo '<a title="' . esc_attr__('Grid View', 'open-shop') . '" href="#" data-type="grid" class="thunk-grid-view selected"><i class="fa fa-th"></i></a>';

             echo '<a title="' . esc_attr__('List View', 'open-shop') . '" href="#" data-type="list" class="thunk-list-view"><i class="fa fa-bars"></i></a>';
        }else{
        	  echo '<a title="' . esc_attr__('Grid View', 'open-shop') . '" href="#" data-type="grid" class="thunk-grid-view"><i class="fa fa-th"></i></a>';

             echo '<a title="' . esc_attr__('List View', 'open-shop') . '" href="#" data-type="list" class="thunk-list-view selected"><i class="fa fa-bars"></i></a>';
        }

        echo '</div>';
        }
        // shop page content
        function open_shop_list_after_shop_loop_item(){
        ?>
           <div class="os-product-excerpt"><?php the_excerpt(); ?></div>
        <?php   
        }

		/**
		 * Change products per row for crossells.
		 */
		 function open_shop_cross_sell_display(){
			// Get count
			$count = get_theme_mod( 'open_shop_cross_num_product_shw', '4' );
			$count = $count ? $count : '4';
			// Get columns
			$columns = get_theme_mod( 'open_shop_cross_num_col_shw', '2' );
			$columns = $columns ? $columns : '2';
			// Alter cross-sell display
			woocommerce_cross_sell_display( $count, $columns );
		} 

        
        /**
		 * Shop page template.
		 *
		 * @since 1.0.0
		 * @return void if not a shop page.
		 */
		function open_shop_page_styles(){
			$open_shop_is_ajax_pagination = $this->open_shop_is_ajax_pagination();
			if ( ! ( is_shop() || is_product_taxonomy() ) && ! $open_shop_is_ajax_pagination ) {
				return;
			}
		}

		/**
		 * Check if ajax pagination is calling.
		 *
		 * @return boolean classes
		 */
		function open_shop_is_ajax_pagination(){
			$pagination = false;
			if ( isset( $_POST['open_infinite'] ) && wp_doing_ajax() && check_ajax_referer( 'opn-shop-load-more-nonce', 'nonce', false ) ){
				$pagination = true;
			}
			return $pagination;
		}


	}
endif;
Open_Shop_Woocommerce_Ext::get_instance();

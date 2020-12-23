<?php 
/**
 * Header Function for open shop theme.
 * 
 * @package     Open Shop
 * @author      ThemeHunk
 * @since       Open Shop 1.0.0
 */
/**************************************/
//Top Header function
/**************************************/
if ( ! function_exists( 'open_shop_top_header_markup' ) ){	
function open_shop_top_header_markup(){ 
$open_shop_above_header_layout     = get_theme_mod( 'open_shop_above_header_layout','abv-none');
$open_shop_above_header_col1_set   = get_theme_mod( 'open_shop_above_header_col1_set','text');
$open_shop_above_header_col2_set   = get_theme_mod( 'open_shop_above_header_col2_set','text');
$open_shop_above_header_col3_set   = get_theme_mod( 'open_shop_above_header_col3_set','text');
$open_shop_menu_open = get_theme_mod('open_shop_mobile_menu_open','left');
if($open_shop_above_header_layout!=='abv-none'):?> 
<div class="top-header">
      <div class="container">
      	<?php if($open_shop_above_header_layout=='abv-three'){?>
        <div class="top-header-bar thnk-col-3">
          <div class="top-header-col1"> 
          	<?php open_shop_top_header_conetnt_col1($open_shop_above_header_col1_set,$open_shop_menu_open); ?>
          </div>
          <div class="top-header-col2">
          	<?php open_shop_top_header_conetnt_col2($open_shop_above_header_col2_set,$open_shop_menu_open); ?>
          </div>
          <div class="top-header-col3">
          	<?php open_shop_top_header_conetnt_col2($open_shop_above_header_col3_set,$open_shop_menu_open); ?>
          </div>
        </div> 
    <?php } ?>
    <?php if($open_shop_above_header_layout=='abv-two'){?>
        <div class="top-header-bar thnk-col-2">
          <div class="top-header-col1"> 
          	<?php open_shop_top_header_conetnt_col1($open_shop_above_header_col1_set,$open_shop_menu_open); ?>
          </div>
          <div class="top-header-col2">
          	<?php open_shop_top_header_conetnt_col2($open_shop_above_header_col2_set,$open_shop_menu_open); ?>
          </div>
        </div> 
    <?php } ?>
    <?php if($open_shop_above_header_layout=='abv-one'){
    	?>
        <div class="top-header-bar thnk-col-1">
          <div class="top-header-col1"> 
          	<?php open_shop_top_header_conetnt_col1($open_shop_above_header_col1_set,$open_shop_menu_open); ?>
          </div>
        </div> 
    <?php } ?>
      <!-- end top-header-bar -->
   </div>
</div>
<?php endif;
   }
}
add_action( 'open_shop_top_header', 'open_shop_top_header_markup' );

//************************************/
// top header col1 function
//************************************/
if ( ! function_exists( 'open_shop_top_header_conetnt_col1' ) ){ 
function open_shop_top_header_conetnt_col1($content,$mobileopen){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('open_shop_col1_texthtml',  __( 'Add your content here', 'open-shop' )));?>
</div>
<?php }elseif($content=='menu'){
if ( has_nav_menu('open-shop-above-menu' ) ){?>
<!-- Menu Toggle btn-->
     <nav> 
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn-abv">
              <div class="btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </div>
            </button>
        </div>
        <div class="sider above open-shop-menu-hide  <?php echo esc_attr($mobileopen);?>">
        <div class="sider-inner">
        <?php open_shop_abv_nav_menu();?>
        </div>
      </div>
    </nav>
<?php 
  }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign Above header menu', 'open-shop' );?></a>
 <?php }
}elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('top-header-widget-col1' ) ){
    dynamic_sidebar('top-header-widget-col1' );
     }else{?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return true;
}?>
<?php }
}
//************************************/
// top header col2 function
//************************************/
if ( ! function_exists( 'open_shop_top_header_conetnt_col2' ) ){ 
function open_shop_top_header_conetnt_col2($content,$mobileopen){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('open_shop_col2_texthtml',  __( 'Add your content here', 'open-shop' )));?>
</div>
<?php }elseif($content=='menu'){
  if ( has_nav_menu('open-shop-above-menu' ) ){?>
<!-- Menu Toggle btn-->
        <nav> 
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn-abv">
                <div class="btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </div>
            </button>
        </div>
        <div class="sider above open-shop-menu-hide <?php echo esc_attr($mobileopen);?>">
        <div class="sider-inner">
        <?php open_shop_abv_nav_menu();?>
        </div>
      </div>
    </nav>
<?php 
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign Above header menu', 'open-shop' );?></a>
 <?php }
}
elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('top-header-widget-col2' ) ){
    dynamic_sidebar('top-header-widget-col2' );
     }else{?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return true;
}?>
<?php }
}
//************************************/
// top header col3 function
//************************************/
if ( ! function_exists( 'open_shop_top_header_conetnt_col3' ) ){ 
function open_shop_top_header_conetnt_col3($content,$mobileopen){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('open_shop_col3_texthtml',  __( 'Add your content here', 'open-shop' )));?>
</div>
<?php }elseif($content=='menu'){
  if ( has_nav_menu('open-shop-above-menu' ) ){?>
<!-- Menu Toggle btn-->
        <nav> 
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn-abv">
                <div class="btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </div>
            </button>
        </div>
        <div class="sider above open-shop-menu-hide <?php echo esc_attr($mobileopen);?>">
        <div class="sider-inner">
        <?php open_shop_abv_nav_menu();?>
        </div>
      </div>
    </nav>
<?php 
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign Above header menu', 'open-shop' );?></a>
 <?php }
}
elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('top-header-widget-col2' ) ){
    dynamic_sidebar('top-header-widget-col2' );
     }else{?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return true;
}?>
<?php }
}
/**************************************/
//Below Header function
/**************************************/
if ( ! function_exists( 'open_shop_below_header_markup' ) ){	
function open_shop_below_header_markup(){ 
$open_shop_menu_alignment = get_theme_mod('open_shop_menu_alignment','center');
$open_shop_menu_open = get_theme_mod('open_shop_mobile_menu_open','left');
?> 
<div class="below-header  mhdrdefault  <?php echo esc_attr($open_shop_menu_alignment);?>">
			<div class="container">
				<div class="below-header-bar thnk-col-3">
					<div class="below-header-col1">
						<div class="menu-category-list">
						  <div class="toggle-cat-wrap">
						  	  <p class="cat-toggle">
                    <span class="cat-icon"> 
                      <span class="cat-top"></span>
                       <span class="cat-top"></span>
                       <span class="cat-bot"></span>
                     </span>
						  	  	<span class="toggle-title"><?php _e('Category','open-shop');?></span>
						  	  	<span class="toggle-icon"></span>
						  	  </p>
						  </div>
						  <?php open_shop_product_list_categories(); ?>
					   </div><!-- menu-category-list -->
				   </div>
           <div class="below-header-col2">
             <?php  
              if ( class_exists( 'WooCommerce' ) ){
                  open_shop_product_search_box();
               }
            ?>
         </div>
           <div class="below-header-col3">
            <div class="thunk-icon">
             <?php open_shop_header_icon(); ?>  
                <?php if(class_exists( 'WooCommerce' )){ 
                        if(get_theme_mod('open_shop_cart_mobile_disable')==true){

                        if (wp_is_mobile()!== true):
                          
                      ?>
                      <div class="cart-icon" > 
                         <?php 
                         do_action( 'open_cart_count' );
                         do_action( 'open_shop_woo_cart' ); 
                         ?>
                       </div>
                      <?php  endif; }
                      elseif(get_theme_mod('open_shop_cart_mobile_disable')==false){?>
                           <div class="cart-icon" > 
                            <?php 
                               do_action( 'open_cart_count' );
                               do_action( 'open_shop_woo_cart' ); 
                               ?>
                          </div>
                     <?php  } } ?>  
                  </div>      
            </div>
				</div> <!-- end main-header-bar -->
			</div>
		</div> <!-- end below-header -->
<?php	}
}
add_action( 'open_shop_below_header', 'open_shop_below_header_markup' );
/**************************************/
//Main Header function
/**************************************/
if ( ! function_exists( 'open_shop_main_header_markup' ) ){	
function open_shop_main_header_markup(){ 

$main_header_opt = get_theme_mod('open_shop_main_header_option','none');
$open_shop_menu_alignment = get_theme_mod('open_shop_menu_alignment','center');

$open_shop_menu_open = get_theme_mod('open_shop_mobile_menu_open','left');
?>
<div class="main-header mhdrdefault <?php echo esc_attr($main_header_opt);?> <?php echo esc_attr($open_shop_menu_alignment);?>">
			<div class="container">
				<div class="main-header-bar thnk-col-3">
					<div class="main-header-col1">
          <span class="logo-content">
            <?php open_shop_logo();?> 
          </span>
     
        </div>
					<div class="main-header-col2">
      
        <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn">
                <div class="btn">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </div>
            </button>
        </div>
        <div class="sider main  open-shop-menu-hide <?php echo esc_attr($open_shop_menu_open);?>">
        <div class="sider-inner">
          <?php if(has_nav_menu('open-shop-main-menu' )){ 

             if (wp_is_mobile()!== false){
                   if(has_nav_menu('open-shop-above-menu' )){
                                open_shop_abv_nav_menu();
                       }
                  }  
                    open_shop_main_nav_menu();
              }else{
                 wp_page_menu(array( 
                 'items_wrap'  => '<ul class="open-shop-menu" data-menu-style="horizontal">%3$s</ul>',
                 'link_before' => '<span>',
                 'link_after'  => '</span>'));
             }?>
        </div>
        </div>
        </nav>
 
      </div> 
<?php if($main_header_opt!=='none'):?>
					<div class="main-header-col3">
             <?php open_shop_main_header_optn();?>
          </div>
<?php endif; ?>
				</div> <!-- end main-header-bar -->
			</div>
		</div> 
<?php	}
}
add_action( 'open_shop_main_header', 'open_shop_main_header_markup' );

function open_shop_main_header_optn(){
          $open_shop_main_header_option = get_theme_mod('open_shop_main_header_option','none');
          if($open_shop_main_header_option =='button'){?>
          <a href="<?php echo esc_url(get_theme_mod('open_shop_main_hdr_btn_lnk','#')); ?>" class="btn-main-header"><?php echo esc_html(get_theme_mod('open_shop_main_hdr_btn_txt', __('Button Text','open-shop'))); ?></a>
          <?php }
          elseif($open_shop_main_header_option =='callto'){ ?>
          <div class="header-support-wrap">
              <div class="header-support-icon">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="header-support-content">
                <span class="sprt-tel"><b><?php echo esc_html(get_theme_mod('open_shop_main_hdr_calto_txt',__('Call To','open-shop'))); ?></b> <a href="tel:<?php echo esc_attr(get_theme_mod('open_shop_main_hdr_calto_nub',__('+1800090098','open-shop'))); ?>"><?php echo esc_html(get_theme_mod('open_shop_main_hdr_calto_nub',__('+1800090098','open-shop'))); ?></a></span>
                <span class="sprt-eml"><?php _e('Email :','open-shop');?> <a href="mailto:<?php echo esc_attr(get_theme_mod('open_shop_main_hdr_calto_email',__('Info@gmail.com','open-shop'))); ?>"><?php echo esc_html(get_theme_mod('open_shop_main_hdr_calto_email',__('Info@gmail.com','open-shop'))); ?></a></span>
              </div>
          </div>
          <?php }elseif($open_shop_main_header_option =='widget'){?>
               <div class="header-widget-wrap">
                 <?php
                  if ( is_active_sidebar('main-header-widget') ){
                       dynamic_sidebar('main-header-widget');
                   }
                  ?>
               </div>
         <?php  }
}
/**************************************/
//logo & site title function
/**************************************/
if ( ! function_exists( 'open_shop_logo' ) ){
function open_shop_logo(){
$title_disable          = get_theme_mod( 'title_disable','enable');
$tagline_disable        = get_theme_mod( 'tagline_disable','enable');
$description            = get_bloginfo( 'description', 'display' );
open_shop_custom_logo(); 
if($title_disable!='' || $tagline_disable!=''){
if($title_disable!=''){ 
?>
<div class="site-title"><span>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
</span>
</div>
<?php
}
if($tagline_disable!=''){
if( $description || is_customize_preview() ):?>
<div class="site-description">
   <p><?php echo esc_html($description); ?></p>
</div>
<?php endif;
      }
    } 
  }
}
/***************************/
// Product search
/***************************/
function open_shop_product_search_box(){ ?>             
<div id='search-box' class="wow thmkfadeInDown" data-wow-duration="1s">
<form action='<?php echo esc_url( home_url( '/'  ) ); ?>' id='search-form' class="woocommerce-product-search" method='get' target='_top'>
   <input id='search-text' name='s' placeholder='<?php echo esc_attr(get_theme_mod('search_box_text',esc_attr_x( 'Search for Product', 'placeholder', 'open-shop' ))); ?>' class="form-control search-autocomplete" value='<?php echo get_search_query(); ?>' type='text' title='<?php echo esc_attr_x( 'Search for:', 'label', 'open-shop' ); ?>' />
   <div class="vert-brd" ></div>
   <?php 
if ( class_exists( 'WooCommerce' ) ):
$args = array(
   'taxonomy' => 'product_cat',
   'name' => 'product_cat',
   'value_field' => 'slug',
   'class' => 'something',
   'show_option_all'   => __('All Category','open-shop'),
);
wp_dropdown_categories( $args );
endif;
?>
                        <button id='search-button' value="<?php echo esc_attr_x( 'Submit','submit button', 'open-shop' ); ?>" type='submit'>                     
                          <?php echo esc_html__( 'Search', 'open-shop' ); ?>
                        </button>
                        <input type="hidden" name="post_type" value="product" />
                       </form>
 </div>                    
<?php }
/**********************************/
// header icon function
/**********************************/
function open_shop_header_icon(){
$whs_icon = get_theme_mod('open_shop_whislist_mobile_disable',false);
$acc_icon = get_theme_mod('open_shop_account_mobile_disable',false);
?>
<div class="header-icon">
     <?php 
    if( class_exists( 'YITH_WCWL' )){
      if($whs_icon == true){ 
       if (wp_is_mobile()!== true):
        ?>
      <a class="whishlist" href="<?php echo esc_url( open_shop_whishlist_url() ); ?>"><i  class="fa fa-heart-o" aria-hidden="true"></i></a>
      
     <?php endif; }
     elseif($whs_icon == false){?>
        <a class="whishlist" href="<?php echo esc_url( open_shop_whishlist_url() ); ?>"><i  class="fa fa-heart-o" aria-hidden="true"></i></a>
    <?php  } }

     if($acc_icon == true){
       if (wp_is_mobile()!== true):
        open_shop_account();
      endif;
       }elseif($acc_icon == false){
          open_shop_account();
       } ?>
</div>
<?php } 

/**************************/
//PRELOADER
/**************************/
if( ! function_exists( 'open_shop_preloader' ) ){
 function open_shop_preloader(){
 if (( isset( $_REQUEST['action'] ) && 'elementor' == $_REQUEST['action'] ) ||
                isset( $_REQUEST['elementor-preview'] )){
      return;
 }else{    
    $open_shop_preloader_enable = get_theme_mod('open_shop_preloader_enable',false);
    $open_shop_preloader_image_upload = get_theme_mod('open_shop_preloader_image_upload',OPEN_SHOP_PRELOADER);
    if($open_shop_preloader_enable==true){ ?>
    <div class="open_shop_overlayloader">
    <div class="open-shop-pre-loader"><img src="<?php echo esc_url($open_shop_preloader_image_upload);?>"></div>
    </div> 
   <?php }
   }
 }

}
add_action('open_shop_site_preloader','open_shop_preloader');

 /**********************/
 // Sticky Header
 /**********************/
 if( ! function_exists( 'open_shop_sticky_header_markup' )){
 function open_shop_sticky_header_markup(){ 
 $open_shop_menu_open = get_theme_mod('open_shop_mobile_menu_open','left'); ?>
<div class="sticky-header">
   <div class="container">
        <div class="sticky-header-bar thnk-col-3">
           <div class="sticky-header-col1">
               <span class="logo-content">
                  <?php open_shop_logo();?> 
              </span>
           </div>
           <div class="sticky-header-col2">
             <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn-stk">
                <div class="btn">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </div>
            </button>
        </div>
        <div class="sider main  open-shop-menu-hide  <?php echo esc_attr($open_shop_menu_open); ?>">
        <div class="sider-inner">
          <?php if(has_nav_menu('open-shop-sticky-menu' )){ 
             if (wp_is_mobile()!== false){
                    if(has_nav_menu('open-shop-above-menu')){
                      open_shop_abv_nav_menu();
                    }     
                  }  
                open_shop_stick_nav_menu();
              }else{
                 wp_page_menu(array( 
                 'items_wrap'  => '<ul class="open-shop-menu" data-menu-style="horizontal">%3$s</ul>',
                 'link_before' => '<span>',
                 'link_after'  => '</span>'));
             }?>
        </div>
        </div>
        </nav>
           </div>
            <div class="sticky-header-col3">
              <div class="thunk-icon">
        
                <div class="header-icon">
                  <a class="prd-search" href="#"><i class="fa fa-search"></i></a>     
                     <?php 
                    if( class_exists( 'YITH_WCWL' )){
                      ?>
                      <a class="whishlist" href="<?php echo esc_url(open_shop_whishlist_url() ); ?>"><i  class="fa fa-heart-o" aria-hidden="true"></i></a>
                     <?php } 
                        open_shop_account();
                       ?>
                </div>
             <?php if(class_exists( 'WooCommerce' )){ ?>
                      <div class="cart-icon" > 
                         <?php 
                         do_action( 'open_cart_count' );
                         do_action( 'open_shop_woo_cart' ); 
                         ?>
                       </div>
                      <?php  } ?> 
                  </div>
           </div>
        </div>

   </div>
</div>
      <div class="search-wrapper">
                     <div class="container">
                      <div class="search-close"><a class="search-close-btn"></a></div>
                     <?php  if ( class_exists( 'WooCommerce' ) ){
                              open_shop_product_search_box();
                          } ?>
                       </div>
       </div> 
 <?php }
}
if(get_theme_mod('open_shop_sticky_header',false)==true):
add_action('open_shop_sticky_header','open_shop_sticky_header_markup');
endif;
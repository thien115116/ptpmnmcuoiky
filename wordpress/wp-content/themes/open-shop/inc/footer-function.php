<?php 
/**
 * Footer Function for open shop theme.
 * 
 * @package     Open Shop
 * @author      ThemeHunk
 * @since       ThemeHunk 1.0.0
 */
/**************************************/
//Top footer function
/**************************************/
if ( ! function_exists( 'open_shop_top_footer_markup' ) ){  
function open_shop_top_footer_markup(){ ?>  
<?php 
$open_shop_above_footer_layout    = get_theme_mod( 'open_shop_above_footer_layout','ft-abv-none');
$open_shop_above_footer_col1_set  = get_theme_mod( 'open_shop_above_footer_col1_set','text');
$open_shop_above_footer_col2_set  = get_theme_mod( 'open_shop_above_footer_col2_set','text');
$open_shop_above_footer_col3_set  = get_theme_mod( 'open_shop_above_footer_col3_set','text');
?>	
<div class="top-footer">
      <div class="container">
          <?php if($open_shop_above_footer_layout=='ft-abv-one'):?>	
          	 <div class="top-footer-bar thnk-col-1">
		             <div class="top-footer-col1">
		             	<?php open_shop_top_footer_conetnt_col1($open_shop_above_footer_col1_set); ?>
		             </div>
		             </div>
		             <?php elseif($open_shop_above_footer_layout=='ft-abv-two'):?>
		             <div class="top-footer-bar thnk-col-2">
		             <div class="top-footer-col1">
		             	<?php open_shop_top_footer_conetnt_col1($open_shop_above_footer_col1_set); ?>
		             </div>	
		             	<div class="top-footer-col2">
                    <?php open_shop_top_footer_conetnt_col2($open_shop_above_footer_col2_set); ?>
                    </div></div>

		             	<?php elseif($open_shop_above_footer_layout=='ft-abv-three'):?>
		             		<div class="top-footer-bar thnk-col-3">
		             		<div class="top-footer-col1">
		             	<?php open_shop_top_footer_conetnt_col1($open_shop_above_footer_col1_set); ?>
		                </div>	
		             	<div class="top-footer-col2"><?php open_shop_top_footer_conetnt_col2($open_shop_above_footer_col2_set); ?></div>
		             	<div class="top-footer-col3"><?php open_shop_top_footer_conetnt_col3($open_shop_above_footer_col3_set); ?></div>
		             </div>
		         <?php endif;?> 
         <!-- end top-footer-bar -->
      </div>
 </div> 
<?php }
}
add_action( 'open_shop_top_footer', 'open_shop_top_footer_markup' );
/**************************************/
//Widgett footer function
/**************************************/
if ( ! function_exists( 'open_shop_widget_footer_markup' ) ){  
function open_shop_widget_footer_markup(){ 
$open_shop_bottom_footer_widget_layout  = get_theme_mod( 'open_shop_bottom_footer_widget_layout','ft-wgt-none');	
	?>  
        <div class="widget-footer">
			<div class="container">
               	<?php if($open_shop_bottom_footer_widget_layout =='ft-wgt-one'):?>
				<div class="widget-footer-wrap thnk-col-1">
					<div class="widget-footer-col1">
						<?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?>
                      </div>
				</div>
				  <?php elseif($open_shop_bottom_footer_widget_layout =='ft-wgt-two'): ?>
					
                   <div class="widget-footer-wrap thnk-col-2">
					      <div class="widget-footer-col1"><?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					       <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
				   </div>
                  <?php elseif($open_shop_bottom_footer_widget_layout =='ft-wgt-three'): ?>

                  	 <div class="widget-footer-wrap thnk-col-3">
					      <div class="widget-footer-col1">

					      	<?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					       <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					        <div class="widget-footer-col3"><?php if( is_active_sidebar('footer-3' ) ){
                                       dynamic_sidebar('footer-3' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?>
                               </a>
                          <?php }?>


     	                 </div>
				   </div>
				    <?php elseif($open_shop_bottom_footer_widget_layout =='ft-wgt-four'): ?>
				    	 <div class="widget-footer-wrap thnk-col-4">
					      <div class="widget-footer-col1">

					      	<?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					       <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					        <div class="widget-footer-col3"><?php if( is_active_sidebar('footer-3' ) ){
                                       dynamic_sidebar('footer-3' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?>
                               </a>
                          <?php }?>

                          
     	                 </div>
					         <div class="widget-footer-col4"><?php if( is_active_sidebar('footer-4' ) ){
                                       dynamic_sidebar('footer-4' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?>
                               </a>
                          <?php }?>

                          
     	                 </div>
				    </div>

				   <?php elseif($open_shop_bottom_footer_widget_layout =='ft-wgt-five'): ?> 
				   	<div class="widget-footer-wrap thnk-col-3-1-2 ">
					      <div class="widget-footer-col1">

					      	<?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					       <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					        <div class="widget-footer-col3"><?php if( is_active_sidebar('footer-3' ) ){
                                       dynamic_sidebar('footer-3' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?>
                               </a>
                          <?php }?>


     	                 </div>
				          </div>
				      <?php elseif($open_shop_bottom_footer_widget_layout =='ft-wgt-six'): ?> 
				   	<div class="widget-footer-wrap thnk-col-3-2-1-2">
					      <div class="widget-footer-col1">

					      	<?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					       <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					        <div class="widget-footer-col3"><?php if( is_active_sidebar('footer-3' ) ){
                                       dynamic_sidebar('footer-3' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?>
                               </a>
                          <?php }?>


     	                 </div>
				          </div>  
				    <?php elseif($open_shop_bottom_footer_widget_layout =='ft-wgt-seven'): ?> 
				   	<div class="widget-footer-wrap thnk-col-2-1-2">
					    <div class="widget-footer-col1"><?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					       <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
				      </div> 
				      <?php elseif($open_shop_bottom_footer_widget_layout =='ft-wgt-eight'): ?> 
				   	<div class="widget-footer-wrap thnk-col-2-2-1">
					      <div class="widget-footer-col1"><?php if( is_active_sidebar('footer-1' ) ){
                                       dynamic_sidebar('footer-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
					       <div class="widget-footer-col2"><?php if( is_active_sidebar('footer-2' ) ){
                                       dynamic_sidebar('footer-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
                          <?php }?></div>
				      </div>
				   <?php endif;?>
				
			</div>
		</div>  
<?php }
}
add_action( 'open_shop_widget_footer', 'open_shop_widget_footer_markup' );
/**************************************/
//Below footer function
/**************************************/
if ( ! function_exists( 'open_shop_below_footer_markup' ) ){  
function open_shop_below_footer_markup(){ ?>  
<?php 
$open_shop_bottom_footer_layout  = get_theme_mod( 'open_shop_bottom_footer_layout','ft-btm-one');
$open_shop_bottom_footer_col1_set= get_theme_mod( 'open_shop_bottom_footer_col1_set','text');
$open_shop_bottom_footer_col2_set= get_theme_mod( 'open_shop_bottom_footer_col2_set','text');
$open_shop_bottom_footer_col3_set= get_theme_mod( 'open_shop_bottom_footer_col3_set','text');
?>		
<div class="below-footer">
			<div class="container">
				 <?php if($open_shop_bottom_footer_layout=='ft-btm-one'):?>  
				<div class="below-footer-bar thnk-col-1">
					<div class="below-footer-col1"> 
						<?php open_shop_bottom_footer_conetnt_col1($open_shop_bottom_footer_col1_set); ?>
						</div>
                </div>
                 <?php elseif($open_shop_bottom_footer_layout=='ft-btm-two'):?>
                  <div class="below-footer-bar thnk-col-2">
                   	<div class="below-footer-col1"> <?php open_shop_bottom_footer_conetnt_col1($open_shop_bottom_footer_col1_set); ?></div>
					<div class="below-footer-col2"> <?php open_shop_bottom_footer_conetnt_col2($open_shop_bottom_footer_col2_set); ?></div>
				</div>
				<?php elseif($open_shop_bottom_footer_layout=='ft-btm-three'):?>
				<div class="below-footer-bar thnk-col-3">
                   	<div class="below-footer-col1"> <?php open_shop_bottom_footer_conetnt_col1($open_shop_bottom_footer_col1_set); ?></div>
					<div class="below-footer-col2"> <?php open_shop_bottom_footer_conetnt_col2($open_shop_bottom_footer_col2_set); ?></div>
					<div class="below-footer-col3"> <?php open_shop_bottom_footer_conetnt_col3($open_shop_bottom_footer_col3_set); ?></div>
				</div>
			<?php endif; ?>
				
			</div>
		</div>  
<?php }
}
add_action( 'open_shop_below_footer', 'open_shop_below_footer_markup' );
/**********************/
// footer function
/************************/
//************************************/
// Footer top col1 function
//************************************/
if ( ! function_exists( 'open_shop_top_footer_conetnt_col1' ) ){	
function open_shop_top_footer_conetnt_col1($content){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
<?php echo esc_html(get_theme_mod('open_shop_footer_col1_texthtml',  __( 'Add your content here', 'open-shop' )));?>
</div>
<?php }
elseif($content=='menu'){
	if ( has_nav_menu('open-shop-footer-menu' ) ){?>
<?php 
  open_shop_footer_nav_menu();
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'open-shop' );?></a>
 <?php }
}elseif($content=='widget'){?>
	<div class="content-widget">
    <?php if( is_active_sidebar('footer-top-first' ) ){
    dynamic_sidebar('footer-top-first' );
     }else{?>
     	<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
     <?php }?>
 </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}
//************************************/
// Footer top col2 function
//************************************/
if ( ! function_exists( 'open_shop_top_footer_conetnt_col2' ) ){	
function open_shop_top_footer_conetnt_col2($content){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
	<?php echo esc_html(get_theme_mod('open_shop_above_footer_col2_texthtml',  __( 'Add your content here', 'open-shop' )));?>
</div>
<?php }elseif($content=='menu'){
	if ( has_nav_menu('open-shop-footer-menu' ) ){?>
<?php 
  open_shop_footer_nav_menu();
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'open-shop' );?></a>
 <?php }
}elseif($content=='widget'){?>
	<div class="content-widget">
    <?php if( is_active_sidebar('footer-top-second' ) ){
    dynamic_sidebar('footer-top-second' );
     }else{?>
     	<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}
//************************************/
// Footer top col3 function
//************************************/
if ( ! function_exists( 'open_shop_top_footer_conetnt_col3' ) ){	
function open_shop_top_footer_conetnt_col3($content){?>
<?php if($content=='text'){?>
<div class='content-html'>
<?php echo esc_html(get_theme_mod('open_shop_above_footer_col3_texthtml',  __( 'Add your content here', 'open-shop' )));;?>
</div>
<?php }elseif($content=='menu'){
	if ( has_nav_menu('open-shop-footer-menu' ) ){ ?>
<?php 
  open_shop_footer_nav_menu();
 } else { ?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'open-shop' );?></a>
<?php }
}elseif($content=='widget'){?>
	<div class="content-widget">
    <?php if( is_active_sidebar('footer-top-third' ) ){
    dynamic_sidebar('footer-top-third' );
     }else{?>
     	<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}
//************************************/
// Footer bottom col1 function
//************************************/
if ( ! function_exists( 'open_shop_bottom_footer_conetnt_col1' ) ){ 
function open_shop_bottom_footer_conetnt_col1($content){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
<?php if(esc_html(get_theme_mod('open_shop_footer_bottom_col1_texthtml'))!==''){
echo esc_html(get_theme_mod('open_shop_footer_bottom_col1_texthtml'));
}else{?>
<p class="footer-copyright">&copy;
              <?php
              echo date_i18n(
                /* translators: Copyright date format, see https://www.php.net/date */
                _x( 'Y', 'copyright date format', 'open-shop' )
              );
              ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            <span class="powered-by-wordpress">
              <span><?php _e( 'Powered by', 'open-shop' ); ?></span>
              <a href="<?php echo esc_url( __( 'https://themehunk.com/', 'open-shop' ) ); ?>">
                <?php _e( 'Themehunk WordPress Theme', 'open-shop' ); ?>
              </a>
            </span>
            </p><!-- .footer-copyright -->

            
<?php } ?>
</div>
<?php }elseif($content=='menu'){
  if ( has_nav_menu('open-shop-footer-menu' ) ) {?>
<?php 
  open_shop_footer_nav_menu();
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'open-shop' );?></a>
 <?php }
}
elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('footer-below-first' ) ){
    dynamic_sidebar('footer-below-first' );
     } else { ?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
     <?php }?>
     </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}
//************************************/
// Footer bottom col2 function
//************************************/
if ( ! function_exists( 'open_shop_bottom_footer_conetnt_col2' ) ){ 
function open_shop_bottom_footer_conetnt_col2($content){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('open_shop_footer_bottom_col2_texthtml',  __( 'Add your content here', 'open-shop' )));?>
</div>
<?php }elseif($content=='menu'){
  if ( has_nav_menu('open-shop-footer-menu' ) ) {?>
<?php 
  open_shop_footer_nav_menu();
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'open-shop' );?></a>
 <?php }
}
elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('footer-below-second')){
    dynamic_sidebar('footer-below-second');
          }else{ ?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
        <?php } ?>
  </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}
//************************************/
// Footer bottom col3 function
//************************************/
if ( ! function_exists( 'open_shop_bottom_footer_conetnt_col3' ) ){ 
function open_shop_bottom_footer_conetnt_col3($content){ ?>
<?php if($content=='text'){?>
<div class='content-html'>
  <?php echo esc_html(get_theme_mod('open_shop_bottom_footer_col3_texthtml',  __( 'Add your content here', 'open-shop' )));?>
</div>
<?php }elseif($content=='menu'){
  if ( has_nav_menu('open-shop-footer-menu' ) ) {?>
<?php 
  open_shop_footer_nav_menu();
 }else{?>
<a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Assign footer menu', 'open-shop' );?></a>
 <?php }
}
elseif($content=='widget'){?>
  <div class="content-widget">
    <?php if( is_active_sidebar('footer-below-third')){
    dynamic_sidebar('footer-below-third');
          }else{ ?>
      <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'open-shop' );?></a>
        <?php } ?>
  </div>
<?php }elseif($content=='social'){?>
<div class="content-social">
<?php echo open_shop_social_links();?>
</div>
<?php }elseif($content=='none'){
return false;
}?>
<?php }
}
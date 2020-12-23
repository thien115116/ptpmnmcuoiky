<?php 
/**
 * Custom Style for Open Shop Theme.
 * @package     Open Shop
 * @author      ThemeHunk
 * @since       Open Shop 1.0.0
 */
function open_shop_custom_style(){
$open_shop_style=""; 
$open_shop_style.= open_shop_responsive_slider_funct( 'open_shop_logo_width', 'open_shop_logo_width_responsive');
/**************************/
// Above Header
/**************************/
    $open_shop_above_brdr_clr = esc_html(get_theme_mod('open_shop_above_brdr_clr','#fff'));  
    $open_shop_style.=".top-header{border-bottom-color:{$open_shop_above_brdr_clr}}";
    $open_shop_style.= open_shop_responsive_slider_funct( 'open_shop_abv_hdr_hgt', 'open_shop_top_header_height_responsive');
    $open_shop_style.= open_shop_responsive_slider_funct( 'open_shop_abv_hdr_botm_brd', 'open_shop_abv_hdr_botm_brd_responsive');
    $open_shop_abv_header_background_image = esc_html(get_theme_mod('header_image',''));

if($open_shop_abv_header_background_image!==''){ 
$open_shop_style.= ".top-header{background-image:url($open_shop_abv_header_background_image);
 } 
 .top-header:before {
   background:transparent;
}";
}

/**********************/
//Scheme Color
/**********************/
$open_shop_color_scheme = esc_html(get_theme_mod('open_shop_color_scheme','opn-light'));
$custombackground = esc_html(get_theme_mod('custom-background','#2f2f2f'));
if($open_shop_color_scheme=='opn-dark'){
 $open_shop_style.="body.open-shop-dark{
    background:{$custombackground};
    color:#888;
}
body.open-shop-dark a{
color:#999;
}
body.open-shop-dark .top-header-bar ,body.open-shop-dark .top-header{
    border-bottom-color: #111;
}
body.open-shop-dark .below-footer{
border-top-color: #111;
}
body.open-shop-dark .top-header:before,body.open-shop-dark .top-footer:before, body.open-shop-dark .below-footer:before{
background:#111;
}
body.open-shop-dark input[type='text'], body.open-shop-dark input[type='email'], body.open-shop-dark input[type='url'], body.open-shop-dark textarea, body.open-shop-dark input[type='password'], body.open-shop-dark input[type='tel'], body.open-shop-dark input[type='search'],body.open-shop-dark .woocommerce form .form-row input.input-text,body.open-shop-dark .select2-container--default .select2-selection--single,body.open-shop-dark .woocommerce-input-wrapper textarea.input-text,body.open-shop-dark .woocommerce-checkout #payment ul.payment_methods li,body.open-shop-dark #add_payment_method #payment div.form-row, body.open-shop-dark .woocommerce-cart #payment div.form-row, body.open-shop-dark .woocommerce-checkout #payment div.form-row, body.open-shop-dark .woocommerce-checkout-review-order-table tfoot th,body.open-shop-dark .woocommerce table.shop_table thead th, body.open-shop-dark .cart-subtotal, .order-total,body.open-shop-dark .woocommerce .woocommerce-cart-form__cart-item .quantity .qty{
background:#111;
  color:#999;
  border-color:#111!important;
}
body.open-shop-dark .woocommerce table.shop_table .cart-subtotal td,body.open-shop-dark .woocommerce table.shop_table .order-total td{
      background: #1F1F1F;
      color:#999;
}
body.open-shop-dark .cart_totals .shop_table,body.open-shop-dark .cart-subtotal,body.open-shop-dark .order-total{background: #1F1F1F;}
body.open-shop-dark .woocommerce table.shop_table td,body.open-shop-dark.woocommerce-cart .cart-collaterals .cart_totals tr th{
border-color:#111!important;
}
body.open-shop-dark #searchform [type='submit'] {
    border: 1px solid #ff0052;
    background:#ff0052;
  }
body.open-shop-dark .top-header-bar, body.open-shop-dark .top-header-bar a,body.open-shop-dark .top-footer, body.open-shop-dark .below-footer,body.open-shop-dark .top-footer a, body.open-shop-dark .below-footer a,body.open-shop-dark .widget-footer,body.open-shop-dark .widget-footer a{
    color: #999;
}
body.open-shop-dark .main-header:before,body.open-shop-dark .below-header:before,body.open-shop-dark #sidebar-primary .open-shop-widget-content,body.open-shop-dark .openshop-site section .content-wrap:before ,body.open-shop-dark .widget-footer:before{
background-color: #1F1F1F;
border-color:#1F1F1F;
}
body.open-shop-dark .top-footer {
    border-bottom-color: #1F1F1F;
}
body.open-shop-dark .main-header,body.open-shop-dark .main-header a,body.open-shop-dark #sidebar-primary .open-shop-widget-content a{
color:#999;
}

body.open-shop-dark .widget.woocommerce .widget-title, body.open-shop-dark .open-widget-content .widget-title, .widget-title{
color:#fff;
}
body.open-shop-dark .tagcloud a, body.open-shop-dark .thunk-tags-wrapper a{
background:#111;
}
body.open-shop-dark .thunk-product,body.open-shop-dark .thunk-product-hover,body.open-shop-dark .thunk-product:hover .thunk-product-hover::before,body.open-shop-dark .thunk-product-list-section .thunk-list,body.open-shop-dark .thunk-product-tab-list-section .thunk-list{
background:#111;
}
body.open-shop-dark .thunk-title .title{
color:#fff;
}

body.open-shop-dark .thunk-woo-product-list .thunk-product-wrap:hover .thunk-product,body.open-shop-dark .thunk-product:hover .thunk-product-hover {
    box-shadow: 0 0 15px #111;
}
body.open-shop-dark .thunk-cat-text,body.open-shop-dark .total-number{
background-color:#111;
    border:1px solid #111;
}

body.open-shop-dark .thunk-hglt-box h6{
color:#fff;
}
body.open-shop-dark .thunk-hglt-box p{
color:#999
}
body.open-shop-dark .thunk-highlight-col {
border-right-color: #111;
}

body.open-shop-dark  #search-box input[type='text'], body.open-shop-dark  select#product_cat{
border: 1px solid #111;
 background: #111;
 color:#999;
}

body.open-shop-dark  .vert-brd:after {
border: 0.5px solid #666;
}

body.open-shop-dark .menu-category-list ul[data-menu-style='vertical'],body.open-shop-dark .menu-category-list ul[data-menu-style='vertical'] li ul.sub-menu,body.open-shop-dark .thunk-product-cat-list li a,body.open-shop-dark .sticky-header:before, .search-wrapper:before{
background:#1F1F1F;
border-color:#1F1F1F;
color:#999;
}
body.open-shop-dark .header-icon a,body.open-shop-dark .thunk-wishlist a, body.open-shop-dark .thunk-compare a,body.open-shop-dark .sticky-header-col3 .thunk-icon .cart-icon a.cart-contents{
background: #111;
color:#999;
}
body.open-shop-dark .header-support-icon{
color:#999;
}
body.open-shop-dark .open-shop-menu ul.sub-menu,body.open-shop-dark .thunk-cat-tab ul.dropdown-link,body.open-shop-dark ul.dropdown-link > li >a{
background:#111;
color:#999;
}
body.open-shop-dark .open-shop-menu li ul.sub-menu li a:hover{
background:#2f2f2f;
}
body.open-shop-dark .open-shop-menu > li > a,body.open-shop-dark .open-shop-menu li ul.sub-menu li a{
color:#999;
}
body.open-shop-dark header__cat__item.dropdown a.more-cat,body.open-shop-dark .thunk-slide.owl-carousel .owl-nav button.owl-prev, body.open-shop-dark .thunk-slide.owl-carousel .owl-nav button.owl-next,body.open-shop-dark .open-shop-slide-post .owl-nav button.owl-prev, body.open-shop-dark .open-shop-slide-post .owl-nav button.owl-next,body.open-shop-dark .header__cat__item.dropdown a.more-cat{
    background: #111;
    border: 1px solid #111;
}

body.open-shop-dark .menu-toggle .menu-btn span{
background-color:#999;
}
body.open-shop-dark .thunk-product-cat-list li a{
border-bottom-color:#111;
}
body.open-shop-dark .slide-content-wrap {
    box-shadow: 0 0 15px #333;
}
/**************************/
/*Shop Page*/
/**************************/
.open-shop-dark .page-head h1{
color:#fff;
}
.open-shop-dark #shop-product-wrap select,.open-shop-dark .thunk-list-grid-switcher a {
border: 1px solid #111;
background:#111;
}
.open-shop-dark .thunk-list-view .thunk-product .thunk-product-hover{
background:#111;
}
.open-shop-dark .thunk-list-view .thunk-product:hover .thunk-product-hover{
box-shadow:none;
}
.open-shop-dark.woocommerce nav.woocommerce-pagination .page-numbers{
background:#111;
}
.open-shop-dark .open-cart{
background:#1f1f1f;
}
.open-shop-dark .open-cart p.total, .open-shop-dark .widget p.total{
color:#fff;
}
/**************************/
/*Blog Page ,Pages and single pages*/
/**************************/
.open-shop-dark article.thunk-article,.open-shop-dark article.thunk-post-article, .open-shop-dark.single article, .no-results.not-found, .open-shop-dark #error-404,.open-shop-dark article.thunk-article,.open-shop-dark article.thunk-post-article, .open-shop-dark .single article, .open-shop-dark .no-results.not-found, .open-shop-dark #error-404,.open-shop-dark .thunk-page .thunk-content-wrap{
background:#1F1F1F;
}

.open-shop-dark h2.thunk-post-title a, .open-shop-dark h1.thunk-post-title a{
color:#fff;
}

.open-shop-dark .nav-links .page-numbers{
background:#111;
}

/**************************/
/*Product single pages*/
/**************************/
.open-shop-dark .thunk-single-product-summary-wrap,.open-shop-dark.woocommerce div.product .woocommerce-tabs .panel,.open-shop-dark .product_meta,.open-shop-dark section.related.products ul.products{
background:#1f1f1f;
}

.open-shop-dark.woocommerce div.product .product_title, .open-shop-dark section.related.products h2, .open-shop-dark section.upsells.products h2, .open-shop-dark.woocommerce #reviews #comments h2{
color:#fff;
}
.open-shop-dark .comment-form textarea,.open-shop-dark .comment-form input{
border-color:#111;
}
.open-shop-dark .woocommerce-error, .open-shop-dark .woocommerce-info, .open-shop-dark .woocommerce-message{
background-color: #111;
    color: #999;
}
.open-shop-dark .woocommerce-MyAccount-navigation ul li{
    border-bottom: 1px solid #000;
}
.open-shop-dark.woocommerce-account .woocommerce-MyAccount-navigation{
background:#111;
}
.open-shop-dark .ribbon-btn {
    background: #111;
  }
.thunk-loadContainer:before {
    background: #333;
  }
  .open-shop-dark.woocommerce div.product form.cart .variations select{
background:#111;
color:#999;
}

.open-shop-dark.woocommerce div.product div.images .woocommerce-product-gallery__wrapper .zoomImg {
    background-color: #111;
}
.open-shop-dark .thunk-woo-product-list .woocommerce-loop-product__title a{
color:#999;

}
.open-shop-dark .thunk-list-grid-switcher a:hover{
  color:#fff;
}
.open-shop-dark #alm-quick-view-modal .alm-lightbox-content,.open-shop-dark #alm-quick-view-content div.summary form.cart{
background:#222;
}

.open-shop-dark #alm-quick-view-content .product_meta,.open-shop-dark #alm-quick-view-content .product_meta > span{
    border: 1px solid #111;}

.open-shop-dark .woocommerce-product-details__short-description{
border-top:1px solid #111;
} 
@media screen and (max-width: 1024px){body.open-shop-dark .thunk-icon .cart-icon a.cart-contents{
background:#111;
color:#999;
}

.sider.left,.sider.right{
background-color: #111; 
}

}";

}
/**************************/
// Above Fooetr
/**************************/
    $open_shop_above_frt_brdr_clr = esc_html(get_theme_mod('open_shop_above_frt_brdr_clr','#fff'));  
    $open_shop_style.=".top-footer{border-bottom-color:{$open_shop_above_frt_brdr_clr}}";
    $open_shop_style.= open_shop_responsive_slider_funct( 'open_shop_above_ftr_hgt', 'open_shop_top_footer_height_responsive');
    $open_shop_style.= open_shop_responsive_slider_funct( 'open_shop_abv_ftr_botm_brd', 'open_shop_top_footer_border_responsive');

/**************************/
// Below Fooetr
/**************************/
    $open_shop_bottom_frt_brdr_clr = esc_html(get_theme_mod('open_shop_bottom_frt_brdr_clr','#fff'));  
    $open_shop_style.=".below-footer{border-top-color:{$open_shop_bottom_frt_brdr_clr}}";
    $open_shop_style.= open_shop_responsive_slider_funct( 'open_shop_btm_ftr_hgt', 'open_shop_below_footer_height_responsive');
    $open_shop_style.= open_shop_responsive_slider_funct( 'open_shop_btm_ftr_botm_brd', 'open_shop_below_footer_border_responsive');

/*********************/
// Global Color Option
/*********************/
  $open_shop_theme_clr = esc_html(get_theme_mod('open_shop_theme_clr','#ff0052'));
  $open_shop_style.="a:hover, .open-shop-menu li a:hover, .open-shop-menu .current-menu-item a,.woocommerce .thunk-woo-product-list .price,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-butto, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.thunk-compare .compare-button a:hover, .thunk-product-hover .th-button.add_to_cart_button:hover, .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover, .woocommerce .thunk-product-hover a.th-button:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse.show:before, .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,.woocommerce ul.products li.product.thunk-woo-product-list .price,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.woocommerce .entry-summary a.compare.button.added:before,.header-icon a:hover,.thunk-related-links .nav-links a:hover,.woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,article.thunk-post-article .thunk-readmore.button,.thunk-wishlist a:hover, .thunk-compare a:hover,.woocommerce .thunk-product-hover a.th-button,.woocommerce ul.cart_list li .woocommerce-Price-amount, .woocommerce ul.product_list_widget li .woocommerce-Price-amount,.open-shop-load-more button, 
.summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a::before,
 .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a::before,.thunk-hglt-icon,.thunk-product .yith-wcwl-wishlistexistsbrowse:before, .thunk-product .yith-wcwl-wishlistaddedbrowse:before,.woocommerce a.button.product_type_simple{color:{$open_shop_theme_clr}}";

if($open_shop_color_scheme=='opn-dark'){
$open_shop_style.="body.open-shop-dark a:hover, body.open-shop-dark .open-shop-menu > li > a:hover, body.open-shop-dark .open-shop-menu li ul.sub-menu li a:hover,body.open-shop-dark .thunk-product-cat-list li a:hover,body.open-shop-dark .main-header a:hover, body.open-shop-dark #sidebar-primary .open-shop-widget-content a:hover,.open-shop-dark .thunk-woo-product-list .woocommerce-loop-product__title a:hover{color:{$open_shop_theme_clr}} body.open-shop-dark #searchform [type='submit']{background:{$open_shop_theme_clr};border-color:{$open_shop_theme_clr}}";
}

  $open_shop_style.=".toggle-cat-wrap,#search-button,.thunk-icon .cart-icon,.single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.thunk-woo-product-list .thunk-quickview a,.cat-list a:after,.tagcloud a:hover, .thunk-tags-wrapper a:hover,.btn-main-header,.woocommerce div.product form.cart .button{background:{$open_shop_theme_clr}}
  .open-cart p.buttons a:hover,
  .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .open-shop-slide-post .owl-nav button.owl-prev:hover, .open-shop-slide-post .owl-nav button.owl-next:hover,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button:hover,.open-shop-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background-color:{$open_shop_theme_clr};} 
  .thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-butto, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .open-shop-slide-post .owl-nav button.owl-prev:hover, .open-shop-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button,.woocommerce .thunk-product-hover a.th-button,.open-shop-load-more button,.woocommerce a.button.product_type_simple{border-color:{$open_shop_theme_clr}} .loader {
    border-right: 4px solid {$open_shop_theme_clr};
    border-bottom: 4px solid {$open_shop_theme_clr};
    border-left: 4px solid {$open_shop_theme_clr};}";
   //text
   $open_shop_text_clr = esc_html(get_theme_mod('open_shop_text_clr'));
   $open_shop_style.="body,.woocommerce-error, .woocommerce-info, .woocommerce-message {color: {$open_shop_text_clr}}";
   //title
   $open_shop_title_clr = esc_html(get_theme_mod('open_shop_title_clr'));
   $open_shop_style.=".site-title span a,.sprt-tel b,.widget.woocommerce .widget-title, .open-widget-content .widget-title, .widget-title,.thunk-title .title,.thunk-hglt-box h6,h2.thunk-post-title a, h1.thunk-post-title ,#reply-title,h4.author-header,.page-head h1,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.woocommerce table.shop_table thead th, .cart-subtotal, .order-total,.cross-sells h2, .cart_totals h2,.woocommerce-billing-fields h3,.page-head h1 a{color: {$open_shop_title_clr}}";
   //link
   $open_shop_link_clr = esc_html(get_theme_mod('open_shop_link_clr'));
   $open_shop_link_hvr_clr = esc_html(get_theme_mod('open_shop_link_hvr_clr'));
   $open_shop_style.="a,#open-above-menu.open-shop-menu > li > a{color:{$open_shop_link_clr}} a:hover,#open-above-menu.open-shop-menu > li > a:hover,#open-above-menu.open-shop-menu li a:hover{color:{$open_shop_link_hvr_clr}}";

  if($open_shop_color_scheme=='opn-dark'){
  $open_shop_style.="body.open-shop-dark a,body.open-shop-dark .thunk-product-cat-list li a,body.open-shop-dark .main-header a, body.open-shop-dark #sidebar-primary .open-shop-widget-content a,body.open-shop-dark .top-header-bar a, body.open-shop-dark .top-footer a, body.open-shop-dark .below-footer a, body.open-shop-dark .widget-footer a{color:{$open_shop_link_clr}}
    body.open-shop-dark, .open-shop-dark .woocommerce-error, .open-shop-dark .woocommerce-info, .open-shop-dark .woocommerce-message,body.open-shop-dark .top-header-bar, body.open-shop-dark .top-footer, body.open-shop-dark .below-footer,  body.open-shop-dark .widget-footer{color:{$open_shop_text_clr}}
    body.open-shop-dark .widget.woocommerce .widget-title, body.open-shop-dark .open-widget-content .widget-title, .widget-title,body.open-shop-dark .thunk-title .title,.open-shop-dark h2.thunk-post-title a, .open-shop-dark h1.thunk-post-title a{color:{$open_shop_title_clr}}";

  $open_shop_style.="body.open-shop-dark a:hover,body.open-shop-dark .thunk-product-cat-list li a:hover,body.open-shop-dark .main-header a:hover, body.open-shop-dark #sidebar-primary .open-shop-widget-content a:hover,body.open-shop-dark .top-header-bar a:hover, body.open-shop-dark .top-footer a:hover, body.open-shop-dark .below-footer a:hover, body.open-shop-dark .widget-footer a:hover,body.open-shop-dark .thunk-compare .compare-button a:hover,.open-shop-dark .thunk-woo-product-list .woocommerce-loop-product__title a:hover{color:{$open_shop_link_hvr_clr}}";
  }

  // loader
   $open_shop_loader_bg_clr = esc_html(get_theme_mod('open_shop_loader_bg_clr','#9c9c9'));
   $open_shop_style.=".open_shop_overlayloader{background-color:{$open_shop_loader_bg_clr}}";
  
/*************************/
// Front page-head
/************************/
//ribbon  
 $open_shop_style.=".openshop-site section.thunk-ribbon-section .content-wrap:before {
    content:'';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:{$open_shop_theme_clr};}";


 if(esc_html(get_theme_mod('open_shop_cart_mobile_disable'))==true || esc_html(get_theme_mod('open_shop_account_mobile_disable'))==true || esc_html(get_theme_mod('open_shop_whislist_mobile_disable'))==true){
        $open_shop_style.="@media screen and (max-width: 767px){.mhdrdefault .below-header-bar{
        display:flex;
        }
        .mhdrdefault .below-header-col2{
        width:100%;
        }}";
}



return $open_shop_style;
}

//start logo width
function open_shop_logo_width_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.thunk-logo img,.sticky-header .logo-content img{
    max-width: ' . $v3 . 'px;
  }';
  $custom_css = open_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
// top header height
function open_shop_top_header_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-header .top-header-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = open_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function open_shop_abv_hdr_botm_brd_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-header{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = open_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// top footer height
function open_shop_top_footer_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-footer .top-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = open_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function open_shop_top_footer_border_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-footer{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = open_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// below footer height
function open_shop_below_footer_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.below-footer .below-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = open_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function open_shop_below_footer_border_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.below-footer{
    border-top-width: ' . $v3 . 'px;
  }';
  $custom_css = open_shop_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
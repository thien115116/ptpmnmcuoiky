<?php
/**
 * Register customizer panels & sections.
 */
/*************************/
/*WordPress Default Panel*/
/*************************/
$open_shop_shop_panel_default = new Open_Shop_WP_Customize_Panel( $wp_customize,'open-shop-panel-default', array(
    'priority' => 1,
    'title'    => __( 'WordPress Default', 'open-shop' ),
  ));
$wp_customize->add_panel($open_shop_shop_panel_default);
$wp_customize->get_section( 'title_tagline' )->panel = 'open-shop-panel-default';
$wp_customize->get_section( 'static_front_page' )->panel = 'open-shop-panel-default';
$wp_customize->get_section( 'custom_css' )->panel = 'open-shop-panel-default';

$wp_customize->add_setting('open_shop_home_page_setup', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_home_page_setup',
            array(
        'section'    => 'static_front_page',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/open-shop/#homepage-setting',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));
/************************/
// Background option
/************************/
$open_shop_shop_bg_option = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-bg-option', array(
    'title' =>  __( 'Background', 'open-shop' ),
    'panel' => 'open-shop-panel-default',
    'priority' => 10,
  ));
$wp_customize->add_section($open_shop_shop_bg_option);

/*************************/
/*Layout Panel*/
/*************************/
$wp_customize->add_panel( 'open-shop-panel-layout', array(
				'priority' => 3,
				'title'    => __( 'Layout', 'open-shop' ),
) );

// Header
$open_shop_section_header_group = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-section-header-group', array(
    'title' =>  __( 'Header', 'open-shop' ),
    'panel' => 'open-shop-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section( $open_shop_section_header_group );

// above-header
$open_shop_above_header = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-above-header', array(
    'title'    => __( 'Above Header', 'open-shop' ),
    'panel'    => 'open-shop-panel-layout',
        'section'  => 'open-shop-section-header-group',
        'priority' => 3,
  ));
$wp_customize->add_section( $open_shop_above_header );
// main-header
$open_shop_shop_main_header = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-main-header', array(
    'title'    => __( 'Main Header', 'open-shop' ),
    'panel'    => 'open-shop-panel-layout',
    'section'  => 'open-shop-section-header-group',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_shop_main_header );

//blog
$open_shop_section_blog_group = new  Open_Shop_WP_Customize_Section( $wp_customize,'open-shop-section-blog-group', array(
    'title' =>  __( 'Blog', 'open-shop' ),
    'panel' => 'open-shop-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section($open_shop_section_blog_group);

$open_shop_section_footer_group = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-section-footer-group', array(
    'title' =>  __( 'Footer', 'open-shop' ),
    'panel' => 'open-shop-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section( $open_shop_section_footer_group);
// sidebar
$open_shop_section_sidebar_group = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-section-sidebar-group', array(
    'title' =>  __( 'Sidebar', 'open-shop' ),
    'panel' => 'open-shop-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($open_shop_section_sidebar_group);
// Scroll to top
$open_shop_move_to_top = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-move-to-top', array(
    'title' =>  __( 'Move To Top', 'open-shop' ),
    'panel' => 'open-shop-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($open_shop_move_to_top);
$wp_customize->add_setting( 'open_shop_move_to_top', array(
    'default'           => false,
    'sanitize_callback' => 'open_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Open_Shop_Toggle_Control( $wp_customize, 'open_shop_move_to_top', array(
    'label'       => esc_html__( 'Enable', 'open-shop' ),
    'section'     => 'open-shop-move-to-top',
    'type'        => 'toggle',
    'settings'    => 'open_shop_move_to_top',
  ) ) );

// rtl
  $open_shop_rtl = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-rtl', array(
    'title' =>  __( 'RTL', 'open-shop' ),
    'panel' => 'open-shop-panel-layout',
    'priority' => 4,
  ));
$wp_customize->add_section($open_shop_rtl);

  $wp_customize->add_setting( 'open_shop_rtl', array(
    'default'           => false,
    'sanitize_callback' => 'open_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Open_Shop_Toggle_Control( $wp_customize, 'open_shop_rtl', array(
    'label'       => esc_html__( 'Enable', 'open-shop' ),
    'section'     => 'open-shop-rtl',
    'type'        => 'toggle',
    'settings'    => 'open_shop_rtl',
  ) ) );
//above-footer
$open_shop_above_footer = new  Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-above-footer',array(
    'title'    => __( 'Above Footer','open-shop' ),
    'panel'    => 'open-shop-panel-layout',
        'section'  => 'open-shop-section-footer-group',
        'priority' => 1,
));
$wp_customize->add_section( $open_shop_above_footer);
//widget footer
$open_shop_shop_widget_footer = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-widget-footer', array(
    'title'    => __('Widget Footer','open-shop'),
    'panel'    => 'open-shop-panel-layout',
    'section'  => 'open-shop-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $open_shop_shop_widget_footer);
//Bottom footer
$open_shop_shop_bottom_footer = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-bottom-footer', array(
    'title'    => __('Below Footer','open-shop'),
    'panel'    => 'open-shop-panel-layout',
    'section'  => 'open-shop-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $open_shop_shop_bottom_footer);

/*************************/
/* Preloader */
/*************************/
$wp_customize->add_section( 'open-shop-pre-loader' , array(
    'title'      => __('Preloader','open-shop'),
    'priority'   => 30,
) );
/*************************/
/* Social   Icon*/
/*************************/
$open_shop_social_header = new Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-social-icon', array(
    'title'    => __( 'Social Icon', 'open-shop' ),
    'priority' => 30,
  ));
$wp_customize->add_section( $open_shop_social_header );
/*************************/
/* Frontpage Panel */
/*************************/
$wp_customize->add_panel( 'open-shop-panel-frontpage', array(
                'priority' => 5,
                'title'    => __( 'Frontpage Sections', 'open-shop' ),
) );

$open_shop_top_slider_section = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_top_slider_section', array(
    'title'    => __( 'Top Slider', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_top_slider_section );
$open_shop_highlight = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_highlight', array(
    'title'    => __( 'Highlight', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_highlight );

$open_shop_category_tab_section = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_category_tab_section', array(
    'title'    => __( 'Tabbed Product Carousel', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_category_tab_section );

$open_shop_cat_slide_section = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_cat_slide_section', array(
    'title'    => __( 'Woo Category', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_cat_slide_section );

$open_shop_product_slide_section = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_product_slide_section', array(
    'title'    => __( 'Product Carousel', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_product_slide_section );

// ribbon
$open_shop_ribbon = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_ribbon', array(
    'title'    => __( 'Ribbon', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_ribbon );

$open_shop_product_slide_list = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_product_slide_list', array(
    'title'    => __( 'Product List Carousel', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_product_slide_list );

$open_shop_product_big_feature = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_product_big_feature', array(
    'title'    => __( 'Big Featured Product', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_product_big_feature );
$open_shop_product_cat_list = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_product_cat_list', array(
    'title'    => __( 'Tabbed Product List Carousel', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_product_cat_list );


$open_shop_banner = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_banner', array(
    'title'    => __( 'Banner', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_banner );

$open_shop_brand = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_brand', array(
    'title'    => __( 'Brand', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_brand );



$open_shop_1_custom_sec = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_1_custom_sec', array(
    'title'    => __( 'First Custom Section', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_1_custom_sec );

$open_shop_2_custom_sec = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_2_custom_sec', array(
    'title'    => __( 'Second Custom Section', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_2_custom_sec );

$open_shop_3_custom_sec = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_3_custom_sec', array(
    'title'    => __( 'Third Custom Section', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_3_custom_sec );

$open_shop_4_custom_sec = new Open_Shop_WP_Customize_Section( $wp_customize, 'open_shop_4_custom_sec', array(
    'title'    => __( 'Fourth Custom Section', 'open-shop' ),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $open_shop_4_custom_sec );

//section ordering
$open_shop_section_order = new Open_Shop_WP_Customize_Section($wp_customize,'open-shop-section-order', array(
    'title'    => __('Section Ordering', 'open-shop'),
    'panel'    => 'open-shop-panel-frontpage',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_section_order);
/******************/
// Color Option
/******************/
$wp_customize->add_panel( 'open-shop-panel-color-background', array(
        'priority' => 22,
        'title'    => __( 'Total Color & BG Options', 'open-shop' ),
    ) );
// Section gloab color and background
$wp_customize->add_section('open-shop-gloabal-color', array(
    'title'    => __('Global Colors', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'priority' => 1,
));
//header
$open_shop_header_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-header-color', array(
    'title'    => __('Header', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $open_shop_header_color );
$open_shop_abv_header_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-abv-header-clr', array(
    'title'    => __('Above Header','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-header-color',
    'priority' => 1,
));
$wp_customize->add_section( $open_shop_abv_header_clr);

$open_shop_main_header_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-main-header-clr', array(
    'title'    => __('Main Header','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-header-color',
    'priority' => 2,
));
$wp_customize->add_section( $open_shop_main_header_clr);

$open_shop_sticky_header_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-sticky-header-clr', array(
    'title'    => __('Sticky Header','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-header-color',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_sticky_header_clr);


$open_shop_mobile_pan_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-mobile-pan-clr', array(
    'title'    => __('Mobile','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-header-color',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_mobile_pan_clr);

$open_shop_canvas_pan_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-canvas-pan-clr', array(
    'title'    => __('Off Canvas Sidebar','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-header-color',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_canvas_pan_clr);

$open_shop_main_header_header_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-main-header-header-clr', array(
    'title'    => __('Header','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_main_header_header_clr);

// main-menu
$open_shop_main_header_menu_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-main-header-menu-clr', array(
    'title'    => __('Main Menu','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_main_header_menu_clr);

// header category
$open_shop_main_header_cat_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-main-header-cat-clr', array(
    'title'    => __('Category','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-main-header-clr',
    'priority' => 3,
));
$wp_customize->add_section($open_shop_main_header_cat_clr);
// header search
$open_shop_main_header_srch_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-main-header-srch-clr', array(
    'title'    => __('Search','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-main-header-clr',
    'priority' => 4,
));
$wp_customize->add_section($open_shop_main_header_srch_clr);
//Shop Icon
$open_shop_main_header_shp_icon = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-main-header-shp-icon', array(
    'title'    => __('Shop Icon','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-main-header-clr',
    'priority' => 5,
));
$wp_customize->add_section($open_shop_main_header_shp_icon);
/****************/
//Sidebar
/****************/
$open_shop_sidebar_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-sidebar-color', array(
    'title'    => __('Sidebar', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $open_shop_sidebar_color );
/****************/
//footer
/****************/
$open_shop_footer_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-footer-color', array(
    'title'    => __('Footer', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $open_shop_footer_color );

$open_shop_abv_footer_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-abv-footer-clr', array(
    'title'    => __('Above Footer','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-footer-color',
    'priority' => 1,
));
$wp_customize->add_section( $open_shop_abv_footer_clr);

$open_shop_footer_widget_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-footer-widget-clr', array(
    'title'    => __('Footer Widget','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-footer-color',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_footer_widget_clr);

$open_shop_btm_footer_clr = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-btm-footer-clr', array(
    'title'    => __('Bottom Footer','open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-footer-color',
    'priority' => 3,
));
$wp_customize->add_section( $open_shop_btm_footer_clr);

/****************/
//Woocommerce color
/****************/
$open_shop_woo_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-woo-color', array(
    'title'    => __('Woocommerce', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'priority' => 4,
));
$wp_customize->add_section( $open_shop_woo_color );
// product
$open_shop_woo_prdct_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-woo-prdct-color', array(
    'title'    => __('Product', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-woo-color',
    'priority' => 1,
));
$wp_customize->add_section( $open_shop_woo_prdct_color );

// sale
$open_shop_woo_prdct_sale_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-woo-prdct-sale-color', array(
    'title'    => __('Sale Badge', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-woo-color',
    'priority' => 2,
));
$wp_customize->add_section( $open_shop_woo_prdct_sale_color );
// single product
$open_shop_woo_prdct_single_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-woo-prdct-single-color', array(
    'title'    => __('Single Product', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-woo-color',
    'priority' => 3,
));
$wp_customize->add_section( $open_shop_woo_prdct_single_color );

/*************************/
// Frontpage
/*************************/
$open_shop_front_page_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-front-page-color', array(
    'title'    => __('Frontpage', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'priority' => 4,
));
$wp_customize->add_section($open_shop_front_page_color);

$open_shop_top_slider_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-top-slider-color', array(
    'title'    => __('Top Slider', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 1,
));
$wp_customize->add_section($open_shop_top_slider_color);

$open_shop_cat_slider_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-cat-slider-color', array(
    'title'    => __('Woo Category', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_cat_slider_color);

$open_shop_product_slider_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-product-slider-color', array(
    'title'    => __('Product Carousel', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($open_shop_product_slider_color);

$open_shop_product_cat_slide_tab_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-product-cat-slide-tab-color', array(
    'title'    => __('Tabbed Product Carousel', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($open_shop_product_cat_slide_tab_color);

$open_shop_product_list_slide_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-product-list-slide-color', array(
    'title'    => __('Product List Carousel', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 4,
));
$wp_customize->add_section($open_shop_product_list_slide_color);

$open_shop_product_list_tab_slide_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-product-list-tab-slide-color', array(
    'title'    => __('Tabbed Product List Carousel', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 5,
));
$wp_customize->add_section($open_shop_product_list_tab_slide_color);

$open_shop_banner_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-banner-color', array(
    'title'    => __('Banner', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_banner_color);

$open_shop_ribbon_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-ribbon-color', array(
    'title'    => __('Ribbon', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_ribbon_color);

$open_shop_brand_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-brand-color', array(
    'title'    => __('Brand', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_brand_color);

$open_shop_highlight_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-highlight-color', array(
    'title'    => __('Highlight', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_highlight_color);

$open_shop_big_featured_color = new  Open_Shop_WP_Customize_Section($wp_customize,'open-shop-big-featured-color', array(
    'title'    => __('Big Featured Product', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_big_featured_color);
/****************/
//custom section
/****************/
$open_shop_custom_one_color = new Open_Shop_WP_Customize_Section($wp_customize,'open-shop-custom-one-color', array(
    'title'    => __('Custom Section One', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_custom_one_color);

$open_shop_custom_two_color = new Open_Shop_WP_Customize_Section($wp_customize,'open-shop-custom-two-color', array(
    'title'    => __('Custom Section Two', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_custom_two_color);

$open_shop_custom_three_color = new Open_Shop_WP_Customize_Section($wp_customize,'open-shop-custom-three-color', array(
    'title'    => __('Custom Section Three', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_custom_three_color);


$open_shop_custom_four_color = new Open_Shop_WP_Customize_Section($wp_customize,'open-shop-custom-four-color', array(
    'title'    => __('Custom Section Four', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'section'  => 'open-shop-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($open_shop_custom_four_color);


/*********************/
// Page Content Color
/*********************/
$open_shop_custom_page_content_color = new Open_Shop_WP_Customize_Section($wp_customize,'open-shop-page-content-color', array(
    'title'    => __('Content Color', 'open-shop'),
    'panel'    => 'open-shop-panel-color-background',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_custom_page_content_color);
/******************/
// Shop Page
/******************/
$open_shop_woo_shop = new Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-woo-shop', array(
    'title'    => __( 'Product Style', 'open-shop' ),
     'panel'    => 'woocommerce',
     'priority' => 2,
));
$wp_customize->add_section( $open_shop_woo_shop );

$open_shop_woo_single_product = new Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-woo-single-product', array(
    'title'    => __( 'Single Product', 'open-shop' ),
     'panel'    => 'woocommerce',
     'priority' => 3,
));
$wp_customize->add_section($open_shop_woo_single_product );

$open_shop_woo_cart_page = new Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-woo-cart-page', array(
    'title'    => __( 'Cart Page', 'open-shop' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($open_shop_woo_cart_page);

$open_shop_woo_shop_page = new Open_Shop_WP_Customize_Section( $wp_customize, 'open-shop-woo-shop-page', array(
    'title'    => __( 'Shop Page', 'open-shop' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($open_shop_woo_shop_page);

/*************************/
/*Typography Panel*/
/*************************/
$wp_customize->add_panel('open-shop-panel-typography', array(
                'priority' => 3,
                'title'    => __('Typography', 'open-shop'),
));
$open_shop_section_base_typo = new  Open_Shop_WP_Customize_Section($wp_customize, 'open-shop-section-base-typo', array(
    'title' =>  __('Base Typography', 'open-shop'),
    'panel' => 'open-shop-panel-typography',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_section_base_typo);
$open_shop_section_title_typo = new  Open_Shop_WP_Customize_Section($wp_customize, 'open-shop-section-title-typo', array(
    'title' =>  __('Title', 'open-shop'),
    'panel' => 'open-shop-panel-typography',
    'priority' => 3,
));
$wp_customize->add_section($open_shop_section_title_typo);

$open_shop_section_content_typo = new  Open_Shop_WP_Customize_Section($wp_customize, 'open-shop-section-content-typo', array(
    'title' =>  __('Content', 'open-shop'),
    'panel' => 'open-shop-panel-typography',
    'priority' => 4,
));
$wp_customize->add_section($open_shop_section_content_typo);
/*****************************/
// Template
/*****************************/
$wp_customize->add_panel('open-shop-panel-inner-pagetemplate', array(
                'priority' => 4,
                'title'    => __('Inner Page Template ', 'open-shop'),
));
// Faq
$open_shop_section_faq_templ = new  Open_Shop_WP_Customize_Section($wp_customize, 'open-shop-section-faq-templ', array(
    'title' =>  __('Faq', 'open-shop'),
    'panel' => 'open-shop-panel-inner-pagetemplate',
    'priority' => 2,
));
$wp_customize->add_section($open_shop_section_faq_templ);
// Contact
$open_shop_section_contact_templ = new  Open_Shop_WP_Customize_Section($wp_customize, 'open-shop-section-contact-templ', array(
    'title' =>  __('Contact Us', 'open-shop'),
    'panel' => 'open-shop-panel-inner-pagetemplate',
    'priority' => 3,
));
$wp_customize->add_section($open_shop_section_contact_templ); 
// Team
$open_shop_section_about_templ = new  Open_Shop_WP_Customize_Section($wp_customize, 'open-shop-section-about-templ', array(
    'title' =>  __('About Us', 'open-shop'),
    'panel' => 'open-shop-panel-inner-pagetemplate',
    'priority' => 4,
));
$wp_customize->add_section($open_shop_section_about_templ);
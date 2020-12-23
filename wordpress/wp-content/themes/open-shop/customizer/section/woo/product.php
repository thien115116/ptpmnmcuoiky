<?php
//General Section
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
// product animation
$wp_customize->add_setting('open_shop_woo_product_animation', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
$wp_customize->add_control( 'open_shop_woo_product_animation', array(
        'settings'=> 'open_shop_woo_product_animation',
        'label'   => __('Product Image Hover Style','open-shop'),
        'section' => 'open-shop-woo-shop',
        'type'    => 'select',
        'choices'    => array(
        'none'            => __('None','open-shop'),
        'zoom'            => __('Zoom','open-shop'),
        'swap'            => __('Swap (Pro)','open-shop'),         
        ),
    ));
/*******************/
//Quick view
/*******************/
$wp_customize->add_setting('open_shop_woo_quickview_enable', array(
                'default'               => true,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'open_shop_woo_quickview_enable', array(
                'label'         => esc_html__('Enable Quick View.', 'open-shop'),
                'type'          => 'checkbox',
                'section'       => 'open-shop-woo-shop',
                'settings'      => 'open_shop_woo_quickview_enable',
            ) ) );
/****************/
// doc link
/****************/
$wp_customize->add_setting('open_shop_product_style_link_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_product_style_link_more',
            array(
        'section'     => 'open-shop-woo-shop',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/open-shop/#style-product',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));
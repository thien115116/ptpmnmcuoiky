<?php 
/**
 *
 *
 * @package      Open Shop
 * @author       Open Shop
 * @copyright   Copyright (c) 2019,  Open Shop
 * @since        Open Shop 1.0.0
 */
//General Section
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
/***************/
// Checkout
/***************/
$wp_customize->add_setting('open_shop_woo_checkout_distraction_enable', array(
                'default'               => false,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'open_shop_woo_checkout_distraction_enable', array(
                'label'         => esc_html__('Enable Distraction Free Checkout.', 'open-shop'),
                'type'          => 'checkbox',
                'section'       => 'open-shop-woo-checkout-page',
                'settings'      => 'open_shop_woo_checkout_distraction_enable',
            ) ) );

/****************/
// doc link
/****************/
$wp_customize->add_setting('open_shop_checkout_link_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_checkout_link_more',
            array(
        'section'     => 'open-shop-woo-checkout-page',
        'type'        => 'custom_message',
        'description' => sprintf( wp_kses(__( 'To know more go with this <a target="_blank" href="%s">Doc</a> !', 'open-shop' ), array(  'a' => array( 'href' => array(),'target' => array() ) ) ), esc_url('https://themehunk.com/docs/open-shop-theme/#checkout-page')),
        'priority'   =>30,
    )));
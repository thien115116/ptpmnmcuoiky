<?php
$wp_customize->add_setting('open_shop_prd_view', array(
        'default'        => 'grid-view',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
    $wp_customize->add_control('open_shop_prd_view', array(
        'settings' => 'open_shop_prd_view',
        'label'   => __('Display Product View','open-shop'),
        'description' => __('(Select layout to display products at shop page.)','open-shop'),
        'section' => 'open-shop-woo-shop-page',
        'type'    => 'select',
        'choices' => array(
        'grid-view'   => __('Grid','open-shop'), 
        'list-view'     => __('List','open-shop'),
        
        )
    )); 
/************************/
//Shop product pagination
/************************/
   $wp_customize->add_setting('open_shop_pagination', array(
        'default'        => 'num',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
    $wp_customize->add_control('open_shop_pagination', array(
        'settings' => 'open_shop_pagination',
        'label'   => __('Post Pagination','open-shop'),
        'section' => 'open-shop-woo-shop-page',
        'type'    => 'select',
        'choices' => array(
        'num'     => __('Numbered','open-shop'),
        'click'   => __('Load More (Pro)','open-shop'), 
        'scroll'  => __('Infinite Scroll (Pro)','open-shop'), 
        )
    ));

/****************/
// doc link
/****************/
$wp_customize->add_setting('open_shop_shop_page_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_shop_page_more',
            array(
        'section'     => 'open-shop-woo-shop-page',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/open-shop/#shop-page',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>  100,
    )));
<?php
//Enable Loader
$wp_customize->add_setting( 'open_shop_preloader_enable', array(
                'default'               => false,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'open_shop_preloader_enable', array(
                'label'                 => esc_html__('Enable Loader', 'open-shop'),
                'type'                  => 'checkbox',
                'section'               => 'open-shop-pre-loader',
                'settings'              => 'open_shop_preloader_enable',
                'priority'   => 1,
            ) ) );
// BG color
 $wp_customize->add_setting('open_shop_loader_bg_clr', array(
        'default'           => '#9c9c9c',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Open_Shop_Customizer_Color_Control($wp_customize,'open_shop_loader_bg_clr', array(
        'label'      => __('Background Color', 'open-shop' ),
        'section'    => 'open-shop-pre-loader',
        'settings'   => 'open_shop_loader_bg_clr',
        'priority'   => 2,
    ) ) 
 ); 
/*******************/ 
// Pre loader Image
/*******************/ 
$wp_customize->add_setting('open_shop_preloader_image_upload', array(
        'default'       => OPEN_SHOP_PRELOADER,
        'capability'    => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_upload',
    ));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'open_shop_preloader_image_upload', array(
        'label'          => __('Pre Loader Image', 'open-shop'),
        'description'    => __('(You can also use GIF image.)', 'open-shop'),
        'section'        => 'open-shop-pre-loader',
        'settings'       => 'open_shop_preloader_image_upload',
 )));

/****************/
// doc link
/****************/
$wp_customize->add_setting('open_shop_loader_link_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_loader_link_more',
            array(
        'section'     => 'open-shop-pre-loader',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/open-shop/#pre-loader',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));
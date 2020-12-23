<?php
/******************/
//Global Option
/******************/
/***************/
// Scheme color 
/***************/
$wp_customize->add_setting('open_shop_color_scheme', array(
                'default'               => 'opn-light',
                'sanitize_callback'     => 'open_shop_sanitize_radio',
            ) );
$wp_customize->add_control( new Open_Shop_Customizer_Buttonset_Control( $wp_customize, 'open_shop_color_scheme', array(
                'label'                 => esc_html__( 'Color Scheme', 'open-shop' ),
                'section'               => 'open-shop-gloabal-color',
                'settings'              => 'open_shop_color_scheme',
                'choices'               => array(
                    'opn-light'      => esc_html__( 'Light', 'open-shop' ),
                    'opn-dark'       => esc_html__( 'Dark', 'open-shop' ),
                ),
                 'priority' => 1,
            ) ) );
/******************/
// theme color
/******************/
 $wp_customize->add_setting('open_shop_theme_clr', array(
        'default'        => '#ff0052',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'open_shop_theme_clr', array(
        'label'      => __('Theme Color', 'open-shop' ),
        'section'    => 'open-shop-gloabal-color',
        'settings'   => 'open_shop_theme_clr',
        'priority' => 1,
    ) ) 
 );  
// link color
 $wp_customize->add_setting('open_shop_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'open_shop_link_clr', array(
        'label'      => __('Link Color', 'open-shop' ),
        'section'    => 'open-shop-gloabal-color',
        'settings'   => 'open_shop_link_clr',
        'priority' => 2,
    ) ) 
 );  
// link hvr color
 $wp_customize->add_setting('open_shop_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'open_shop_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'open-shop' ),
        'section'    => 'open-shop-gloabal-color',
        'settings'   => 'open_shop_link_hvr_clr',
        'priority' => 3,
    ) ) 
 );

// text color
 $wp_customize->add_setting('open_shop_text_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'open_shop_text_clr', array(
        'label'      => __('Text Color', 'open-shop' ),
        'section'    => 'open-shop-gloabal-color',
        'settings'   => 'open_shop_text_clr',
        'priority' => 4,
    ) ) 
 );
 // title color
 $wp_customize->add_setting('open_shop_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'open_shop_title_clr', array(
        'label'      => __('Title Color', 'open-shop' ),
        'section'    => 'open-shop-gloabal-color',
        'settings'   => 'open_shop_title_clr',
        'priority' => 4,
    ) ) 
 );  
// gloabal background option
$wp_customize->get_control( 'background_color' )->section = 'open-shop-gloabal-color';
$wp_customize->get_control( 'background_color' )->priority = 6;
$wp_customize->get_control( 'background_image' )->section = 'open-shop-gloabal-color';
$wp_customize->get_control( 'background_image' )->priority = 7;
$wp_customize->get_control( 'background_preset' )->section = 'open-shop-gloabal-color';
$wp_customize->get_control( 'background_preset' )->priority = 8;
$wp_customize->get_control( 'background_position' )->section = 'open-shop-gloabal-color';
$wp_customize->get_control( 'background_position' )->priority = 8;
$wp_customize->get_control( 'background_repeat' )->section = 'open-shop-gloabal-color';
$wp_customize->get_control( 'background_repeat' )->priority = 9;
$wp_customize->get_control( 'background_attachment' )->section = 'open-shop-gloabal-color';
$wp_customize->get_control( 'background_attachment' )->priority = 10;
$wp_customize->get_control( 'background_size' )->section = 'open-shop-gloabal-color';
$wp_customize->get_control( 'background_size' )->priority = 11;
/****************/
//doc link
/****************/
$wp_customize->add_setting('open_shop_global_clr_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_global_clr_more',
            array(
        'section'     => 'open-shop-gloabal-color',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/open-shop/#global-color',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));
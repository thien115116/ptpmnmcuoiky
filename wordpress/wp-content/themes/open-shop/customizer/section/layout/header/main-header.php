<?php
// main header
// choose col layout
if(class_exists('Open_Shop_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'open_shop_main_header_layout', array(
                'default'           => 'mhdrleft',
                'sanitize_callback' => 'open_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Open_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'open_shop_main_header_layout', array(
                    'label'    => esc_html__( 'Header Layout', 'open-shop' ),
                    'section'  => 'open-shop-main-header',
                    'choices'  => array(
                        'mhdrdefault'   => array(
                            'url' => OPEN_SHOP_MAIN_HEADER_LAYOUT_ONE,
                        ),
                        'mhdrone'   => array(
                            'url' => OPEN_SHOP_MAIN_HEADER_LAYOUT_TWO,
                        ),
                        'mhdrtwo' => array(
                            'url' => OPEN_SHOP_MAIN_HEADER_LAYOUT_THREE,
                        ),
                        'mhdrthree' => array(
                            'url' => OPEN_SHOP_MAIN_HEADER_LAYOUT_FOUR,
                        ),
                                     
                    ),
                )
            )
        );
} 
/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('open_shop_menu_alignment', array(
                'default'               => 'center',
                'sanitize_callback'     => 'open_shop_sanitize_select',
            ) );
$wp_customize->add_control( new Open_Shop_Customizer_Buttonset_Control( $wp_customize, 'open_shop_menu_alignment', array(
                'label'                 => esc_html__( 'Menu Alignment', 'open-shop' ),
                'section'               => 'open-shop-main-header',
                'settings'              => 'open_shop_menu_alignment',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'open-shop' ),
                    'center'        => esc_html__( 'center', 'open-shop' ),
                    'right'             => esc_html__( 'Right', 'open-shop' ),
                ),
        ) ) );
//Main menu option
$wp_customize->add_setting('open_shop_main_header_option', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
$wp_customize->add_control( 'open_shop_main_header_option', array(
        'settings' => 'open_shop_main_header_option',
        'label'    => __('Column 1','open-shop'),
        'section'  => 'open-shop-main-header',
        'type'     => 'select',
        'choices'    => array(
        'none'       => __('None','open-shop'),
        'callto'     => __('Call-To','open-shop'),
        'button'     => __('Button (Pro)','open-shop'),
        'widget'     => __('Widget (Pro)','open-shop'),     
        ),
    ));
//**************/
// BUTTON TEXT //
//**************/
$wp_customize->add_setting('open_shop_main_hdr_btn_txt', array(
        'default' => __('Button Text','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'open_shop_main_hdr_btn_txt', array(
        'label'    => __('Button Text', 'open-shop'),
        'section'  => 'open-shop-main-header',
         'type'    => 'text',
));

$wp_customize->add_setting('open_shop_main_hdr_btn_lnk', array(
        'default' => __('#','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        
));
$wp_customize->add_control( 'open_shop_main_hdr_btn_lnk', array(
        'label'    => __('Button Link', 'open-shop'),
        'section'  => 'open-shop-main-header',
         'type'    => 'text',
));
/*****************/
// Call-to
/*****************/
$wp_customize->add_setting('open_shop_main_hdr_calto_txt', array(
        'default' => __('Call To','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'open_shop_main_hdr_calto_txt', array(
        'label'    => __('Call To Text', 'open-shop'),
        'section'  => 'open-shop-main-header',
         'type'    => 'text',
));

$wp_customize->add_setting('open_shop_main_hdr_calto_nub', array(
        'default' => __('+1800090098','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'open_shop_main_hdr_calto_nub', array(
        'label'    => __('Call To Number', 'open-shop'),
        'section'  => 'open-shop-main-header',
         'type'    => 'text',
));
$wp_customize->add_setting('open_shop_main_hdr_calto_email', array(
        'default' => __('Info@gmail.com','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'open_shop_main_hdr_calto_email', array(
        'label'    => __('Email', 'open-shop'),
        'section'  => 'open-shop-main-header',
         'type'    => 'text',
));
// col1 widget redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_main_header_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_main_header_widget_redirect', array(
                    'section'      => 'open-shop-main-header',
                    'button_text'  => esc_html__( 'Go To Widget', 'open-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect',  
                )
            )
        );
} 
/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('open_shop_mobile_menu_open', array(
                'default'               => 'left',
                'sanitize_callback'     => 'open_shop_sanitize_select',
            ) );
$wp_customize->add_control( new Open_Shop_Customizer_Buttonset_Control( $wp_customize, 'open_shop_mobile_menu_open', array(
                'label'                 => esc_html__( 'Mobile Menu', 'open-shop' ),
                'section'               => 'open-shop-main-header',
                'settings'              => 'open_shop_mobile_menu_open',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'open-shop' ),
                    'overcenter'        => esc_html__( 'center', 'open-shop' ),
                    'right'             => esc_html__( 'Right', 'open-shop' ),
                ),
        ) ) );

/***********************************/  
// Sticky Header
/***********************************/ 
  $wp_customize->add_setting( 'open_shop_sticky_header', array(
    'default'           => false,
    'sanitize_callback' => 'open_shop_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Open_Shop_Toggle_Control( $wp_customize, 'open_shop_sticky_header', array(
    'label'       => esc_html__( 'Sticky Header', 'open-shop' ),
    'section'     => 'open-shop-main-header',
    'type'        => 'toggle',
    'settings'    => 'open_shop_sticky_header',
  ) ) );
/******************/
// Disable in Mobile
/******************/
$wp_customize->add_setting( 'open_shop_whislist_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'open_shop_whislist_mobile_disable', array(
                'label'                 => esc_html__('Check to disable Wishlist icon in mobile device', 'open-shop'),
                'type'                  => 'checkbox',
                'section'               => 'open-shop-main-header',
                'settings'              => 'open_shop_whislist_mobile_disable',
                'priority'   => 10,
            ) ) );

$wp_customize->add_setting( 'open_shop_account_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'open_shop_account_mobile_disable', array(
                'label'                 => esc_html__('Check to disable account icon in mobile device', 'open-shop'),
                'type'                  => 'checkbox',
                'section'               => 'open-shop-main-header',
                'settings'              => 'open_shop_account_mobile_disable',
                'priority'   => 12,
            ) ) );

$wp_customize->add_setting( 'open_shop_cart_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'open_shop_cart_mobile_disable', array(
                'label'                 => esc_html__('Check to disable cart icon in mobile device', 'open-shop'),
                'type'                  => 'checkbox',
                'section'               => 'open-shop-main-header',
                'settings'              => 'open_shop_cart_mobile_disable',
                'priority'   => 13,
            ) ) );

/****************/
//doc link
/****************/
$wp_customize->add_setting('open_shop_main_header_doc_learn_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_main_header_doc_learn_more',
            array(
        'section'    => 'open-shop-main-header',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/open-shop/#main-header',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));
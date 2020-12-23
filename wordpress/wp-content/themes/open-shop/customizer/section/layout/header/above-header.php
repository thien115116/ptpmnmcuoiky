<?php
/**
 * Header Options for  Open Shop Theme.
 * @package      Open Shop
 * @author      ThemeHunk
 * @copyright   Copyright (c) 2018,  Open Shop
 * @since       Open Shop 1.0.0
 */
//above header
$wp_customize->add_setting( 'open_shop_above_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'open_shop_above_mobile_disable', array(
                'label'                 => esc_html__('Disable in mobile', 'open-shop'),
                'type'                  => 'checkbox',
                'section'               => 'open-shop-above-header',
                'settings'              => 'open_shop_above_mobile_disable',
                'priority'   => 1,
            ) ) );
// choose col layout
if(class_exists('Open_Shop_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'open_shop_above_header_layout', array(
                'default'           => 'abv-none',
                'sanitize_callback' => 'open_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Open_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'open_shop_above_header_layout', array(
                    'label'    => esc_html__( 'Layout', 'open-shop' ),
                    'section'  => 'open-shop-above-header',
                    'choices'  => array(
                       'abv-none'   => array(
                            'url' => OPEN_SHOP_TOP_HEADER_LAYOUT_NONE,
                        ),
                        'abv-one'   => array(
                            'url' => OPEN_SHOP_TOP_HEADER_LAYOUT_1,
                        ),
                        'abv-two' => array(
                            'url' => OPEN_SHOP_TOP_HEADER_LAYOUT_2,
                        ),
                        'abv-three' => array(
                            'url' => OPEN_SHOP_TOP_HEADER_LAYOUT_3,
                        ),
                    ),
                )
            )
        );
    } 
// col1
$wp_customize->add_setting('open_shop_above_header_col1_set', array(
        'default'        => 'text',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
$wp_customize->add_control( 'open_shop_above_header_col1_set', array(
        'settings' => 'open_shop_above_header_col1_set',
        'label'   => __('Column 1','open-shop'),
        'section' => 'open-shop-above-header',
        'type'    => 'select',
        'choices'    => array(
        'none'       => __('None','open-shop'),
        'text'       => __('Text','open-shop'),
        'menu'       => __('Menu','open-shop'),
        'widget'     => __('Widget','open-shop'),
        'social'     => __('Social Media','open-shop'),
            
        ),
    ));
// col1-text/html
$wp_customize->add_setting('open_shop_col1_texthtml', array(
        'default'           => __('Add your content here','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
        
    ));
$wp_customize->add_control('open_shop_col1_texthtml', array(
        'label'    => __('Text', 'open-shop'),
        'section'  => 'open-shop-above-header',
        'settings' => 'open_shop_col1_texthtml',
         'type'    => 'text',
    ));
// col1 widget redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col1_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col1_widget_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Widget', 'open-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect-col1',  
                )
            )
        );
} 
// col1 menu redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col1_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col1_menu_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Menu', 'open-shop' ),
                    'button_class' => 'focus-customizer-menu-redirect-col1',  
                )
            )
        );
} 
// col1 social media redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col1_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col1_social_media_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Social Media', 'open-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col1',  
                )
            )
        );
} 
// col2
$wp_customize->add_setting('open_shop_above_header_col2_set', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
$wp_customize->add_control( 'open_shop_above_header_col2_set', array(
        'settings' => 'open_shop_above_header_col2_set',
        'label'   => __('Column 2','open-shop'),
        'section' => 'open-shop-above-header',
        'type'    => 'select',
        'choices'    => array(
        'none'                 => __('None','open-shop'),
        'text'             => __('Text','open-shop'),
        'menu'                 => __('Menu','open-shop'),
        'widget'                 => __('Widget','open-shop'),
        'social'             => __('Social Media','open-shop'),
            
        ),
    ));
// col2-text/html
$wp_customize->add_setting('open_shop_col2_texthtml', array(
        'default'           => __('Add your content here','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
        
    ));
$wp_customize->add_control('open_shop_col2_texthtml', array(
        'label'    => __('Text', 'open-shop'),
        'section'  => 'open-shop-above-header',
        'settings' => 'open_shop_col2_texthtml',
         'type'    => 'text',
    ));
// col2 menu redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col2_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col2_menu_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Menu', 'open-shop' ),
                    'button_class' => 'focus-customizer-menu-redirect-col2',  
                )
            )
        );
} 
// col2 widget redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col2_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col2_widget_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Widget', 'open-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect-col2',  
                )
            )
        );
}    
// col2 social media redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col2_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col2_social_media_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Social Media', 'open-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col2',  
                )
            )
        );
} 
// col3
$wp_customize->add_setting('open_shop_above_header_col3_set', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
$wp_customize->add_control( 'open_shop_above_header_col3_set', array(
        'settings' => 'open_shop_above_header_col3_set',
        'label'   => __('Column 3','open-shop'),
        'section' => 'open-shop-above-header',
        'type'    => 'select',
        'choices'    => array(
        'none'                 => __('None','open-shop'),
        'text'             => __('Text','open-shop'),
        'menu'                 => __('Menu','open-shop'),
        'widget'                 => __('Widget','open-shop'),
        'social'             => __('Social Media','open-shop'),
            
        ),
    ));

// col3-text/html
$wp_customize->add_setting('open_shop_col3_texthtml', array(
        'default'           => __('Add your content here','open-shop'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
        
    ));
$wp_customize->add_control('open_shop_col3_texthtml', array(
        'label'    => __('Text', 'open-shop'),
        'section'  => 'open-shop-above-header',
        'settings' => 'open_shop_col3_texthtml',
         'type'    => 'text',
    ));
// col3 social media redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col3_social_media_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col3_social_media_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Social Media', 'open-shop' ),
                    'button_class' => 'focus-customizer-social_media-redirect-col3',  
                )
            )
        );
} 
// col3 menu redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col3_menu_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col3_menu_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Menu', 'open-shop' ),
                    'button_class' => 'focus-customizer-menu-redirect-col3',  
                )
            )
        );
}
// col3 widget redirection
if (class_exists('Open_Shop_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'open_shop_col3_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     ));
$wp_customize->add_control(
            new Open_Shop_Widegt_Redirect(
                $wp_customize, 'open_shop_col3_widget_redirect', array(
                    'section'      => 'open-shop-above-header',
                    'button_text'  => esc_html__( 'Go To Widget', 'open-shop' ),
                    'button_class' => 'focus-customizer-widget-redirect-col3',  
                )
            )
        );
}
/****************************/
// common option
/****************************/
if ( class_exists( 'Open_Shop_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting('open_shop_abv_hdr_hgt', array(
        'sanitize_callback' => 'open_shop_sanitize_range_value',
        'default'           => '35',
        'transport'         => 'postMessage',
            ));
$wp_customize->add_control(
            new Open_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'open_shop_abv_hdr_hgt', array(
                    'label'       => esc_html__( 'Height', 'open-shop' ),
                    'section'     => 'open-shop-above-header',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 20,
                        'max'  => 1000,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
);

$wp_customize->add_setting('open_shop_abv_hdr_botm_brd', array(
        'sanitize_callback' => 'open_shop_sanitize_range_value',
        'default'           => '0',
        'transport'         => 'postMessage',
            ));
$wp_customize->add_control(
            new Open_Shop_WP_Customizer_Range_Value_Control(
                $wp_customize, 'open_shop_abv_hdr_botm_brd', array(
                    'label'       => esc_html__( 'Bottom Border', 'open-shop' ),
                    'section'     => 'open-shop-above-header',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 200,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
);
}
// border-color
$wp_customize->add_setting('open_shop_above_brdr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'open_shop_sanitize_color'
    ));
$wp_customize->add_control( 
    new  Open_Shop_Customizer_Color_Control($wp_customize,'open_shop_above_brdr_clr', array(
        'label'      => __('Border Color', 'open-shop' ),
        'section'    => 'open-shop-above-header',
        'settings'   => 'open_shop_above_brdr_clr',
    ) ) );  

/****************/
//doc link
/****************/
$wp_customize->add_setting('open_shop_abv_header_doc_learn_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_abv_header_doc_learn_more',
            array(
        'section'    => 'open-shop-above-header',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/open-shop/#above-header',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));
<?php
/**
 *Blog Option
 /*******************/
//blog post content
/*******************/
    $wp_customize->add_setting('open_shop_blog_post_content', array(
        'default'        => 'excerpt',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('open_shop_blog_post_content', array(
        'settings' => 'open_shop_blog_post_content',
        'label'   => __('Blog Post Content','open-shop'),
        'section' => 'open-shop-section-blog-group',
        'type'    => 'select',
        'choices'    => array(
        'full'   => __('Full Content','open-shop'),
        'excerpt' => __('Excerpt Content','open-shop'), 
        'nocontent' => __('No Content','open-shop'), 
        ),
         'priority'   =>9,
    ));
    // excerpt length
    $wp_customize->add_setting('open_shop_blog_expt_length', array(
			'default'           =>'30',
            'capability'        => 'edit_theme_options',
			'sanitize_callback' =>'open_shop_sanitize_number',
		)
	);
	$wp_customize->add_control('open_shop_blog_expt_length', array(
			'type'        => 'number',
			'section'     => 'open-shop-section-blog-group',
			'label'       => __( 'Excerpt Length', 'open-shop' ),
			'input_attrs' => array(
				'min'  => 0,
				'step' => 1,
				'max'  => 3000,
			),
             'priority'   =>10,
		)
	);
	// read more text
    $wp_customize->add_setting('open_shop_blog_read_more_txt', array(
			'default'           =>'Read More',
            'capability'        => 'edit_theme_options',
			'sanitize_callback' =>'open_shop_sanitize_text',
            'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control('open_shop_blog_read_more_txt', array(
			'type'        => 'text',
			'section'     => 'open-shop-section-blog-group',
			'label'       => __( 'Read More Text', 'open-shop' ),
			'settings' => 'open_shop_blog_read_more_txt',
             'priority'   =>11,
			
		)
	);
    /*********************/
    //blog post pagination
    /*********************/
   $wp_customize->add_setting('open_shop_blog_post_pagination', array(
        'default'        => 'num',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('open_shop_blog_post_pagination', array(
        'settings' => 'open_shop_blog_post_pagination',
        'label'   => __('Post Pagination','open-shop'),
        'section' => 'open-shop-section-blog-group',
        'type'    => 'select',
        'choices' => array(
        'num'     => __('Numbered','open-shop'),
        'click'   => __('Load More (Pro)','open-shop'), 
        'scroll'  => __('Infinite Scroll (Pro)','open-shop'), 
        ),
        'priority'   =>13,
    ));
/****************/
//blog doc link
/****************/
$wp_customize->add_setting('open_shop_blog_arch_learn_more', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_blog_arch_learn_more',
            array(
        'section'    => 'open-shop-section-blog-group',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/open-shop/#blog-setting',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));
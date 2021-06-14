<?php 

if ( class_exists("Kirki")){

	Kirki::add_panel( 'misbah_blog_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'misbah-blog' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'misbah_blog_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'misbah-blog' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'misbah-blog' ),
	    'panel'          => 'misbah_blog_panel_id',
	    'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_enable_socail_link',
		'section'     => 'misbah_blog_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'misbah_blog_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'misbah-blog' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'misbah-blog' ),
		'settings'     => 'misbah_blog_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'misbah-blog' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'misbah-blog' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'misbah-blog' ),
				'description' => esc_html__( 'Add the social icon url here.', 'misbah-blog' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_enable_search',
		'section'     => 'misbah_blog_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'misbah_blog_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'misbah-blog' ),
		'section'     => 'misbah_blog_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'misbah-blog' ),
			'off' => esc_html__( 'Disable', 'misbah-blog' ),
		],
	] );

	// SLIDER BLOG SECTION

	Kirki::add_section( 'misbah_blog_blog_slide_section', array(
        'title'          => esc_html__( ' Blog Slider Settings', 'misbah-blog' ),
        'description'    => esc_html__( 'You have to select post category to show blog slider.', 'misbah-blog' ),
        'panel'          => 'misbah_blog_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_enable_heading',
		'section'     => 'misbah_blog_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Blog Slider', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'misbah_blog_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'misbah-blog' ),
		'section'     => 'misbah_blog_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'misbah-blog' ),
			'off' => esc_html__( 'Disable', 'misbah-blog' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_slider_heading',
		'section'     => 'misbah_blog_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Slider', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'misbah_blog_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'misbah-blog' ),
		'section'     => 'misbah_blog_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'misbah_blog_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show blog slider ( Image Dimension 1600 x 600 )', 'misbah-blog' ),
		'section'     => 'misbah_blog_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'misbah-blog' ),
		'priority'    => 10,
		'choices'     => misbah_blog_get_categories_select(),
	] );

	// SIDE BLOG SECTION

	Kirki::add_section( 'misbah_blog_blog_multiple_section', array(
        'title'          => esc_html__( 'Side Blog Settings', 'misbah-blog' ),
        'description'    => esc_html__( 'You have to select post category to show side blog post.', 'misbah-blog' ),
        'panel'          => 'misbah_blog_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_multiple_enable_heading',
		'section'     => 'misbah_blog_blog_multiple_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Side Blog Post', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'misbah_blog_blog_multiple_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'misbah-blog' ),
		'section'     => 'misbah_blog_blog_multiple_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'misbah-blog' ),
			'off' => esc_html__( 'Disable', 'misbah-blog' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_multiple_heading',
		'section'     => 'misbah_blog_blog_multiple_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Side Blog Post', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'misbah_blog_blog_multiple_number',
		'label'       => esc_html__( 'Number of post to show', 'misbah-blog' ),
		'section'     => 'misbah_blog_blog_multiple_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'misbah_blog_blog_multiple_category',
		'label'       => esc_html__( 'Select the category to show side blog post ( Image Dimension 450 x 200 )', 'misbah-blog' ),
		'section'     => 'misbah_blog_blog_multiple_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'misbah-blog' ),
		'priority'    => 10,
		'choices'     => misbah_blog_get_categories_select(),
	] );

	// FEATURED POST SECTION

	Kirki::add_section( 'misbah_blog_featured_post_section', array(
        'title'          => esc_html__( 'Featured Post Settings', 'misbah-blog' ),
        'description'    => esc_html__( 'You have to select post category to show featured post.', 'misbah-blog' ),
        'panel'          => 'misbah_blog_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_featured_title_heading',
		'section'     => 'misbah_blog_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Featured Post Heading', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'misbah_blog_featured_post_heading',
		'label'    => esc_html__( 'Heading', 'misbah-blog' ),
		'section'  => 'misbah_blog_featured_post_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'misbah_blog_post_heading',
		'section'     => 'misbah_blog_featured_post_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Featured Post', 'misbah-blog' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'misbah_blog_featured_post_number',
		'label'       => esc_html__( 'Number of post to show', 'misbah-blog' ),
		'section'     => 'misbah_blog_featured_post_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'misbah_blog_featured_post_category',
		'label'       => esc_html__( 'Select the category to show featured post', 'misbah-blog' ),
		'section'     => 'misbah_blog_featured_post_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'misbah-blog' ),
		'priority'    => 10,
		'choices'     => misbah_blog_get_categories_select(),
	] );
}
<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function misbah_blog_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'misbah-blog' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	misbah_blog_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'misbah_blog_register_recommended_plugins' );
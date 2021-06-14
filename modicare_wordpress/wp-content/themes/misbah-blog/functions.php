<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('misbah_blog_enqueue_scripts')) {

	function misbah_blog_enqueue_scripts() {

		$googleFontsArgs = array(
			'family' =>	str_replace('|', '%7C','Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'),
			'subset' =>	'latin,latin-ext'
		);

		wp_enqueue_style('google-fonts', add_query_arg ( $googleFontsArgs, "https://fonts.googleapis.com/css" ), array(), '1.0.0' );

		wp_enqueue_style(
			'bootstrap-css',
			esc_url( get_template_directory_uri() ) . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			esc_url( get_template_directory_uri() ) . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			esc_url( get_template_directory_uri() ) . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('misbah-blog-style', get_stylesheet_uri(), array() );

		wp_enqueue_style(
			'misbah-blog-media-css',
			esc_url( get_template_directory_uri() ) . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'misbah-blog-navigation',
			esc_url( get_template_directory_uri() ) . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',
			esc_url( get_template_directory_uri() ) . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'misbah-blog-script',
			esc_url( get_template_directory_uri() ) . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$css = '';

		if ( get_header_image() ) :

			$css .=  '
				header.header {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'misbah-blog-style', $css );

	}

	add_action( 'wp_enqueue_scripts', 'misbah_blog_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('misbah_blog_after_setup_theme')) {

	function misbah_blog_after_setup_theme() {

		if ( ! isset( $content_width ) ) $content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'misbah-blog' ),
		));

		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
		) );

		add_theme_support( 'custom-header', array(
			'width' => 1920,
			'height' => 100
		));

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'misbah_blog_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('misbah_blog_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function misbah_blog_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'misbah-blog'); 
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'misbah-blog'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'misbah-blog'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'misbah-blog' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'misbah-blog'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for misbah_blog_comment()

if (!function_exists('misbah_blog_widgets_init')) {

	function misbah_blog_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Front Page Sidebar','misbah-blog'),
			'id'   => 'misbah-blog-front-page-sidebar',
			'description'   => esc_html__('This sidebar will be shown on home page next to the content.', 'misbah-blog'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Sidebar','misbah-blog'),
			'id'   => 'misbah-blog-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'misbah-blog'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','misbah-blog'),
			'id'   => 'misbah-blog-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'misbah-blog'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'misbah_blog_widgets_init' );

}

function misbah_blog_get_categories_select() {
	$teh_cats = get_categories();
	$results;
	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
	if (isset($teh_cats[$i]))
  		$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'misbah-blog' ); ?></a>

<header id="site-navigation" class="header">
	<div class="container">
		<div class="row">
		    <div class="col-lg-5 col-md-5">
		    	<div class="logo">
			    	<div class="logo-image mr-3">
				    	<?php echo esc_url( the_custom_logo() ); ?>
				    </div>
				    <div class="logo-content">
				    	<?php 
				      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
				      			echo esc_attr(get_bloginfo('name'));
				      		echo '</a>';
				      		echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
					    ?>
					</div>
				</div>
		    </div>
		    <div class="col-lg-7 col-md-7">
		    	<?php $misbah_blog_settings = get_theme_mod( 'misbah_blog_social_links_settings' ); ?>
				<div class="social-links my-4">
					<?php if ( is_array($misbah_blog_settings) || is_object($misbah_blog_settings) ){ ?>
			            <?php foreach( $misbah_blog_settings as $misbah_blog_setting ) { ?>
					        <a href="<?php echo esc_url( $misbah_blog_setting['link_url'] ); ?>">
					            <i class="<?php echo esc_attr( $misbah_blog_setting['link_text'] ); ?> mr-3"></i>
					        </a>
					    <?php } ?>
					<?php } ?>
				</div>
		    </div>
		</div>
	</div>
	<div class="menu-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 col-md-11 col-6">
					<?php if(has_nav_menu('main-menu')){ ?>
						<button class="menu-toggle my-2 p-2" aria-controls="top-menu" aria-expanded="false" type="button">
							<span aria-hidden="true"><?php esc_html_e( 'Menu', 'misbah-blog' ); ?></span>
						</button>
						<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
							<button class="close-menu my-2 p-2" type="button">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</nav>
					<?php }?>
				</div>
				<div class="col-lg-1 col-md-1 col-6">
					<?php if ( get_theme_mod('misbah_blog_search_box_enable', true) == true ) : ?>
	                    <div class="header-search my-2"> 
	                        <a class="open-search-form" href="#search-form"><i class="fa fa-search p-3" aria-hidden="true"></i></a>
	                        <div class="search-form"><?php get_search_form();?></div>
	                    </div>
	                <?php endif; ?>
				</div>
			</div>	
	    </div>
	</div>
</header>
<?php 

/* Template Name: Front Page Template */

get_header(); ?>

<div id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9 col-md-8 pl-lg-0 pl-md-0">
				<?php get_template_part( 'core/sections/blog_slider' ); ?>
			</div>
			<div class="col-lg-3 col-md-4 p-lg-0 p-md-0">
				<?php get_template_part( 'core/sections/blog_multiple' ); ?>
			</div>
		</div>
	</div>

	<div class="container my-5">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<?php get_template_part( 'core/sections/featured_post' ); ?>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="sidebar-area">
					<?php dynamic_sidebar('misbah-blog-front-page-sidebar'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
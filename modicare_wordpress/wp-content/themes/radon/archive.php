<?php 
/**
 * This is main template file
 *
 */

get_header();

radon_breadcrumbs();

?>
	<section class="rdn-main-content">

		<div class="container">

			<div class="row">
				
				<div class="col-md-8">
					
					<?php if( have_posts() ): ?>

						<header class="page-header">

							<?php

								the_archive_title( '<h1 class="page-title">', '</h1>' );

								the_archive_description( '<div class="taxonomy-description">', '</div>' );

							?>

						</header><!-- .page-header -->

					<?php

						while( have_posts() ): the_post();

							get_template_part('content','');

						endwhile;

					else:

						get_template_part('content','none');

					endif;
										
					// Previous/next page navigation.

					the_posts_pagination( array(
					'prev_text'          => __('<i class="fas fa-angle-double-left"></i>','radon'),
					'next_text'          => __('<i class="fas fa-angle-double-right"></i>','radon'),
					'type'               => 'list'
					) );

					?>

				</div>
				
				<?php get_sidebar(); ?>
				
			</div>

		</div>

	</section>
	
<?php get_footer(); ?>
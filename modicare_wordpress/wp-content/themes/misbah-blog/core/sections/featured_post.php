<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('misbah_blog_featured_post_category'),
  'posts_per_page' => get_theme_mod('misbah_blog_featured_post_number'),
); ?>

<div class="featured_post">
  <?php if ( get_theme_mod('misbah_blog_featured_post_heading') ) : ?>
    <h3 class="p-3"><?php echo esc_html( get_theme_mod('misbah_blog_featured_post_heading' ) ); ?></h3>
  <?php endif; ?>
  <?php $arr_posts = new WP_Query( $args );
  if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
      $arr_posts->the_post();
      ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4 p-3'); ?>>
        <div class="row">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="col-lg-5 col-md-5">
              <div class="post-thumbnail">
                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
                  <?php
                    the_post_thumbnail();
                  ?>
                </a>
              </div>
            </div>
          <?php }?>
          <div class="<?php if(has_post_thumbnail()) { ?>col-lg-7 col-md-7" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
            <h4 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
            <div class="post-meta mb-2">
              <i class="far fa-clock"></i>
              <?php
                esc_html_e(' Posted On ','misbah-blog');
                echo esc_attr(get_the_date());
              ?>
            </div>
            <div class="post-content">
              <?php the_excerpt(); ?>
            </div>
            <div class="post-meta">
              <?php echo get_avatar( get_the_author_meta('ID'), 40); ?>
              <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
              <span class="ml-3"><i class="far fa-comments"></i> <?php comments_number( esc_attr('0', 'misbah-blog'), esc_attr('0', 'misbah-blog'), esc_attr('%', 'misbah-blog') ); ?></span>
            </div>
          </div>
        </div>
      </div>
    <?php
  endwhile;
  wp_reset_postdata();
  endif; ?>
</div>
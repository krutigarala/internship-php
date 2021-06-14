<?php if ( get_theme_mod('misbah_blog_blog_multiple_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('misbah_blog_blog_multiple_category'),
  'posts_per_page' => get_theme_mod('misbah_blog_blog_multiple_number'),
); ?>

<div class="multiple_blog">
  <?php $multiple_arr_posts = new WP_Query( $args );
  if ( $multiple_arr_posts->have_posts() ) :
    while ( $multiple_arr_posts->have_posts() ) :
      $multiple_arr_posts->the_post();
      ?>
      <div class="blog_box mb-3">
        <?php
          if ( has_post_thumbnail() ) :
            the_post_thumbnail();
          endif;
        ?>
        <div class="blog_inner_box p-4">
          <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
          <div class="post-meta mb-3">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a> | <?php echo esc_attr(get_the_date()); ?>
          </div>
          <div class="post-meta">
            <span><i class="far fa-comments"></i> <?php comments_number( esc_attr('0', 'misbah-blog'), esc_attr('0', 'misbah-blog'), esc_attr('%', 'misbah-blog') ); ?></span>
          </div>
        </div>
      </div>
    <?php
  endwhile;
  wp_reset_postdata();
  endif; ?>
</div>

<?php endif; ?>
<?php if ( get_theme_mod('misbah_blog_blog_box_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('misbah_blog_blog_slide_category'),
  'posts_per_page' => get_theme_mod('misbah_blog_blog_slide_number'),
); ?>

<div class="owl-carousel">
  <?php $arr_posts = new WP_Query( $args );
  if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
      $arr_posts->the_post();
      ?>
      <div class="blog_box">
        <?php
          if ( has_post_thumbnail() ) :
            the_post_thumbnail();
          endif;
        ?>
        <div class="blog_inner_box p-3 p-lg-4 p-md-4">
          <div class="post-cat mb-3">
            <?php
              foreach((get_the_category()) as $category) {
                $misbah_blog_catname =$category->cat_name;
                ?> <span><?php echo esc_html($misbah_blog_catname); ?></span> <?php
              }
            ?>
          </div>
          <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
          <div class="post-meta mb-3">
            <i class="far fa-clock"></i>
            <?php
              esc_html_e(' Posted On ','misbah-blog');
              echo esc_attr(get_the_date());
            ?>
          </div>
          <div class="post-meta">
            <?php echo get_avatar( get_the_author_meta('ID'), 40); ?>
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
            <span class="ml-3"><i class="far fa-comments"></i> <?php comments_number( esc_attr('0', 'misbah-blog'), esc_attr('0', 'misbah-blog'), esc_attr('%', 'misbah-blog') ); ?></span>
          </div>
        </div>
      </div>
    <?php
  endwhile;
  wp_reset_postdata();
  endif; ?>
</div>

<?php endif; ?>
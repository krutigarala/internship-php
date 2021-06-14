<?php
	the_posts_pagination( array(
		'prev_text' => esc_html__( 'Previous page', 'misbah-blog' ),
		'next_text' => esc_html__( 'Next page', 'misbah-blog' ),
	) );
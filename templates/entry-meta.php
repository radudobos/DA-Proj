<time datetime="<?php echo get_post_time('c', true); ?>"><?php echo get_the_date(); ?></time>
<p><?php echo __('By', 'sage'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a></p>

<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<div class="wrap container" role="document">
    <div class="content row">
        <main class="main">
            <?php while (have_posts()) : the_post(); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('templates/page', 'header'); ?>
                    
                    <?php if (!have_posts()) : ?>
                        <div class="alert alert-warning">
                            <?php _e('Sorry, no results were found.', 'sage'); ?>
                        </div>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
                    
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                    <?php endwhile; ?>
                    
                    <?php the_posts_navigation(); ?>
                <?php endwhile; ?>
            <?php endwhile; ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
                <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
        <?php endif; ?>
    </div><!-- /.content -->
</div><!-- /.wrap -->
<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<div class="wrap container" role="document">
    <div class="content row">
        <main class="main">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('templates/page', 'header'); ?>
                <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
                <?php include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
        <?php endif; ?>
    </div><!-- /.content -->
</div><!-- /.wrap -->
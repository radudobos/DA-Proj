<?php
/**
 * Register sidebars and widgets
 */

function widgets_init() {
	register_sidebar([
		'name'          => __('Primary', 'sage'),
		'id'            => 'sidebar-primary',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);

	register_sidebar([
		'name'          => __('Footer 1', 'sage'),
		'id'            => 'sidebar-footer-1',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	
	register_sidebar([
		'name'          => __('Footer 2', 'sage'),
		'id'            => 'sidebar-footer-2',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	
	register_sidebar([
		'name'          => __('Footer 3', 'sage'),
		'id'            => 'sidebar-footer-3',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

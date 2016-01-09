<?php 

function resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'resources');

// nav

register_nav_menus(array(
	'primary' => __('Primary'),
	'footer' => __('Secondary'),
));


// Custom excerpt length

function myExcerpt_length(){
	return 30;
}
add_filter('excerpt_length', 'myExcerpt_length');


// Featured image

function featuredimg(){
	add_theme_support('post-thumbnails');
	add_image_size('banner', 550, 350, true);
}
add_action('after_setup_theme', 'featuredimg');

?>
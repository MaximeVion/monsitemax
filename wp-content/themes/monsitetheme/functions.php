<?php 

function monSiteTest_ressources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action ('wp_enqueue_scripts', 'monSiteTest_ressources');


// Get top ancestor
function get_top_ancestor_id(){

	global $post;

	if($post->post_parent){
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors [0];

	}

	return $post->ID;

}

//Does Page Has Children

function has_children(){
	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
}

// Customize exerpt word count length

function custome_excerpt_length(){
	return 25;
 }
 add_filter('excerpt_length' , 'custome_excerpt_length');


// Theme Setup
function monSiteMax_setup(){

	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu' ),
		'footer' => __( 'Footer Menu' )
		));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
}

add_action('after_setup_theme', 'monSiteMax_setup');

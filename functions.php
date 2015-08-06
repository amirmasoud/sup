<?php

	if(function_exists('register_sidebar')){

		register_sidebar(array(

			'name'=>'sidebar',

			'id'=>'sidebar-widget',

			'description'=>'Widgets for the sidebar.', 

			'before_widget'=>'<div id="%1$s" class="widget %2$s">',

			'after_widget'=>'</div>',

			'before_title'=>'<h2 class="title">',

			'after_title'=>'</h2>'

		));		

	}	


	function new_excerpt_more($more) {

		global $post;

		return ' . . . <a href="'. get_permalink($post->ID) . '">ادامه مطلب</a>';

	}

	add_filter('excerpt_more', 'new_excerpt_more');

function chakosh_enqueue_scripts() {
    if ( ! is_admin() ) {
        wp_enqueue_script( 'jquery' );
    }
}
//add_action( 'wp_enqueue_scripts', 'chakosh_enqueue_scripts' );
function theme_queue_js(){
if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
  wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'theme_queue_js');
?>
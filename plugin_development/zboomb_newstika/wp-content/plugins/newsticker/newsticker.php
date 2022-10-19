<?php
/*
Plugin Name: newsticker
Plugin URI: https://bdprogrammers.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 5.0
Author: jannat
Author URI: https://automattic.com/wordpress-plugins/
License: GPL2
*/


function Newsticker_plugin(){
	wp_enqueue_style( 'news_style', plugins_url('/css/eocjs-newsticker.css',__FILE__) );
	wp_enqueue_script( 'news_script', plugins_url('/js/eocjs-newsticker.js', __FILE__), array(), '1.0.0', true );

    wp_enqueue_script( 'newsCustom', plugins_url('/js/custom.js', __FILE__),
 array(), '1.0.0', true);

 $sql = new WP_Query(array(
    'post_type'=>'news',
    'posts_per_page'=>3
 ));
$content = '<div id="ticket">';
if($sql->have_posts()):
    while($sql->have_posts()):
        $sql->the_post();
        $content .= get_the_title()."***";
   
    endwhile;
    endif;
    
return $content .='</div>';


echo('<div id="ticker">The quick brown fox jumps over the lazy dog</div>');

}
function book_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Breaking News', 'textdomain' ),
        'menu_icon' => 'dashicons-book',
        'supprt'=>array('title'),
    );
    register_post_type( 'news', $args );
}
add_action( 'init', 'book_setup_post_type' );



add_shortcode( 'addnews', 'Newsticker_plugin' );
// add_action( 'wp_enqueue_scripts', 'Newsticker_plugin');





<?php
add_theme_support('post-thumbnails');


function basic_theme_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme','basic_theme_support');
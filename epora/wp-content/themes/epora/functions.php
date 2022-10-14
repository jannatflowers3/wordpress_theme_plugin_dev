<?php
include_once('nav_menu_walker.php');

add_theme_support( 'post-thumbnail' );
register_nav_menus( array(
    'Main_menu'=>'Main Menu',
  'category_menu'=> 'category Menu',
    'footer menu'=> 'Footer Bar',
));



//all css js plugin add
function epora_load_scripts() {
    //css plugin
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',  array(), '5.1.3' ,'all');
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css',  array(), '2.0.7','all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css',  array(), '','all');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css',  array(), '','all');

        wp_enqueue_style( 'backtotop', get_template_directory_uri() . '/assets/css/backtotop.css',  array(), '' ,'all');
    wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css',  array(), '','all');
           wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css',  array(), '' ,'all');
        wp_enqueue_style( 'ui-icon', get_template_directory_uri() . '/assets/css/ui-icon.css',  array(), '','all');
    wp_enqueue_style( 'elegentfonts', get_template_directory_uri() . '/assets/css/elegentfonts.css',  array(), '','all');
      wp_enqueue_style( 'font-awesomet', get_template_directory_uri() . '/assets/css/font-awesome-pro.css',  array(), '','all');
    wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css">',  array(), '' ,'all');
    
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css"">',  array(), '' ,'all');

    wp_enqueue_style( 'mystyle', get_stylesheet_uri());

//js plugin
 wp_enqueue_script( 'jquer_epora', get_template_directory_uri() . '/assets/js/vendor/jquery.js',  array(), '3.6.0', true );
 wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/vendor/waypoints.js',  array(), '4.0.0', true );
     wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array(), '5.1.0', true );
     wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '2.0.8', true );
wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array(), '', true );
wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array(),'1.1.0', true );
 wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), '', true );
  wp_enqueue_script( 'backtotop', get_template_directory_uri() . '/assets/js/backtotop.js', array(), '', true );
      wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array(), '1.0', true );
wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.js', array(), '1.0', true );
   wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '1.0', true );
wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array(), '3.0.5', true );
wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array(),      '4.1.4', true );
 wp_enqueue_script( 'ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array(), '', true );
 wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'epora_load_scripts' );
?>
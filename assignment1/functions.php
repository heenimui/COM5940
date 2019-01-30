<?php
function louie(){
  wp_enqueue_script('louie-js',get_theme_file_uri('/js/main.js'),NULL,'1.0',true);
  wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
}


add_theme_support('post-thumbnails');
add_theme_support('menus');

?>

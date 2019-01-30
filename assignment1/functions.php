<?php
function louie(){
  wp_enqueue_script('louie-js',get_theme_file_uri('/js/main.js'),NULL,'1.0',true);
  wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
}

function updateNumbers() {
    /* numbering the published posts, starting with 1 for oldest;
    / creates and updates custom field 'incr_number';
    / to show in post (within the loop) use <?php echo get_post_meta($post->ID,'incr_number',true); ?>
    / alchymyth 2010 */
    global $wpdb;
    $querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts
                 WHERE $wpdb->posts.post_status = 'publish'
                 AND $wpdb->posts.post_type = 'post'
                 ORDER BY $wpdb->posts.post_date ASC";
    $pageposts = $wpdb->get_results($querystr, OBJECT);
    $counts = 0 ;
    if ($pageposts):
    foreach ($pageposts as $post):
        $counts++;
        add_post_meta($post->ID, 'incr_number', $counts, true);
        update_post_meta($post->ID, 'incr_number', $counts);
    endforeach;
endif;
}

require_once('wp-bootstrap-navwalker.php');

register_nav_menus(array(
  'primary'=>_('Primary Menu')
));

add_theme_support('post-thumbnails');
add_theme_support('menus');

?>

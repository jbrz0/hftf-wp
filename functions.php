<?php



if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');



}

// Register HTML5 Blank Navigation
// function register_th_menu()
// {
//     register_nav_menus(array( // Using array to specify more menus if needed
//         'header-menu' => __('Header Menu', 'travelers-haven'), // Main Navigation
//         'sidebar-menu' => __('Sidebar Menu', 'travelers-haven'), // Sidebar Navigation
//     ));
// }
// HTML5 Blank navigation
// function th_nav()
// {
// 	wp_nav_menu(
// 	array(
// 		'theme_location'  => 'header-menu',
// 		'menu'            => '',
// 		'container'       => false,
// 		'container_class' => '',
// 		'container_id'    => '',
// 		'menu_class'      => 'menu',
// 		'menu_id'         => '',
// 		'echo'            => true,
// 		'fallback_cb'     => 'wp_page_menu',
// 		'before'          => '',
// 		'after'           => '',
// 		'link_before'     => '',
// 		'link_after'      => '',
// 		'items_wrap'      => '%3$s',
// 		'depth'           => 0,
// 		'walker'          => ''
// 		)
// 	);
// }
// add_action('init', 'register_th_menu');

// Remove the <div> surrounding the dynamic navigation to cleanup markup
// function my_wp_nav_menu_args($args = '')
// {
//     $args['container'] = false;
//     return $args;
// }
// add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');

// Add active class to current page in menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// Custom Field template for showreel
function getCustomField($theField) {
    global $post;
    $block = get_post_meta($post->ID, $theField);
    if($block){
        foreach(($block) as $blocks) {
            echo $blocks;
        }
    }
}


// Remove default image link in dashboard
function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);



// Edit exerpt OR word lentgth - functions.php
// use in theme -> echo excerpt(20)
// use in theme -> echo content(20)

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).' [...]';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

// Home page title length
// function max_title_length($title){
//      $max = 24;
//     return substr( $title, 0, $max ). "&nbsp;&nbsp;&nbsp;";
// }

// add_action('init','yoursite_init');
// function yoursite_init() {
//   global $wp_rewrite;
//                 add_rewrite_rule("author/([^/]+)/page/?([0-9]{1,})/?$",'index.php?author_name=$matches[1]&paged=$matches[2]','top');
//                 add_rewrite_rule("(.+?)/page/?([0-9]{1,})/?$",'index.php?category_name=$matches[1]&paged=$matches[2]','top');
//                 $wp_rewrite->flush_rules(false);
// }


?>

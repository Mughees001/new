 <?php function setup(){
  // stylesheets
  wp_enqueue_style('fontscs',get_template_directory_uri().'/fonts/icomoon/style.css',array(),false,'all');
  wp_enqueue_style('bootstrapcs',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
  wp_enqueue_style('jquerycs',get_template_directory_uri().'/css/jquery-ui.css',array(),false,'all');
  wp_enqueue_style('owl.carouselcs',get_template_directory_uri().'/css/owl.carousel.min.css',array(),false,'all');
  wp_enqueue_style('owl.themecs',get_template_directory_uri().'/css/owl.theme.default.min.css',array(),false,'all');
  wp_enqueue_style('jquery.fancyboxcs',get_template_directory_uri().'/css/jquery.fancybox.min.css',array(),false,'all');
  wp_enqueue_style('bootstrap-datepickercs',get_template_directory_uri().'/css/bootstrap-datepicker.css',array(),false,'all');
  wp_enqueue_style('flaticoncs',get_template_directory_uri().'/fonts/flaticon/font/flaticon.css',array(),false,'all');
  wp_enqueue_style('aoscs',get_template_directory_uri().'/css/aos.css',array(),false,'all');
  wp_enqueue_style('jquery.mbcs',get_template_directory_uri().'/css/jquery.mb.YTPlayer.min.css',array(),false,'all');
  wp_enqueue_style('stylecsscs',get_template_directory_uri().'/css/style.css',array(),false,'all');
  wp_enqueue_style('bootstrapcs',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');

  // our customs links css
  wp_enqueue_style('custom-style',get_stylesheet_uri(),null,microtime(),false);

// jquery
 wp_enqueue_script('jquery-3jq',get_template_directory_uri().'/js/jquery-3.3.1.min.js',array(),false,'all');
 wp_enqueue_script('jquery-migratejq',get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js',array(),false,'all');
 wp_enqueue_script('jquery-uijq',get_template_directory_uri().'/js/jquery-ui.js',array(),false,'all');
 wp_enqueue_script('popperjq',get_template_directory_uri().'/js/popper.min.js',array(),false,'all');
 wp_enqueue_script('bootstrap.min.jsjq',get_template_directory_uri().'/js/bootstrap.min.js',array(),false,'all');
 wp_enqueue_script('owl.carouseljq',get_template_directory_uri().'/js/owl.carousel.min.js',array(),false,'all');
 wp_enqueue_script('jquery.stellarjq',get_template_directory_uri().'/js/jquery.stellar.min.js',array(),false,'all');
 wp_enqueue_script('jquery.countdownjq',get_template_directory_uri().'/js/jquery.countdown.min.js',array(),false,'all');
 wp_enqueue_script('bootstrap-datepickerjq',get_template_directory_uri().'/js/bootstrap-datepicker.min.js',array(),false,'all');
 wp_enqueue_script('jquery.easingjq',get_template_directory_uri().'/js/jquery.easing.1.3.js',array(),false,'all');
 wp_enqueue_script('aos.js',get_template_directory_uri().'/js/aos.js',array(),false,'all');
 wp_enqueue_script('jquery.fancyboxjq',get_template_directory_uri().'/js/jquery.fancybox.min.js',array(),false,'all');
 wp_enqueue_script('jquery.stickyjq',get_template_directory_uri().'/js/jquery.sticky.js',array(),false,'all');
 wp_enqueue_script('jquery.mbjq',get_template_directory_uri().'/js/jquery.mb.YTPlayer.min.js',array(),false,'all');
 wp_enqueue_script('main.jsjq',get_template_directory_uri().'/js/main.js',array(),false,'all');
// js our custom file
wp_enqueue_script('custom-main.js',get_theme_file_uri('/main.js'),null,microtime(),true);

 } 
add_action('wp_enqueue_scripts','setup');//calling function 'setup' 

function init(){
  add_theme_support('post-thumbnails');//for post images upload
  add_theme_support('title-tag');//for auto call title from setting with tag line
  add_theme_support('html5', //for html 5 attributes
    array('comment-list','comment-form','search-form')
    );
  register_sidebar();// For Widgets 
}
add_action('after_setup_theme','init');// calling init function

// Function for Menu
function create_primary_menu(){
  register_nav_menu('primary','Top Navigation');
}

add_action('init','create_primary_menu');
//End Function for Menu

// wp_nav_menu(); for display the nav menu by calling from functions.php but witout styles


// Populer posts functions begins here with base of views !!
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

 ?>
 <?php function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');
?>

<?php function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
} ?>
<?php 
// show comments function
wp_list_comments( array(
    'callback' => 'showComments'
) );?>


<?php 
// Now register the taxonomy
function custom_category(){
$custom_category = register_taxonomy('portfolio',array('portfolio'), array(
    'hierarchical' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category' ),
  ));
register_taxonomy('post',$custom_category);
}
add_action('init','custom_category');



function custom_post_type(){
  $labels = array(
    'slug'=>'portfolio',
    'name' => 'Portfolio',
    'singuler_name' => 'Portfolio',
    'add_new' => 'Add Item',
    'all_items' => 'All Items',
    'add_new_item' => 'Add Item',
    'edit_item' => 'Edit Item',
    'new_item' => 'New Item',
    'view_item' => 'View Item',
    'search_item' => 'Search Portfolio',
    'not_found' => 'No items found in',
    'not_found_in_trash' => 'No items found in trash',
    'parent_item_colon' => 'Parent Item'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicity_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions'
    ),
    'taxonomies' => array('portfolio','post_tag'),
    'menu_position' => 5,
    'exclude_from_search' => false
  );
  register_post_type('portfolio',$args);

  
 
  
}
add_action('init','custom_post_type');




?>




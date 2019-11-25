// different function codes


<?php 

// function custom_post_type(){
//   $labels = array(
//     'name' => 'Portfolio',
//     'singuler_name' => 'Portfolio',
//     'add_new' => 'Add Item',
//     'all_items' => 'All Items',
//     'add_new_item' => 'Add Item',
//     'edit_item' => 'Edit Item',
//     'new_item' => 'New Item',
//     'view_item' => 'View Item',
//     'search_item' => 'Search Portfolio',
//     'not_found' => 'No items found in',
//     'not_found_in_trash' => 'No items found in trash',
//     'parent_item_colon' => 'Parent Item'
//   );
//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'has_archive' => true,
//     'publicity_queryable' => true,
//     'query_var' => true,
//     'rewrite' => true,
//     'capability_type' => 'post',
//     'hierarchical' => false,
//     'supports' => array(
//       'title',
//       'editor',
//       'excerpt',
//       'thumbnail',
//       'revisions'
//     ),
//     'taxonomies' => array('category','post_tag'),
//     'menu_position' => 5,
//     'exclude_from_search' => false
//   );
//   register_post_type('portfolio',$args);
// }
// add_action('init','custom_post_type');




// Custom Post Type

// function custom_post_type(){
//   register_post_type('portfolio',
//   array(
//     'rewrite'=>array('slug'=>'portfolio'),
//     'labels'=>array(
//     'name'=>'Portfolios',
//     'singuler_name'=>'portfolio',
//     'add_new_item'=>'Add New Portfolio',
//     //'rating' => array('meta_key' => 'rating' , 'meta_value' => ''),
//     'edit_item'=>'Edit_Portfolio'
//       ),
//     'menu-icon'=>'dashicons-clipboard',
//     'public'=>true,
//     'has_archive'=>true,
//     'taxonomies'  => array( 'category' ),
//     'supports'=>array(
//     'title','thumbnail','description','editor','excerpt','comments'
//       )
//     )
//   );
// }
// add_action('init','custom_post_type');


?>
<!-- auto generator featured image 1 -->
<?php 

// if ( function_exists( 'add_theme_support' ) ) {

//     add_theme_support( 'post-thumbnails' ); // This should be in your theme. But we add this here because this way we can have featured images before swicth to a theme that supports them.

//     function easy_add_thumbnail($post) {

//         $already_has_thumb = has_post_thumbnail();
//         $post_type = get_post_type( $post->ID );
//         $exclude_types = array('');
//         $exclude_types = apply_filters( 'eat_exclude_types', $exclude_types );

//         // do nothing if the post has already a featured image set
//         if ( $already_has_thumb ) {
//             return;
//         }

//         // do the job if the post is not from an excluded type
//         if ( ! in_array( $post_type, $exclude_types ) ) {
//             // get first attached image
//             $attached_image = get_children( "order=ASC&post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );

//             if ( $attached_image ) {
//                 $attachment_values = array_values( $attached_image );
//                 // add attachment ID
//                 add_post_meta( $post->ID, '_thumbnail_id', $attachment_values[0]->ID, true );
//             }
//         }
//     }

//     // set featured image before post is displayed (for old posts)
//     add_action('the_post', 'easy_add_thumbnail');

//     // hooks added to set the thumbnail when publishing too
//     add_action('new_to_publish', 'easy_add_thumbnail');
//     add_action('draft_to_publish', 'easy_add_thumbnail');
//     add_action('pending_to_publish', 'easy_add_thumbnail');
//     add_action('future_to_publish', 'easy_add_thumbnail');
// }

// 2

// function auto_featured_image() {
//     global $post;
 
//     if (!has_post_thumbnail($post->ID)) {
//         $attached_image = get_children( "post_parent=$post->ID&amp;post_type=attachment&amp;post_mime_type=image&amp;numberposts=1" );
         
//       if ($attached_image) {
//               foreach ($attached_image as $attachment_id => $attachment) {
//                    set_post_thumbnail($post->ID, $attachment_id);
//               }
//          }
//     }
// }
// // Use it temporary to generate all featured images
// add_action('the_post', 'auto_featured_image');
// // Used for new posts
// add_action('save_post', 'auto_featured_image');
// add_action('draft_to_publish', 'auto_featured_image');
// add_action('new_to_publish', 'auto_featured_image');
// add_action('pending_to_publish', 'auto_featured_image');
// add_action('future_to_publish', 'auto_featured_image');

?>


<!-- custom post type -->
<?php 

// function movies_custom_post_type() {
 
// // Set UI labels for Custom Post Type
//     $labels = array(
//         'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
//         'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
//         'menu_name'           => __( 'Movies', 'twentythirteen' ),
//         'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
//         'all_items'           => __( 'All Movies', 'twentythirteen' ),
//         'view_item'           => __( 'View Movie', 'twentythirteen' ),
//         'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
//         'add_new'             => __( 'Add New', 'twentythirteen' ),
//         'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
//         'update_item'         => __( 'Update Movie', 'twentythirteen' ),
//         'search_items'        => __( 'Search Movie', 'twentythirteen' ),
//         'not_found'           => __( 'Not Found', 'twentythirteen' ),
//         'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
//     );
     
// // Set other options for Custom Post Type
     
//     $args = array(
//         'label'               => __( 'movies', 'twentythirteen' ),
//         'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
//         'labels'              => $labels,
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'page',
         
//         // This is where we add taxonomies to our CPT
//         'taxonomies'          => array( 'category' ),
//     );
     
//     // Registering your Custom Post Type
//     register_post_type( 'movies', $args );
 
// }
 
// /* Hook into the 'init' action so that the function
// * Containing our post type registration is not 
// * unnecessarily executed. 
// */
 
// add_action( 'init', 'movies_custom_post_type', 0 );


?>






<!-- Displaying Multiple Post Types on Category Page

 add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'movies'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
} -->
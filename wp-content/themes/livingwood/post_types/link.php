<?php
//
// Link Post Type related functions.
//

add_action('init', 'create_cpt_link');
add_filter("manage_edit-link_columns", "add_cpt_link_columns");   
//add_action("manage_link_posts_custom_column",  "add_cpt_link_custom_columns",10,2); 
add_action( 'init', 'cpt_link_taxonomies');
//add_action('init', 'add_cpt_link_rewrite_rules');
//add_filter('query_vars', 'add_cpt_link_query_vars');

/*
add_action('admin_init', 'ci_add_cpt_gallery_meta');
add_action('save_post', 'ci_update_cpt_gallery_meta');
*/

if( !function_exists('create_cpt_link') ):
function create_cpt_link(){
	$labels = array(
		'name' => _x('Links', 'post type general name', 'dc_theme'),
		'singular_name' => _x('Link', 'post type singular name', 'br_theme'),
		'add_new' => __('New link', 'dc_theme'),
		'add_new_item' => __('Add New link', 'br_theme'),
		'edit_item' => __('Edit Link', 'br_theme'),
		'new_item' => __('New Link', 'br_theme'),
		'view_item' => __('View Link', 'br_theme'),
		'search_items' => __('Search Links', 'br_theme'),
		'not_found' =>  __('No Links Found', 'br_theme'),
		'not_found_in_trash' => __('No links found in the trash', 'br_theme'), 
		'parent_item_colon' => __('Parent Link Item:', 'br_theme')
	);

	$args = array(
		'labels' => $labels,
		'singular_label' => __('link', 'br_theme'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array('slug' => 'links/archive'),
		'menu_position' => 5,
		'taxonomies' => array('link-category'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail','post-thumbnails','page-attributes')
		
	);

	register_post_type( 'link' , $args );
}






if( !function_exists('cpt_link_taxonomies') ):
function cpt_link_taxonomies() {
	//
	// Create all taxonomies here.
	//
	$labels = array(
		'name' => _x( 'Link Categories', 'taxonomy general name', 'dc_theme' ),
		'singular_name' => _x( 'Link Category', 'taxonomy singular name', 'dc_theme' ),
		'search_items' =>  __( 'Search Link Categories', 'dc_theme' ),
		'all_items' => __( 'All Link Categories', 'dc_theme' ),
		'parent_item' => __( 'Parent Link Categories', 'dc_theme' ),
		'parent_item_colon' => __( 'Parent Link Categories:', 'dc_theme' ),
		'edit_item' => __( 'Edit Link Category', 'dc_theme' ), 
		'update_item' => __( 'Update Link Category', 'dc_theme' ),
		'add_new_item' => __( 'Add Link Category', 'dc_theme' ),
		'new_item_name' => __( 'New Category Name', 'dc_theme' ),
	); 	
	register_taxonomy(
		"link_category", 
		"link", 
		array(
			"hierarchical" => true, 
			"labels" => $labels,
			'rewrite' => array('slug' => 'link/category'),
			'query_var' => true,
                        'public' => true,
                        'publicly_queryable' => true,
                        'exclude_from_search' => FALSE,
		));

}
endif;


function add_cpt_link_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Name",
           "date" => "Publish Date"
        );  
	return $columns;
}

function add_cpt_link_custom_columns($column,$id){
        global $post;
        switch ($column){
        		case "client":
        		echo get_field('client',$id);
        		break;
				 case "sector":
                 $terms = get_the_terms( $id, 'link_category');
                $list="";
                foreach($terms as $term):
                     if(!empty($list)) $list.=", ";
                     $list.= $term->name;
                endforeach;
                echo $list;
                break;	               
 			}
			} 

function add_cpt_link_rewrite_rules(){ 

add_rewrite_rule('^news-links/links/archive/yr/([^/]*)/?', 'index.php?pagename=news-links/links&yr=$matches[1]','top');

}

function add_cpt_link_query_vars($public_query_vars) {
	  $public_query_vars[] = "yr";
	return $public_query_vars; 
}

endif;

?>

<?php
//
// Download Post Type related functions.
//

add_action('init', 'create_cpt_download');
add_filter("manage_edit-download_columns", "add_cpt_download_columns");   
//add_action("manage_download_posts_custom_column",  "add_cpt_download_custom_columns",10,2); 
add_action( 'init', 'cpt_download_taxonomies');
//add_action('init', 'add_cpt_download_rewrite_rules');
//add_filter('query_vars', 'add_cpt_download_query_vars');

/*
add_action('admin_init', 'ci_add_cpt_gallery_meta');
add_action('save_post', 'ci_update_cpt_gallery_meta');
*/

if( !function_exists('create_cpt_download') ):
function create_cpt_download(){
	$labels = array(
		'name' => _x('Downloads', 'post type general name', 'dc_theme'),
		'singular_name' => _x('Download', 'post type singular name', 'br_theme'),
		'add_new' => __('New Download', 'dc_theme'),
		'add_new_item' => __('Add New Download', 'br_theme'),
		'edit_item' => __('Edit Download', 'br_theme'),
		'new_item' => __('New Download', 'br_theme'),
		'view_item' => __('View Download', 'br_theme'),
		'search_items' => __('Search Downloads', 'br_theme'),
		'not_found' =>  __('No Downloads Found', 'br_theme'),
		'not_found_in_trash' => __('No downloads found in the trash', 'br_theme'), 
		'parent_item_colon' => __('Parent Download Item:', 'br_theme')
	);

	$args = array(
		'labels' => $labels,
		'singular_label' => __('download', 'br_theme'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array('slug' => 'downloads/archive'),
		'menu_position' => 5,
		'taxonomies' => array('download-category'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail','post-thumbnails','page-attributes')
		
	);

	register_post_type( 'download' , $args );
}






if( !function_exists('cpt_download_taxonomies') ):
function cpt_download_taxonomies() {
	//
	// Create all taxonomies here.
	//
	$labels = array(
		'name' => _x( 'Download Categories', 'taxonomy general name', 'dc_theme' ),
		'singular_name' => _x( 'Download Category', 'taxonomy singular name', 'dc_theme' ),
		'search_items' =>  __( 'Search Download Categories', 'dc_theme' ),
		'all_items' => __( 'All Download Categories', 'dc_theme' ),
		'parent_item' => __( 'Parent Download Categories', 'dc_theme' ),
		'parent_item_colon' => __( 'Parent Download Categories:', 'dc_theme' ),
		'edit_item' => __( 'Edit Download Category', 'dc_theme' ), 
		'update_item' => __( 'Update Download Category', 'dc_theme' ),
		'add_new_item' => __( 'Add Download Category', 'dc_theme' ),
		'new_item_name' => __( 'New Category Name', 'dc_theme' ),
	); 	
	register_taxonomy(
		"download_category", 
		"download", 
		array(
			"hierarchical" => true, 
			"labels" => $labels,
			'rewrite' => array('slug' => 'download/category'),
			'query_var' => true,
                        'public' => true,
                        'publicly_queryable' => true,
                        'exclude_from_search' => FALSE,
		));

}
endif;


function add_cpt_download_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Name",
           "date" => "Publish Date"
        );  
	return $columns;
}

function add_cpt_download_custom_columns($column,$id){
        global $post;
        switch ($column){
        		case "client":
        		echo get_field('client',$id);
        		break;
				 case "sector":
                 $terms = get_the_terms( $id, 'download_category');
                $list="";
                foreach($terms as $term):
                     if(!empty($list)) $list.=", ";
                     $list.= $term->name;
                endforeach;
                echo $list;
                break;	               
 			}
			} 

function add_cpt_download_rewrite_rules(){ 

add_rewrite_rule('^news-downloads/downloads/archive/yr/([^/]*)/?', 'index.php?pagename=news-downloads/downloads&yr=$matches[1]','top');

}

function add_cpt_download_query_vars($public_query_vars) {
	  $public_query_vars[] = "yr";
	return $public_query_vars; 
}

endif;

?>

<?php
//
// Team Post Type related functions.
//

add_action('init', 'create_cpt_team');
add_filter("manage_edit-team_columns", "add_cpt_team_columns");   
//add_action("manage_team_posts_custom_column",  "add_cpt_team_custom_columns",10,2); 
add_action( 'init', 'cpt_team_taxonomies');
//add_action('init', 'add_cpt_team_rewrite_rules');
//add_filter('query_vars', 'add_cpt_team_query_vars');

/*
add_action('admin_init', 'ci_add_cpt_gallery_meta');
add_action('save_post', 'ci_update_cpt_gallery_meta');
*/

if( !function_exists('create_cpt_team') ):
function create_cpt_team(){
	$labels = array(
		'name' => _x('Team', 'post type general name', 'dc_theme'),
		'singular_name' => _x('Person', 'post type singular name', 'br_theme'),
		'add_new' => __('New Person', 'dc_theme'),
		'add_new_item' => __('Add New Person', 'br_theme'),
		'edit_item' => __('Edit Person', 'br_theme'),
		'new_item' => __('New Person', 'br_theme'),
		'view_item' => __('View Person', 'br_theme'),
		'search_items' => __('Search People', 'br_theme'),
		'not_found' =>  __('No People Found', 'br_theme'),
		'not_found_in_trash' => __('No People found in the trash', 'br_theme'), 
		'parent_item_colon' => __('Parent People Item:', 'br_theme')
	);

	$args = array(
		'labels' => $labels,
		'singular_label' => __('team', 'br_theme'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array('slug' => 'case-studies/archive'),
		'menu_position' => 5,
		'taxonomies' => array('team-category'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail','post-thumbnails','page-attributes')
		
	);

	register_post_type( 'team' , $args );
}






if( !function_exists('cpt_team_taxonomies') ):
function cpt_team_taxonomies() {
	//
	// Create all taxonomies here.
	//
	$labels = array(
		'name' => _x( 'Team Categories', 'taxonomy general name', 'dc_theme' ),
		'singular_name' => _x( 'Team Category', 'taxonomy singular name', 'dc_theme' ),
		'search_items' =>  __( 'Search Team Categories', 'dc_theme' ),
		'all_items' => __( 'All Team Categories', 'dc_theme' ),
		'parent_item' => __( 'Parent Team Categories', 'dc_theme' ),
		'parent_item_colon' => __( 'Parent Team Categories:', 'dc_theme' ),
		'edit_item' => __( 'Edit Team Category', 'dc_theme' ), 
		'update_item' => __( 'Update Team Category', 'dc_theme' ),
		'add_new_item' => __( 'Add Team Category', 'dc_theme' ),
		'new_item_name' => __( 'New Category Name', 'dc_theme' ),
	); 	
	register_taxonomy(
		"team_category", 
		"team", 
		array(
			"hierarchical" => true, 
			"labels" => $labels,
			'rewrite' => array('slug' => 'team/category'),
			'query_var' => true,
                        'public' => true,
                        'publicly_queryable' => true,
                        'exclude_from_search' => FALSE,
		));

}
endif;


function add_cpt_team_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Name",
           "date" => "Publish Date"
        );  
	return $columns;
}

function add_cpt_team_custom_columns($column,$id){
        global $post;
        switch ($column){
        		case "client":
        		echo get_field('client',$id);
        		break;
				 case "sector":
                 $terms = get_the_terms( $id, 'team_category');
                $list="";
                foreach($terms as $term):
                     if(!empty($list)) $list.=", ";
                     $list.= $term->name;
                endforeach;
                echo $list;
                break;	               
 			}
			} 

function add_cpt_team_rewrite_rules(){ 

add_rewrite_rule('^news-teams/teams/archive/yr/([^/]*)/?', 'index.php?pagename=news-teams/teams&yr=$matches[1]','top');

}

function add_cpt_team_query_vars($public_query_vars) {
	  $public_query_vars[] = "yr";
	return $public_query_vars; 
}

endif;

?>

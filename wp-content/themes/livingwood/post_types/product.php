<?php
//
// Product Post Type related functions.
//

add_action('init', 'create_cpt_product');
add_filter("manage_edit-product_columns", "add_cpt_product_columns");   
add_action("manage_product_posts_custom_column",  "add_cpt_product_custom_columns",10,2); 
//add_action('init', 'add_cpt_product_rewrite_rules');
//add_filter('query_vars', 'add_cpt_product_query_vars');
add_action( 'init', 'cpt_product_taxonomies');

/*
add_action('admin_init', 'ci_add_cpt_gallery_meta');
add_action('save_post', 'ci_update_cpt_gallery_meta');
*/

if( !function_exists('create_cpt_products') ):
function create_cpt_product(){
	$labels = array(
		'name' => _x('Products', 'post type general name', 'dc_theme'),
		'singular_name' => _x('Product', 'post type singular name', 'br_theme'),
		'add_new' => __('New Product', 'dc_theme'),
		'add_new_item' => __('Add new Product', 'br_theme'),
		'edit_item' => __('Edit Product', 'br_theme'),
		'new_item' => __('New Product', 'br_theme'),
		'view_item' => __('View Product', 'br_theme'),
		'search_items' => __('Search Products', 'br_theme'),
		'not_found' =>  __('No Products Found', 'br_theme'),
		'not_found_in_trash' => __('No Products found in the trash', 'br_theme'), 
		'parent_item_colon' => __('Parent Product Item:', 'br_theme')
	);

	$args = array(
		'labels' => $labels,
		'singular_label' => __('products', 'br_theme'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array('slug' => 'products/archive'),
		'menu_position' => 5,
		'taxonomies' => array('product-category'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail','post-thumbnails','page-attributes')
		
	);

	register_post_type( 'product' , $args );
}






if( !function_exists('cpt_product_taxonomies') ):
function cpt_product_taxonomies() {
	//
	// Create all taxonomies here.
	//
	$labels = array(
		'name' => _x( 'Product Category', 'taxonomy general name', 'dc_theme' ),
		'singular_name' => _x( 'Product Category', 'taxonomy singular name', 'dc_theme' ),
		'search_items' =>  __( 'Search Product Categories', 'dc_theme' ),
		'all_items' => __( 'All Product Categories', 'dc_theme' ),
		'parent_item' => __( 'Parent Product Categories', 'dc_theme' ),
		'parent_item_colon' => __( 'Parent products Categories:', 'dc_theme' ),
		'edit_item' => __( 'Edit Product Category', 'dc_theme' ), 
		'update_item' => __( 'Update Product Category', 'dc_theme' ),
		'add_new_item' => __( 'Add Product Category', 'dc_theme' ),
		'new_item_name' => __( 'New Product Category Name', 'dc_theme' ),
	); 	
	register_taxonomy(
		"product-category", 
		"product", 
		array(
			"hierarchical" => true, 
			"labels" => $labels,
			'rewrite' => array('slug' => 'products/category'),
			'query_var' => true,
                        'public' => true,
                        'publicly_queryable' => true,
                        'exclude_from_search' => FALSE,
		));

}
endif;


function add_cpt_product_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Name",
           "date" => "Publish Date"
        );  
	return $columns;
}

function add_cpt_product_custom_columns($column,$id){
        global $post;
        switch ($column){
				case "category":
                $terms = get_the_terms( $id, 'product_category');
                $list="";
                foreach($terms as $term):
                    if(!empty($list)) $list.=", ";
                    $list.= $term->name;
                endforeach;
                echo $list;
                break;	               
 			}
			} 

function add_cpt_product_rewrite_rules(){ 

add_rewrite_rule('^products/archive/pge/([^/]*)/?', 'index.php?pagename=products&pge=$matches[1]','top');

}

function add_cpt_products_query_vars($public_query_vars) {
	  $public_query_vars[] = "pge";
	return $public_query_vars; 
}

endif;

?>

<?php
// Theme support
add_theme_support('post-thumbnails');
add_image_size('homepage-slider', 1920,1200, true);
add_image_size('news-lead-tn', 540, 340, true);
add_image_size('signpost-tn', 389, 242, true);
add_image_size('product-tn', 392, 392, true);
add_image_size('product-slider', 567, 567, true);
add_image_size('gallery-tn', 389,2000, false);
add_image_size('gallery', 500,300, false);
add_image_size('inset-tn', 389,389, true);
add_image_size('signpost-logo',250,100,false);
add_image_size('image-banner',1920,500,true);

set_post_thumbnail_size( 200, 200,false); 

function custom_image_sizes($sizes) {
      unset( $sizes['medium']);
      unset( $sizes['large']);
	 //unset( $sizes['full'] ); // removes full size if needed
$myimgsizes = array(
	"homepage-slider" => __("Homepage Background" ),
  "news-lead-tn" => __("Lead News Story Thumbnail" ),
  "signpost-tn" => __("Featured Link Thumbnail" ),
  "product-tn" => __("Product Thumbnail"),
  "product-slider" => __("Product Slider" ),
  "gallery-tn" => __("Gallery Thumbnail" ),
  "gallery" => __("Gallery" ),
  "inset-tn" => __("Inset Thumbnail" ),
  "signpost-logo" => __("Featured Link Logo" ),
  "image-banner" => __("Image Banner" )
  );
     
       $newimgsizes = array_merge($sizes, $myimgsizes);
	    return $newimgsizes;
}
add_filter('image_size_names_choose', 'custom_image_sizes');

?>
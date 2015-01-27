<?php get_header() ?>
    <?php
    $queried_object = get_queried_object();
    $term_id = $queried_object->term_id;
    $term = get_term($term_id,'product-category');
    $term_name= $term->name;
    ?>
        <!--main-->
        <main id="main">
           <?php list($src,$w,$h) = wp_get_attachment_image_src(get_field('category_image',$term),'image-banner'); ?>
             <div id="banner-image" style="background-image:url('<?php echo $src ?>');"></div>
             
             <!--  <div id="page-title">
            <div class="container">
                <div id="breadcrumb"><a href="">Home</a> > <a href="">Products</a> > Aluminium Windows</div>
<h1>Aluminium Windows</h1>
</div> 
        </div>-->

           <div class="container">
            <div id="breadcrumb-wrap"><div id="breadcrumb"><a href="">Home</a> > <a href="">Products</a> > Windows</div></div>

             <section class="centered anchor">
            <h1><?php echo $term_name ?></h1>
           <p class="big"><?php echo $term->description ?></p>
<a href="" class="anchor-arrow">Anchor</a>
          </section>


          <!--  <section id="intro" class="container image">
                <div>
                    <h3>Versitile in function &amp; design</h3>
<p class="big">At The Aluminium Sliding Door &amp; Window Co. you’ll find an aluminium window for every project type, from commercial to residential to traditional and contemporary. Our windows are both versatile in function and design. Every desired opening type is available, from inward and outward opening, turn and tilt and double casement. A full range of high thermal windows are also available for those projects that require you to meet the most stringent efficiency needs.</p><p>Browse our full range of aluminium windows below. </p>
                </div>
                <div>
<figure>
<img src="images/feature-img-2.jpg">
</figure
                </div>
</section>-->
<section class="sub-block section">
    <div>
<?php echo get_field('category_left_column',$term); ?>
</div>
<div>
<?php echo get_field('category_right_column',$term); ?>
</div>
</section>
<section id="products" class="section">
    <?php
    $args = array( 
  'post_type' => 'product',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'taxonomy' => 'product-category',
  'term' => $term_name,
  'orderby' => 'menu_order',
  'order' => 'ASC'
);
    if($products = get_posts($args)):
        foreach($products as $product):
            list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($product->ID),'product-tn');
            ?>
<a class="feature-link" href="<?php echo get_permalink($product->ID)?>"><div class="inner-wrap"><figure><img src="<?php echo $src ?>" /></figure><div class="feature-content"><h3><?php echo $product->post_title ?></h3><p><?php echo $product->post_excerpt ?></p></div><div class="feature-icon-wrap"><span>View details</span><span class="feature-icon"></span></div></div></a>
<?php endforeach ?>
<?php endif ?>
</section>
 <div class="anchor-link"><a href="" class="anchor-arrow up">Back to top</a></div>
<?php include('signposts.php'); ?>
        </div>
</main>
<?php get_footer() ?>
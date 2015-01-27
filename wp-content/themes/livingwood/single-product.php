<?php get_header() ?>
    
        <!--main-->
        <main id="main">
           <!--    <div id="page-title">
            <div class="container">
                <div id="breadcrumb"><a href="">Home</a> > <a href="">Products</a> > Concept System 104&reg;</div>
<h1><em>Concept System 104</em><small>&reg;</small></h1>
</div>
        </div>-->

           <div class="container">

                <div id="breadcrumb-wrap"><div id="breadcrumb"><a href="">Home</a> > <a href="">Products</a> > <a href="">Windows</a> > Concept System 104</div></div>
            <section class="centered">
            <h1><?php echo $post->post_title ?></h1>
            <p class="big"><?php echo html_entity_decode(get_field('product_introduction',$post->ID)) ?></p>

          </section>


            <section id="intro" class="product">
                <div class="column">
<?php echo get_field('product_description',$post->ID); ?>
<?php
if($brochure = get_field('product_brochure',$post->ID)): ?>
<p><a href="<?php echo $brochure ?>" target="_blank" class="button">DOWNLOAD BROCHURE</a></p>
<?php endif ?>
                </div>
                <div class="column">
<!--slider-->
<section id="product-slider" class="slider">
    <?php  list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'product-slider'); 
      if($src):
      ?>
<div><img src="<?php echo $src ?>" /></div>
    <?php endif ?>
        <?php
       if(get_field('image_gallery')):
while(the_repeater_field('image_gallery')): 
    list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('product_image'), 'product-slider');
    ?>
<div><img src="<?php echo $src ?>" /></div>
<?php endwhile ?>
<?php endif ?>

</section>
<!--/slider-->

                </div>
</section>
<section id="technical" class="section">
<div id="technical-information" class="signpost">
    <div class="signpost-inner">
<h4>Technical Information</h4>
<p>To download the CAD files you need to submit your email address</p>
  <div class="gform_wrapper">
           <form id="file-dl">
            <div class="gform_body">
            <ul class="gform_fields">
               <li id="field_3_1" class="gfield gf-add-placeholder gfield_contains_required">
                <label class="gfield_label" for="input_3_1" style="display: none;">Your name
<span class="gfield_required">*</span>
</label><div class="ginput_container">
<input id="input_3_1" class="medium" type="text" tabindex="1" value="" name="input_1" placeholder="Your name">
</div></li>
</ul>
</div>
<div class="gform_footer top_label">
<input id="gform_submit_button_3" class="gform_button button" type="submit" tabindex="3" value="Submit">
</div>
</form>
</div>
</div>
</div>
<div id="opening-elements" class="signpost">
    <div class="signpost-inner">
<h4>Opening Elements</h4>
<div id="opening-element-carousel" class="slider">
  <!--carousel-->
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-1.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-2.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-1.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-2.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-1.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-2.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-1.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-2.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-1.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-2.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-1.jpg" /></div>
<div class="slide slick-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/oe-diagram-2.jpg" /></div>
</div>
<!--/carousel-->
</div>

</div>
</section>

<section id="signposts">
     <!--guarantee-->
        <a class="feature-link" href=""><figure><img src="images/feature-img-2.jpg" /></figure><div class="feature-content"><h3>10 YEAR<span>GUARANTEE</span></h3><span class="logo"><img src="images/10-year-guarantee.png" /></span><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod</p></div><div class="feature-icon-wrap"><span>Read more</span><span class="feature-icon"></span></div></a>
         <!--/guarantee-->
         <!--guarantee-->
        <a class="feature-link" href=""><figure><img src="images/feature-img-2.jpg" /></figure><div class="feature-content"><h3>10 YEAR<span>GUARANTEE</span></h3><span class="logo"><img src="images/10-year-guarantee.png" /></span><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod</p></div><div class="feature-icon-wrap"><span>Read more</span><span class="feature-icon"></span></div></a>
         <!--/guarantee-->
 <!--call back form-->
           <div class="signpost form">
            <div class="signpost-inner">
            <div class="gform_wrapper">
           <form id="call-back">
            <h3>GOT AN ENQUIRY?<span>WE'LL CALL YOU BACK</span></h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod </p>
            <div class="gform_body">
            <ul class="gform_fields">
               <li id="field_3_1" class="gfield gf-add-placeholder gfield_contains_required">
                <label class="gfield_label" for="input_3_1" style="display: none;">Your name
<span class="gfield_required">*</span>
</label><div class="ginput_container">
<input id="input_3_1" class="medium" type="text" tabindex="1" value="" name="input_1" placeholder="Your name">
</div></li>
 <li id="field_3_1" class="gfield gf-add-placeholder gfield_contains_required">
                <label class="gfield_label" for="input_3_1" style="display: none;">Email address
<span class="gfield_required">*</span>
</label><div class="ginput_container">
<input id="input_3_1" class="medium" type="text" tabindex="1" value="" name="input_1" placeholder="Email address">
</div></li>
 <li id="field_3_1" class="gfield gf-add-placeholder gfield_contains_required">
                <label class="gfield_label" for="input_3_1" style="display: none;">Telephone
<span class="gfield_required">*</span>
</label><div class="ginput_container">
<input id="input_3_1" class="medium" type="text" tabindex="1" value="" name="input_1" placeholder="Telephone">
</div></li>
</ul>
</div>
<div class="gform_footer top_label">
<input id="gform_submit_button_3" class="gform_button button" type="submit" tabindex="3" value="Submit">
</div>
</form>
</div>
</div>
</div>
 <!--call back form-->

    </section>
    <section class="section">
     <!--testimonial-->
           <a class="signpost quote" href=""><blockquote><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.<span></span></p><footer>Alan Clevitt, XYZ Company</footer></blockquote><div class="feature-icon-wrap"><span>Read more testimonials</span><span class="feature-icon"></span></div></a>
           <!--/testimonial-->
         </section>
        </div>
</main>
<?php get_footer() ?>
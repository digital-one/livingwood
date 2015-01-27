<?php get_header() ?>
        <!--main-->
        <main id="main" class="container">
            <div id="content">
        <!--intro-->
        <section id="intro">
           <?php echo $post->post_content ?>
        </section>
        <!--/intro-->
        <section id="features">
          <?php
  $args = array(
    "post_type" => "link",
    "post_status" => "publish",
    "orderby" => "menu_order",
    "order" => "ASC",
    "posts_per_page" => 10
    );
  if($links = get_posts($args)):
    foreach($links as $link):
      list($tn,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($link->ID),'signpost-tn');
      list($logo,$w,$h) = wp_get_attachment_image_src(get_field('link_logo',$link->ID),'signpost-logo');
      $label = get_field('link_button_text',$link->ID);

       ?>
        <a class="feature-link<?php if(get_field('link_promo',$link->ID)=='yes'):?> promo<?php endif ?>" href="<?php echo get_permalink(get_field('link_href',$link->ID)) ?>"><figure><?php if($tn):?><img src="<?php echo $tn ?>" /><?php endif ?></figure><div class="feature-content"><?php echo $link->post_content ?><?php if($logo): ?><span class="logo"><img src="<?php echo $logo ?>" /></span><?php endif ?></div><div class="feature-icon-wrap"><span><?php if(!empty($label)): echo $label; else: echo 'Read more'; endif; ?></span><span class="feature-icon"></span></div></a>

      <?php endforeach ?>
    <?php endif ?>
     <?php
      $args = array(
    "post_type" => "testimonial",
    "post_status" => "publish",
    "orderby" => "rand",
    "order" => "ASC",
    "numberposts" => 5
    );
  if($testimonials = get_posts($args)):
      ?>
           <!--testimonial-->
           <a class="feature-link quote" href=""><blockquote><?php echo $testimonials[0]->post_content ?><footer><?php echo $testimonials[0]->post_title ?></footer></blockquote><div class="feature-icon-wrap"><span>Read more testimonials</span><span class="feature-icon"></span></div></a>
           <!--/testimonial-->
       <?php endif ?>
          
</section>
</div>
</main>
<!--slider-->
<section class="slider">
<div class="slick-list draggable">
    <div class="slick-track">
<div class="slide slick-slide" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/home-slide-1.jpg');"></div>
</div>
<button class="slick-prev" data-role="none" type="button" style="display: block;">Previous</button>
<button class="slick-next" data-role="none" type="button" style="display: block;">Next</button>
    </div>
</section>
<!--/slider-->
<?php get_footer() ?>
<?php /* Template Name: Team */ ?>
<?php get_header() ?>
    <!--main-->
        <main id="main">
       <div class="container">
         <div id="breadcrumb-wrap"><div id="breadcrumb"><a href="">Home</a> > <a href="">About Us</a> > Our Team</div></div>
         <section id="team-list">
            <header class="centered">
            <h1>OUR TEAM</h1>
            <p class="big">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed ipsum dolor sit amet, consetetur sadipscing elitr</p>
           </header>
<div>
     <?php
    $args = array( 
   'post_type' => 'team',
    'meta_key' => 'team_inset',
    'meta_value' => 1,
    'meta_compare' => '!=',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'post_status' => 'publish'
);

    


    if($people = get_posts($args)):
        foreach($people as $person):
          $name = explode(' ',$person->post_title);
        $first_name = $name[0];
 list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($person->ID), 'signpost-tn'); ?>
<a class="signpost" href="http://mailto:<?php echo get_field('team_email',$person->ID)?>"><figure><img src="<?php echo $src ?>" /></figure><div class="signpost-inner"><h3><?php echo $person->post_title ?></h3><?php echo $person->post_content ?></div><div class="feature-icon-wrap"><span>Email <?php echo $first_name ?></span><span class="feature-icon"></span></div></a>
<?php endforeach ?>
<?php endif ?>
</div>
     <?php
    $args = array( 
  'post_type' => 'team',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'meta_key' => 'team_inset',
  'meta_value' => 1,
  'meta_compare' => '=',
  'orderby' => 'menu_order',
  'order' => 'ASC'
);
    if($people = get_posts($args)):
        foreach($people as $person):
          list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($person->ID), 'square-tn');
        ?>
<div class="inset">
<figure><img src="<?php echo $src ?>" /></figure>
<h3><?php echo $person->post_title ?></h3>
<?php echo $person->post_content ?>
</div>
  <?php endforeach ?>
<?php endif ?>
    </section>
<section id="testimonials">
  <?php
 $args = array( 
   'post_type' => 'testimonial',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 5,
    'post_status' => 'publish'
);
if($testimonials = get_posts($args)):
        foreach($testimonials as $testimonial):
          ?>
   <!--testimonial-->
           <div><blockquote><?php echo $testimonial->post_content ?><footer><?php echo $testimonial->post_title ?></footer></blockquote></div>
      <!--/testimonial-->
          <?php endforeach ?>
        <?php endif ?>
      <footer class="load-more"><a href="">VIEW MORE TESTIMONIALS</a></footer>
</section>

        </div>
</main>
<?php get_footer() ?>
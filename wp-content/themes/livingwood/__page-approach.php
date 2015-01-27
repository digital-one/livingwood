<?php get_header() ?>
    
        <!--main-->
        <main id="main">
       
          <div id="banner-image" style="background-image:url('images/banner-img.jpg');"></div>
           <div class="container">
                <div id="breadcrumb-wrap"><div id="breadcrumb"><a href="">Home</a> > Why Aluminium?</div></div>
            <section class="centered anchor">
              <?php echo get_field('page_introduction',$post->ID) ?>
<a href="" class="anchor-arrow">Anchor</a>
          </section>
page_sections
section_style
section_left_column
section_right_column
section_image
<?php
  if(get_field('page_sections',$post->ID)):
    $i=1;
while(the_repeater_field('page_sections',$post->ID)): 

  $style = get_sub_field('section_style');
  switch($style){
    case '2_col':
    ?>
<section id="intro" class="container">
     <div class="column">
<?php echo get_sub_field('section_left_column') ?>
     </div>
<div class="column">
<?php echo get_sub_field('section_right_column') ?>
     </div>
</section>
<?php
    break;
    case '2_col_img':
    list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('section_image'), 'signpost-tn');
    ?>
 <section id="intro" class="container image">
     <div>
      <?php echo get_sub_field('section_left_column') ?>
</div>
     <div>
<figure>
<img src="<?php echo $src ?>">
</figure
  </div>
</section>
    <?php
    break;
  }
endwhile;
endif;
?>
<!--
   <section id="intro" class="container image">
     <div>
                    <p>The directors at Livingwood windows have over 50 years of combined experience working within the building industry. Their technical insight into passive construction and low energy buildings also ensures that the right energy efficient products are selected for each project.</p>
<p>Protecting our future is important at Livingwood. We have a number of policies in place to ensure our own offices and our suppliers adhere to good practice. All timber is from a well managed forest that has FSC certification.</p>

<p>Founded in 1965, Reynaers currently employs over 1,500 workers in 37 countries worldwide and exports to more than 60 countries on 5 continents. The company, with its headquarters in Duffel, Belgium achieved an annual turnover of 300 million euros (26,000 tonnes aluminium) in 2011.</p>
</div>
     <div>
<figure>
<img src="images/feature-img-2.jpg">
</figure
                </div>
</section>

         <section id="intro" class="container image">
                <div>
                  <h4>Installation</h4>
                    <p>We have selected our approved installers and can provide an estimate for our installation service. All fitting is guaranteed* and our commitment to providing a full customer service from specification though to final installation is a Livingwood priority.</p>
<p>We have supplied our products for many projects with varying sizes and specifications, from windows for multi-million pound luxury housing, schools, churches, offices to a wide range of private homes, all with individual requirements.</p>
<p>Livingwood Windows can supply, deliver and install across the UK.</p>
<p>If you have questions about our products, architectural or commercial services, please email us or contact us by phone at 01359 272 646.</p>
</div>
                <div>
<figure>
<img src="images/feature-img-3.jpg">
</figure
                </div>
</section>
-->
 <div class="anchor-link"><a href="#" class="anchor-arrow up">Back to top</a></div>
<?php get_template_part('signposts') ?>
        </div>
</main>
<?php get_footer() ?>
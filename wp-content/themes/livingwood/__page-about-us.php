<?php get_header() ?>
    <!--main-->
        <main id="main">
          <?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'image-banner'); ?>
             <div id="banner-image" style="background-image:url('<?php echo $src ?>');"></div>
           <div class="container">
                <div id="breadcrumb-wrap"><div id="breadcrumb"><a href="">Home</a> > Why Aluminium?</div></div>
            <section class="centered anchor">
            <h1>ABOUT US</h1>
            <p class="big"><?php echo html_entity_decode(get_field('page_introduction',$post->ID)) ?></p>
<a href="" class="anchor-arrow">Anchor</a>
          </section>

           <section id="intro" class="container image">
                <div>
                   
<?php echo get_field('page_left_column',$post->ID) ?>
                </div>
                <div>
                  <?php
                    list($src,$w,$h) = wp_get_attachment_image_src(get_field('page_content_image',$post->ID),'news-lead-tn');
                    if($src):
                    ?>
<figure>
<img src="<?php echo $src ?>" />
</figure>
<?php endif ?>
                </div>
</section>
<?php get_template_part('signposts') ?>
        </div>
</main>
<?php get_footer() ?>
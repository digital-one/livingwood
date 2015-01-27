<?php get_header() ?>
        <!--main-->
        <main id="main">
       <?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'image-banner'); ?>
             <div id="banner-image" style="background-image:url('<?php echo $src ?>');"></div>
           <div class="container">
                <div id="breadcrumb-wrap"><div id="breadcrumb"><a href="">Home</a> > Why Aluminium?</div></div>
            <section class="centered anchor">
           <?php echo get_field('page_introduction',$post->ID); ?>
<a href="#" class="anchor-arrow">Anchor</a>
          </section>
<section id="benefit-list">

  
<?php
  if(get_field('page_article_list',$post->ID)):
    $i=1;
while(the_repeater_field('page_article_list',$post->ID)): 
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('article_image'), 'signpost-tn');
?>
<article class="signpost <?php if ($i % 2 == 0):?>right<?php else: ?>left<?php endif ?>">
<div class="signpost-inner"><figure><img src="<?php echo $src ?>" /></figure><div class="column"><h4><?php echo get_sub_field('article_title') ?></h4><p class="big"><?php echo get_sub_field('article_text') ?></p></div></div>
  </article>
  <?php $i++; ?>
 <?php endwhile ?>
<?php endif ?>

</section>
 <div class="anchor-link"><a href="" class="anchor-arrow up">Back to top</a></div>
<?php get_template_part('signposts') ?>
        </div>
</main>
<?php get_footer() ?>
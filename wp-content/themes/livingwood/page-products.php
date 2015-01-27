<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        <link rel="stylesheet" href="css/layout.css" />
            <script src="js/modernizr.js"></script>

    </head>
    <body>
     <?php include('header.php') ?>
    
        <!--main-->
        <main id="main">
       
       <div class="container">
         <div id="breadcrumb-wrap"><div id="breadcrumb"><a href="">Home</a> > <a href="">Products</a> > <a href="">Windows</a> > Concept System 104</div></div>
            <section class="centered">
            <h1>PRODUCTS</h1>
         <p class="big">Our products include a wide range of aluminium window and door systems; curtain walling, sliding and swing-entrance doors, sliding folding doors, façade systems, brise soleil, conservatories, skylights, and systems for the incorporation of blinds and ventilation. Suitable for commercial, residential, leisure and healthcare applications.</p><p>Click below for the full range of products.</p>
</section>
<section id="news-archive" class="section">

  
  <div class="lead-stories">
      <?php
if($terms = get_terms('product-category',array('hide_empty' => 0))):
foreach($terms as $term):
  list($src,$w,$h) = wp_get_attachment_image_src(get_field('category_image',$term),'news-lead-tn');
  ?>

<a class="feature-link" href="<?php echo get_term_link($term) ?>"><figure><img src="<?php echo $src ?>" /></figure><div class="feature-content"><h3><?php echo $term->name ?> </h3><p><?php echo $term->description ?></p></div><div class="feature-icon-wrap"><span>View products</span><span class="feature-icon"></span></div></a>
<?php endforeach ?>
<?php endif ?>

  </div>

</section>
<?php get_template_part('signposts') ?>
</main>

<!--footer-->
<footer id="footer">
    <div class="container">
    <div id="footer-top">
<div class="affiliates"><a href="" target="_blank"><img src="images/reynaers.png" /></a></div>
<nav id="footer-nav"><ul><li><a href="">Products</a></li>
<li><a href="">About Us</a></li>
<li><a href="">Why Alluminium</a></li>
<li><a href="">Gallery</a></li>
<li><a href="">Downloads</a></li>
<li><a href="">News &amp; Blog</a></li>
<li><a href="">Contact Us</a></li>
</ul></nav>
<nav id="social"><ul><li><a href="">Linkedin</a></li><li><a href="" class="facebook">Facebook</a></li><li><a href="" class="twitter">Twitter</a></li><li><a href="" class="pinterest">Pinterest</a></li></ul></nav>
</div>
<div id="footer-bottom">
&copy; Copyright 2015, The Aluminium Slider Door &amp; Window Company. All rights reserved.
    </div>
</div>
</footer>
<!--/footer-->
<!--scripts-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!-- Load jQuery from a local copy if loading from Google fails -->
<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.10.1.min.js"><\/script>')</script>
<script src="js/jquery.selectbox.min.js"></script>
<script src="js/scripts.js"></script>
<!--/scripts-->
  </body>
  </html>
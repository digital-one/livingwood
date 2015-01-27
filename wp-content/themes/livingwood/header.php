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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
            <script src="js/modernizr.js"></script>
<?php wp_head() ?>
    </head>
    <body <?php if(is_front_page()):?>class="home"<?php endif ?>>
        <!-- header -->
        <header id="header">
            <div id="top">
                <div class="container">
                    <nav id="connect"><ul><li><a href="" class="mail">sales@livingwood.co.uk</a></li><li><a href="" class="twitter">Twitter</a></li><li><a href="" class="facebook">Facebook</a></li><li><a href="" class="pinterest">Pinterest</a></li><li><a href="" class="linkedin">Linkedin</a></li></ul></nav>
<!--<form id="search">
<input type="text" name="s" id="s" placeholder="Search" />
<button type="submit"></button>
</form>-->
<div id="tel"><span>CALL US TODAY ON: <a href="">0123 567 8910</a></span></div>
</div>
            </div>

<!--<a id="home-link" href="">The Aluminium Sliding Door &amp; Window Company</a>-->
<nav id="nav">
    <div class="container">
      <?php if(is_front_page()):?>  <h1 id="home-link"><?php echo get_bloginfo('name'); ?></h1> <?php else: ?> <a href="<?php echo home_url() ?>" id="home-link"><?php echo get_bloginfo('name'); ?></a> <?php endif ?>
        <a href="" class="mobile-menu">Menu</a>
 <?php
  wp_nav_menu( array(
        'menu'=>'Main Navigation',
        'container' => false, 
        'fallback_cb' => 'wp_page_menu'//,
        //'walker' => new subMenu()
        //'menu_class' => 'inline',
        //'link_after' => '<span></span>'
        )
    );
    ?>
</div>
</nav>
        </header>
        <!-- /header -->
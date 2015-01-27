<!--footer-->
<footer id="footer">
    <div class="container">
    <div id="footer-top">
<div class="affiliates"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/reynaers.png" /></a></div>
<nav id="footer-nav">
<?php
  wp_nav_menu( array(
        'menu'=>'Footer Navigation',
        'container' => false, 
        'fallback_cb' => 'wp_page_menu'//,
        //'walker' => new subMenu()
        //'menu_class' => 'inline',
        //'link_after' => '<span></span>'
        )
    );
    ?>
    <!--
	<ul><li><a href="">Products</a></li>
<li><a href="">About Us</a></li>
<li><a href="">Why Alluminium</a></li>
<li><a href="">Gallery</a></li>
<li><a href="">Downloads</a></li>
<li><a href="">News &amp; Blog</a></li>
<li><a href="">Contact Us</a></li>
</ul>
--></nav>
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
<script>window.jQuery || document.write('<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.1.min.js"><\/script>')</script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.gmap.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.selectbox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/retina.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
  </body>
  </html>
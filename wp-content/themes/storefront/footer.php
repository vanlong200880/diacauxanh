<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>


<!-- footer -->
<footer class="clearfix">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="f-left">
          © 2016 Designed by <a href="http://www.thietkechuyennghiep.net">Pham Long.</a> All right reserved
        </div>
      </div>
      <div class="col-md-6">
        <div class="f-social">
          <a href="">
            <span class="fa fa-facebook-square"></span>
          </a>
          <a href="">
            <span class="fa fa-twitter-square"></span>
          </a>
          <a href="">
            <span class="fa fa-youtube-square"></span>
          </a>
        </div>
      </div>
    </div>
    
    <div class="f-right">
      <?php
//        wp_nav_menu( array(
//            'theme_location' => 'primary',
//            'menu'=> 'menu_top',
//            'menu_class' => '',
//            'container_class' => '',
//            'before' => '',
//          'link_before' => ''
//        ) );
      ?>
    </div>
  </div>
</footer>
<!-- tpv -->
</div>
<?php wp_footer(); ?>

</body>
</html>

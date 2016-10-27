<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

?>
<?php echo get_template_part('templates/slider'); ?>
<div class="body-content about-page">
  <section class="all-cat clearfix">
				<div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-9">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="title">
                    <h1><?php the_title(); ?></h1>
                    <p class="des"></p>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12">
                  <div class="print">
                    <ul>
                      <li><a href="#"></a></li>
                      <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12" id="content">
                  <?php the_content(); ?>
                </div>
              </div>
              
            </div>
            <div class="col-md-3 col-sm-3">
              <div class="item-menu">
                <?php
                  wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'menu'=> 'menu_right',
                      'menu_class' => '',
                      'container_class' => '',
                      'before' => '',
                    'link_before' => ''
                  ) );
                ?>
              </div>
            </div>
          </div>
        </div>
  </section>
</div>
<script type="text/javascript">
  jQuery(document).ready(function($){
    var height = $(".body-content").height();
    $(".item-menu").css('height', height);
  });
</script>

<?php get_footer(); ?>
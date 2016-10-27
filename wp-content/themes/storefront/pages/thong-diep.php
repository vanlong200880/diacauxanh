<?php
/**
 * Template Name: Thông điệp
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>
<?php echo get_template_part('templates/slider'); ?>
<div class="body-content">
  <section class="all-cat clearfix">
				<div class="container">
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
  </section>
</div>
  


<?php get_footer(); ?>
<?php
/**
 * Template Name: Product
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
            <div class="col-md-9 col-sm-8 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="title">
                    <h1><?php the_title(); ?></h1>
                    <p class="des"></p>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <ul class="row product-hd">
                  <?php 
                    $args = array (					 
                      'post_status'    => 'publish',
                      'order'          => 'DESC',
                      'orderby'        => 'post_date',
                      'post_type'      => 'product',
//                      'product_cat'    => 'phan-bon',
                      'posts_per_page' => 500,
                    );
                    $the_query = new WP_Query( $args );
                    ?>
                  <?php
                    if ( $the_query->have_posts() ) : ?>
                      <?php while ( $the_query->have_posts() ) {
                              $the_query->the_post(); ?>
                      
                      <li class="col-md-3 col-sm-4 col-xs-6">
                        <div class="item">
                          <?php
                          do_action( 'woocommerce_before_shop_loop_item' );
                          do_action( 'woocommerce_before_shop_loop_item_title' );
                          do_action( 'woocommerce_shop_loop_item_title' );

                          
                          ?>
                        </div>
                      </li>
                      <?php } ?>
                  <?php endif; ?>
                </ul>
                </div>
              </div>
              
            </div>
            <?php if(!wpmd_is_phone()): ?>
            <div class="col-md-3 col-sm-4">
              <div class="menu-category">
                <?php
                  the_widget( 'WC_Widget_Product_Categories', array(
                                                'count'		=> 1,
                        ) );
                  ?>
              </div>
            </div>
            <?php endif; ?>
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
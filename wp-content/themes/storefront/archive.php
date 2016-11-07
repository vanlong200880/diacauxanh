<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 *
 */

get_header(); ?>
<?php echo get_template_part('templates/slider'); ?>
<div class="category-share">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="title">
                  <h1 class="page-title">
                    <?php echo single_cat_title(); ?>
                  </h1>
                </div>
              </div>
            </div>
            <?php if ( have_posts() ) : ?>
                  <ul class="row category-achive">
                    <?php 
                      $category  = get_the_category(); 
                      if($category[0]->slug == 'hinh-anh'){
                        get_template_part( 'loop-gallery' );
                      }else{
                        get_template_part( 'loop-news' );
                      }
                    ?>
                  </ul>
            <?php  else :

                get_template_part( 'content', 'none' );

              endif; ?>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="paging">
                  <?php wp_pagenavi(); ?>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-4">
            <div class="menu-category">
              <?php
               $cat = get_queried_object();
              $arr = array('chia-se', 'nhung-cong-nghe-moi', 'ky-thuat-cham-soc-cay', 'phong-tru-sau-benh', 'quy-trinh-bon-phan');
              if(in_array($cat->slug, $arr)):
                echo '<div class="widget woocommerce widget_product_categories">';
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'menu'=> 'chia_se',
                  'menu_class' => '',
                  'container_class' => '',
                ) );
                echo '</div>';
              else:
                the_widget( 'WC_Widget_Product_Categories', array(
                                              'count'		=> 1,
                      ) );
              endif;
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();

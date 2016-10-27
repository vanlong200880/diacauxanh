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
                <h1 class="page-title">
                  <?php echo single_cat_title(); ?>
                </h1>
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
                the_widget( 'WC_Widget_Product_Categories', array(
                                              'count'		=> 1,
                      ) );
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

<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); 
global $post;
?>
<?php echo get_template_part('templates/slider'); ?>
<div class="single-content">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h1 class="page-title"><?php the_title(); ?></h1>
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
          <div class="col-md-12 col-sm-12">
              <?php $cat = get_the_category();
              if($cat[0]->slug == 'hinh-anh'){ ?>
                <?php 
                $gallery = getGaleryFromPost($post);
                if($gallery[0]['ids']){ ?>
            <div class="list-gallery">
              <ul class="row">
                  <?php foreach ($gallery[0]['ids'] as $value): ?>
                <li class="col-md-3 col-sm-4">
                  <a data-rel="lightbox-gallery-0" class="lightbox" href="<?php echo wp_get_attachment_image_url(str_replace('&quot;', '', $value), 'full') ?>">
                      <?php echo wp_get_attachment_image( str_replace('&quot;', '', $value), 'medium' ); ?>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
                <?php }
                ?>
             <?php  }else{ ?>
              <div id="content">
              <?php 
                the_content(); ?> </div>
              <?php }
              ?>
          </div>
          <div class="col-md-12 col-sm-12">
            <div class="auth">
              <span><strong>Ngày đăng: </strong><?php the_date(); ?></span>
            </div>
          </div>
          
          <div class="col-md-12 col-sm-12">
            <div class="post-related">
              <h2>Tin khác</h2>
              <?php 
                $args = array (					 
                  'post_status'    => 'publish',		
                  'order'          => 'DESC',
                  'orderby'        => 'post_date',
                  'post_type'      => 'post',
                  'category_name'  => $cat[0]->slug,
                  'posts_per_page' => 7,
                  'post__not_in'   => array(get_the_ID())
                );
                $the_query = new WP_Query( $args );
                ?>
                <?php
                if ( $the_query->have_posts() ) { ?>
                <ul>
                  <?php 
                    while ( $the_query->have_posts() ) {
                      $the_query->the_post(); ?>
                  <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                      
                    <?php } ?>
                    </ul>
                <?php } ?>
              
                
              
            </div>
          </div>
        </div>
        
        <?php endwhile; // End of the loop. ?>
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
<?php
get_footer();






<div class="slider">
  <div id="owl-slider">
    <div class="item">
      <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-demo.png"></a>
    </div>
    <div class="item">
      <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-demo.png"></a>
    </div>
    <div class="item">
      <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-demo.png"></a>
    </div>
    <div class="item">
      <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/banner-demo.png"></a>
    </div>
  </div>

</div>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#owl-slider").owlCarousel({
        navigation : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay: 3000,
        stopOnHover: true,
        pagination: true,
        paginationNumbers: true
    });

  });
</script>
<?php
	wp_reset_postdata();
  $slug = 'sliders';
	$args = array (					 
			'post_status'    => 'publish',		
			'order'          => 'DESC',
			'orderby'        => 'post_date',
			'post_type'      => 'post',
			'category_name'  => $slug,
			'posts_per_page' => 10,
		);
		$the_query = new WP_Query( $args ); ;
		if($the_query->have_posts()){?>
			<ul id="owl-product-carousel-first">
			<?php while ($the_query->have_posts()){ 
				$the_query->the_post();
				?>
        <li>
          <a href="<?php echo get_field('link'); ?>" target="_blank" title="<?php the_title(); ?>">
						<?php 
									$attachment_id = get_post_thumbnail_id(get_the_ID());
									if (!empty($attachment_id))
										the_post_thumbnail('full'); ?>
					</a>
        </li>
		<?php	} ?>
			</ul>
		
<?php } ?>

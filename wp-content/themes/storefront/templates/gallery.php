<?php 
    $args = array (					 
			'post_status'    => 'publish',		
			'order'          => 'DESC',
			'orderby'        => 'menu_order',
			'post_type'      => 'post',
			'category_name'  => 'hinh-anh',
			'meta_query'     => array(
            array(
                'key'		 => 'hien-o-trang-chu',
                'value'      => true,
            ),
        ),
			'posts_per_page' => 1,
		);
  $the_query = new WP_Query( $args );
  ?>
<?php
  $html = '';
  $thumbnail = '';
  if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $gallery = getGaleryFromPost(get_the_ID());
            foreach ($gallery[0]['ids'] as $value):
              $html .= '<li>';
              $html .= wp_get_attachment_image( str_replace('&quot;', '', $value), 'full' );
              $html .= '</li>';
              
              $thumbnail .= '<li>';
                $thumbnail .= wp_get_attachment_image( str_replace('&quot;', '', $value), array(100,100) );
              $thumbnail .= '</li>';
            endforeach;
//            var_dump($gallery); die;
    } ?>
    <?php endif; ?>



<div class="gallery" id="gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div id="slider" class="flexslider">
          <ul class="slides">
            <?php echo $html; ?>
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
            <?php echo $thumbnail; ?>
          </ul>
        </div>
        
        <script type="text/javascript">
//          jQuery(function(){
//            SyntaxHighlighter.all();
//          });
          jQuery(window).load(function(){
            jQuery('#carousel').flexslider({
              animation: "slide",
              controlNav: false,
              animationLoop: false,
              slideshow: false,
              itemWidth: 100,
              itemMargin: 5,
              asNavFor: '#slider'
            });

            jQuery('#slider').flexslider({
              animation: "slide",
              controlNav: false,
              animationLoop: false,
              slideshow: false,
              sync: "#carousel",
              start: function(slider){
                jQuery('body').removeClass('loading');
              }
            });
          });
        </script>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="gallery-content">
          <p class="title">Hình ảnh</p>
          <p class="description">Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênhPhòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh</p>
          <p class="readmore"><a href="<?php echo home_url()?>/hinh-anh">Xem thêm >></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
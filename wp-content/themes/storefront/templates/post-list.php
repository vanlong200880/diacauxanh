<?php 
  $args = array (					 
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'post_date',
    'post_type'      => 'product',
    'product_cat'    => 'phan-bon',
    'posts_per_page' => 20,
  );
  $the_query = new WP_Query( $args );
  ?>
<?php
  if ( $the_query->have_posts() ) : ?>
<div class="post-type" id="product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="type-title">
          <p class="title"><a href="<?php echo home_url() ?>/danh-muc/phan-bon">Các loại phân bón</a></p>
          <p>Sản phẩm phân bón khoáng hòa tan 100% chứa NPK và trung vi lượng sản xuất theo công nghệ chelate giúp cây ăn dài ăn dai và đảm bao dưỡng chất đi vào cây là 98% </p>
        </div>
      </div>
      <div class="col-md-12 list-post">
        <div class="slider-type">
          <div id="owl-slider-type">
            <?php 
            $data = array();
            $i = 0;
            $k = 0;
            $temp = array();
                  while ( $the_query->have_posts() ) {
                    $i++;
                    $the_query->the_post();
                    $temp[] = array(
                        'id' => get_the_ID(),
                        'name' => get_the_title(),
                        'link' => get_permalink(),
                        'img' => get_the_post_thumbnail('', 'post-thumbnail'),
                      );
                    if($i == 2){
                      array_push($data, $temp);
                      $temp = array();
                      $i= 0;
                    }
                    $k++;
                    }
                    
                    ?>
            <?php if($data): ?>
            <?php foreach($data as $val): ?>
            <div class="item">
              <div class="item-product">
                <?php foreach ($val as $value): ?>
                <a href="<?php echo $value['link'] ?>" title="<?php echo $value['name']; ?>">
                  <?php echo $value['img']; ?>
                </a>
                <?php endforeach; ?>
              </div>
              
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>

        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($) {
            $("#owl-slider-type").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:false,
                autoPlay: 3000,
                stopOnHover: true,
                pagination: false,
                paginationNumbers: false,
                items : 4,
                itemsDesktop : [1199,4],
                itemsDesktopSmall : [979,4],
                navigationText: ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>']
            });

          });
        </script>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
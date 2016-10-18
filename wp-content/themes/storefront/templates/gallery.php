<div class="gallery" id="gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="slider" class="flexslider">
          <ul class="slides">
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_caramel.jpg" />
            </li>
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/kitchen_adventurer_caramel.jpg" />
            </li>
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
              itemWidth: 210,
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
      <div class="col-md-4">
        <div class="gallery-content">
          <p class="title">Hình ảnh</p>
          <p class="description">Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênhPhòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh Phòng trừ sâu bênh</p>
          <p class="readmore"><a href="<?php echo home_url()?>/hinh-anh">Xem thêm >></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
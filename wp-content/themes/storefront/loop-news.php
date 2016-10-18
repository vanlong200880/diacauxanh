<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: http://codex.wordpress.org/The_Loop
 *
 * @package storefront
 */

wp_reset_postdata();
while ( have_posts() ) : the_post(); ?>
<li class="col-md-12">
    <div class="both-news clearfix row">
      <div class="pic col-md-3">
        <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
          <?php
            $attachment_id = get_post_thumbnail_id(get_the_ID());
            if (!empty($attachment_id)) :
              the_post_thumbnail(array(320, 202)); ?>
            <?php endif; ?>
        </a>
      </div>
      <div class="info-news col-md-9">
        <h3>
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class="description"><?php echo the_excerpt_max_charlength(60); ?></p>
      </div>
    </div><!--end both-news-->
    <div class="row">
      <div class="col-md-12">
        <div class="view">
          <a class="pull-right readmore" href="<?php the_permalink(); ?>">Xem thêm</a>
        </div>
      </div>
    </div>
  </li>
	<?php
endwhile;
?>


<?php
/**
 * The loop template file.
 *
 * Included on pages like index.php, archive.php and search.php to display a loop of posts
 * Learn more: http://codex.wordpress.org/The_Loop
 *
 * @package storefront
 */

while ( have_posts() ) : the_post(); ?>
<li class="col-md-4 col-sm-4 gallery-item">
    <div class="both-news row">
      <div class="pic col-md-12 col-sm-12">
        <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
          <?php
            $attachment_id = get_post_thumbnail_id(get_the_ID());
            if (!empty($attachment_id)) :
              the_post_thumbnail(array(320, 202)); ?>
            <?php endif; ?>
        </a>
      </div>
      <div class="info-news col-md-12 col-sm-12">
        <h3>
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php the_title(); ?></a>
        </h3>
      </div>
      <div class="col-md-12 col-sm-12 post-date">
        <?php if(get_field('province')): ?>
        <span><i class="glyphicon glyphicon-camera" aria-hidden="true"></i> <?php echo get_field('province') ?></span>
        <?php endif; ?>
        <span class="date pull-right"><?php echo get_the_date('d/m/Y'); ?></span>
      </div>
    </div><!--end both-news-->
  </li>
	<?php
endwhile;
?>


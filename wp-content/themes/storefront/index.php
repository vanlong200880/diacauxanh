<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>
<?php echo get_template_part('templates/slider'); ?>
<?php echo get_template_part('templates/information'); ?>
<?php echo get_template_part('templates/about'); ?>
<?php echo get_template_part('templates/post-list'); ?>
<?php echo get_template_part('templates/share'); ?>
<?php echo get_template_part('templates/gallery'); ?>
<?php echo get_template_part('templates/map'); ?>
<?php echo get_template_part('templates/contact'); ?>

<?php get_footer();

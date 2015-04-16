<?php
/**
 * Template Name: Catalog
 */
?>

<div class="ui basic segment">
    <?php while (have_posts()) : the_post(); ?>
      <?php //get_template_part('templates/catalog/isotop', 'top'); ?>
      <?php //get_template_part('templates/catalog/isotop', 'left'); ?>
      <?php //get_template_part('templates/catalog/isotop', 'right'); ?>
      <?php get_template_part('templates/catalog/list'); ?>
    <?php endwhile; ?>
</div>

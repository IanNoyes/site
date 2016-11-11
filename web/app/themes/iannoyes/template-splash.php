<?php
/**
 * Template Name: Splash Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page-splash'); ?>
<?php endwhile; ?>

<?php
 get_header();
 get_footer();
?>

<!-- The Loop-->
<?php
if (have_posts()): whie(have_posts()): the_post;
 ?>

 <h3> <?php the_title(); ?>

<p><?php the_content ?></p>

<?php enwhile; endif; ?>
<?php get_footer(); ?>

<?php get_header(); ?>



<!-- start the loop -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here.</p>

<?php endif; ?>

<!-- /loop -->



<?php get_footer(); ?>
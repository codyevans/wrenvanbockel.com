<?php get_header(); ?>

<p>this is a regular page</p>

<!-- start the loop -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
	



<?php endwhile; endif; ?>

<!-- /loop -->



<?php get_footer(); ?>
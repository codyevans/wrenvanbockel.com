<?php get_header(); ?>



<!-- start the loop -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_field('medium'); ?>

<?php endwhile; else: ?>

	<p>There are no posts or pages here.</p>

<?php endif; ?>

<!-- /loop -->

<br>

<a href="/artwork/">index</a>



<?php get_footer(); ?>
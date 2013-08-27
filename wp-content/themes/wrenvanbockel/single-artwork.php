<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<p><?php the_field('medium'); ?></p>

	<img src="<?php the_field('main-image'); ?>">

	<?php previous_post_link(); ?>
	
	<a href="/artwork/">index</a>
 	
 	<?php next_post_link(); ?> 


<?php endwhile; endif; ?>


<?php get_footer(); ?>
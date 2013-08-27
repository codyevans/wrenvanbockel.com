<?php 

/*
	Template Name: Artwork Page
*/

get_header(); ?>


<?php
	
	$args = array(
		'post_type' => 'artwork',

	); 

	$the_query = new WP_Query($args);

 ?>

<!-- start custom loop -->


<?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
	<div class="module">
	<?php get_template_part('content', 'artwork'); ?>
	</div>

	

<?php endwhile; endif; ?>



<!-- /loop -->


<?php get_footer(); ?>
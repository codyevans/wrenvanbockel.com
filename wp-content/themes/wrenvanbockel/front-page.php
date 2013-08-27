<?php get_header(); ?>


<h1>Wren VanBockel</h1>
<p>The creative portfolio of Wren VanBockel</p>

 <nav id="filters">
    <a href="#" data-filter="*">All</a> | 
    <a href="#" data-filter="#painting">Painting</a> |
     <a href="#" data-filter="#sculpture">Sculpture</a>
</nav>


<?php
	
	$args = array(
		'post_type' => 'artwork' 
	); 

	$the_query = new WP_Query($args);

 ?>

<!-- start custom loop -->


<div class="container">

<?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
	<div id="<?php the_field('id'); ?>" class="module item">
	<?php get_template_part('content', 'artwork'); ?>
	</div>

<?php endwhile; endif; ?>

</div> <!-- /container -->	



<?php get_footer(); ?>
<?php get_header(); ?>


<h1>Hello World</h1>
<p>This is the front-page.php file</p>


<!-- start the loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h3><?php the_title(); ?></h3>




<?php endwhile; else: ?>

	<p>There are no posts or pages here.</p>

<?php endif; ?>
<!-- /loop -->


<?php get_footer(); ?>
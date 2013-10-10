<?php 

/*
	Template Name: Artwork Page
*/

$GLOBALS['bodyTag'] = "artwork-page";
get_header(); 

?>

		<div class="page-background">

            <header class="gpu" id="header">
                <a href="/" class="title">
                    Wren Van Bockel
                </a>
                <nav class="main-nav">
                    <ul>
                        <li>
                            <a href="/artwork/">artwork</a>
                        </li>
                        <li>
                            <a href="/about/">about</a>
                        </li>
                        <li>
                            <a href="/connect/">connect</a>
                        </li>
                    </ul>
                </nav>
            </header>

            <div id="filter-screen" class="filter-screen">
                <div class="centering-block">
                    <div class="centered-content">
                        <p>Filter Artwork by Category</p>
                         <nav class="filter-nav">
                            <ul id="filter-nav">
                                 <li>
                                    <a class="gpu selected" id="all-work" href="#" data-filter="*">all work</a>
                                </li>
                                <li>
                                    <a class="gpu" id="paintings" href="#" data-filter=".painting">paintings</a>
                                </li>
                                <li>
                                    <a class="gpu" id="wood-cuts" href="#" data-filter=".wood-cut">wood cuts</a>
                                </li>
                                <li>
                                    <a class="gpu" id="porcelain" href="#" data-filter=".porcelain">porcelain</a>
                                </li>
                            </ul>
                        </nav>
                        <p id="close-screen" class="exit">exit screen</p>
                    </div>
                </div>
            </div>

             <div id="filtering-bar" class="filter-bar">
                <div id="filter-btn" class="filter-btn">
                    <p>Filter Artwork</p>
                    <span class="arrow"></span>
                </div>
            </div>

            <div id="body-menu">
                <a href="/" class="title">
                    Wren Van Bockel
                </a>
                <nav class="nav">
                    <ul>
                        <li>
                            <a href="/artwork/">artwork</a>
                        </li>
                        <li>
                            <a href="/about/">about</a>
                        </li>
                        <li>
                            <a href="/connect/">connect</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="main-container">

                <div class="gpu" id="artwork-container">
                  

                        <!-- <div class="module item painting">
                            <a href="single-artwork.php">
                                <img src="img/hummingbirds.jpg">
                                <div class="caption-hover">
                                    <h3>Humming Birds</h3>
                                    <hr>
                                    <p class="category">Painting</p>
                                    <p class="year">2013</p>
                                    <div class="view-work">
                                        <span aria-hidden="true" data-icon="&#x53;"></span>
                                        View Work
                                    </div>
                                </div>
                            </a>
                        </div> -->


                    <?php
	
						$args = array(
							'post_type' => 'artwork',
						); 

						$the_query = new WP_Query($args);

					?>

					<?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						
						<div class="module item <?php the_field('cat'); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_field('main-image'); ?>">
                                <div class="caption-hover">
                                    <h3><?php the_title(); ?></h3>
                                    <hr>
                                    <p class="category"><?php the_field('cat'); ?></p>
                                    <p class="year"><?php the_field('date'); ?></p>
                                    <div class="view-work">
                                        <span aria-hidden="true" data-icon="&#x53;"></span>
                                        View Work
                                    </div>
                                </div>
                            </a>
                        </div>

					<?php endwhile; endif; ?>

                </div> <!-- /artwork-container --> 

                <div class="copyright">
                    <p>
                        © <?php echo date('Y'); ?> Wren Van Bockel - All Rights Reserved
                    </p>
                </div>


            </div> <!-- /main-container -->
        </div> <!-- /page-background -->

<?php get_footer(); ?>
<?php 

$GLOBALS['bodyTag'] = "single-artwork-page";
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
                        <p class="page-return">please return to the <a class="return-link" href="/artwork/">artwork</a> page for filtering</p>
                         <nav class="filter-nav">
                            <ul id="filter-nav">
                                 <li>
                                    <a class="gpu" id="all-work" href="#" data-filter="*">all work</a>
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
              <!--   <div id="filter-btn" class="filter-btn">
                    <p>Filter Artwork</p>
                    <span class="arrow"></span>
                </div> -->
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
                <div id="single-fade">
                    <div class="single-view">

                    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	                        <div class="main-image">
	                              <img src="<?php the_field('main-image'); ?>">
	                         </div>

	                         <div class="artwork-info">
	                            <h1 class="title"><?php the_title(); ?></h1>
	                            <hr>
	                            <p class="description">
	                               <?php the_field('description'); ?>
	                            </p>
	                            <ul>
	                                <li>
	                                    <p>
	                                        <strong>medium: </strong><?php the_field('medium'); ?>
	                                    </p>
	                                </li>
	                                <li>
	                                    <p>
	                                        <strong>size: </strong><?php the_field('size'); ?>
	                                    </p>
	                                </li>
	                            </ul>
	                        </div>

	                    </div> <!-- /single-view -->
	                    <div class="more-works">
	                        <ul>
	                           <li>
                                    <?php previous_post_link('<strong>%link</strong>'); ?> 
                                </li>
	                            <li>
	                                <strong>
                                        <a class="index" href="/artwork/">index</a>
                                    </strong>
	                            </li>
	                            <li>
                                    <?php next_post_link('<strong>%link</strong>'); ?> 
	                            </li>
	                        </ul>

                        <?php endwhile; endif; ?>

                    </div>
                </div> <!-- /fade -->  
                

                <div class="copyright">
                    <p>
                        © <?php echo date('Y'); ?> Wren Van Bockel - All Rights Reserved
                    </p>
                </div>


            </div> <!-- /main-container -->
        </div> <!-- /page-background -->

<?php get_footer(); ?>
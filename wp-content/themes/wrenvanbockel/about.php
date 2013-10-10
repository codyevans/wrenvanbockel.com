<?php 

/*
	Template Name: About Page
*/

$GLOBALS['bodyTag'] = "about-page";
get_header(); 

?>

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

        <div clas="gpu" id="left"></div>
        <div clas="gpu" id="right"></div>
        <div clas="gpu" id="top"></div>
        <div clas="gpu"id="bottom"></div>


        <div class="page-background">

           <div class="centering-block">
                <div class="centered-content">
                    <div id="intro-fade" class="gpu">
                        <div class="about-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/intro/wren-faceV2.png" alt="Wren Van Bockel">
                        </div>
                        <h1>Wren Van Bockel</h1>
                        <div class="sub-heading">
                           <p class="subtitle">
                            <span>About the Artist</span>
                           </p>
                        </div>

                        <div class="about-content">
                            <p class="intro-content">
                               Whimsical, bright, bold, and playful is the best way to describe Wren Van Bockel's artwork.
                               Animals are often at the forefront of her work and are usually set in a colorful scenery.
                               Her pieces read like cartoons or childhood story books. Often, young children are her biggest fans. 
                               Creating art drives her quest for meaning and gives her the greatest joy.
                            </p>
                            <p>
                                <strong>Andy Warhol</strong> once said, <blockquote>Don't think about making art, just get it done. 
                                Let everyone else decide if it's good or bad, whether they love it or hate it. 
                                While they are deciding, make even more art.</blockquote> 
                            </p>
                            <p>
                               Wren was born in 1977 among the apple orchards of Wenatchee in Central Washington. 
                               She began her schooling on Whidbey Island and culminated her formative years in Coeur d' Alene, Idaho. 
                               During her childhood she cultivated her artistic talents, making dollhouse furniture, drawing fashion models, 
                               and decorating the family tree house.  In 2001, Wren received a BFA from the University of Idaho. 
                               Wren currently resides in Boise Idaho, where she continues to share and show her creations while expanding her portfolio.
                            </p>
                            <p>
                                Wren's primary medium is acrylic on canvas and wood. She's recently moved into porcelain and mixed media to capture 
                                her characters in a three-dimensional format.
                            </p>
                            <p>
                                *BFA Painting and Drawing '01, University of Idaho
                            </p>
                        </div>

                      
                        <div class="copyright">
                            <p>
                                © <?php echo date('Y'); ?> Wren Van Bockel - All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
           </div>

        </div> <!-- /page-background -->

<?php get_footer(); ?>
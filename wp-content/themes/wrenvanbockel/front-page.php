<?php

$GLOBALS['bodyTag'] = "intro-page";
get_header(); 

?>

 <div clas="gpu" id="left"></div>
        <div clas="gpu" id="right"></div>
        <div clas="gpu" id="top"></div>
        <div clas="gpu"id="bottom"></div>


        <div class="page-background">

           <div class="centering-block">
                <div class="centered-content">
                    <div class="intro-logo" alt="Wren, the creative portfolio.">
                        <div class="wren-logo gpu"></div>
                        <div class="artwork-circle gpu">
                            <span>View my Work</span>
                        </div>
                        <div class="about-circle gpu">
                            <span>Get to Know Me</span>
                        </div>
                        <div class="connect-circle gpu">
                            <span>Say Hello</span>
                        </div>
                    </div>
                    <div id="intro-fade" class="gpu">
                        <h1>Wren Van Bockel</h1>
                        <div class="sub-heading">
                           <p class="subtitle">
                            <span>Visual Artist</span>
                           </p>
                        </div>
                        <nav class="intro-nav">
                            <ul id="intro-nav-animate">
                                <li>
                                    <a class="gpu" id="artwork-hover" href="/artwork/">artwork</a>
                                </li>
                                <li>
                                    <a class="gpu" id="about-hover" href="/about/">about</a>
                                </li>
                                <li>
                                    <a class="gpu" id="connect-hover" href="/connect/">connect</a>
                                </li>
                            </ul>
                        </nav>
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
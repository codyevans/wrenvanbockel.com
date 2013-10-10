<?php 

/*
	Template Name: Connect Page
*/

$GLOBALS['bodyTag'] = "connect-page";
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
                        <h1>Wren Van Bockel</h1>
                        <div class="sub-heading">
                           <p class="subtitle">
                            <span>Say Hello</span>
                           </p>
                        </div>

                        <div class="about-content">
                            <p>
                                *Please note, all original paintings listed on this website are no longer available for purchase, unless otherwise noted.  Thank you.
                            </p>
                            <p class="intro-content">
                                For general inquiries, commissions and purchasing artwork, please contact:
                            </p>
                            <p>
                                <strong>Email: </strong><a class="link" href="mailto:wrenvanbockel@msn.com">wrenvanbockel@msn.com</a> <br>
                                <strong>Phone: </strong><span class="phone">(208)818-6062</span> <br>
                                <strong>Facebook: </strong><a class="link" href="http://facebook.com/wren.vanbockel">facebook.com/wren.vanbockel</a>
                            </p>
                            <div class="email-link-contain">
                                <a class="email" href="mailto:wrenvanbockel@msn.com">email me</a>
                            </div>
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
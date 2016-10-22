<!DOCTYPE HTML>
<!--
    Minimaxing by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Be Bengal ! - Nothing Speaial but everythings are special</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="<?php echo ASSEST_PATH_INDEX; ?>/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_INDEX; ?>/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo ASSEST_PATH_INDEX; ?>/css/ie9.css" /><![endif]-->
    </head>
    <body>
        <div id="page-wrapper">
            <div id="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="12u">
                        <?php 
                            // front header menu
                            include(MyHelpers::UrlContent('~/views/bb_front/bb_front_header_menu.php'));
                        ?>                           

                        </div>
                    </div>
                </div>
            </div>
            <div id="banner-wrapper">
                <div class="container">

                    <div id="banner">
                        <h2>Put something cool here!</h2>
                        <span>And put something almost as cool here, but a bit longer ...</span>
                    </div>

                </div>
            </div>
            <div id="main">
                <div class="container">
                    <div class="row main-row">
                        <div class="4u 12u(mobile)">

                            <section>
                                <h2>Welcome to Be Bengal!</h2>
                                <p>This is <strong>Minimaxing</strong>, a fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a> and released for free by <a href="http://html5up.net">HTML5 UP</a>. It features
                                a simple, lightweight design, solid HTML5 and CSS3 code, and full responsive support for desktop, tablet, and mobile displays.</p>
                                <footer class="controls">
                                    <a href="http://html5up.net" class="button">More cool designs ...</a>
                                </footer>
                            </section>

                        </div>
                        <div class="4u 12u(mobile)">

                            <section>
                                <h2>Who are you guys?</h2>
                                <ul class="small-image-list">
                                    <li>
                                        <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic2.jpg" alt="" class="left" /></a>
                                        <h4>Jane Anderson</h4>
                                        <p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo facilisis amet quis.</p>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic1.jpg" alt="" class="left" /></a>
                                        <h4>James Doe</h4>
                                        <p>Vitae magna eget odio amet mollis justo facilisis amet quis. Sed sagittis consequat.</p>
                                    </li>
                                </ul>
                            </section>

                        </div>
                        <div class="4u 12u(mobile)">

                            <section>
                                <h2>How about some links?</h2>
                                <div>
                                    <div class="row">
                                        <div class="6u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Sed neque nisi consequat</a></li>
                                                <li><a href="#">Dapibus sed mattis blandit</a></li>
                                                <li><a href="#">Quis accumsan lorem</a></li>
                                                <li><a href="#">Suspendisse varius ipsum</a></li>
                                                <li><a href="#">Eget et amet consequat</a></li>
                                            </ul>
                                        </div>
                                        <div class="6u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Quis accumsan lorem</a></li>
                                                <li><a href="#">Sed neque nisi consequat</a></li>
                                                <li><a href="#">Eget et amet consequat</a></li>
                                                <li><a href="#">Dapibus sed mattis blandit</a></li>
                                                <li><a href="#">Vitae magna sed dolore</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <div class="row main-row">
                        <div class="6u 12u(mobile)">

                            <section>
                                <h2>An assortment of pictures and text</h2>
                                <p>Duis neque nisi, dapibus sed mattis quis, rutrum et accumsan.
                                Suspendisse nibh. Suspendisse vitae magna eget odio amet mollis
                                justo facilisis quis. Sed sagittis mauris amet tellus gravida
                                lorem ipsum dolor sit amet consequat blandit lorem ipsum dolor
                                sit amet consequat sed dolore.</p>
                                <ul class="big-image-list">
                                    <li>
                                        <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic3.jpg" alt="" class="left" /></a>
                                        <h3>Magna Gravida Dolore</h3>
                                        <p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
                                        facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
                                        Maecenas eu arcu purus, phasellus fermentum elit.</p>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic4.jpg" alt="" class="left" /></a>
                                        <h3>Magna Gravida Dolore</h3>
                                        <p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
                                        facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
                                        Maecenas eu arcu purus, phasellus fermentum elit.</p>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic5.jpg" alt="" class="left" /></a>
                                        <h3>Magna Gravida Dolore</h3>
                                        <p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
                                        facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
                                        Maecenas eu arcu purus, phasellus fermentum elit.</p>
                                    </li>
                                </ul>
                            </section>

                        </div>
                        <div class="6u 12u(mobile)">

                            <article class="blog-post">
                                <h2>Just another blog post</h2>
                                <a class="comments" href="#">33 comments</a>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic6.jpg" alt="" class="top blog-post-image" /></a>
                                <h3>Magna Gravida Dolore</h3>
                                <p>Aenean non massa sapien. In hac habitasse platea dictumst.
                                Maecenas sodales purus et nulla sodales aliquam. Aenean ac
                                porttitor metus. In hac habitasse platea dictumst. Phasellus
                                blandit turpis in leo scelerisque mollis. Nulla venenatis
                                ipsum nec est porta rhoncus. Mauris sodales sed pharetra
                                nisi nec consectetur. Cras elit magna, hendrerit nec
                                consectetur in, sollicitudin vitae justo. Cras amet aliquet
                                Aliquam ligula turpis, feugiat id fermentum malesuada,
                                rutrum eget turpis. Mauris sodales sed pharetra nisi nec
                                consectetur. Cras elit magna, hendrerit nec consectetur
                                in sollicitudin vitae.</p>
                                <footer class="controls">
                                    <a href="#" class="button">Continue Reading</a>
                                </footer>
                            </article>

                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="8u 12u(mobile)">

                            <section>
                                <h2>How about a truckload of links?</h2>
                                <div>
                                    <div class="row">
                                        <div class="3u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Sed neque nisi consequat</a></li>
                                                <li><a href="#">Dapibus sed mattis blandit</a></li>
                                                <li><a href="#">Quis accumsan lorem</a></li>
                                                <li><a href="#">Suspendisse varius ipsum</a></li>
                                                <li><a href="#">Eget et amet consequat</a></li>
                                            </ul>
                                        </div>
                                        <div class="3u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Quis accumsan lorem</a></li>
                                                <li><a href="#">Sed neque nisi consequat</a></li>
                                                <li><a href="#">Eget et amet consequat</a></li>
                                                <li><a href="#">Dapibus sed mattis blandit</a></li>
                                                <li><a href="#">Vitae magna sed dolore</a></li>
                                            </ul>
                                        </div>
                                        <div class="3u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Sed neque nisi consequat</a></li>
                                                <li><a href="#">Dapibus sed mattis blandit</a></li>
                                                <li><a href="#">Quis accumsan lorem</a></li>
                                                <li><a href="#">Suspendisse varius ipsum</a></li>
                                                <li><a href="#">Eget et amet consequat</a></li>
                                            </ul>
                                        </div>
                                        <div class="3u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Quis accumsan lorem</a></li>
                                                <li><a href="#">Sed neque nisi consequat</a></li>
                                                <li><a href="#">Eget et amet consequat</a></li>
                                                <li><a href="#">Dapibus sed mattis blandit</a></li>
                                                <li><a href="#">Vitae magna sed dolore</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <div class="4u 12u(mobile)">

                            <section>
                                <h2>Something of interest</h2>
                                <p>Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed.
                                Suspendisse eu varius nibh. Suspendisse vitae magna eget odio amet
                                mollis justo facilisis quis. Sed sagittis mauris amet tellus gravida
                                lorem ipsum dolor sit amet consequat blandit.</p>
                                <footer class="controls">
                                    <a href="#" class="button">Oh, please continue ....</a>
                                </footer>
                            </section>

                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">

                            <div id="copyright">
                                &copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->
            <script src="<?php echo ASSEST_PATH_INDEX; ?>/js/jquery.min.js"></script>
            <script src="<?php echo ASSEST_PATH_INDEX; ?>/js/skel.min.js"></script>
            <script src="<?php echo ASSEST_PATH_INDEX; ?>/js/skel-viewport.min.js"></script>
            <script src="<?php echo ASSEST_PATH_INDEX; ?>/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="<?php echo ASSEST_PATH_INDEX; ?>/js/main.js"></script>

    </body>
</html>

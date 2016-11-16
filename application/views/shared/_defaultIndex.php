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
               <?php 
                    $this->renderBody();
                ?>



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
                                                <li><a href="#">Tourist and Tourism</a></li>
                                                <li><a href="#">Technology and Society</a></li>
                                                <li><a href="#">Money and Business</a></li>
                                                <li><a href="#">India and Politics</a></li>
                                                <li><a href="#">Education and Training</a></li>
                                            </ul>
                                        </div>
                                        <div class="3u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">World and Language</a></li>
                                                <li><a href="#">Biography and Charector</a></li>
                                                <li><a href="#">City and Life</a></li>
                                                <li><a href="#">Human and Weather</a></li>
                                                <li><a href="#">Villege and Nature</a></li>
                                            </ul>
                                        </div>
                                        <div class="3u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Kids and Mother</a></li>
                                                <li><a href="#">Boy and Sports</a></li>
                                            </ul>
                                        </div>
                                        <div class="3u 12u(mobile)">
                                            <ul class="link-list">
                                                <li><a href="#">Classification and Ads</a></li>
                                                <li><a href="#">Shop and Market</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <div class="4u 12u(mobile)">

                            <section>
                                <h2>Something of interest</h2>
                                <p></p>
                                <footer class="controls">
                                    <a href="#" class="button">Oh, please continue ....</a>
                                </footer>
                            </section>

                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">

                            <div id="copyright">
                                &copy; BeBengal!. All rights reserved. | Design: <a href="http://sgrinfotech.com">SGR Infotech</a>
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

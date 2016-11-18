<?php 
$this->layout = '~/views/shared/_defaultIndex.php';
?>
            <div id="main">
                <div class="container">
                    <div class="row main-row">
                        <div class="8u 12u(mobile)">
                        <?php 
                                include(MyHelpers::UrlContent('~/views/pages/single_article_show.php'));       
                        ?>

                        </div>
                        <div class="4u 12u(mobile)">

                            <section>
                                <h2>Latest News !</h2>
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
                </div>
            </div>
            
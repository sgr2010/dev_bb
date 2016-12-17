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
                <section for="Latest Article">
                    <h2>Latest News !</h2>
                    <ul class="small-image-list">
                    <?php
                        foreach ($latest_data as $data) { ?>
                        <li>
                            <a href="#"><img src="<?php echo MODE; ?>/upload/article/<?php echo $data["IconImg"]; ?>" alt="" class="left" /></a>
                            <h4><?php echo $data['Headline'] ?></h4>
                            <p><?php echo $data['Abstract01'] ?></p>
                        </li>    

                    <?php }
                    ?>
                                           
                    </ul>
                </section>
                <section for="Top Articles">
                    <h2>Top Article !</h2>
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

                <section for="menu Links">
                    <h2>How about some links?</h2>
                    <div>
                         <div class="row">
                            <div class="6u 12u(mobile)">
                                <ul class="link-list">
                                    <li><a href="#">Tourist and Tourism</a></li>
                                    <li><a href="#">Make money from Home</a></li>
                                    <li><a href="#">India and Politics</a></li>
                                    <li><a href="#">Shop and Market</a></li>
                                    <li><a href="#">Eget et amet consequat</a></li>
                                </ul>
                            </div>
                            <div class="6u 12u(mobile)">
                                <ul class="link-list">
                                    <li><a href="#">Boys and Sports</a></li>
                                    <li><a href="#">India and Politics</a></li>
                                    <li><a href="#">Technology and Society</a></li>
                                    <li><a href="#">City of Joy</a></li>
                                    <li><a href="#">Marry Marry Gift</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
            
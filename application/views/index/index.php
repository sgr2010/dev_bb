<?php 
$this->layout = '~/views/shared/_defaultIndex.php';
?>

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
                        <h2>Our Top Article</h2>
                        <ul class="small-image-list">
                            <li>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic2.jpg" alt="" class="left" /></a>
                                <h4>Test Test</h4>
                                <p>Test test Test testTest testTest testTest testTest testTest testTest testTest test</p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic1.jpg" alt="" class="left" /></a>
                                <h4>Test test</h4>
                                <p>Test testTest testTest testTest testTest testTest testTest testTest testTest testTest test.</p>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="4u 12u(mobile)">

                    <section>
                        <h2>Our Top Article</h2>
                        <ul class="small-image-list">
                            <li>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic2.jpg" alt="" class="left" /></a>
                                <h4>Test Test</h4>
                                <p>Test test Test testTest testTest testTest testTest testTest testTest testTest test</p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic1.jpg" alt="" class="left" /></a>
                                <h4>Test test</h4>
                                <p>Test testTest testTest testTest testTest testTest testTest testTest testTest testTest test.</p>
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
            <div class="row main-row">
                <div class="6u 12u(mobile)">

                    <section>
                        <h2>Latest articles are comming!</h2>
                        <p>New and Latest articles are coming soon. We will published these bellow article as soon as possible.</p>
                        <ul class="big-image-list">
                            <li>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic3.jpg" alt="" class="left" /></a>
                                <h3>Latest Articles title</h3>
                               <p>Test test. testtesttesttesttesttest test testtest  test testtest test testtest test testtest test testtest
                                 test testtest test testtest test testtest test testtest test testtest
                                  test testtest test testtest. </p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic4.jpg" alt="" class="left" /></a>
                                <h3>Latest Articles title</h3>
                                <p>Test test. testtesttesttesttesttest test testtest  test testtest test testtest test testtest test testtest
                                 test testtest test testtest test testtest test testtest test testtest
                                  test testtest test testtest. </p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo ASSEST_PATH_INDEX; ?>/images/pic5.jpg" alt="" class="left" /></a>
                                <h3>Latest Articles title</h3>
                                <p>Test test. testtesttesttesttesttest test testtest  test testtest test testtest test testtest test testtest
                                 test testtest test testtest test testtest test testtest test testtest
                                  test testtest test testtest.</p>
                            </li>
                        </ul>
                    </section>

                </div>
                <div class="6u 12u(mobile)">

                    <article class="blog-post">
                        <h2>Just another article post</h2>
                        <a class="comments" href="#">33 comments</a>
                        <a href="javascript:AtricleDataSingle('art','tt','<?php echo $data['ArticleId'] ?>');"><img src="<?php echo MODE; ?>/upload/article/<?php echo $data["FrontImg"]; ?>.jpg" width="100%" ></a>

                        <h3><a href="javascript:AtricleDataSingle('art','tt','<?php echo $data['ArticleId'] ?>');"><?php echo $data['Headline']; ?></a></h3>
                        <p><?php echo $data['Abstract01']; ?></p>
                        <footer class="controls">
                            <a href="#" class="button">Continue Reading</a>
                        </footer>
                    </article>

                </div>
            </div>
        </div>
    </div>
           
    


    <script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

    function AtricleDataSingle(data1, data2, data3){
        //alert(data3);
        document.location.href = data1 + "/" +data2 + "?id=" + data3;

    }    
  </script>     
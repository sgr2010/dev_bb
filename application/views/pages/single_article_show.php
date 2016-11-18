
 <a href="#"><img src="<?php echo MODE; ?>/upload/article/<?php echo $data["FrontImg"]; ?>.jpg"  alt="" class="top blog-post-image" /></a>

    <section class="left-content">                  

        <h2><?php echo nl2br($data["Headline"]); ?></h2>Published Date :<?php echo nl2br($data["PublishedDate"]); ?><p></p>
        <p><?php echo nl2br($data["Abstract01"]); ?></p>
        <p><?php echo nl2br($data["MainText01"]); ?></p>
        <p><?php echo nl2br($data["MainText02"]); ?></p>
    </section>
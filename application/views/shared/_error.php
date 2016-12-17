<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Dashboard - SGR Admin</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/font-awesome/4.5.0/css/font-awesome.min.css" />
        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/fonts.googleapis.com.css" />
        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->
        <!-- ace settings handler -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace-extra.min.js"></script>
        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="ace-extra.min.js assets/js/html5shiv.min.js"></script>
        <script src="ace-extra.min.js assets/js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-2.1.4.min.js"></script>
    </head>    
    <body class="no-skin">
        <?php include(MyHelpers::UrlContent('~/views/shared/header.php')); ?>
        <?php include(MyHelpers::UrlContent('~/views/shared/_menu5.php')); ?> 
           
        <div class="main-content">
            <div class="main-content-inner">
                <?php 
                    include(MyHelpers::UrlContent('~/views/shared/nav_menu_title_bar.php'));
                ?>                
                <div class="page-content">
                    <!-- /.page-header start -->
                    <?php 
                        include(MyHelpers::UrlContent('~/views/shared/page_header.php'));
                    ?>
                    <!-- /.page-header end -->
                    <div class="row">
                        <div class="col-xs-12"> 
                        <?php 
                            $this->renderBody();
                        ?>
                            <!-- Form list end here --> 
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>
        <?php 
            include(MyHelpers::UrlContent('~/views/shared/footer.php'));
        ?>
        
    </body>
</html>
 <!--[if !IE]> -->


<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

    window.onload = function() {
        document.getElementById('myLogout').onclick = function() {
            document.getElementById('logoout').submit();
            return false;
        };
    };

</script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>
<!-- <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script> -->
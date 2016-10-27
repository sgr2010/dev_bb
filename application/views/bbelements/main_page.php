<!DOCTYPE html>
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

    </head>
    <body class="no-skin">

        <?php
        // header menu LIST shared
            include(MyHelpers::UrlContent('~/views/shared/header.php'));
        ?>

        <?php
        // felt menu LIST shared
            include(MyHelpers::UrlContent('~/views/shared/menu_left_test.php'));
        ?>
        
        

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?php echo HOME_URL; ?>">Home</a>
                            </li>
                            <li <?php if( $menu_sub == null ) ?>    class = "active"; >
                                <?php if( $menu_sub != null ) { ?> <a href="#"><?php echo $menu; ?></a>
                                <?php 
                                }else{ echo "$menu"; }   ?>
                            </li>
                            <?php
                                if( $menu_sub != null ){ ?>      
                            <li class="active"><?php echo "$menu_sub"; ?></li>
                              <?php    }
                            ?>
                        </ul><!-- /.breadcrumb -->

                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- /.nav-search -->
                    </div>

                    <div class="page-content">                        
                     
                        <!-- /.page-header start -->
                        <?php 
                            include(MyHelpers::UrlContent('~/views/shared/page_header.php'));
                        ?>
                        <!-- /.page-header end -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <!-- Form list here --> 
                            <?php 
                                //include(MyHelpers::UrlContent('~/views/bb_forms/article_type_new_add_frm.php'));
                            ?>

                                <!-- Form list end here --> 
                            </div><!-- /.row -->
                        </div><!-- /.page-content -->
                    </div>
                </div>
            </div>
        </div>

         <?php 
            include(MyHelpers::UrlContent('~/views/shared/footer.php'));
        ?>
        


        
    </body>
</html>










         <!--[if !IE]> -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>

        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>



        
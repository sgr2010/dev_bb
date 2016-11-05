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
        include(MyHelpers::UrlContent('~/views/shared/header.php'));
        include(MyHelpers::UrlContent('~/views/shared/menu_left_test.php'));
           
    ?>

        
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
                            <!-- PAGE CONTENT BEGINS -->
                            <!-- Form list here --> 
                        <!-- /.page-header end -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <!-- table list here --> 
                        <!-- TO Do -->
                        <div class="row">
                            <div class="col-xs-12">
                                
                                <div class="table-header">
                                    <?php echo $article_single["article_tittle"]; ?>
                                </div>
              
                               <span class="profile-picture">
                                <img src="<?php echo ASSEST_PATH_INDEX; ?>/css/images/banner.jpg" width="100%" >
                                </span>
                                <!-- div.table-responsive -->

                                <div class="clearfix">
                                  
                                </div>

                                <div class="hr dotted"></div>

                                <div>
                                    <div id="user-profile-1" class="user-profile row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?php echo ASSEST_PATH_ADMIN; ?>/images/avatars/profile-pic.jpg" />
                                                </span>

                                                <div class="space-4"></div>


                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Current Status</span>
                                                        </a>
                                                        <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                                            <li class="dropdown-header"> Change Status </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-circle green"></i>&nbsp;
                                                                    <span class="green">Available</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-circle red"></i>&nbsp;
                                                                    <span class="red">Hold</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-circle grey"></i>&nbsp;
                                                                    <span class="grey">Invisible</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="space-6"></div>

                                            <div class="profile-contact-info">
                                                <div class="profile-contact-links align-left">                                                    

                                                    <a href="#" class="btn btn-link">
                                                        <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                                        Vew Article on Web
                                                    </a>
                                                </div>

                                                <div class="space-6"></div>

                                                <div class="profile-social-links align-center">
                                                    <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
                                                        <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                                                    </a>

                                                    <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
                                                        <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                                                    </a>

                                                    <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
                                                        <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="hr hr12 dotted"></div>

                                            <div class="clearfix">
                                                <div class="grid2">
                                                    <span class="bigger-175 blue">25</span>

                                                    <br />
                                                    Followers
                                                </div>

                                                <div class="grid2">
                                                    <span class="bigger-175 blue">12</span>

                                                    <br />
                                                    Following
                                                </div>
                                            </div>

                                            <div class="hr hr16 dotted"></div>
                                        </div>

                                        <div class="col-xs-12 col-sm-9">
                                            <div class="center">
                                                <span class="btn btn-app btn-sm btn-light no-hover">
                                                    <span class="line-height-1 bigger-170 blue"> 1,411 </span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> Views </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-yellow no-hover">
                                                    <span class="line-height-1 bigger-170"> 32 </span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> Followers </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-pink no-hover">
                                                    <span class="line-height-1 bigger-170"> 4 </span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> Projects </span>
                                                </span>

                                                <span class="btn btn-app btn-sm btn-grey no-hover">
                                                    <span class="line-height-1 bigger-170"> 23 </span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> Reviews </span>
                                                </span>

                                                  <span class="btn btn-app btn-sm btn-primary no-hover">
                                                    <span class="line-height-1 bigger-170"> 55 </span>

                                                    <br />
                                                    <span class="line-height-1 smaller-90"> Contacts </span>
                                                </span>
                                                <button class="btn btn-app btn-purple btn-sm" onclick="AtriclePicSingle('article','article_view_single_pic_upload','<?php echo $article_single["id"]; ?>')">
                                                    <i class="ace-icon fa fa-cloud-upload bigger-200"></i>
                                                    Pic Upload
                                                </button>

                                                <button class="btn btn-app btn-danger btn-sm">
                                            <i class="ace-icon fa fa-trash-o bigger-200"></i>
                                            Delete
                                        </button>


                                            </div>

                                            <div class="space-12"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                           
                                                
                                            </div>
                                            </div>

                                            <div class="space-12"></div>

                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Article Title </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username"><?php echo $article_single["article_tittle"]; ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Article Type </div>

                                                    <div class="profile-info-value">
                                                      
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Date of Published </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age">2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Tages </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup"><?php echo $article_single["article_tag"]; ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Current Status </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login">Active</span>
                                                    </div>
                                                    <div class="btn-group">
                                                <button class="btn btn-sm btn-white">Status change</button>

                                                <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle">
                                                    <i class="ace-icon fa fa-angle-down icon-only"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-yellow">
                                                    <li><a href="#">Active</a></li>
                                                    <li><a href="#">Hold</a></li>
                                                    <li><a href="#">Not Publish</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Blocked</a></li>
                                                </ul>
                                            </div><!-- /.btn-group -->

                                                </div>
                                            </div>



                                            <div class="space-20"></div>

                                            <div class="widget-box transparent">


                                            <div class="widget-box">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="widget-title smaller">Contents ONE</h4>
                                                    <div class="widget-toolbar">
                                                        <label>
                                                            <small class="green">
                                                                <b>Active </b>
                                                            </small>

                                                            <input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
                                                            <span class="lbl middle"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <?php echo nl2br($article_single["text01"]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="widget-title smaller">Contents TWO</h4>
                                                    <div class="widget-toolbar">
                                                        <label>
                                                            <small class="green">
                                                                <b>Active </b>
                                                            </small>

                                                            <input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
                                                            <span class="lbl middle"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <?php echo nl2br($article_single["text02"]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="widget-title smaller">Contents THREE</h4>
                                                    <div class="widget-toolbar">
                                                        <label>
                                                            <small class="green">
                                                                <b>Active </b>
                                                            </small>

                                                            <input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
                                                            <span class="lbl middle"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <?php echo nl2br($article_single["text01"]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="widget-header widget-header-small">
                                                    <h4 class="widget-title blue smaller">
                                                        <i class="ace-icon fa fa-rss orange"></i>
                                                        Recent Activities
                                                    </h4>

                                                    <div class="widget-toolbar action-buttons">
                                                        <a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh blue"></i>
                                                        </a>&nbsp;
                                                        <a href="#" class="pink">
                                                            <i class="ace-icon fa fa-trash-o"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main padding-8">
                                                        <div id="profile-feed-1" class="profile-feed">
                                                            <div class="profile-activity clearfix">
                                                                <div>
                                                                    <img class="pull-left" alt="Alex Doe's avatar" src="<?php echo ASSEST_PATH_ADMIN; ?>/images/avatars/avatar5.png" />
                                                                    <a class="user" href="#"> Alex Doe </a>
                                                                    changed his profile photo.
                                                                    <a href="#">Take a look</a>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                        an hour ago
                                                                    </div>
                                                                </div>

                                                                <div class="tools action-buttons">
                                                                    <a href="#" class="blue">
                                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                    </a>

                                                                    <a href="#" class="red">
                                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                         
                                                           
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                        </div>
                        <!-- table list end here --> 
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
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

<script type="text/javascript">
    
    function AtriclePicSingle(data1, data2, data3){
        //alert(data3);
        document.location.href = data2 + "?id=" + data3;

    }
</script>



        
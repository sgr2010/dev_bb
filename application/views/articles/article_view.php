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
                                    Results for "Latest Registered Article"
                                </div>
                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </th>
                                                <th>ID</th>
                                                <th>Title</th>                                                
                                                <th>Article Type</th>
                                                <th>Status</th>
                                                <th>Date of Publication</th>   
                                                <th></th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            <?php 
                                            if( $article_all == false ){
                                            ?>
                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                    <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>   
                                                <td> No record </td>
                                                <td> No record</td>
                                                <td> No record </td>
                                                <td> No record</td>
                                                <td>No record</td>
                                                <td>
                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                        <a class="blue" href="#">
                                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                        </a>
                                                        <a class="green" href="#">
                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>
                                                        <a class="red" href="#">
                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                        </a>
                                                    </div>                                                    
                                                </td>
                                            </tr>
                                            
                                            <?php 
                                            }else{
                                                foreach ($article_all as $key => $value) {                                            
                                          
                                            ?>
                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                    <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>   
                                                <td>
                                                    <a href="#"><?php echo $value['id'] ?></a>
                                                </td>
                                                <td>
                                                    <a href="javascript:AtricleDataSingle('article','article_view_single','<?php echo $value['id'] ?>');"><?php echo $value['article_tittle'] ?></a>
                                                </td>
                                                <td><?php echo $value['article_type'] ?></td>
                                                <td>
                                                    <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                </td>
                                                <td><?php echo $value['date_of_publication'] ?></td>
                                                <td>
                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                        <a class="blue" href="#">
                                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                        </a>
                                                        <a class="green" href="#">
                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>
                                                        <a class="red" href="#">
                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                        </a>
                                                    </div>                                                    
                                                </td>                   
                                                
                                            </tr>
                                            <?php
                                            }
                                        }
                                        
                                        ?> 
                                        </tbody>
                                    </table>
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
    
    function AtricleDataSingle(data1, data2, data3){
        //alert(data3);
        document.location.href = data2 + "?id=" + data3;

    }
</script>



        
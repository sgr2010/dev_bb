<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Form Elements - Ace Admin</title>

        <meta name="description" content="Common form elements and layouts" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

          <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/bootstrap.min.css" />
       
        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/fonts.googleapis.com.css" />
        <!-- page specific plugin styles -->
        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-rtl.min.css" />
        <!-- ace settings handler -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace-extra.min.js"></script>
    </head>

    <body class="no-skin">
    <?php 
        include(MyHelpers::UrlContent('~/views/shared/header.php'));

        include(MyHelpers::UrlContent('~/views/shared/menu_left.php'));
    ?>



    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
    </div>
    <div class="main-content">
        <div class="main-content-inner">
        <!-- nav manu statrt here -->
        <?php 
            include(MyHelpers::UrlContent('~/views/shared/nav_menu_title_bar.php'));
        ?>
        <!-- nav manu end here -->

            <div class="page-content">               
                <!-- /.page-header start -->
                <?php 
                    include(MyHelpers::UrlContent('~/views/shared/page_header.php'));
                ?>

                <!-- /.page-header end -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <!-- table list here --> 
                        <!-- TO Do -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="header smaller lighter blue"><?php echo $page_header_sub_title; ?></h3>
                                <div class="clearfix">
                                    <div class="pull-right tableTools-container"></div>
                                </div>
                                <div class="table-header">
                                    Results for "Latest Registered Article Type"
                                </div>
                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                   
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>                                              
                            <th>Title</th>
                            <th>Describe</th>
                            <th class="hidden-480">Status</th>

                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                Date of Regi
                            </th>
                            <th class="hidden-480">Admin</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody> 
                    <?php 
                        foreach ($articleTypes as $key => $value) {                                            
                        ?>

                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>
                                <a href="#"><?php echo $value['menu_name'] ?></a>
                            </td>
                            <td><a href="#"><?php echo $value['menu_description'] ?></td>
                            <td class="hidden-480"><div class="col-xs-3">
                                                    <label>
                                                        <input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </div></td>
                            <td><?php echo $value['date_of_regi'] ?></td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning"><?php echo $value['admin_id'] ?></span>
                            </td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button class="btn btn-xs btn-success">
                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>

                                    <button class="btn btn-xs btn-warning">
                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                    </button>
                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                    <span class="blue">
                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="green">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                    <span class="red">
                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>       
                        <?php
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
            </div>
        </div><!-- /.main-content -->

        <?php 
            include(MyHelpers::UrlContent('~/views/shared/footer.php'));
        ?>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <!--[if !IE]> -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-2.1.4.min.js"></script>

        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/chosen.jquery.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/autosize.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.inputlimiter.min.js"></script>

        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/buttons.flash.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/buttons.html5.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/buttons.print.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/buttons.colVis.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/dataTables.select.min.js"></script>


      
<!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                //initiate dataTables plugin
                var myTable = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
              
                
              
                
                
                myTable.on( 'select', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
                    }
                } );
                myTable.on( 'deselect', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
                    }
                } );  
            
            
            
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);          
              
                
                
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });                

            })
        </script>
    </body>
</html>

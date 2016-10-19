<!DOCTYPE html>
<html lang="en">
    <head> 

        <meta name="description" content="Common form elements and layouts" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/bootstrap.min.css" />
      
        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
      
        <!-- ace settings handler -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace-extra.min.js"></script>
    </head>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
        <body>


                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form">
                                    <div class="hr hr-24"></div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="widget-box">
                                                <div class="widget-header">
                                                    <h4 class="widget-title">Text Area</h4>

                                                    <div class="widget-toolbar">
                                                        <a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>

                                                        <a href="#" data-action="close">
                                                            <i class="ace-icon fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <div>
                                                            <label for="form-field-8">Default</label>

                                                            <textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
                                                        </div>

                                                        <hr />

                                                        <div>
                                                            <label for="form-field-9">With Character Limit</label>
                                                            <textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>
                                                        </div>

                                                        <hr />

                                                        <div>
                                                            <label for="form-field-11">Autosize</label>

                                                            <textarea id="form-field-11" class="autosize-transition form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.span -->

                                    </div>                                     
                                </form>
                                </div>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
        <![endif]-->

        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/chosen.jquery.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/autosize.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.inputlimiter.min.js"></script>



        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {

                $('[data-rel=tooltip]').tooltip({container:'body'});
                $('[data-rel=popover]').popover({container:'body'});
            
                autosize($('textarea[class*=autosize]'));
                
                $('textarea.limited').inputlimiter({
                    remText: '%n character%s remaining...',
                    limitText: 'max allowed : %n.'
                });

                
                $(document).one('ajaxloadstart.page', function(e) {
                    autosize.destroy('textarea[class*=autosize]')
                    
                    $('.limiterBox,.autosizejs').remove();
                    $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
                });
            
            });
        </script>
    </body>
</html>

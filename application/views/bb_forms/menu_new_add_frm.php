<!-- 
Page Name : menu_new_add_frm.php
Purpose : Front page header menu new add 
-->

<div class="row">
 <h3 class="header smaller lighter blue"><?php echo "$page_header_sub_title"; ?></h3>

    <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" name="frm_add_new_menu" method="POST" action="master_menu_new" >
          
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Menu Name </label>
                <div class="col-sm-9">
                    <input type="text" id="form-field-1" placeholder="Menu Name ..." name="menu_name" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Menu Description </label>
                <div class="col-sm-9">
                    <textarea class="form-control limited" id="form-field-9" maxlength="100" name="menu_describe" placeholder="Menu short describtion" ></textarea>
                </div>
            </div>           
           
            <div class="space-4"></div>                                       
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="Submit">
                    <input type="hidden" name="mode" value="new" >
                        <i class="ace-icon fa fa-check bigger-110"></i>Submit</button>&nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
                </div>
            </div>
        </form>
    </div><!-- /.row -->
</div><!-- /.page-content -->

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
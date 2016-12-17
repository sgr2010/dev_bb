<?php 
$this->layout = '~/views/shared/_default.php';
?>
<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>
    <i class="ace-icon fa fa-check green"></i> <?php echo $message; ?>
</div>


<div class="row">
	<div class="col-xs-12">
    	<!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" name="frm_article_type" method="POST" action="article_type_edit" >
            
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Article Type Title </label>
                <div class="col-sm-9">
                    <input type="text" id="form-field-1" name="ArticleTypeName" class="form-control" value="<?php echo ($data["ArticleTypeName"]); ?>" />
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Article Type Description </label>
                <div class="col-sm-9">
                    <textarea class="form-control limited" id="form-field-9" maxlength="100" name="Description" ><?php echo ($data["Description"]); ?></textarea>
                </div>
            </div>      
            
            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="Submit">
                    <input type="hidden" name="mode" value="edit" >
                    <input type="hidden" name="id" value="<?php echo ($data["ArticleTypeId"]); ?>">
                        <i class="ace-icon fa fa-check bigger-110"></i>Update</button>&nbsp; &nbsp; &nbsp;
                    <button class="btn" type="Cancel">
                        <i class="ace-icon fa fa-undo bigger-110"></i>Cancel</button>
                </div>
            </div>
        </form>
	</div><!-- /.row -->
</div><!-- /.page-content -->


<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/chosen.jquery.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.inputlimiter.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>


<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $('[data-rel=tooltip]').tooltip({container:'body'});
        $('[data-rel=popover]').popover({container:'body'});  
     
        
        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        
        $(document).one('ajaxloadstart.page', function(e) {
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });
    
    });
</script>

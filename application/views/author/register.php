<?php 
$this->layout = '~/views/shared/_default.php';
?>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script> 

<div class="row">
    <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" name="frm_author_register" method="POST" action="register" >
          
           <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Author Name </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="Author Name" class="col-xs-10 col-sm-5" name="authorName" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Author Age</label>
				<div class="col-sm-9">
					<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Age" name="authorAge" />
				</div>
			</div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Article Type Description </label>
                <div class="col-sm-9">
                    <textarea class="form-control limited" id="form-field-9" maxlength="100" name="authorDescribe" placeholder="Article short describtion" ></textarea>
                </div>
            </div>           
           
            <div class="space-4"></div>                                       
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="Submit">
                    <input type="hidden" name="mode" value="new" >
                        <i class="ace-icon fa fa-check bigger-110"></i>Register</button>&nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
                </div>
            </div>
        </form>
    </div><!-- /.row -->
</div><!-- /.page-content -->


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
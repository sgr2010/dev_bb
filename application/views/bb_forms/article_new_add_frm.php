
                                <!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal" role="form" name="frm_article" method="POST" action="input" >
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Article Title </label>
    <div class="col-sm-9">
        <input type="text" id="form-field-1" placeholder="Article Title" name="article_tittle" class="form-control" />
    </div>
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag Input</label>
    <div class="col-sm-9">   
            <input type="text" name="article_tage" id="form-field-tags" value="" placeholder="Enter tags ..." />
    </div>  
</div> 

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Article Type</label>
    <div class="col-sm-9">
   
            <select class="chosen-select form-control" name="article_type" id="form-field-select-3" data-placeholder="Choose a Article Type...">
            <option value=""></option>
            <?php
            foreach ($articleTypes as $key => $types) {
                echo "<option value=". $types['id'] .">".$types['article_type_title']."</option>";
            }
            ?>                                                   
            </select> 
    </div>  
</div>

<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Article Content 1st </label>
    <div class="col-sm-9">                                                                 
        <div class="widget-box widget-color-blue">                                
            <div class="widget-main no-padding">
                <textarea name="article_contects01" data-provide="markdown" data-iconlibrary="fa" rows="10">
                </textarea>
            </div>                                                
        </div>       
    </div>  
</div>  
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Article Content 2nd </label>
    <div class="col-sm-9">                                                                 
        <div class="widget-box widget-color-blue">                                
            <div class="widget-main no-padding">
                <textarea name="article_contects02" data-provide="markdown" data-iconlibrary="fa" rows="10">
                </textarea>
            </div>                                                
        </div>       
    </div>  
</div> 
<div class="space-4"></div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Article Content 3rd </label>
    <div class="col-sm-9">                                                                 
        <div class="widget-box widget-color-blue">                                
            <div class="widget-main no-padding">
                <textarea name="article_contects03" data-provide="markdown" data-iconlibrary="fa" rows="10">
                </textarea>
            </div>                                                
        </div>       
    </div>  
</div> 
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Publish Date </label>
        <div class="col-sm-9"> 
            <div class="input-group">
                <input class="form-control date-picker" name="publish_date" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
                <span class="input-group-addon">
                    <i class="fa fa-calendar bigger-110"></i>
                </span>
            </div>
        </div>

</div> 
<div class="space-4"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Front Image </label>
    <div class="col-sm-9"> 
        <div class="widget-body">
            <div class="widget-main">                                                        

                <div class="form-group">
                    <div class="col-xs-12">
                        <input multiple="" type="file" id="id-input-file-3" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 


<div class="space-4"></div>



<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="Submit">
            <i class="ace-icon fa fa-check bigger-110"></i>Submit</button>&nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
    </div>
</div>
</form>


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
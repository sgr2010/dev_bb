
<!-- 
Page : Article update Form
Name : article_update_frm.php
PAGE CONTENT BEGINS 
-->
<form class="form-horizontal" role="form" name="frm_article" method="POST" action="edit" >
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Article Title </label>
        <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Article Title" name="article_tittle" class="form-control" value="<?php echo ($data["Headline"]); ?>" />
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
            foreach ($articleTypes as $key => $types) { ?>
                <option value="<?php echo $types['ArticleTypeId']; ?>" <?php if( $types['ArticleTypeId'] == $data["ArticleType"] ){ 
                    echo 'selected'; } ?> > <?php echo $types['ArticleTypeName']; ?> </option>
            <?php
            }
            ?>                                                   
            </select> 
        </div>  
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Article Content 1st </label>
        <div class="col-sm-9">                                                                 
            <div>       
                <textarea id="form-field-11" name="content1" class="autosize-transition form-control"><?php echo ($data["Abstract01"]); ?></textarea>
            </div>     
        </div>  
    </div> 
    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Article Content 2nd </label>
        <div class="col-sm-9">                                                                 
            <div>       
            <textarea id="form-field-11" name="content2" class="autosize-transition form-control"><?php echo ($data["MainText01"]); ?></textarea>
            </div>     
        </div>  
    </div> 
    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Article Content 3rd </label>
        <div class="col-sm-9">                                                                 
            <div>       
            <textarea id="form-field-11" name="content3" class="autosize-transition form-control"><?php echo ($data["MainText02"]); ?></textarea>
            </div>     
        </div>  
    </div> 

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Publish Date </label>
        <div class="col-sm-9"> 
            <div class="input-group">
                <input class="form-control date-picker" name="publish_date" id="id-date-picker-1" type="text" value="<?php echo ($data["PublishedDate"]); ?>" data-date-format="yyyy-mm-dd" />
                <span class="input-group-addon">
                    <i class="fa fa-calendar bigger-110"></i>
                </span>
            </div>
        </div>
    </div> 

    <div class="space-4"></div>

    <input type="hidden" name="mode" value="update" />
    <input type="hidden" name="id" value="<?php echo ($data["ArticleId"]); ?>" />
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="Submit">
                <i class="ace-icon fa fa-check bigger-110"></i>Update</button>&nbsp; &nbsp; &nbsp;
            <button class="btn" onclick="AtricleDataSingle('article','article_view_single','<?php echo $data["ArticleId"]; ?>')" type="button">
                <i class="ace-icon fa fa-undo bigger-110"></i>Cancel</button>
        </div>
    </div>
</form>




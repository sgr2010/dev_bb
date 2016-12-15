<?php 
$this->layout = '~/views/shared/_default.php';
?>
<div class="row">
    <div class="col-xs-12">
        <div class="table-header">
            Results for "Latest Registered Article Type"
        </div>
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
                        <th>Describe</th>
                        <th>Status</th>
                        <th></th>                                            
                    </tr>
                </thead>
                <tbody>  
                    <?php 
                    if( $articleTypes == false ){
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
                        <td>No record</td>
                        <td></td>
                    </tr>                                            
                    <?php 
                    }else{
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
                            <a href="#"><?php echo $value['ArticleTypeId'] ?></a>
                        </td>
                        <td>
                            <a href="javascript:getEdit('master','article_type_edit','<?php echo $value['ArticleTypeId'] ?>');"><?php echo $value['ArticleTypeName'] ?></a>
                        </td>
                        <td><?php echo $value['Description'] ?></td>
                        <td for="status">
                        <?php 
                            if( $value["TypeStatus"] == 0 ) echo "<i class='ace-icon fa fa-circle blue'></i>&nbsp<span class='blue'>Not Active</span>";
                            if( $value["TypeStatus"] == 1 ) echo "<i class='ace-icon fa fa-circle green'></i>&nbsp<span class='green'>Active</span>";
                            if( $value["TypeStatus"] == 2 ) echo "<i class='ace-icon fa fa-circle red'></i>&nbsp<span class='red'>Hold</span>";
                            if( $value["TypeStatus"] == 3 ) echo "<i class='ace-icon fa fa-circle grey'></i>&nbsp<span class='grey'>Blocked</span>";
                        ?>
                        </td>                                               
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
                    

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

    function getEdit(controler_name, function_name, data){
        document.location.href = function_name + "?id=" + data;
    }      
</script>  
<?php 
$this->layout = '~/views/shared/_default.php';
?>
<script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/customes.css" />
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
                            <a href="#"><?php echo $value['AuthorId'] ?></a>
                        </td>
                        <td>
                            <a href="javascript:getEdit('master','article_type_edit','<?php echo $value['AuthorId'] ?>');"><?php echo $value['AuthorName'] ?></a>
                        </td>
                        <td><?php echo $value['Description'] ?></td>
                        <td for="status">
                        <?php 
                            if( $value["AuthorStatus"] == 0 ) echo "<i class='ace-icon fa fa-circle blue'></i>&nbsp<span class='blue'>Not Active</span>";
                            if( $value["AuthorStatus"] == 1 ) echo "<i class='ace-icon fa fa-circle green'></i>&nbsp<span class='green'>Active</span>";
                            if( $value["AuthorStatus"] == 2 ) echo "<i class='ace-icon fa fa-circle red'></i>&nbsp<span class='red'>Hold</span>";
                            if( $value["AuthorStatus"] == 3 ) echo "<i class='ace-icon fa fa-circle grey'></i>&nbsp<span class='grey'>Blocked</span>";
                        ?>
                         <div class="btn-group">
                                <button class="btn btn-sm btn-white">Status change</button>
                                <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle">
                                    <i class="ace-icon fa fa-angle-down icon-only"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-yellow">
                                    <li><a href="#" onclick="atricleStatus( '1' , '<?php echo $article_single["AuthorId"]; ?>')" >Active</a></li>
                                    <li><a href="#" onclick="atricleStatus( '2', '<?php echo $article_single["AuthorId"]; ?>')" >Hold</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" onclick="atricleStatus( '3', '<?php echo $article_single["AuthorId"]; ?>')">Blocked</a></li>
                                </ul>
                            </div><!-- /.btn-group -->
                        </td>                                               
                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>
                                <a class="green" href="#">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>                
                                <a class="red" href="#" data-record-id="<?php echo $value['ArticleId'];  ?>" data-record-title="Article Type #<?php echo $value['ArticleId'];  ?>" data-toggle="modal" data-target="#confirm-delete">
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
        <div>
            <p>
                <button class="btn btn-info" id="" onclick="location.href='<?php echo MODE; ?>/master/master_article_type_new';">Add New</button>                
            </p>
        </div><!-- /.row -->
    </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
            </div>
            <div class="modal-body">
                <p>You are about to delete <b><i class="title"></i></b> record !</p>
                <p>Do you want to proceed?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger btn-ok">Delete</button>
            </div>
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
<script>
    $('#confirm-delete').on('click', '.btn-ok', function(e) {
        var $modalDiv = $(e.delegateTarget);
        var id = $(this).data('recordId');
        var myKeyVals = { mode : 'delete', id : id };
        //alert(id);
        // $.ajax({url: '/api/record/' + id, type: 'DELETE'})
        $.ajax({
            type: 'POST',
            url: "master_article_type_view",
            data: myKeyVals,
            dataType: "text",
            success: function(resultData) { window.location.reload(); }
        });
        // $.post('/api/record/' + id).then()
        $modalDiv.addClass('loading');
        setTimeout(function() {
            $modalDiv.modal('hide').removeClass('loading');
        }, 1000)
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        var data = $(e.relatedTarget).data();
        $('.title', this).text(data.recordTitle);
        $('.btn-ok', this).data('recordId', data.recordId);
    });
    </script>
<?php 
$this->layout = '~/views/shared/_default.php';
?>
<div class="row">
    <div class="col-xs-12">
        <div class="table-header">
            Results for "Latest Registered Article"
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
                            </td>
                        </tr>
                        
                        <?php 
                        }else
                        {
                            foreach ($article_all as $key => $value) 
                            { ?>
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
                                    <td>
                                        <?php                                                                
                                            foreach ($article_type_all as $type) 
                                            {
                                                if( $value['article_type'] == $type['id'] )
                                                {
                                                    echo $type['article_type_title'];
                                                }
                                            }
                                        ?>                                                                
                                    </td>
                                    <td>
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>
                                    <td><?php echo $value['date_of_publication'] ?></td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#" onclick="atricleEdit('<?php echo $value["id"]; ?>')">
                                                <i class="ace-icon fa fa-pencil bigger-130" ></i>
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
        <form name="article_edit" id="article_edit" action="<?php echo MODE; ?>/articles/edit" method="POST" >
            <input type="hidden" name="mode" value="edit" />
            <input type="hidden" id="art_id" name="id" value="" />
        </form>

<!--[if IE]>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

    function AtricleDataSingle(data1, data2, data3){
        //alert(data3);
        document.location.href = data2 + "?id=" + data3;

    }    
    function atricleEdit(data3){
        document.getElementById('art_id').value = data3 ;       
        document.getElementById('article_edit').submit();
        return false;
    }

    window.onload = function() {
        document.getElementById('myLogout').onclick = function() {
            document.getElementById('logoout').submit();
            return false;
        };
    };
</script>        
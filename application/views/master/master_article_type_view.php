<?php 
$this->layout = '~/views/shared/_default.php';
?>
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <!-- table list here --> 
                        <!-- TO Do -->
                        <div class="row">
                            <div class="col-xs-12">
                                
                                <div class="table-header">
                                    Results for "Latest Registered Article Type"
                                </div>
                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
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
                                                    <a href="#"><?php echo $value['ArticleTypeName'] ?></a>
                                                </td>
                                                <td><?php echo $value['Describe'] ?></td>
                                                <td>
                                                    <span class="label label-sm label-inverse arrowed-in">Flagged</span>
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
                        <!-- table list end here --> 
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
                            <!-- Form list end here --> 
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>



 <!--[if !IE]> -->
<!-- <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-2.1.4.min.js"></script> -->

<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>



        
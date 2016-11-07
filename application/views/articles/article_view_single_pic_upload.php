<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Dashboard - SGR Admin</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo ASSEST_PATH_ADMIN; ?>/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="ace-extra.min.js assets/js/html5shiv.min.js"></script>
        <script src="ace-extra.min.js assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="no-skin">
    <?php
        include(MyHelpers::UrlContent('~/views/shared/header.php'));
        include(MyHelpers::UrlContent('~/views/shared/menu_left_test.php'));
           
    ?>

        
        <div class="main-content">
            <div class="main-content-inner">
                <?php 
                    include(MyHelpers::UrlContent('~/views/shared/nav_menu_title_bar.php'));
                ?>                
                <div class="page-content">
                    <!-- /.page-header start -->
                    <?php 
                        include(MyHelpers::UrlContent('~/views/shared/page_header.php'));
                    ?>
                    <!-- /.page-header end -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <!-- Form list here --> 
                        <!-- /.page-header end -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <!-- table list here --> 
                        <!-- TO Do -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="table-header">
                                    <?php echo $article_single["article_tittle"]; ?>
                                </div>
              
                                <span class="profile-picture">
                                    <img src="<?php echo MODE; ?>/upload/article/<?php echo $article_single["front_img"]; ?>.jpg" width="100%" >
                                </span>
                                <form class="form-horizontal" role="form" name="frm_article_front_pic_upload" method="POST" action="file_upload" enctype="multipart/form-data">
                                <!-- div.table-responsive -->
                                <div class="space-6"></div>                                    
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input multiple="" type="file" id="id-input-file-3" name="front_img" />
                                        </div>
                                    </div>

                                    <label>                                                           
                                        <span class="lbl"> Allow only images</span>
                                    </label>
                                </div>
                                <input type="hidden" name="mode" value="front_img" />
                                <input type="hidden" name="article_id" value="<?php echo $article_single["id"]; ?>" />
                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" type="Submit">
                                            <i class="ace-icon fa fa-check bigger-110"></i>Upload & Save</button>&nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="Cancel"  onclick="window.history.back()">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>Cancel</button>
                                    </div>
                                </div>
                                </form>

                                <div class="hr hr12 dotted"></div>
                                </div>
                                <div class="space-20"></div>
                        <!-- table list end here --> 
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
                            <!-- Form list end here --> 
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>

        <?php 
            include(MyHelpers::UrlContent('~/views/shared/footer.php'));
        ?>
        
    </body>
</html>










 <!--[if !IE]> -->
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-2.1.4.min.js"></script>



<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
  
</script>

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>


 <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace-elements.min.js"></script>
<script type="text/javascript">

$('#id-input-file-1 , #id-input-file-2').ace_file_input({
                    no_file:'No File ...',
                    btn_choose:'Choose',
                    btn_change:'Change',
                    droppable:false,
                    onchange:null,
                    thumbnail:false //| true | large
                    //whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
                });
                //pre-show a file name, for example a previously selected file
                //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
            
            
                $('#id-input-file-3').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here for Front Image or click to choose',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-cloud-upload',
                    droppable: true,
                    thumbnail: 'fit'//large | fit
                    //,icon_remove:null//set null, to hide remove/reset button
                    /**,before_change:function(files, dropped) {
                        //Check an example below
                        //or examples/file-upload.html
                        return true;
                    }*/
                    /**,before_remove : function() {
                        return true;
                    }*/
                    ,
                    preview_error : function(filename, error_code) {
                        //name of the file that failed
                        //error_code values
                        //1 = 'FILE_LOAD_FAILED',
                        //2 = 'IMAGE_LOAD_FAILED',
                        //3 = 'THUMBNAIL_FAILED'
                        //alert(error_code);
                    }
            
                }).on('change', function(){
                    //console.log($(this).data('ace_input_files'));
                    //console.log($(this).data('ace_input_method'));
                });
                
                
                //$('#id-input-file-3')
                //.ace_file_input('show_file_list', [
                    //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
                    //{type: 'file', name: 'hello.txt'}
                //]);
            
                
                
            
                //dynamically change allowed formats by changing allowExt && allowMime function
                $('#id-file-format').removeAttr('checked').on('change', function() {
                    var whitelist_ext, whitelist_mime;
                    var btn_choose
                    var no_icon
                    if(this.checked) {
                        btn_choose = "Drop images here or click to choose";
                        no_icon = "ace-icon fa fa-picture-o";
            
                        whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
                        whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
                    }
                    else {
                        btn_choose = "Drop files here or click to choose";
                        no_icon = "ace-icon fa fa-cloud-upload";
                        
                        whitelist_ext = null;//all extensions are acceptable
                        whitelist_mime = null;//all mimes are acceptable
                    }
                    var file_input = $('#id-input-file-3');
                    file_input
                    .ace_file_input('update_settings',
                    {
                        'btn_choose': btn_choose,
                        'no_icon': no_icon,
                        'allowExt': whitelist_ext,
                        'allowMime': whitelist_mime
                    })
                    file_input.ace_file_input('reset_input');
                    
                    file_input
                    .off('file.error.ace')
                    .on('file.error.ace', function(e, info) {
                        //console.log(info.file_count);//number of selected files
                        //console.log(info.invalid_count);//number of invalid files
                        //console.log(info.error_list);//a list of errors in the following format
                        
                        //info.error_count['ext']
                        //info.error_count['mime']
                        //info.error_count['size']
                        
                        //info.error_list['ext']  = [list of file names with invalid extension]
                        //info.error_list['mime'] = [list of file names with invalid mimetype]
                        //info.error_list['size'] = [list of file names with invalid size]
                        
                        
                        /**
                        if( !info.dropped ) {
                            //perhapse reset file field if files have been selected, and there are invalid files among them
                            //when files are dropped, only valid files will be added to our file array
                            e.preventDefault();//it will rest input
                        }
                        */
                        
                        
                        //if files have been selected (not dropped), you can choose to reset input
                        //because browser keeps all selected files anyway and this cannot be changed
                        //we can only reset file field to become empty again
                        //on any case you still should check files with your server side script
                        //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                    });
                    
                    
                    /**
                    file_input
                    .off('file.preview.ace')
                    .on('file.preview.ace', function(e, info) {
                        console.log(info.file.width);
                        console.log(info.file.height);
                        e.preventDefault();//to prevent preview
                    });
                    */
                
                });

                </script>


        
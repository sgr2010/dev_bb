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
        // header menu LIST shared
            include(MyHelpers::UrlContent('~/views/shared/header.php'));
        // felt menu LIST shared
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
                            <div class="form-group">
                                <div class="col-sm-9">                                                                 
                                    <div class="widget-box widget-color-blue">                                
                                        <div class="widget-main no-padding">
                                            <textarea name="article_contects01" data-provide="markdown" data-iconlibrary="fa" rows="10">
                                            </textarea>
                                        </div>                                                
                                    </div>       
                                </div>  
                            </div> 
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
<!-- <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script> -->

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>



<!-- for editor  -->


       

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/excanvas.min.js"></script>
        <![endif]-->

        <!-- <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.ui.touch-punch.min.js"></script> -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/chosen.jquery.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-timepicker.min.js"></script>
                <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/moment.min.js"></script>
                <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/daterangepicker.min.js"></script>
                 <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-colorpicker.min.js"></script>
                 <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.knob.min.js"></script>
                 <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/autosize.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.inputlimiter.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.maskedinput.min.js"></script>



        
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-datetimepicker.min.js"></script>

       


        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                $('#id-disable-check').on('click', function() {
                    var inp = $('#form-input-readonly').get(0);
                    if(inp.hasAttribute('disabled')) {
                        inp.setAttribute('readonly' , 'true');
                        inp.removeAttribute('disabled');
                        inp.value="This text field is readonly!";
                    }
                    else {
                        inp.setAttribute('disabled' , 'disabled');
                        inp.removeAttribute('readonly');
                        inp.value="This text field is disabled!";
                    }
                });
            
            
                if(!ace.vars['touch']) {
                    $('.chosen-select').chosen({allow_single_deselect:true}); 
                    //resize the chosen on window resize
            
                    $(window)
                    .off('resize.chosen')
                    .on('resize.chosen', function() {
                        $('.chosen-select').each(function() {
                             var $this = $(this);
                             $this.next().css({'width': $this.parent().width()});
                        })
                    }).trigger('resize.chosen');
                    //resize chosen on sidebar collapse/expand
                    $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                        if(event_name != 'sidebar_collapsed') return;
                        $('.chosen-select').each(function() {
                             var $this = $(this);
                             $this.next().css({'width': $this.parent().width()});
                        })
                    });
            
            
                    $('#chosen-multiple-style .btn').on('click', function(e){
                        var target = $(this).find('input[type=radio]');
                        var which = parseInt(target.val());
                        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                         else $('#form-field-select-4').removeClass('tag-input-style');
                    });
                }
            
            
                $('[data-rel=tooltip]').tooltip({container:'body'});
                $('[data-rel=popover]').popover({container:'body'});
            
                autosize($('textarea[class*=autosize]'));
                
                $('textarea.limited').inputlimiter({
                    remText: '%n character%s remaining...',
                    limitText: 'max allowed : %n.'
                });
            
                $.mask.definitions['~']='[+-]';
                $('.input-mask-date').mask('99/99/9999');
                $('.input-mask-phone').mask('(999) 999-9999');
                $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
            
            
            
                $( "#input-size-slider" ).css('width','200px').slider({
                    value:1,
                    range: "min",
                    min: 1,
                    max: 8,
                    step: 1,
                    slide: function( event, ui ) {
                        var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                        var val = parseInt(ui.value);
                        $('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
                    }
                });
            
                $( "#input-span-slider" ).slider({
                    value:1,
                    range: "min",
                    min: 1,
                    max: 12,
                    step: 1,
                    slide: function( event, ui ) {
                        var val = parseInt(ui.value);
                        $('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
                    }
                });
            
            
                
                //"jQuery UI Slider"
                //range slider tooltip example
                $( "#slider-range" ).css('height','200px').slider({
                    orientation: "vertical",
                    range: true,
                    min: 0,
                    max: 100,
                    values: [ 17, 67 ],
                    slide: function( event, ui ) {
                        var val = ui.values[$(ui.handle).index()-1] + "";
            
                        if( !ui.handle.firstChild ) {
                            $("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
                            .prependTo(ui.handle);
                        }
                        $(ui.handle.firstChild).show().children().eq(1).text(val);
                    }
                }).find('span.ui-slider-handle').on('blur', function(){
                    $(this.firstChild).hide();
                });
                
                
                $( "#slider-range-max" ).slider({
                    range: "max",
                    min: 1,
                    max: 10,
                    value: 2
                });
                
                $( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
                    // read initial values from markup and remove that
                    var value = parseInt( $( this ).text(), 10 );
                    $( this ).empty().slider({
                        value: value,
                        range: "min",
                        animate: true
                        
                    });
                });
                
                $("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
            
                
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
            
            
                
                
            
                
            
                
        
            
            });


            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

        </script>
        




        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/markdown.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-markdown.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.hotkeys.index.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-wysiwyg.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootbox.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace-elements.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
    

        <script type="text/javascript">
            jQuery(function($){
        
                $('textarea[data-provide="markdown"]').each(function(){
                    var $this = $(this);

                    if ($this.data('markdown')) {
                      $this.data('markdown').showEditor();
                    }
                    else $this.markdown()
                    
                    $this.parent().find('.btn').addClass('btn-white');
                })
            });
        </script>



        
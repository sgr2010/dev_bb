<?php 
$this->layout = '~/views/shared/_default.php';
?>

    <!-- Form list here --> 
<?php 
    include(MyHelpers::UrlContent('~/views/bb_forms/article_update_frm.php'));
?>
    <!-- Form list end here --> 
                     



<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap.min.js"></script>


<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-tag.min.js"></script>



<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery-1.11.3.min.js"></script>
<![endif]-->

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/chosen.jquery.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/autosize.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/jquery.inputlimiter.min.js"></script>

<!-- ace scripts -->
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace-elements.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/ace.min.js"></script>

<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/moment.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/daterangepicker.min.js"></script>
<script src="<?php echo ASSEST_PATH_ADMIN; ?>/js/bootstrap-datetimepicker.min.js"></script>




<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {  
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

        //datepicker plugin
        //link
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        })
        //show datepicker when clicking on the icon
        .next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        //or change it into a date range picker
        $('.input-daterange').datepicker({autoclose:true});
    
    
        //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
        $('input[name=date-range-picker]').daterangepicker({
            'applyClass' : 'btn-sm btn-success',
            'cancelClass' : 'btn-sm btn-default',
            locale: {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
            }
        })
        .prev().on(ace.click_event, function(){
            $(this).next().focus();
        });
    
    
        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });   

        var tag_input = $('#form-field-tags');
        try{
            tag_input.tag(
              {
                placeholder:tag_input.attr('placeholder'),
                //enable typeahead by specifying the source array
                source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
                /**
                //or fetch data from database, fetch those that match "query"
                source: function(query, process) {
                  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
                  .done(function(result_items){
                    process(result_items);
                  });
                }
                */
              }
            )
    
            //programmatically add/remove a tag
            var $tag_obj = $('#form-field-tags').data('tag');
            $tag_obj.add('Programmatically Added');
            
            var index = $tag_obj.inValues('some tag');
            $tag_obj.remove(index);
        }
        catch(e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
            autosize($('#form-field-tags'));
        }

        if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
         //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
         icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-arrows ',
            clear: 'fa fa-trash',
            close: 'fa fa-times'
         }
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });


        $(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')
            
            $('.limiterBox,.autosizejs').remove();
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });
    
    });
</script>



        
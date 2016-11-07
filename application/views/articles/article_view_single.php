<?php 
$this->layout = '~/views/shared/_default.php';
?>

                        <!-- PAGE CONTENT BEGINS -->
                        <!-- table list here --> 
                        <!-- TO Do -->
                        <div class="row">
                            <div class="col-xs-12">                                
                                <div class="table-header">
                                    <?php echo "#".$article_single["id"]; ?>
                                    <?php echo $article_single["article_tittle"]; ?>
                                </div>              
                                <span class="profile-picture">
                                    <!--  <img src="<?php echo ASSEST_PATH_INDEX; ?>/css/images/banner.jpg" width="100%" > -->
                                    <img src="<?php echo MODE; ?>/upload/article/<?php echo $article_single["front_img"]; ?>.jpg" width="100%" >
                                </span>
                                <div class="clearfix"></div>
                                <div class="hr dotted"></div>
                                <div>
                                    <div id="user-profile-1" class="user-profile row">
                                         <!-- author short profile -->
                                        <?php 
                                            include(MyHelpers::UrlContent('~/views/authors/profile_short_view.php'));
                                        ?> 
                                    </div>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="center">
                                            <span class="btn btn-app btn-sm btn-light no-hover">
                                                <span class="line-height-1 bigger-170 blue"> 1,411 </span><br />
                                                <span class="line-height-1 smaller-90"> Views </span>
                                            </span>
                                            <span class="btn btn-app btn-sm btn-yellow no-hover">
                                                <span class="line-height-1 bigger-170"> 32 </span>

                                                <br />
                                                <span class="line-height-1 smaller-90"> Followers </span>
                                            </span>
                                            <span class="btn btn-app btn-sm btn-pink no-hover">
                                                <span class="line-height-1 bigger-170"> 4 </span>

                                                <br />
                                                <span class="line-height-1 smaller-90"> Projects </span>
                                            </span>
                                            <span class="btn btn-app btn-sm btn-grey no-hover">
                                                <span class="line-height-1 bigger-170"> 23 </span>

                                                <br />
                                                <span class="line-height-1 smaller-90"> Reviews </span>
                                            </span>
                                            <span class="btn btn-app btn-sm btn-primary no-hover">
                                                <span class="line-height-1 bigger-170"> 55 </span>
                                                <br />
                                                <span class="line-height-1 smaller-90"> Contacts </span>
                                            </span>
                                            <button class="btn btn-app btn-purple btn-sm" onclick="AtriclePicSingle('article','article_view_single_pic_upload','<?php echo $article_single["id"]; ?>')">
                                                <i class="ace-icon fa fa-cloud-upload bigger-200"></i>Pic Upload
                                            </button>
                                            <button class="btn btn-app btn-danger btn-sm">
                                            <i class="ace-icon fa fa-trash-o bigger-200"></i>Delete
                                            </button>
                                        </div>

                                        <div class="space-12"></div>
                                        <div class="profile-user-info profile-user-info-striped">
                                            <div class="profile-info-row"></div>
                                        </div>

                                        <div class="space-12"></div>
                                            <div class="profile-user-info profile-user-info-striped">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Article Title </div>

                                                    <div class="profile-info-value">
                                                        <span class="editable" id="username"><?php echo $article_single["article_tittle"]; ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Article Type </div>
                                                    <div class="profile-info-value">
                                                        <?php                                                                
                                                            foreach ($article_type_all as $type) 
                                                            {
                                                                if( $article_single["article_type"] == $type['id'] )
                                                                {
                                                                    echo $type['article_type_title'];
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Published on </div>
                                                    <div class="profile-info-value">
                                                        <span class="editable" id="age"><?php echo $article_single["date_of_publication"]; ?>                                                            
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Tages </div>
                                                    <div class="profile-info-value">
                                                        <span class="editable" id="signup"><?php echo $article_single["article_tag"]; ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Current Status </div>
                                                    <div class="profile-info-value">
                                                        <span class="editable" id="login"><?php echo $article_single["article_status"]; ?></span>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-white">Status change</button>
                                                        <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle">
                                                            <i class="ace-icon fa fa-angle-down icon-only"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-yellow">
                                                            <li><a href="#">Active</a></li>
                                                            <li><a href="#">Hold</a></li>
                                                            <li><a href="#">Not Publish</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Blocked</a></li>
                                                        </ul>
                                                    </div><!-- /.btn-group -->
                                                </div>
                                            </div>
                                            <div class="space-20"></div>

                                            <div class="widget-box transparent">
                                                <div class="widget-box">
                                                    <div class="widget-header widget-header-flat">
                                                        <h4 class="widget-title smaller">Contents ONE</h4>
                                                        <div class="widget-toolbar">
                                                            <label>
                                                                <small class="green">
                                                                    <b>Active </b>
                                                                </small>

                                                                <input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
                                                                <span class="lbl middle"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <?php echo nl2br($article_single["text01"]); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-box">
                                                    <div class="widget-header widget-header-flat">
                                                        <h4 class="widget-title smaller">Contents TWO</h4>
                                                        <div class="widget-toolbar">
                                                            <label>
                                                                <small class="green">
                                                                    <b>Active </b>
                                                                </small>

                                                                <input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
                                                                <span class="lbl middle"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <?php echo nl2br($article_single["text02"]); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-box">
                                                    <div class="widget-header widget-header-flat">
                                                        <h4 class="widget-title smaller">Contents THREE</h4>
                                                        <div class="widget-toolbar">
                                                            <label>
                                                                <small class="green">
                                                                    <b>Active </b>
                                                                </small>

                                                                <input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
                                                                <span class="lbl middle"></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <?php echo nl2br($article_single["text01"]); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-header widget-header-small">
                                                    <h4 class="widget-title blue smaller">
                                                        <i class="ace-icon fa fa-rss orange"></i>
                                                        Recent Activities
                                                    </h4>

                                                    <div class="widget-toolbar action-buttons">
                                                        <a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh blue"></i>
                                                        </a>&nbsp;
                                                        <a href="#" class="pink">
                                                            <i class="ace-icon fa fa-trash-o"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main padding-8">
                                                        <div id="profile-feed-1" class="profile-feed">
                                                            <div class="profile-activity clearfix">
                                                                <div>
                                                                    <img class="pull-left" alt="Alex Doe's avatar" src="<?php echo ASSEST_PATH_ADMIN; ?>/images/avatars/avatar5.png" />
                                                                    <a class="user" href="#"> Alex Doe </a>
                                                                    changed his profile photo.
                                                                    <a href="#">Take a look</a>

                                                                    <div class="time">
                                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                        an hour ago
                                                                    </div>
                                                                </div>

                                                                <div class="tools action-buttons">
                                                                    <a href="#" class="blue">
                                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                    </a>

                                                                    <a href="#" class="red">
                                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
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

<script type="text/javascript">
    
    function AtriclePicSingle(data1, data2, data3){
        //alert(data3);
        document.location.href = data2 + "?id=" + data3;

    }
</script>



        
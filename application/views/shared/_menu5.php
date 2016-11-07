  <div id="sidebar" class="sidebar responsive ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>

                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>

                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>

                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>

                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>

                        <span class="btn btn-info"></span>

                        <span class="btn btn-warning"></span>

                        <span class="btn btn-danger"></span>
                    </div>
                </div><!-- /.sidebar-shortcuts -->

                 <ul class="nav nav-list">
                    <li class=<?php if($current == "home" ) echo 'active'; ?>>
                        <a href="index.html">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    
                    <li class="<?php if($current == 'master' ) echo $active; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">Masters</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Test Menu
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Top Menu
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Two Menus 1
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Two Menus 2
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Default Mobile Menu
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mobile Menu 2
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Mobile Menu 3
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>                            

                            <li class="<?php if( $current == 'master' ) echo 'active'; ?>" >
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Article Type
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">                                    
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-plus purple"></i>
                                            Add Article Type
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="<?php echo MODE; ?>/master/master_article_type_view">
                                            <i class="menu-icon fa fa-eye pink"></i>
                                            View Article Type
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>                             
                            </li>
                        </ul>
                    </li>
       
                    <li class="<?php if( $current == 'article' ) echo $active; ?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-pencil-square-o"></i>
                            <span class="menu-text"> Article </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo MODE; ?>/articles/input" >
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    New Article Add
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="<?php if( $current_sub == 'view_article' ) echo 'active'; ?>">
                            <a href="<?php echo MODE; ?>/articles/article_view" >          
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Article list view
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="form-wizard.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Wizard &amp; Validation
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="wysiwyg.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Wysiwyg &amp; Markdown
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="dropzone.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Dropzone File Upload
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>             



                </ul>

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>


    </div>


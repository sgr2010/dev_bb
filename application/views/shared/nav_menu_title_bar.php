<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="<?php echo HOME_URL; ?>">Home</a>
        </li>
        <li <?php if( $menu_sub == null ) ?>    class = "active"; >
            <?php if( $menu_sub != null ) { ?> <a href="#"><?php echo $menu; ?></a>
            <?php 
            }else{ echo "$menu"; }   ?>
        </li>
        <?php
            if( $menu_sub != null ){ ?>      
        <li class="active"><?php echo $menu_sub; ?></li>
          <?php    }
        ?>
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
        </form>
    </div><!-- /.nav-search -->
</div>
<!-- user side front page hear menu
Page name : bb_front_header_menu.php
 -->

<header id="header">
    <h1><a href="#" id="logo">Be Bengal !</a></h1>
    <nav id="nav">
        <a href="#" <?php if ( $active == 1 ){ echo "class='current-page-item'";} ?> >Homepage</a>
        <a href="#" <?php if ( $active == 2 ) {echo "class='current-page-item'"; }?> >poletics</a>
        <a href="#" <?php if ( $active == 3 ) {echo "class='current-page-item'"; }?> >Science</a>
        <a href="#" <?php if ( $active == 4 ){echo "class='current-page-item'"; }?> >Education</a>
        <a href="#" <?php if ( $active == 5 ){echo "class='current-page-item'"; }?> >Carrer</a>
        <a href="#" <?php if ( $active == 6 ){ echo "class='current-page-item'"; }?> >Turist Travel</a>
        <a href="#" <?php if ( $active == 7 ){ echo "class='current-page-item'"; }?> >Technology</a>
        <a href="#" <?php if ( $active == 8 ){ echo "class='current-page-item'"; }?> >Classification</a>
    </nav>
</header>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleController
 *
 * @author SGR Infotech
 */
class articlesController extends Controller{
    //put your code here

   
    
    protected function init(){    
        $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        $this->cfg['db']['password'], $this->cfg['db']['database']);  

        if( ( $_SESSION['loggedin'] == null ) and ( $_SESSION['username'] == false ) )
        {
            $loca = MODE."/adminlogin/login/?r=". urlencode( $_SERVER['REQUEST_URI'] );     
            header("Location:  $loca");
            exit;
        }   
       
    }
    /**
     * 
     * @param type $id = error code id
     * @return type
     */
    public function index($id=null){  
        // check login or not    
        // if( ( $_SESSION['loggedin'] == null ) and ( $_SESSION['username'] == false ) ){         
        //     $loca = MODE."/adminlogin/login";     
        //     header("Location:  $loca");
        //     exit;
        // }
        // $Auth = new AdminloginController();
        // $res = $this->_model->get_articles_type();        
        // return $this->view();

        if( ( $_SESSION['loggedin'] == null ) and ( $_SESSION['username'] == false ) )
        {
            //header( 'location: /login/?r=' . urlencode( $_SERVER['REQUEST_URI'] ) );
            $loca = MODE."/adminlogin/login/?r=". urlencode( $_SERVER['REQUEST_URI'] );     
            header("Location:  $loca");
            exit;
        }else{
            $loca = MODE."/articles/article_view";     
            header("Location:  $loca");
            exit;
        }

    }

     public function input( $request = Null ){
        // check login or not    
        if( ( $_SESSION['loggedin'] == null ) and ( $_SESSION['username'] == false ) ){         
            $loca = MODE."/adminlogin/login";     
            header("Location:  $loca");
            exit;
        }
   
        $mode = " confirm";
        $menu = "Contents";
        $menu_sub = "New Article Add";
        $page_header_sub_title = "Form";
        $page_header_title = "New Article Register Form";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );
        $data = null;
        

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode']; 
        }



        if( $mode == "save" ){
            $res = $this->_model->mdl_register_new_article( $_POST );             
            if( $res == true ){
                header( 'location: ../master/master_article_type_view' );
                exit;
            }
        }

        if( $mode == "edit" ){
            // Article data by article id
            $data = $this->_model->get_articles_single_data($_POST['id']);             
            
        }


        
        $res = $this->_model->get_articles_type();        
        
        $this->view->set('articleTypes',$res);
        //$template = "admin/articles/input";

                // left menu active 
        $this->view->set( 'current', "article" );
        $this->view->set( 'active', "active open" );

         // left menu active 
        $this->view->set( 'current_sub', "article_input" );
        $this->view->set( 'active_sub', "active" );

        $this->view->set('data', $data);            
        return $this->view();

    }


    /**
    Article update function

    **/
    public function edit( $request = Null ){
       
        $mode = " confirm";
        $menu = "Contents";
        $menu_sub = "Article Update";
        $page_header_sub_title = "Form";
        $page_header_title = "Article Update Form";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );
        $data = null;
        

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode']; 
        }



        if( $mode == "update" ){
            $id_article = $_POST['id'];
            $res = $this->_model->mdl_update_article( $_POST );  
       
            if( $res == true ){
                $header_1 = MODE."/articles/edit/".$id_article; 

                header( 'location:'.$header_1 );
                exit;
            }
        }
        $data = $this->_model->get_articles_single_data($request); 

        if( $mode == "edit" ){
            $data = $this->_model->get_articles_single_data($_POST['id']);              
        }
        
        $res = $this->_model->get_articles_type();        
        
        $this->view->set('articleTypes',$res);
        //$template = "admin/articles/input";

        // left menu active 
        $this->view->set( 'current', "article" );
        $this->view->set( 'active', "active open" );
        // left menu active 
        $this->view->set( 'current_sub', "view_article" );
        $this->view->set( 'active_sub', "active" );

        $this->view->set('data', $data);            
        return $this->view();

    }

    public function master_article_type(){
        $res = $this->_model->get_articles_type_all();     


        $this->view->set('articleTypes',$res);
        $menu = "Masters";
        $menu_sub = "Article Types";
        $page_header_sub_title = "Article type list";
        $page_header_title = "Article Type";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        return $this->view();
    }


    public function article_view()
    {
        $mode = "normal";               
        
        if($_SERVER["REQUEST_METHOD"] == 'POST'){            
            $mode = $_POST['mode'];            
        }

        if( $mode == "delete")
        {
            $result= $this->_model->del_article( $_POST['id']);
        }
        
        
        $getArticleType = $this->_model->mdl_get_article_type_all();
        $this->view->set( 'article_type_all', $getArticleType );
     
        
        $res = $this->_model->mdl_get_article_all(); // get all article             
        $this->view->set('article_all',$res);

        
        $menu = "Article";
        $menu_sub = "Article View";
        $page_header_sub_title = "Article list";
        $page_header_title = "Article View";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        // left menu active 
        $this->view->set( 'current', "article" );
        $this->view->set( 'active', "active open" );
        // left menu active 
        $this->view->set( 'current_sub', "view_article" );
        $this->view->set( 'active_sub', "active" );

        return $this->view();

    }


    public function article_view_single( $id = null ){

        $mode = "confirm";
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode']; 
        }
        //var_dump($mode);

        if( $mode == "status_change"){
            $ret = $this->_model->mdl_update_article_status( $_POST['art_id'], $_POST['status'] ); 
            $id = $_POST['art_id'];
        }
        // article type data
        $getArticleType = $this->_model->mdl_get_article_type_all();
        $this->view->set( 'article_type_all', $getArticleType );

        // Article data by article id
        $res = $this->_model->get_articles_single_data($id);
        $this->view->set('article_single',$res);

        $menu = "Article";
        $menu_sub = "Article View as Single";
        $page_header_sub_title = "Article list";
        $page_header_title = "Article View";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        // left menu active 
        $this->view->set( 'current', "article" );
        $this->view->set( 'active', "active open" );
        // left menu active 
        $this->view->set( 'current_sub', "view_article" );
        $this->view->set( 'active_sub', "active" );

            
        return $this->view();        

    }

    public function article_view_single_pic_upload( $id = null ){

        $res = $this->_model->get_articles_single_data($id);
       // var_dump($res);
        $this->view->set('article_single',$res);

        $menu = "Article";
        $menu_sub = "Article View as Single";
        $page_header_sub_title = "Article list";
        $page_header_title = "Article View";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        // left menu active 
        $this->view->set( 'current', "article" );
        $this->view->set( 'active', "active open" );
        // left menu active 
        $this->view->set( 'current_sub', "view_article" );
        $this->view->set( 'active_sub', "active" );

            
        return $this->view();        

    }


    /**
    Funtion : Aricle image upload function 
    Input : Image 
    Out put : Boolen Type ( True / False )
    **/
    public function file_upload( $data = null ){    
        $mode = "fake_attempt";

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode'];             
        }

        // front picture upload
        if(isset($_FILES["front_img"]["tmp_name"])){      
            if( $mode == "front_img" ){
                $target_dir = "./upload/article/";
                $file_name = md5(uniqid(rand(), true)) .".jpg";
                $target_file = $target_dir . $file_name;

                if (move_uploaded_file($_FILES["front_img"]["tmp_name"], $target_file)) {
                    $res = $this->_model->mdl_update_article_front_img( $file_name, $_POST['article_id'] ); 
                    header( 'location: article_view_single_pic_upload?id='.$_POST['article_id'] );
                    exit;
                } 
            }
        }

        // front Small picture upload
        if( $mode == "small_icon_img" ){
            if(isset($_FILES["small_img"]["tmp_name"])){             
                $target_dir = "./upload/article/";
                $file_name = md5(uniqid(rand(), true)) .".jpg";
                $target_file = $target_dir . $file_name;

                if (move_uploaded_file($_FILES["small_img"]["tmp_name"], $target_file)) 
                {
                    $res = $this->_model->mdl_update_article_small_img( $file_name, $_POST['article_id'] ); 
                    header( 'location: article_view_single_pic_upload?id='.$_POST['article_id'] );
                    exit;
                } 
            }
        }
        // front Small picture upload
        if( $mode == "icon_img" ){
            if(isset($_FILES["icon_img"]["tmp_name"])){             
                $target_dir = "./upload/article/";
                $file_name = md5(uniqid(rand(), true)) .".jpg";
                $target_file = $target_dir . $file_name;
                
                if (move_uploaded_file($_FILES["icon_img"]["tmp_name"], $target_file)) 
                {
                    $res = $this->_model->mdl_update_article_icon_img( $file_name, $_POST['article_id'] ); 
                    header( 'location: article_view_single_pic_upload?id='.$_POST['article_id'] );
                    exit;
                } 
            }
        }
        return;
    }

    /**
    Deleted Articles 
    @INPUT
    @OUTPUT
    **/
    public function deleted_articles()
    {
        $getArticleType = $this->_model->mdl_get_article_type_all();
        $this->view->set( 'article_type_all', $getArticleType );
     
        
        $res = $this->_model->mdl_get_deleted_article_all(); // get all article             
        $this->view->set('article_all',$res);

        
        $menu = "Article";
        $menu_sub = "Deleted Article";
        $page_header_sub_title = "Article list";
        $page_header_title = "Deleted Article";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        // left menu active 
        $this->view->set( 'current', "article" );
        $this->view->set( 'active', "active open" );
        // left menu active 
        $this->view->set( 'current_sub', "vda" );
        $this->view->set( 'active_sub', "active" );

        return $this->view();

    }
    
}

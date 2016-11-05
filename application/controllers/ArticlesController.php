<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author SGR Infotech
 */
class articlesController extends Controller{
    //put your code here

   
    
    protected function init(){    
        $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        $this->cfg['db']['password'], $this->cfg['db']['database']);        
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            $ADMINUSER = $_SESSION['username'];
        }else{
            $ADMINUSER = " Guest";
        }
    }
    /**
     * 
     * @param type $id = error code id
     * @return type
     */
    public function index($id=null){  
        $Auth = new AdminloginController();

        $res = $this->_model->get_articles_type();

        if( $Auth->iflogin() != true ){
            header( 'location: adminlogin/login' );
            exit;
        }
        return $this->view();
    }

     public function input( $request = Null ){
        $mode = " confirm";
        $menu = "Contents";
        $menu_sub = "New Article Add";
        $page_header_sub_title = "Form";
        $page_header_title = "New Article Register Form";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );
        

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


        
        $res = $this->_model->get_articles_type();        
        
        $this->view->set('articleTypes',$res);
        //$template = "admin/articles/input";

                // left menu active 
        $this->view->set( 'current', "article" );
        $this->view->set( 'active', "active open" );

         // left menu active 
        $this->view->set( 'current_sub', "article_input" );
        $this->view->set( 'active_sub', "active" );

        
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


    public function article_view(){
        $res = $this->_model->mdl_view_article();
          
            
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


    public function file_upload( $data = null ){    

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode'];             
        }

        if(isset($_FILES["front_img"]["tmp_name"])){      
            if( $mode == "front_img" ){
                $target_dir = "./upload/article/";
                $file_name = md5(uniqid(rand(), true)) .".jpg";
                $target_file = $target_dir . $file_name;

                if (move_uploaded_file($_FILES["front_img"]["tmp_name"], $target_file)) {
                    $res = $this->_model->mdl_update_article( $file_name, $_POST['article_id'] ); 

                    header( 'location: article_view_single_pic_upload?id='.$_POST['article_id'] );
                    exit;
                } 
            }
        }
         
            header( 'location: article_view_single_pic_upload?id='.$_POST['article_id'] );
            exit;
        


    }


   
    
}

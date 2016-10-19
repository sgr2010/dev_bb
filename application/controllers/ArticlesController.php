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
class ArticlesController extends Controller{
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
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            var_dump($_POST); exit();
        }
        
        $res = $this->_model->get_articles_type();        
        
        $this->view->set('articleTypes',$res);
        //$template = "admin/articles/input";
        
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


   
    
}

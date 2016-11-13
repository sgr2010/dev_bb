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
class masterController extends Controller{
    //put your code here

   
    
    protected function init(){    
        $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        $this->cfg['db']['password'], $this->cfg['db']['database']);        
       
    }

    public function master_article_type_new(){
        $mode = " confirm";

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode']; 
        }

        if( $mode == "new" ){
            $res = $this->_model->mdl_register_new_article_type( $_POST );             
            if( $res == true ){
                header( 'location: ../master/master_article_type_view' );
                exit;
            }
        }

        $menu = "Masters";
        $menu_sub = "Article Types";
        $page_header_sub_title = "New Article Type Register";
        $page_header_title = "Article Type";
        
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        // left menu active 
        $this->view->set( 'current', "master" );
        $this->view->set( 'active', "active open" );
        // left menu active 
        $this->view->set( 'current_sub', "view_article_type" );
        $this->view->set( 'active_sub', "active" );

        return $this->view();
    }

    public function master_article_type_view(){
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

        // left menu active 
        $this->view->set( 'current', "master" );
        $this->view->set( 'active', "active open" );
        // left menu active 
        $this->view->set( 'current_sub', "view_article_type" );
        $this->view->set( 'active_sub', "active" );

        return $this->view();

    }


   
    
}

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
class bbelementsController extends Controller{
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
    

    public function main_page(){
        $menu = "Dashboard";
        $menu_sub = null;
        $page_header_sub_title = "Home";
        $page_header_title = "Dashboard";

        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );
               
        return $this->view();

    }

    public function editor(){
        $menu = "Dashboard";
        $menu_sub = "Editor";
        $page_header_sub_title = "Home";
        $page_header_title = "Dashboard";

        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        // left menu active 
        $this->view->set( 'current', "home" );
        $this->view->set( 'active', "active" );
               
        return $this->view();

    }
    
   
    
    
}

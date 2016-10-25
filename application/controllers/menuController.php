<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuController
 *
 * @author SGR Infotech
 */
class menuController extends Controller{
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

    public function master_menu_new(){
        $mode = " confirm";

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode'];              
        }

        if( $mode == "new" ){
            $res = $this->_model->mdl_register_new_menu( $_POST );             
            if( $res == true ){
                header( 'location: ../menu/master_menu_view' );
                exit;
            }
        }

        $menu = "Masters";
        $menu_sub = "Menu";
        $page_header_sub_title = "New Menu Register";
        $page_header_title = "Menu ";
        $this->view->set( 'menu', $menu );
        $this->view->set( 'menu_sub', $menu_sub );
        $this->view->set( 'page_header_title', $page_header_title );
        $this->view->set( 'page_header_sub_title', $page_header_sub_title );

        return $this->view();
    }

    public function master_menu_view(){
        $res = $this->_model->get_menu_all();      

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

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
class AdminController extends Controller{
    //put your code here

   
    
   protected function init(){    
        // $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        // $this->cfg['db']['password'], $this->cfg['db']['database']);        
        
    }
    /**
     * 
     * @param type $id = error code id
     * @return type
     */
    public function index($id=null){  
        $Auth = new AdminloginController();

        if( $Auth->iflogin() != true ){
            header( 'location: adminlogin/login' );
            exit;
        }

                
        return $this->view();
        
    }

    public function login(){

        return $this->view();
    }
    
    
}

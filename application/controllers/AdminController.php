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
        // $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        // $this->cfg['db']['password'], $this->cfg['db']['database']);        
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            $ADMINUSER = $_SESSION['username'];
        }else{
            $ADMINUSER = " Guest";
        }

        $Auth = new AdminloginController();

        if( $Auth->iflogin() != true ){
            header( 'location: adminlogin/login' );
            exit;
        }
    }
    /**
     * 
     * @param type $id = error code id
     * @return type
     */
    public function index($id=null){  
               
        return $this->view();
        
    }

    
   
    
    
}

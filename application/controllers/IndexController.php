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
class indexController extends Controller{
    //put your code here
    
   protected function init(){    
        $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        $this->cfg['db']['password'], $this->cfg['db']['database']);        
    }
    /**
     * 
     * @param type $id = error code id
     * @return type
     */
    public function index($id=null){  
        $art = new articlesController();
      
        $this->view->set( 'active' , 1 );
      



// New Article 
  $res = $this->_model->mdl_get_latest_article();
        $this->view->set( 'data' , $res );

          return $this->view();
    }
    
    
}

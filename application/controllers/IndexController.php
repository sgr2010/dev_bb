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
        $comingArticleData = null;
        $art = new articlesController();
      
        $this->view->set( 'active' , 1 );
      
        // Latest coming Artocle
        $comingArticleData = $this->_model->get_articles_latest_coming_data();
        $this->view->set( 'comingArticleData' , $comingArticleData );


        // New Article 
        $res = $this->_model->mdl_get_latest_article();
        $this->view->set( 'data1' , $res );

          return $this->view();
    }
    
    
}

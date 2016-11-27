<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminloginModel
 *
 * @author SGR
 */
class indexModel extends Model{    
    
    protected function init() {
       
       

    }


    

    public function mdl_get_latest_article(){
        //var_dump("SELECT * FROM ". TBL_ARTICLE ." WHERE `DeleteFlag` = 0 ORDER BY `ArticleId` DESC LIMIT 1");
        
         $result = $this->db->query("SELECT * FROM ". TBL_ARTICLE ." WHERE `DeleteFlag` = 0 AND `ArticleStatus` = 1 ORDER BY `ArticleId` DESC LIMIT 1");
         $raw = mysql_fetch_array($result);     
         return $raw;
    }

    // Get Latest up coming Tarticle 2 Records
    public function get_articles_latest_coming_data( )
    {
         $field = "*";
       
         $orderby = " ArticleId DESC ";
        $result = $this->db->select( $field, TBL_ARTICLE, ' `DeleteFlag` = 0 AND `ArticleStatus` = 2', $orderby , '2');
        return $result;
    }



}

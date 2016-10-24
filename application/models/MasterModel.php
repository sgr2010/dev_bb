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
class masterModel extends Model{    
    
    protected function init() {

    }

    
   public function mdl_register_new_article_type( $value ){    
        $data = array(
            'article_type_title'=>$value['article_tittle'],
            'type_describe'=>$value['article_type_describe']             
        );
        
        // Database Table name 
        $table ="bb_articles_type";
        
        // after data insert return will be boolen Type True / False
        $result = $this->db->insert($data, $table);     

       return $result;

   }

   public function get_articles_type_all(){

        $table = "bb_articles_type";
        $field = "*";
        $where = "";
        $result = $this->db->select( $field, $table, $where);
        return $result;
    }

    




}

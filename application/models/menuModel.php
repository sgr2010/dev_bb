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
class menuModel extends Model{    
    
    protected function init() {

    }

    
   public function mdl_register_new_menu( $value ){    
        $data = array(
            'menu_name'=>$value['menu_name'],
            'menu_description'=>$value['menu_describe'],
            'date_of_regi'=>date("Y-m-d"),
            'admin_id'=> $_SESSION['admin_id']
        );        
        // Database Table name 
        $table ="bb_menu";        
        // after data insert return will be boolen Type True / False
        $result = $this->db->insert($data, $table);     
        return $result;
   }

   public function get_menu_all(){
        $table = "bb_menu";
        $field = "*";
        $where = "";
        $result = $this->db->select( $field, $table, $where);
        return $result;
    }

    




}

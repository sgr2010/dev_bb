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
class articlesModel extends Model{    
    
    protected function init() {

    }

    public function get_articles_type(){

        $table = "bb_articles_type";
        $field = "*";
        $where = "delete_flag = 0";
        $result = $this->db->select( $field, $table, $where);
        //var_dump($result);
        return $result;
    }
    
    

   

    public function chk_login_del( $value ){
        
        $user_name = $value['user_name'];
        $password = $value['pwd'];

        // Database Table name 
        $table ="bb_admin_user";
       
        $result = $this->db->query("SELECT * FROM bb_admin_user WHERE user_name = '$user_name' AND pwd = '$password'" );
        //$result = $this->db->query("SELECT COUNT(id) FROM bb_admin_user WHERE user_name = '$user_name' AND pwd = '$password'" );
        $raw = mysql_fetch_array($result);
        if ( $raw['acc_active']  == 0 ) {
           return 0;
        }else{
            return $this->db->numRows($result);    
        }
         // var_dump( $raw['acc_active']);
         // exit();
        
    }



}

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
class AdminloginModel extends Model{    
    
    protected function init() {
        
    }
    
    public function admin_register($value){

        $data = array(
            'email'=>$value['email'],
            'user_name'=>$value['user_name'],
            'pwd'=>$value['pwd']               
        );
        
        // Database Table name 
        $table ="bb_admin_user";
        
        // after data insert return will be boolen Type True / False
        $result = $this->db->insert($data, $table);
       

       return $result;
        
    }

    public function chk_login( $value ){
        
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

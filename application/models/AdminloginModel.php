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
class adminloginModel extends Model{    
    
    protected function init() {
        
    }
    
    public function admin_register($value){

        $data = array(
            'email'=>$value['email'],
            'AdminName'=>$value['user_name'],
            'pwd'=>$value['pwd'],
            'RegisterDate'=>date("Y-m-d H:i:s")               
        );        
          
        // after data insert return will be boolen Type True / False
        $result = $this->db->insert( $data, TBL_ADMIN );
       

       return $result;
        
    }

    public function chk_login( $value ){
        
        $user_name = $value['user_name'];
        $password = $value['pwd'];
       
        $result = $this->db->query("SELECT * FROM " .TBL_ADMIN. " WHERE  AdminName = '$user_name' AND pwd = '$password'" );
        //$result = $this->db->query("SELECT COUNT(id) FROM bb_admin_user WHERE user_name = '$user_name' AND pwd = '$password'" );
        $raw = mysql_fetch_array($result);
        if ( $raw['AccActive']  == 0 ) {
           return 0;
        } if ( $raw['AccActive']  == 1 ) {
           return 1;
        }else{
            //return $this->db->numRows($result);    
            return $raw;   
        }
    }


}

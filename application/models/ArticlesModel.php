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


    public function mdl_register_new_article( $value ){
         $data = array(
            'article_tittle'=>$value['article_tittle'],
            'type_describe'=>$value['article_type_describe'],
            'article_type'=>$value['article_type'],
            'article_tag'=>$value['article_tage'],
            'text01'=>$value['content1'],
            'text02'=>$value['content2'],
            'text03'=>$value['content3'],
            'date_of_publication'=>$value['publish_date'],
            'update_admin_id'=>$_SESSION['admin_id'],
            'update_date'=>date("Y-m-d")
        );
        
        // Database Table name 
        $table ="bb_articles_main";
        
        // after data insert return will be boolen Type True / False
        $result = $this->db->insert($data, $table);     

       return $result;
    }



}

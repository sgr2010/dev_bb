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

    public function mdl_get_article_type_all(){
        $field = " id , article_type_title";    
        $result = $this->db->select( $field, TBL_ARTICLE_TYPE );
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

        $date = explode("-",$value['publish_date']);
       
        $value['publish_date'] = $date[2]."-".$date[1]."-".$date[0]; 
        
         $data = array(
            'article_tittle'=>$value['article_tittle'],            
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
        $table ="bb_article_main";
        
        // after data insert return will be boolen Type True / False
        $result = $this->db->insert($data, $table);     

       return $result;
    }

    public function mdl_update_article( $value ){

        $date = explode("-",$value['publish_date']);
       
        $value['publish_date'] = $date[2]."-".$date[1]."-".$date[0]; 
        
         $data = array(
            'article_tittle'=>$value['article_tittle'],            
            'article_type'=>$value['article_type'],
            'article_tag'=>$value['article_tage'],
            'text01'=>$value['content1'],
            'text02'=>$value['content2'],
            'text03'=>$value['content3'],
            'date_of_publication'=>$value['publish_date']
        );


        
        $where = "id =".$value['id'] ; // article id
        $result = $this->db->update( $data, TBL_ARTICLE, $where );

       return $result;
    }

    public function mdl_get_article_all(){
        
        $field = "*";
        $where = "delete_flag = 0";
        $orderby = " id DESC ";
        $result = $this->db->select( $field, TBL_ARTICLE, $where, $orderby );
        //var_dump($result);
        return $result;

    }

    public function get_articles_single_data( $id ){

        $field = "*";
        $where = "id = " . $id;
       // $result = $this->db->query( $field, TBL_ARTICLE , $where);
        $result = $this->db->query("SELECT * FROM ". TBL_ARTICLE ." WHERE id='$id'");
       
        $raw = mysql_fetch_array($result);
    
        return $raw;
    }

    

    /**
     Front Image Save function
    **/
    public function mdl_update_article_front_img($file_name, $id){

        $data = array(
            'front_img'=>$file_name 
        );
        
        $where = "id =".$id ; // article id
        $result = $this->db->update( $data, TBL_ARTICLE, $where );
        return $result ; // true / false 
    }
    



}

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
        //

    }

    public function get_articles_type(){

        $table = "bb_articles_type";
        $field = "*";
        $where = "DeleteFlag = 0";
        $result = $this->db->select( $field, $table, $where);
        //var_dump($result);
        return $result;
    }

    public function mdl_get_article_type_all(){
        $field = " ArticleTypeId , ArticleTypeName";    
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

       /*
        Article New Add Function
        Input : Article Details
        Output: Boolen
    */
    public function mdl_register_new_article( $value ){

        $date = explode("-",$value['publish_date']);
       
        $value['publish_date'] = $date[2]."-".$date[1]."-".$date[0]; 
        
         $data = array(
            'Headline'=>$value['article_tittle'],            
            'ArticleType'=>$value['article_type'],
            'ArticleTag'=>$value['article_tage'],
            'Abstract01'=>$value['content1'],
            'MainText01'=>$value['content2'],
            'MainText02'=>$value['content3'],
            'PublishedDate'=>$value['publish_date'],
            'CreatedBy'=>$_SESSION['admin_id'],
            'CreatedDate'=>date("Y-m-d H:i:s")
        );        

        // after data insert return will be boolen Type True / False
        $result = $this->db->insert( $data, TBL_ARTICLE );     
        return $result;
    }
    
    /*
        Article Update Function
        Input : Article Details
        Output: Boolen
    */
    public function mdl_update_article( $value ){

        $date = explode("-",$value['publish_date']);
        //$value['publish_date'] = $date[2]."-".$date[1]."-".$date[0]; 
         $data = array(
            'Headline'=>$value['article_tittle'],            
            'ArticleType'=>$value['article_type'],
            'ArticleTag'=>$value['article_tage'],
            'Abstract01'=>$value['content1'],
            'MainText01'=>$value['content2'],
            'MainText02'=>$value['content3'],
            'PublishedDate'=>$value['publish_date']
        );
        
        $where = "ArticleId =".$value['id'] ; // article id
        $result = $this->db->update( $data, TBL_ARTICLE, $where );
        return $result;
    }

    public function mdl_get_article_all(){
        
        $field = "*";
        $where = "DeleteFlag = 0";
        $orderby = " ArticleId DESC ";
        $result = $this->db->select( $field, TBL_ARTICLE, $where, $orderby );
        //var_dump($result);
        return $result;

    }

    public function get_articles_single_data( $id ){

        $field = "*";
        $where = "ArticleId = " . $id;
       // $result = $this->db->query( $field, TBL_ARTICLE , $where);
        $result = $this->db->query("SELECT * FROM ". TBL_ARTICLE ." WHERE ArticleId='$id'");
       
        $raw = mysql_fetch_array($result);
    
        return $raw;
    }

    

    /**
     Front Image Save function
    **/
    public function mdl_update_article_front_img($file_name, $id){

        $data = array(
            'FrontImg'=>$file_name 
        );
        
        $where = "ArticleId =".$id ; // article id
        $result = $this->db->update( $data, TBL_ARTICLE, $where );
        return $result ; // true / false 
    }

    /**
     Front Image Save function
    **/
    public function mdl_update_article_icon_img($file_name, $id){

        $data = array(
            'img'=>$file_name,
            'ImageType' => "2", // 2 for Small image
            'CreatedDate' => date("Y-m-d H:i:s")
        );
        
        $result = $this->db->insert( $data, TBL_ARTICLE );   
        return $result ; // true / false 
    }

    /*
    Update Article Status
    Input:
    Output:
    */
    public function mdl_update_article_status($data1, $data2){
        $data = array(
            'ArticleStatus'=>$data2 
        );
        $where = "ArticleId =".$data1 ; // article id
        $result = $this->db->update( $data, TBL_ARTICLE, $where );
        return $result ; // true / false 

    }
    


}

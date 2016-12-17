<?php


/**
 * Description of MasterModel
 *
 * @author SGR
 */
class masterModel extends Model{    
    
    protected function init() {

    }

    
  public function mdl_register_new_article_type( $value ){    
    $data = array(
        'ArticleTypeName'=>$value['article_tittle'],
        'Description'=>$value['article_type_describe'],
        'CreatedDate' => date("Y-m-d H:i:s"));
    // Database Table name 
    $table =TBL_ARTICLE_TYPE;
        
    // after data insert return will be boolen Type True / False
    $result = $this->db->insert($data, $table);     

    return $result;
  }

    public function get_articles_type_all(){
        $table = TBL_ARTICLE_TYPE;
        $field = "*";
        $where = "DeleteFlag = 0";
        $result = $this->db->select( $field, $table, $where);
        return $result;
    }

    /**
    Article Type Delete
    @input id
    @output True/ False
    **/
    public function del_article_type( $id )
    {
         $data = array(
            'DeleteFlag'=>1
        );
        
        $where = "ArticleTypeId =".$id ; // article id
        $result = $this->db->update( $data, TBL_ARTICLE_TYPE, $where );
        return $result;
    }

    public function get_articles_type_by_id( $data ){
        $table = TBL_ARTICLE_TYPE;

        $result = $this->db->query("SELECT * FROM ". $table ." WHERE ArticleTypeId='$data'");
       
        $raw = mysql_fetch_array($result);    
        return $raw;

    }

    public function mdl_edit_article_type( $value ){

        $data = array(
            'ArticleTypeName'=>$value['ArticleTypeName'],
            'Description'=>$value['Description']            
            
        );
        
        $where = "ArticleTypeId =".$value['id'] ; // article id
        $result = $this->db->update( $data, TBL_ARTICLE_TYPE, $where );
        return $result;
    }

  


}

<?php


/**
 * Description of MasterModel
 *
 * @author SGR
 */
class authorModel extends Model{    
    
    protected function init() {

    }

    
  public function mdl_register_new_author( $value ){    
    $data = array(
        'AuthorName'=>$value['authorName'],
        'AuthorAge'=>$value['authorAge'],
        'Description'=>$value['authorDescribe'],
        'CreatedDate' => date("Y-m-d H:i:s"));
    // Database Table name 
    $table =TBL_AUTHOR;
        
    // after data insert return will be boolen Type True / False
    $result = $this->db->insert($data, $table);     

    return $result;
  }

    public function get_author_all(){
        $table = TBL_AUTHOR;
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
    public function del_author( $id )
    {
         $data = array(
            'DeleteFlag'=>1
        );
        
        $where = "ArticleTypeId =".$id ; // article id
        $result = $this->db->update( $data, TBL_AUTHOR, $where );
        return $result;
    }

}

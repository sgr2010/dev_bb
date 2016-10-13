<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginModel
 *
 * @author AGENT
 */
class loginModel extends Model{
    
    
    protected function init() {
        
    }
    
    /**
     * 
     * @param type $user_id
     * @return int 1 = データが有り　0 = データが無い
     */
    public function chkAgent($user_id){
        $result = $this->db->query("SELECT * FROM m_agent WHERE enable='0' AND user_id='$user_id'");
        $row = mysql_fetch_array($result);
        if(!$row==0){
            return 1;
        }
        return 0;        
        
    }
    
    public function chkMuser($user_id){
        $result = $this->db->query("SELECT * FROM m_user WHERE enable='0' AND user_id='$user_id'");
        $row = mysql_fetch_array($result);
        if(!$row==0){
            return 1;
        }else{
            return 0;
        }
        
    }
    
    /**
     * First time Login check
     * @param type $user_id
     * @param type $password
     * @return int
     */
    public function chkPW($user_id,$password ){
        $result = $this->db->query("SELECT COUNT(id) FROM t_login_user WHERE user_id='$user_id' AND pass='$password'");
        $row = mysql_fetch_array($result);
        if(!$row==0){
            return 1;
        }else{
            return 0;
        }
        
    }
    
    
    

    public function login($user_id, $password){
		$id = false;
		
                
            if(preg_match("/^AG/", $user_id)) {
                 
//                $sql = "SELECT * FROM m_agent WHERE enable='0' AND user_id='$user_id'";
//                $data = $this->getData($sql);
                
                //var_dump($data );
                 
                 $row = mysql_fetch_array($result);
                 
                //var_dump($row[0] );
                if($data === false) {
                    return false;
                }
            } else {
                $result = $this->db->query("SELECT * FROM m_user WHERE enable='0' AND user_id='$user_id'");
               // $sql = "SELECT * FROM m_user WHERE enable='0' AND user_id='$user_id'";
              //  $data = $this->getData($sql);
                $row = mysql_fetch_array($result);
               // var_dump($row[0] );exit;
                if($row === false) {
                    return false;
                }
            }
            
            //if user_id and password is same then go to changePassword View page
            // return 1 for re-set password
            $result_1 = $this->db->query("SELECT COUNT(id) FROM t_login_user WHERE user_id='$user_id' AND pass!='$user_id'");
            $row = mysql_fetch_array($result_1);
                
            if(!$row[0] == 0) {
                $id = 1; // 
            return $id;
            
//            if($user_id == $password) {
//                // 初回ログインなのでPW変更させる
//               // $_SESSION["first_login"] = 1;
//                return true;
//            } else {
//                // 入力したIDとPASS不一致の場合
//                return 1;
//            }
        }
        
        
        
        $result = $this->db->query("SELECT COUNT(id) FROM t_login_user WHERE user_id='$user_id' AND pass!='$password'");
        $row = mysql_fetch_array($result);
        
        
            

	}
        
        
        public function chg_Pass($user_id, $pass, $pass_1){
            //var_dump();exit;
            
        }


}

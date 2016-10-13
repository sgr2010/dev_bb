<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author AGENT
 */
class loginController extends Controller{
    //put your code here
    
   protected function init(){    
        $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        $this->cfg['db']['password'], $this->cfg['db']['database']);        
    }
    /**
     * 
     * @param type $id = error code id
     * @return type
     */
    public function index($id=null){  
        // include message Class path
        include_once '../../mvc/public/utility/Msg.class.php';
        // make object for message class
        $msg =  new Msg();        
        
        // this one for error handling if pass/user_id don't match
        if ( $id==12){
            $msgTest = $msg->msgDisplay($id);
            //$msgText = $msg->msg(12);
            
            $this->view->set('items',$id);
            $this->view->set('items1',$msgTest);
            return $this->view();
        }else{
            $this->view->set('items',$id);
            return $this->view();
        }
        
    }
    
    /**
     * User Login Methods
     * @param type $user_id
     * @param type $password
     */
    public function do_login($user_id=null, $password=null){
                
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            if(preg_match("/^AG/", $user_id)){
                $return = $this->_model->chkAgent($user_id);
                if($return==0){
                    //エーラが出します
                    header('Location: /mvc/login/12');
                    exit;                    
                }
            }
            
            
            $id = $this->_model->login($user_id, $password);
            if($id == 1){
               
                header('Location: /mvc/login/test_2/'.$user_id); 
                    exit;
            }
           
	}
        
            
    }
    
    
    
    public function firstlogin($userid){  
       header('Location: /mvc/blog/test_2/'.$tt);
        exit;

    }
    
             

    public function first_login_pass_chn($user_id){ 
        // var_dump($user_id); exit();
        
        
        if($_SERVER["REQUEST_METHOD"]=='POST'){
            //var_dump($user_id); exit();
            $row = $this->_model->chg_Pass($user_id, $pass, $pass1);
            if($row!== false){
				$this->view->set('item',$row);
            }else{
                return $this->view();	
            }
            
        }
        
            
        }
    
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author SGR Infotech
 */
class AdminloginController extends Controller{
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
    public function login( $request = Null ){  
        $mode = "confirm";
        $msg = Null;

        if( $this->iflogin() == true ){
            header( 'location: ../admin/index' );
            exit;
        }
        
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode'];            
        }

        if( $mode == "new" ){
            var_dump( $_POST );
            $this->view->set('email',$_POST['email']);
            $this->view->set('adminname',$_POST['user_name']);
            $this->view->set('password',$_POST['pwd']);
            $this->view->set('re_password',$_POST['re_pwd']);
            // TO DO ! validation check
            $data = $_POST;
            $res = $this->_model->admin_register($data);       
        }

        if( $mode == "dologin" ){
            $data = $_POST;
            $username = $_POST['user_name'];
            $res = $this->_model->chk_login($data);
            
            if( $res == 1 ){
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;     
                header( 'location: ../admin/index' );
                exit;            
            }

            if( $res == 0 ){
                $msg = "<span style='color: red';>Your Account is not activated !</span>";
            }
        }        

        $this->view->set( 'msg' , $msg );
        return $this->view();
        
    }

    // Login Check for session
    public function iflogin(){
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            return true;
        } else {
            return false;
        }
    }

    public function logout(){
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $mode = $_POST['mode'];            
        }
        
        if( $mode == "logout" ){
            session_destroy();
            header( 'location: login' );
            exit;
        }

    }

    
    
    
}

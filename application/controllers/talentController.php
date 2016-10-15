<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of talent
 *
 * @author AGENT
 */
class talentController extends Controller {
    
    
    protected function init(){    
        $this->db = new MySqlDataAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], 
        $this->cfg['db']['password'], $this->cfg['db']['database']);
    }
    
    
    
    
    public function talent_registration(){
        
        
        return $this->view();
    }
    
    public function talent_bank_details_register(){        
        //var_dump($_POST);exit;
       // $this->view->set('item',$data[0]);
        $this->view->set('f_name',$_POST['t_f_name']);
        $this->view->set('l_name',$_POST['t_l_name']);
        $this->view->set('t_f_name_k',$_POST['t_f_name_k']);
        $this->view->set('t_l_name_k',$_POST['t_l_name_k']);
        $this->view->set('t_bod_year',$_POST['t_bod_year']);
        
        $this->view->set('t_bod_month',$_POST['t_bod_month']);
        $this->view->set('t_bod_day',$_POST['t_bod_day']);
        $this->view->set('gender',$_POST['gender']);
        $this->view->set('postal',$_POST['postal']);
        $this->view->set('address_ken',$_POST['address_ken']);
        
        $this->view->set('address_machi',$_POST['address_machi']);
        $this->view->set('address_details',$_POST['address_details']);
        $this->view->set('line',$_POST['line']);
        $this->view->set('station',$_POST['gender']);
        $this->view->set('station',$_POST['station']);
                
        $this->view->set('time_hour',$_POST['time_hour']);
        $this->view->set('time_min',$_POST['time_min']);
        $this->view->set('telephone',$_POST['telephone']);
        $this->view->set('mail',$_POST['mail']);
        $this->view->set('status',$_POST['status']);
        $this->view->set('tag',$_POST['tag']);

        return $this->view();

        // set cookie
//        setcookie("cookie[1]",$t_f_name);
//        setcookie("cookie[2]",$t_l_name);
//        setcookie("cookie[one]","cookieone");
                                    

//    var_dump($_COOKIE["cookie"]);
//    exit();

// print cookies (after reloading page)
//if (isset($_COOKIE["cookie"])){
//    
//    foreach ($_COOKIE["cookie"] as $name => $value)
//    {
//        
//        
//        echo "$name : $value <br />";
//    }
//  }

  
       
        
    }
    
     public function talent_register_confirm(){
         
         if($_SERVER["REQUEST_METHOD"]=='POST'){	
             
             $data = $_POST;
                $result = $this->_model->talent_register($data);
             }
         
         
         return $this->view();
                
      
  }
  
  public function talent_search(){
      
      
      return $this->view();
  }
    
    
}

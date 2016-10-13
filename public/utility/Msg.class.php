<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of msgManagement
 *
 * @author AGENT
 */
class Msg {
    //put your code here
    
    public function __construct() {
       // $this->nsg = $msg;
    }



 


/**
 * 
 * @param type $id
 * @return string
 */
public function msgDisplay($id=null){    
   
    //$message = "";
    switch ($id){
        case 12:
            $message = "ユーザーID または PASS が間違っています。";
            break;
        case 1:
            $message = "";
            break;
        case 2:
            $message = "";
            break;
                
    }  
    
    return $message;
    
}





}
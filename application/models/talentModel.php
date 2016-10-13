<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of talentModel
 *
 * @author AGENT
 */
class talentModel extends Model{
    //put your code here
    

    
    
    public function talent_register($value){
        $birth = $value['t_bod_year'].'-'.$value['t_bod_month'].'-'.$value['t_bod_day'];
        $address = $value['address_ken'].$value['address_machi'].$value['address_details'];
        $way = $value['time_hour'].'時'.$value['time_min'].'分';

        $data = array(
            'family_name'=>$value['f_name'],
            'first_name'=>$value['l_name'],
            'family_name_kana'=>$value['t_f_name_k'],
            'first_name_kana'=>$value['t_l_name_k'],
            'birth'=>$birth,
            'sex'=>$value['gender'],
            'postal'=>$value['postal'],
            'address'=>$address,
            'line'=>$value['line'],
            'station'=>$value['station'],
            'way'=>$way,
            'tel'=>$value['telephone'],              
            'mail'=>$value['mail'],
            'status'=>$value['status'],
            'tag'=>$value['tag']               
        );
        
        // Database Table name 
        $table ="m_talent";
        
        // after data insert return will be boolen Type True / False
        $result = $this->db->insert($data, $table);
       
       // var_dump($result);exit();
       return $result;
        
        }
    
}

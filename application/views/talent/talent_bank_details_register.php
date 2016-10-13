<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * file na
 */


?>


<html>
    
    <head>
        <meta charset="UTF-8">
<!--        <link href="/mvc/public/scripts/st.css"/>-->
        
<script type="text/javascript"> 
    function goBack(){
        var frm=document.getElementById("frm_post");   
        alert(frm.valueOf("ee"));exit;
        frm.action = "mvc-test/talent/talent_bank_details_register";
        frm.method = "POST";
        frm.submit();
    }
</script>
    </head>
    <center>
    <body>
       
       
        <form name="frm_post" id="frm_post" action="/mvc-test/talent/talent_register_confirm" method="POST" enctype="UTF-8" >
            <table>
                <tr>
                    <td width="70px">名前</td><td width="400px">
                        <label><?php echo $f_name; ?></label>&nbsp;&nbsp;
                        <input type="hidden" name="f_name" id="f_name" value="<?php echo $f_name;?>">
                        <label name="ee" ><?php echo $l_name; ?></label>
                     <input type="hidden" name="l_name" id="l_name" value="<?php echo $l_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td width="70px">カナ</td><td width="400px"><label><?php echo $t_f_name_k; ?></label>
                        <input type="hidden" name="t_f_name_k" id="t_f_name_k" value="<?php echo $t_f_name_k; ?>">
                        &nbsp;&nbsp;<label><?php echo $t_l_name_k; ?></label>
                        <input type="hidden" name="t_l_name_k" id="t_l_name_k" value="<?php echo $t_l_name_k; ?>">
                    </td>
                </tr>
                <tr>
                    <td width="70px">生年月日</td><td width="400px">
                        <label><?php echo $t_bod_year ; ?></label>年
                        <label><?php echo $t_bod_month; ?></label>月
                        <label><?php echo $t_bod_day; ?></label>日
                        <input type="hidden" name="t_bod_year" id="t_bod_year" value="<?php echo $t_bod_year; ?>">
                        <input type="hidden" name="t_bod_month" id="t_bod_month" value="<?php echo $t_bod_month; ?>">
                        <input type="hidden" name="t_bod_day" id="t_bod_day" value="<?php echo $t_bod_day; ?>">
                    </td>
                </tr>
                <tr>
                    <td width="70px">性別</td>
                    <td><label><?php echo $gender; ?></label>
                         <input type="hidden" name="gender" id="gender" value="<?php echo $gender; ?>">
                    </td>
                </tr>                
                <tr>
                    <td>郵便番号</td>
                    <td><label>
                        <?php echo $postal; ?>
                        </label>
                         <input type="hidden" name="postal" id="postal" value="<?php echo $postal; ?>">
                    </td>
                           </tr>
                
                <tr>
                    <td>住所 :</td>
                    <td><label><?php echo $address_ken.' '.$address_machi.' '.$address_details;?></label>
                        <input type="hidden" name="address_ken" id="address_ken" value="<?php echo $address_ken; ?>">
                        <input type="hidden" name="address_machi" id="address_machi" value="<?php echo $address_machi; ?>">
                        <input type="hidden" name="address_details" id="address_details" value="<?php echo $address_details; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>電車線</td>
                    <td><label><?php echo $line; ?></label>
                        <input type="hidden" name="line" id="line" value="<?php echo $line; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>駅名</td>
                    <td><label><?php echo $station; ?></label>
                        <input type="hidden" name="station" id="station" value="<?php echo $station; ?>">
                    </td>                            
                </tr>
                <tr>
                    <td>時間</td>
                    <td><label><?php echo $time_hour.'時'.$time_min.'分'; ?></label>
                        <input type="hidden" name="time_hour" id="time_hour" value="<?php echo $time_hour; ?>">
                        <input type="hidden" name="time_min" id="time_min" value="<?php echo $time_min; ?>">
                    </td> 
                </tr>
                
                <tr>
                    <td>電話番号</td>
                     <td><label><?php echo $telephone; ?></label>
                        <input type="hidden" name="telephone" id="telephone" value="<?php echo $telephone; ?>">
                     </td>    
                </tr>
                
                <tr>
                    <td>メール</td>
                 
                        <td><label><?php echo $mail; ?></label>
                            <input type="hidden" name="mail" id="mail" value="<?php echo $mail; ?>">
                        </td>    
                    </td>
                </tr>
                <tr>
                    <td>ステータス</td>
                    <td><label><?php echo $status; ?></label>
                        <input type="hidden" name="status" id="status" value="<?php echo $status; ?>">
                    </td>  
                </tr>
                
                <tr>
                    <td>タグ</td>
                     <td><label><?php echo $tag; ?></label>
                        <input type="hidden" name="tag" id="tag" value="<?php echo $tag; ?>">
                     </td>  
                </tr>
                 
                 <tr>
                     <td width="70px"></td><td><input type="submit" value="登録">
                        
                         <input type="button" onclick="goBack()" value="戻り"></td>
                </tr>
                
                
            </table>
            
        </form>
        
    </body>
    </center>
    
    
</html>
    
    

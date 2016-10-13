<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * file details : talent inpute data details check page
 */


?>


<html>
    <meta charset="UTF-8">
    <head>
<!--        <link href="/mvc/public/scripts/st.css"/>-->
        
        
    </head>
    <center>
    <body>
        
        
        
        
       
        <form name="" action="/mvc-test/talent/talent_bank_details_register" method="POST">
            <table>
                <tr>
                    <td width="70px">名前</td><td width="400px"><label><?php echo last_name;?></label></td>
                </tr>
                <tr>
                    <td width="70px">カナ</td><td width="400px"><input name="t_f_name_k" value=""id="t_f__kname" placeholder="ヤマダ"><input name="t_l_name_k" value=""id="t_l_kname" placeholder="キクチ"></td>
                </tr>
                <tr>
                    <td width="70px">生年月日</td><td width="400px">
                        <input name="t_bod_year" value=""id="t_bod_year" size="5" placeholder="1999">年
                        <select name="t_bod_month" id="t_bod_month">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12" selected="12">12</option>
                        </select>月
                        <select name="t_bod_day" id="t_bod_day">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31" >31</option>                            
                        </select>日
                </tr>
                
                <tr>
                            <td width="70px">性別</td>
                            <td><select name="gender">
                                    <option value="1">男性</option>
                                    <option value="0">女性</option>
                            </select>
                            </td>
                </tr>
                <tr>
                     <td width="70px"></td><td><input type="submit" value="確認"><input type="button" value="Cancel"></td>
                </tr>
                
                
            </table>
            
        </form>
        
    </body>
    </center>
    
    
</html>
    
    

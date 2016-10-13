<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>


<html>
    
    <head>
        <meta charset="UTF-8">
<!--        <link href="/mvc/public/scripts/st.css"/>-->
        



<script type="text/javascript">
    
    	function status_open(){
            //alert("I am an alert box!");exit;
		var obj = document.getElementById("active_bank");
		obj.style.display = "block";
                var obj1 = document.getElementById("active_post");
		obj1.style.display = "none";
	}
	
	//却下選択時の処理
	function status_close(){
           // alert("I am an alert box!");exit;
		var obj = document.getElementById("active_bank");
		obj.style.display = "none";
                var obj1 = document.getElementById("active_post");
		obj1.style.display = "block";
	}
        
        function sonota(){
           // alert("I am an alert box!");exit;
		var obj = document.getElementById("sonota_val").value;
                if(obj==0){
                    var obj1 = document.getElementById("sonota");
                    obj1.style.display = "block";
                }else{
                    var obj1 = document.getElementById("sonota");
                    obj1.style.display = "none";
                } 
                	               
	}
              
   
           </script>
           
           
    </head>
    <center>
        <body>      
            <form name="" action="/mvc-test/talent/talent_bank_details_register" method="POST">
                <table>
                    <tr>
                        <td width="70px">名前</td>
                        <td width="400px">
                            <input type="text" name="t_f_name" value=""id="t_f_name" placeholder="山田">
                            <input type="text" name="t_l_name" value="" id="t_l_name" placeholder="菊池">
                        </td>
                    </tr>
                    <tr>
                        <td width="70px">カナ</td>
                        <td width="400px">
                            <input name="t_f_name_k" value=""id="t_f__kname" placeholder="ヤマダ">
                            <input name="t_l_name_k" value=""id="t_l_kname" placeholder="キクチ">
                        </td>
                    </tr>
                    <tr>
                        <td width="70px">生年月日</td><td width="400px">
                            <input type="text" name="t_bod_year" value=""id="t_bod_year" size="5" placeholder="1999">年
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
                                <option value="31">31</option>                            
                            </select>日
                        </td>
                    </tr>                
                    <tr>
                        <td width="70px">性別</td>
                        <td>
                            <select name="gender">
                                <option value="1">男性</option>
                                <option value="2">女性</option>
                            </select>
                        </td>
                    </tr>                
                    <tr>
                        <td>郵便番号</td>
                        <td>
                            <input name="postal" id="postal" value="" placeholder="111-0098">
                        </td>
                    </tr>
                    <tr>
                        <td>住所 :</td>
                        <td>
                            <input name="address_ken" id="address_ken" value="" placeholder="埼玉県">
                            <input name="address_machi" id="address_machi" value="" placeholder="埼玉町">
                            <input type="text"  style="width: 300px;"  name="address_details" id="address_detailsi" value="" placeholder="3丁目6番２９アパと名">
                        </td>
                    </tr>
                    <tr>
                        <td>電車線</td>
                        <td>
                            <input type="text" name="line" id="line" value="" placeholder="埼京線">
                        </td>
                    </tr>
                
                    <tr>
                        <td>駅名</td>
                        <td>
                            <input type="text" name="station" id="station" value="" placeholder="渋谷">
                        </td>                    
                    </tr>
                    <tr>
                        <td>時間</td>
                        <td>
                            <input type="text" name="time_hour" style="width: 50px;">時
                            <input type="text" name="time_min" style="width: 50px;">分</td>
                </tr>
                
                <tr>
                    <td>電話番号</td>
                    <td><input type="text" name="telephone" id="telephone" placeholder="0909090909"></td>
                </tr>
                
                <tr>
                    <td>メール</td>
                    <td>
                        <input type="text" name="mail" id="mail" placeholder="example@mail.com">
                    </td>
                </tr>
                <tr>
                    <td>ステータス</td>
                    <td><select name="status">
                            <option value="1">大学生</option>
                            <option value="2">高学生</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>タグ</td>
                    <td>
                        <input type="text" name="tag" id="tag" placeholder="" style="width: 300px;">
                    </td>
                </tr>
                
                
                
                <tr>
                    <td></td>
                    <td>
                        <label>給与振込情報</label>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label></label>
                        
                    </td>
                    <td></td>
                </tr>
                </table>
                
                
                <table width="700px">
                    <tr align="left">
                        <td>
                            <div style="text-align:left;">
				
					<input id='r2' name='ok_flg' type='radio' value='2' onClick='status_open()'>一般銀行
					<input id='r1' name='ok_flg' type='radio' value='1' onClick='status_close()'>ゆうちょ銀行
				
				</div>
                        
                </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="active_bank" style="text-align:left;display:none;">
                                <div>支払方法 <span style="padding: 0 10px">&nbsp;</span>
                                    <select name="payemt_method">
                                        <option value="1">月払い</option>
                                        <option value="2">週払い</option>
                                    </select>
                                </div>
                                <div>銀行名<span style="padding: 0 15px">&nbsp;</span> 
                                    <select id="sonota_val" onchange="sonota()">
                                        <option value="1">みずほ銀行</option>
                                        <option  value="2">三菱東京UFJ銀行</option>
                                        <option  value="1">三井住友銀行</option>
                                        <option  value="1">りそな銀行</option>
                                        <option  value="1">東日本銀行</option>
                                        <option  value="1">三菱UFJ信託銀行</option>
                                        <option  value="0">その他</option>
                                    </select>
                                </div> 
                                <div id="sonota" style="text-align:left;display:none;"><span style="padding: 0 40px">&nbsp;</span>
                                    <input name='bank_name_branch' type='text' placeholder="その他銀行"></div>
                                                   
                                <div>支店名<span style="padding: 0 18px">&nbsp;</span><input name='bank_name' type='text'></div>
                                <div>支店番号<span style="padding: 0 10px">&nbsp;</span><input name='bank_name_branch' type='text'></div>                        
                                <div>口座番号<span style="padding: 0 10px">&nbsp;</span><input name='bank_name' type='text'></div>
                                <div>口座名義<span style="padding: 0 10px">&nbsp;</span><input name='bank_name_branch' type='text'></div>
                            </div>
                        
                            <div id="active_post" style="text-align:left;display:none;">
                                <div>支払方法 <span style="padding: 0 10px">&nbsp;</span>
                                    <select name="payemt_method">
                                        <option value="1">月払い</option>
                                        <option value="2">週払い</option>
                                    </select>
                                </div>
                                <div>記号<span style="padding: 0 28px">&nbsp;</span> <input name='bank_name_branch' type='text'></div>                        
                                <div>番号<span style="padding: 0 30px">&nbsp;</span><input name='bank_name' type='text'></div>
                                <div>口座名義<span style="padding: 0 13px">&nbsp;</span><input name='bank_name_branch' type='text'></div>
                            </div>
                        </td>
                    </tr>                    
                </table>
                 <div id="area"></div>
                
                 
                 
                 
<div id="readroot" style="display: none">

	<input type="button" value="Remove review"
		onclick="this.parentNode.parentNode.removeChild(this.parentNode);" /><br /><br />
       
        勤務期間<input name="nen"  size="5">年<input  name="getsu"  size="5">月 ～ <input name="nen-last" size="5"><input  name="getsu-last"  size="5">月   
<br />
勤務先名 <input name="" id="" size="35">
<br />
雇用形態                            
        <select name="job_type" >
            <option value="1">アルバイト</option>
            <option value="2">パート</option>
            <option value="3">正社員</option>
        </select>
                     
<br />
 職種                                
    <select name="job_cat" >
        <option value="1">営業</option>
        <option value="2">事務仕事</option>
        <option value="3">ITシステム</option>
    </select>
 
</div>



	<span id="writeroot"></span>

	
        
        
                              
                    
        
                <table>               
                <tr>
                     <td width="70px"></td>
                     <td>
                         <input type="submit" value="確認">
                         <input type="button" value="キャンセル">
                     </td>
                </tr>             
            </table>            
        </form>  
            
            <input type="button" id="moreFields" value="Give me more fields!"  onClick='moreFields()'/>
<!--            <input type="button" id="moreFields" value="Give me more fields!"  onClick='moreFields()'/>-->
            
<!--        <div id="readroot" style="display: none">

	<input type="button" value="Remove review"
		onclick="this.parentNode.parentNode.removeChild(this.parentNode);" /><br /><br />

	<input name="cd" value="title" />

	<select name="rankingsel">
		<option>Rating</option>
		<option value="excellent">Excellent</option>
		<option value="good">Good</option>
		<option value="ok">OK</option>
		<option value="poor">Poor</option>
		<option value="bad">Bad</option>
	</select><br /><br />

</div>-->



	

	
        
        
        
        
        
            
            
<script language="Javascript">


var counter = 0;

function moreFields() {
	counter++;
	var newFields = document.getElementById('readroot').cloneNode(true);
	newFields.id = '';
	newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name
		if (theName)
			newField[i].name = theName + counter;
	}
	var insertHere = document.getElementById('writeroot');
	insertHere.parentNode.insertBefore(newFields,insertHere);
}

window.onload = moreFields;

</script>











        
        
    </body>
</center>
    
    
</html>
    
    

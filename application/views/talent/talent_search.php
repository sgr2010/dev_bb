

<html>
<head>
	<title>お知らせ一覧</title>
        <link type="text/css" rel="stylesheet" href="/mvc-test/public/scripts/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/mvc-test/public/scripts/common.js"></script>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://multidatespickr.sourceforge.net/jquery-ui.multidatespicker.js"></script>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script scr="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    
        
        <script type="text/javascript"> 

$(document).ready(function(){
	$('#datePick').multiDatesPicker();
});


  </script>

  
  
  
 <style type="text/css" media="screen">
  body {
    font-family: verdana, sans-serif;
    font-size: 12px;
    }
  
  #header {
    background: #ccc;
    padding: 20px;
    }
  
  #sidebar {
    float: left;
    width: 10%;
    background: #fff;
    padding: 15px;
    }
     #sidebar li{
    
    padding: 5px;
    }
  
  #content {
    margin-right: 14%;
    padding-top: 50px;

    
    
    
  }
  #content .box{
      width: 100%;
      height: 50px;
      background: #f62b2b;
    }
   #content .box112{
    width: 300px;
    height: 100px;
    background-color: yellow;
    box-shadow: 10px 10px 5px #888888;
    }
  #footer {
    clear: right;
    background: #eee;
    padding: 20px;
    }
    
.button_example{
    width: 100px;
    border:1px solid #df0909; 
    -webkit-border-radius: 3px; 
    -moz-border-radius: 3px;
    border-radius: 3px;font-size:12px;
    font-family:arial, helvetica, sans-serif; 
    padding: 10px 10px 10px 10px; 
    text-decoration:none; 
    display:inline-block;
    text-shadow: -1px -1px 0 rgba(0,0,0,0.3);
    font-weight:bold; 
    color: #FFFFFF;
    text-align: center;
    background-color: #f62b2b; 
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f62b2b), to(#d20202));
    background-image: -webkit-linear-gradient(top, #f62b2b, #d20202);
    background-image: -moz-linear-gradient(top, #f62b2b, #d20202);
    background-image: -ms-linear-gradient(top, #f62b2b, #d20202);
    background-image: -o-linear-gradient(top, #f62b2b, #d20202);
    background-image: linear-gradient(to bottom, #f62b2b, #d20202);
    filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#f62b2b, endColorstr=#d20202);
}

.button_example:hover{
 border:1px solid #b30808;
 background-color: #e40a0a; background-image: -webkit-gradient(linear, left top, left bottom, from(#e40a0a), to(#9f0202));
 background-image: -webkit-linear-gradient(top, #e40a0a, #9f0202);
 background-image: -moz-linear-gradient(top, #e40a0a, #9f0202);
 background-image: -ms-linear-gradient(top, #e40a0a, #9f0202);
 background-image: -o-linear-gradient(top, #e40a0a, #9f0202);
 background-image: linear-gradient(to bottom, #e40a0a, #9f0202);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#e40a0a, endColorstr=#9f0202);
}

#wrong{
    -webkit-box-shadow: 5px -10px 2px -7px rgba(0,0,0,0.75);
    -moz-box-shadow: 5px -10px 2px -7px rgba(0,0,0,0.75);
    box-shadow: 5px -10px 2px -7px rgba(0,0,0,0.75);
}

  </style>

</head>
<body>
    
    <div id="sidebar">
<p><strong>メーニュ</strong></p>
<ul>
<li><a class="button_example" href="#">検索</a></li>
<li><a class="button_example" href="#">クライント管理</a></li>
<li><a class="button_example" href="#">タグ管理</a></li>
<li><a class="button_example" href="#">研修管理</a></li>
<li><a class="button_example" href="#">管理者管理</a></li>

</ul>
</div>
    
    <div id="content">
        <div class='box'>
            <form name="" method="POST" action="">日付  <input id="datePick" type="text"/>
                ID  <input type="text" name="id"
                研修  <input type="text" name="kensyu">
                名前  <input type="text" name="name">
                タグ  <input type="text" name="tag">
                検索<input type="submit" value="検索" size="30px">
            </form>
        </div>
    </div>

 <div id="content">
       
            
            <table width="900px" >
                <tr>
                    <td width="110px"><img src="" height="100px" width="100px"/></td>
                    
                    
                    <td>
                        <table border="0px">
                            <tr>
                                <td width="20%">&nbsp;</td> <td width="50%">名前 : 山田　たすか</td><td width="30%" >   駅名 : 川口ss</td>
                            </tr>
                             <tr>
                                 <td width="20%">&nbsp;</td><td width="50%"> 名前（カナ） :  ヤマダ　タスカ</td> <td width="30%" ></td>
                            </tr>
                        </table>
                        
                         <table border="0px">
                            <tr>
                                <td width="50%">名前 : 山田　たすか</td><td width="30%" >   駅名 : 川口ss</td>
                            </tr>
                             <tr>
                                 <td width="50%"> 名前（カナ） :  ヤマダ　タスカ</td> <td width="30%" ></td>
                            </tr>
                        </table>
                        
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        ID : 0099879
                    </td>
                     <td>
                         <a class="button_example" href="#">スケジュール</a>&nbsp;<a class="button_example" href="#">研修履歴</a>&nbsp;<a class="button_example" href="#">面談メモ</a>&nbsp;<a class="button_example" href="#">アンケート</a>&nbsp;<a class="button_example" href="#">口座情報</a>&nbsp;<a class="button_example" href="#">経歴</a>
                    </td>
                </tr>
            </table>
            
       
    </div>

</div>
    
    
    
</body>
</html>
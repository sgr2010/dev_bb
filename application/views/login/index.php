<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



?>

<!DOCTYPE html>
<html lang="ja">

<head>
<?php
	define('TITLE','ログイン');
//	include('header.php');
//	$screen="login.php";
?>

<?php 
$this->layout = '~/views/shared/header.php';

?>

    

</head>



<?php                   


if ($items == 12){
     echo "<body onLoad='sub_modal_open(\"$items1\")' style='background-color:#fff !important;'>";
    
}
    //画面読み込み時のモーダル表示判定
    if(isset($GLOBALS["message"])){
        $message=$GLOBALS["message"];
        echo "<body onLoad='modal_open(\"msgmodal\")' style='background-color:#fff !important;'>";
    }else{
        echo "<body style='background-color:#fff !important;'>";
    }
    if(isset($_REQUEST["message"])){
        $message=$_REQUEST["message"];
        echo "<body onLoad='modal_open(\"msgmodal\")' style='background-color:#fff !important;'>";
    }else{
        echo "<body style='background-color:#fff !important;'>";
    }
?>





<!--<form name="entry" action="./" class="login" method="post">-->
    <form name="entry" action="/mvc/login/do_login/" class="login" method="post">
    
	<!--<form name="entry" action="" class="login" method="post">-->
		<br><br><br>
		
		<div></div>
		<br><br><br>
		<p>ID：</p>
		<input type="text" name="user_id" maxlength=10 cols="20" rows="1">
		<p>PASS：</p>
		<input type="password" name="password" maxlength=8 cols="20" rows="1">
		<br>
		
		<br>
		<a href="javascript:go_login()" class="form-button mein-color mein-color-button" style="text-align: center;cursor:pointer;">ログイン</a>
	</form>

<?php
 include(MyHelpers::UrlContent('~/views/shared/modal_common.php'));

//include_once '../mvc/views/shared/modal_common.php';
	//include('inquiry_form.php');
	///include('footer.php');
?>

    <script>
	//ログイン処理s
	function go_login() {
	    if(document.entry.user_id.value==""){
            sub_modal_open("ユーザーIDが未入力です");
            return false;
        }
        if(document.entry.password.value==""){
            sub_modal_open("パスワードが未入力です");
            return false;
        }
        
        //ユーザーID桁数チェック
        if(document.entry.user_id.value.length<8){
        	sub_modal_open("ユーザーIDは10桁で入力してください");
            return false;
        }
        
		//document.entry.action="./";
		document.entry.submit();
	}
</script>
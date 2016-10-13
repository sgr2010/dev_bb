<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * File Name : first_login.php
 * for Password change if user is the 1st time loging 
 */



?>

<!DOCTYPE html>
<html lang="ja">

<head>
<?php
	define('TITLE','初回ログイン');
//	include('header.php');
//	$screen="login.php";
?>

<?php 
$this->layout = '~/views/shared/header.php';

?>

    

</head>



<?php
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
<form name="passform" action="" class="login" method="post">
        <br><br><br><br><br><br>
        <input type="hidden" id="user_id" name="user_id" value="<?php echo $_REQUEST["user_id"]; ?>">
        <p>パスワード変更</p>
        <input id="pass1" name="pass1" type="password" value="<?php //echo $item['user_id']; ?>" maxlength=8 cols="20" rows="1">
        <p>確認のため再入力</p>
        <input id="pass2" name="pass2" type="password" value="" maxlength=8 cols="20" rows="1">
        <br><br>
        <div class="modal-title" style="margin-left:10%;margin-bottom:50px;font-size:14px;color:#ff0000;">
		※パスワードは半角英数字６～８文字で設定してください<br>
		※大文字小文字は区別されます
		</div>
        <a id="l_btn" href="javascript:change_pass()" class="form-button mein-color mein-color-button" style="text-align: center;cursor:pointer;">ログイン</a>
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
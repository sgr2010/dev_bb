<?php
//define('MODE', 'http://bebengal.com/');
define('MODE', '/dev_bb');


// for SGR 
//-- CSS
 //define('ASSEST_PATH_ADMIN',	'/dev_bb/public/assets');
 define('ASSEST_PATH_ADMIN',	MODE.'/public/assets');

//-- CSS
//define('ASSEST_PATH_ADMIN',	'/public/assets');


// index css link
//define('ASSEST_PATH_INDEX',	'/public/index_assests');

// index css link
 define('ASSEST_PATH_INDEX',	MODE.'/public/index_assests');


// Home menu Rrl set
//define('HOME_URL',	'/dev_bb/admin/index');
define('HOME_URL',	MODE.'/admin/index');

// Home menu Rrl set
define('BB_PORJECT_URL',	'/dev_bb/');


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	define( 'ADMINUSER', $_SESSION['username']);
}else{
	define( 'ADMINUSER', "Guest");
}



// Define all TABLE name

define('TBL_ARTICLE','bb_article_main');
define('TBL_ARTICLE_TYPE','bb_article_type');
define('TBL_ADMIN','bb_admin_user');



///home/content/79/10545479/html/online/config/images/logo.png
        
        
        
//-- ■　ファイルパス

//-- CSS
define('CSS_PATH',	MODE.'/public/css/');

//-- JS
define('JS_PATH',	MODE.'/public/js/');

//-- IMAGE
define('IMG_PATH',	MODE.'/public/images/');

//-- jquery File
define ('JQUERY_URL', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');

//-- ■　権限

define('PERMISSION_FULL', 8);
define('PERMISSION_GENERAL', 4);
define('PERMISSION_DISPLAY', 0);

//-- ■　定数

define('PAGE', 10);
define('FOOTER_TEXT',	'(c) 2014 Agent.inc');
define('TALENT_PW_COUNT',			8);		// タレントのパスワード文字数
define('ADMIN_PW_COUNT',			9);		// 管理者のパスワード文字数

define('MEMO_STRING_COUNT',			50);	// メモの文字数カウント

define('NO_RECORD',
	'検索条件に合致するデータはありません');

//-- ■テキスト定義

//-- ★　email

// 送り元（共通）
define('MAIL_SENDER',
	'no_reply@bebengal.com');

//共通メールフッタ


define('MAIL_HEADER',
        '[name]　様
    

    
');




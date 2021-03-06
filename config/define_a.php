<?php

//-- ■　基本設定

if(getenv(DOMAIN_NAME) == 'www.bebengal.com'){
	// 本番環境 / production
	define('DOMAIN', 'http://www.bebengal.com/');	// あとで[https]に変更
	define('MODE', '');
}else{
	// ローカル環境 / test
	define('DOMAIN', 'localhost');
	define('MODE', '/dev_bb');
}
//define('DOMAIN', 'localhost');
//define('MODE', '/dev_bb');

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
define('TBL_ARTICLE_TYPE','bb_articles_type');














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


//共通メールフッタ
define('MAIL_FOOTER',
'
    
--------------------------------------------------------
このメールは、システムから自動送信しております為
直接ご返信いただくことが出来ません。

このメールに心当たりのない方、ご不明な点がございましたら、
下記までご連絡いただけますようお願いいたします。

株式会社エージェント
電話番号：03-3780-3911
--------------------------------------------------------');

/* 共通フッタで吸収するので使わない
define('MAIL_FOOTER_NO_REPLY',
	PHP_EOL.PHP_EOL.'このメールには返信することはできません');
*/


/* 新規メールアドレス登録 */
// タイトル
define('MAIL_TITLE_CHECK_ADDRESS','【エージェント】タレント登録画面のご案内');
// 本文
define('MAIL_CHECK_ADDRESS',
	'以下のリンクをクリックして登録をお願い致します。

'.DOMAIN.MODE.'/talent/link?id=');


/* 新規登録完了（タレントによる登録） */

// タイトル（タレント・管理者で共通）
define('MAIL_TITLE_REGIST','【エージェント】タレント登録完了のお知らせ');
// 本文
define('MAIL_REGIST',
	'タレント登録が完了しました。
[name] さんのタレントIDは 【[id]】 となります。

ログインURL
'.DOMAIN.MODE.'/talent/talent_login_login

* IDは今後、お仕事紹介等で必要となるので、忘失なさらないようにお気を付け下さい。');



/* 新規登録完了（管理者による登録） */

// タイトルは共通のもの

//本文
define('MAIL_REGIST_BY_ADMIN',
	'タレント登録が完了しました。
[name] さんのタレントIDは 【[id]】 とパスワードは【[pass]】となります。

ログインURL
'.DOMAIN.MODE.'/talent/talent_login_login

* IDは今後、お仕事紹介等で必要となるので、忘失なさらないようにお気を付け下さい。');



/* メールアドレス変更受付 */

//タイトル
define('MAIL_TITLE_MAIL_CHANGE','【エージェント】メールアドレス変更受付のお知らせ');

//本文
define('MAIL_TEXT_MAIL_CHANGE',
	'以下のリンクをクリックしてメールアドレスの変更手続きを完了してください。
'.DOMAIN.MODE.'/talent/talent_email_verification?id=');



/* パスワード変更受付 */

//タイトル
define('MAIL_TITLE_PASS_CHANGE','【エージェント】パスワード変更受付のお知らせ');

//本文
define('MAIL_TEXT_PASS_CHANGE',
	'以下のリンクをクリックしてパスワードの変更手続きを完了してください。
            

'.DOMAIN.MODE.'/talent/talent_pw_re_set?temp_id=[pw]'.
        
        
        
        '');



/* 登録解除受付 */

//タイトル
define('MAIL_TITLE_USER_INACTIVE',
	'【エージェント】登録解除受付のお知らせ');

//本文
define('MAIL_TEXT_USER_INACTIVE',
	'以下のリンクをクリックして登録解除の手続きを完了してください。
'.DOMAIN.MODE.'/talent/talent_login_inactive_link?id=');


define('MAIL_TITTLE_INACTIVE_TALENT',
	'【エージェント】[name]さんが退会しました');

define ('MAIL_INACTIVE_TALENT', '
ID:[id]
名前:[name]
上記のタレントさんが退会いたしました。
');
/* タレントさんのシフト登録 */

//タイトル（登録・変更・解除で共通）
define('MAIL_TITLE_SHIFT_CHANGE' , "【エージェント】シフトを確認してください");

//本文
define('MAIL_SIFT_ADD_CONT', '
ID : [id]
氏名: [name]
[date]のシフトを【[pass]】に設定しました。

 '.DOMAIN.MODE.'/admin/login');


/* タレントさんのシフト変更 */

//タイトルは共通のもの

//本文
define('MAIL_SIFT_CHANGE_CONT', '
ID : [id]
氏名: [name]
[date]のシフトを【[pass_bass]】から【[pass]】に変更しました。

 '.DOMAIN.MODE.'/admin/login');


/* タレントさんのシフト解除 */

//タイトルは共通のもの

define('MAIL_SIFT_REMOVE_CONT', '
ID : [id]
氏名: [name]
[date]のシフトの設定を解除しました。

 '.DOMAIN.MODE.'/admin/login');


// タレントのスケジュールの仮押さえ通知
define('MAIL_RESERVE_NOTICE',
	'のスケジュールを仮確定しました。');








//-- ★　ページごとのテキスト（管理画面）

define('ADMIN_LOGIN_FALSE',
	'ログインに失敗しました');

define('LOGIN_INFO',
	'
	以下の情報を入力して送信してください。%0D%0A
	============================================%0D%0A
	%0D%0A
	姓：%0D%0A
	名：%0D%0A
	姓（カナ）：%0D%0A
	名（カナ）：%0D%0A
	誕生日：%0D%0A
	ログインメールアドレス：%0D%0A
	ご連絡先メールアドレス：%0D%0A
	電話番号：%0D%0A
	つながりやすい電話番号：%0D%0A
	%0D%0A
	============================================%0D%0A
	
	');


//--page_title
define('PT_SCHEDULE_DETAILS','スケジュール');
define('PT_TAG_DETAILS','タグ');
define('PT_BASIC_DETAILS','基本情報');
define('PT_JOB_DETAILS','職歴');
define('PT_BANK_DETAILS','口座情報');
define('PT_PDF_DETAILS','ドキュメント');


define('CANT_DELETE_ACCOUNT', '就業予定の勤務があるため、退会できません。<br>
必要な場合は管理者にお問い合わせください。<br>
<br>
電話番号:<a href="tel:[tel]">[tel]</a><br>
メールアドレス:[mail]<br>');



//- Error Group --------------------------------------
define('TALENT_REGIST_ERROR_MSG',

'<font color="#ff0000">予期せぬエラーが発生しました<br><br>
申し訳ございません。携帯端末での登録が行えないため、お手数ですが登録シートにて記入をお願いいたします。<br><br>
<font size="-1">※登録シートは、お近くの担当者から受け取っていただくようお願いします</font></font>');


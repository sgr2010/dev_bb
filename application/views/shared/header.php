<html dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>

<meta charset="UTF-8">

<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="">
<meta name="description" content="text/html" >
<meta name="keywords" content="text/html" >

<!--<link href='/mvc/public/themes/main.css' rel='stylesheet' type='text/css'/>-->


<!--
<meta name="viewport" content="width=device-width;target-densitydpi=device-dpi, initial-scale=1, maximum-scale=1, user-scalable=no">
-->
<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<?php
	if(defined('TITLE')){
		echo "<title>".TITLE."｜".PRODUCT."</title>";
	}else{
		echo "<title>".PRODUCT."</title>";
	}
?>

<!--<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" >-->

<!--
<link rel='stylesheet' media='screen and (max-width: 768px)' href='css/style.css' />
<link rel='stylesheet' media='screen and (min-width: 769px)' href='css/style_large.css' />
-->

<!--<script src="/mvc/public/scripts/jquery-1.9.1.min.js"></script>-->


<script src="/mvc/public/scripts/jquery-1.9.1.min.js" ></script>


<script>
(function(){
    var _UA = navigator.userAgent;
    if (_UA.indexOf('iPhone') > -1) {
        document.write('<link rel="stylesheet" href="/mvc/public/scripts/style_iphone.css">');
    }else if(
    _UA.indexOf('iPad') > -1||
	_UA.indexOf('Nexus 7') > -1||
	_UA.indexOf('Nexus 10') > -1||
	_UA.indexOf('Kindle') > -1||
	_UA.indexOf('SCH-I800') > -1||
	_UA.indexOf('Xoom') > -1||
	_UA.indexOf('Tablet') > -1
	){
        document.write('<link rel="stylesheet" href="/mvc/public/scripts/style_pc.css">');
	}else if(
	_UA.indexOf('Android') > -1 && _UA.indexOf('Mobile') > -1 ||
	_UA.indexOf('IEMobile') > -1 ||
	_UA.indexOf('BB10') > -1||
	_UA.indexOf('Nokia') > -1||
	_UA.indexOf('SHT21') > -1||
	_UA.indexOf('SmartTVStick') > -1
	){
        document.write('<link rel="stylesheet" href="/mvc/public/scripts/style_android.css">');
	}else{
        document.write('<link rel="stylesheet" href="/mvc/public/scripts/style_pc.css">');
    }
})();
</script>


<!--[if gte IE 8]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="/mvc/public/scripts/backgroundsize-ie8.js" type="text/javascript"></script>
<script src="/mvc/public/scripts/respond.js" type="text/javascript"></script>
<![endif]-->

<!--[if gte IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="/mvc/public/scripts/respond.js" type="text/javascript"></script>
<![endif]-->

<script src="/mvc/public/scripts/accordion.js"></script>
<script src="/mvc/public/scripts/common.js" ></script>

<!--追加-->
<script>
if(/OS 4.*/.test(navigator.userAgent)){
  $(".bbs-cover-button").addClass("ios-4");
}
</script>

<script>
if(/OS 4.*/.test(navigator.userAgent)){
  $("#topcontrol").addClass("ios-4b");
}
</script>


<?php $this->renderBody();
 
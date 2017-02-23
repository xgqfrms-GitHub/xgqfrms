<?php 
#php $_GET 只能识别input 的name 属性，所以必须设置name 属性，以便PHP 对submit内容的进一步不处理！

#print_r($_GET);
#echo "\n";
#echo "\n<br/>";
#echo "sm-name = {$_GET['sm-name']} "; 
#echo "\n<br/>";
#echo "sm-title = {$_GET['sm-title']}";
#echo "\n<br/>";
#echo "get info";
/*
$_SERVER 
# Predefined Variables 预定义变量
## Superglobals  超级全局
$GLOBALS
$_​SERVER
$_​GET
$_​POST
$_​FILES
$_​REQUEST
$_​SESSION
$_​ENV
$_​COOKIE
$php_​errormsg
$HTTP_​RAW_​POST_​DATA
$http_​response_​header
$argc
$argv
*/
/*
$globals = array(
    '$_SERVER' => $_SERVER, '$_ENV' => $_ENV,
    '$_REQUEST' => $_REQUEST, '$_GET' => $_GET,
    '$_POST' => $_POST, '$_COOKIE' => $_COOKIE,
    '$_FILES' => $_FILES, '$_CUSTOM' => $_CUSTOM
);
*/
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form test</title>
</head>
<body>
	<div>
		<h1>form test</h1>
		<span><?php echo "sm-name = {$_GET['sm-name']}"; ?></span>
	</div>
</body>
</html>
<?php
define('test',true);
require_once("system/loader.php");
//////////////////////// ali feature ///////////////////////////
$uri=getRequestURL();
$parts=explode('/',$uri);

$params=array();
if($parts[1]==""){
  $controller="";
  $method="handleHomePage";
  $controllerClassMate='HomePage'.'Controller';
  $controllerInsatnce=new $controllerClassMate();
  call_user_func_array(array($controllerInsatnce,$method),$params);
  exit;
}
$controller=$parts[1];
$method=$parts[2];

for($i=3;$i<count($parts);$i++){
  $params[]=$parts[$i];
}
//print_r( $controllerClassMate);
$controllerClassMate=ucfirst($controller).'Controller';
$controllerInsatnce=new $controllerClassMate();
call_user_func_array(array($controllerInsatnce,$method),$params);
//<?php echo _login
?>


<!--<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/style-login.css">
  <link rel="stylesheet" href="css/base.css">
</head>
<body>
<div>
<p>
</p>
  <form action="login.php" method="post">
   <button type="submit" style="width:100px;"></button>
  </form>
</div>
 </body>
</html>--!>

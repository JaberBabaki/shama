<?php
function __autoload($className) {
  if (strContain($className , 'Model')) {
    $filename=str_replace('Model','',$className);
    //$filename=strtolower($filename);
    $filename= lcfirst($filename);
    require_once("struct/model/$filename.php");
    return;
  }
  if (strContain($className , 'Controller')) {
    $filename=str_replace('Controller','',$className);
    //$filename=strtolower($filename);
    $filename= lcfirst($filename);
    require_once("struct/controller/$filename.php");
    return;
  }
}


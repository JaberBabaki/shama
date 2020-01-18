<?php
function get_access_name(){
  if (isGuest()){
    return "0";
  }

  $access = $_SESSION["access"];
  $accessName = "";

  if (isUser1()){
    $accessName = "شهروند";
  }
  if (isUser2()){
    $accessName = "مربی";
  }
  if (isUser3()){
    $accessName = "مراکز";
  }

  return $accessName;
}

function isUser1(){
  if (isGuest()) { return false; }

  $access = $_SESSION["access"];

  if ($access== '10'){
    return true;
  }

  return false;
}

function isUser2(){
  if (isGuest()) { return false; }

  $access = $_SESSION["access"];

  if ($access== '20'){
    return true;
  }

  return false;
}

function isUser3(){
  if (isGuest()) { return false; }

  $access = $_SESSION["access"];

  if ($access== '30'){
    return true;
  }

  return false;
}
function isUser4(){
  if (isGuest()) { return false; }

  $access = $_SESSION["access"];

  if ($access== '40'){
    return true;
  }

  return false;
}

function isGuest(){
  return !isset($_SESSION["access"]) ? true : false;
}

function grantUser4(){
  if(!isUser4()){
    $data[] = array();
    $data['text1']='خطا';
    $data['text2']='صفحه خواسته شده وجود ندارد';
    $data['text3']=' ';
    $data['link']=homePage(false);
    $data['btnLable']='صفحه اصلی';
    message('fail', $data, true);
    exit;
  }
}
function grantUser3(){
  if(!isUser3()){
    $data[] = array();
    $data['text1']='خطا';
    $data['text2']='صفحه خواسته شده وجود ندارد';
    $data['text3']=' ';
    $data['link']=homePage(false);
    $data['btnLable']='صفحه اصلی';
    message('fail', $data, true);
    exit;
  }
}
function grantUser2(){
  if(!isUser2()){
    $data[] = array();
    $data['text1']='خطا';
    $data['text2']='صفحه خواسته شده وجود ندارد';
    $data['text3']=' ';
    $data['link']=homePage(false);
    $data['btnLable']='صفحه اصلی';
    message('fail', $data, true);
    exit;
  }
}function grantUser1(){
  if(!isUser1()){
    $data[] = array();
    $data['text1']='خطا';
    $data['text2']='صفحه خواسته شده وجود ندارد';
    $data['text3']=' ';
    $data['link']=homePage(false);
    $data['btnLable']='صفحه اصلی';
    message('fail', $data, true);
    exit;
  }





}
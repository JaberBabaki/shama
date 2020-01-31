<?php
class User1Controller {

  public function __construct() {
    grantUser1();
    require_once("user-base.php");
  }

  public function mainPage(){
    $response = [];
    view::render('panel/user1/main.php', $response);
  }
  public function showReserved(){
    $response = [];
    
    view::render('panel/user1/showReserved.php', $response);
  }

}
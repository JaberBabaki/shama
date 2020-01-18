<?php
class HomePageController {
  public function __construct() {

  }
  public function handleHomePage() {
    $data = array();
    $date['inside']='';
    View::render('home/home.php', $data);
  }
}
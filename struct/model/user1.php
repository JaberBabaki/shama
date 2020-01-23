<?php
class User1Model {
  public static function feedCounsiling($keyword){
    $db=Db::getInstance();
    $records = $db->query("SELECT * FROM s_counseling_center WHERE counselingName LIKE '%$keyword%'");
    return $records;
  }
  public static function ListReservedByUser($id){
    $db=Db::getInstance();
    $records = $db->query("SELECT * FROM s_counseling_center WHERE counselingName LIKE '%id%'");
    return $records;
  }
}
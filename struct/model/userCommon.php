<?php
class UserCommonModel {
  public static function insertUser($email,$hashesPass,$time,$access) {
    $db = Db::getInstance();
    $db->insert("INSERT INTO s_user (userName,password,access,registerTime,lastVisitTime)VALUES('$email','$hashesPass','$access','$time','$time')");
  }
  public static function checkExist($email) {
    $db = Db::getInstance();
    $record=$db->first("SELECT * FROM s_user WHERE userName='$email'");
    return $record;
  }
  public static function updateLastVisit($email,$date) {
    $db = Db::getInstance();
    $record=$db->modify("UPDATE s_user SET lastVisitTime='$date'  WHERE userName='$email'");
    return $record;
  }
  public static function getOstan() {
    $db = Db::getInstance();
    $record=$db->query("SELECT * FROM s_ostan");
    return $record;
  }
  public static function getOstanId($id) {
    $db = Db::getInstance();
    $record=$db->first("SELECT * FROM s_ostan WHERE ostan_id=$id");
    return $record;
  }
  public static function getCity($ostan_id) {
    $db = Db::getInstance();
    $record=$db->query("SELECT * FROM s_city WHERE ostan_id=$ostan_id");
    return $record;
  }
  public static function getCityById($id) {
    $db = Db::getInstance();
    $record=$db->first("SELECT * FROM s_city WHERE id=$id");
    return $record;
  }
  public static function getCoundilingByArea($location) {
    $db = Db::getInstance();
    $record=$db->query("SELECT * FROM s_counseling_center WHERE location=$location");
    return $record;
  }

}
?>
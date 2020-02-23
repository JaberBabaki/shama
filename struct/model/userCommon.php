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
  
  public static function getPsychAndCounsellingByAppointmentId($appointment_id){
    $db = Db::getInstance();
    $record = $db->query("
                        SELECT 
                          psych.psychName, center.counselingName, t2.startTime, t2.endTime, t2.day, t2.date, t1.paymentMode
                        FROM 
                          s_booked_appointment t1 
                        INNER JOIN 
                          s_calendar_appointment t2 on t1.calendar_id=t2.calendar_id 
                        INNER JOIN 
                          s_psych psych on psych.shenaseh=t2.psychIdentity
                        LEFT OUTER JOIN 
                          s_counseling_center center on center.conceil_id=t2.counseling_id 
                        WHERE 
                            t1.appointment_id=$appointment_id               
                        ");
    
    return $record;
  }

  public static function getCounselingByPsychId($psych_id){
    $db = Db::getInstance();
    $record = $db->query("
                        SELECT 
                          t3.counselingName, t1.counseil_id, t1.psychShenaseh, t2.psychName
                        FROM 
                          s_psych_in_counseling t1 
                        INNER JOIN 
                          s_psych t2 on t1.psychShenaseh=t2.shenaseh 
                        INNER JOIN 
                          s_counseling_center t3 on t1.counseil_id=t3.conceil_id 
                        WHERE 
                            t2.psych_id=$psych_id               
                        ");
    
    return $record;
  }

  public static function getUserIdByCalendarId($calendar_id){
    $db = Db::getInstance();
    $record = $db->first("
                        SELECT 
                          user_id 
                        FROM 
                          s_booked_appointment 
                        WHERE  
                          calendar_id=$calendar_id               
                        ");
    
    return $record;
  }

  public static function getNumberOfSessionsAndSessionSizeByUserId($user_id, $counseling_id){
    $db = Db::getInstance();
    $record = $db->query("
                        SELECT 
                          number_of_session, session_size
                        FROM
                          s_info_appointment
                        WHERE 
                          counseling_id=$counseling_id AND user_id=$user_id
                        ORDER BY
                          start_time DESC              
                        ");
    return $record;
  }

  public static function getcounselingIdByCalendarId($calendar_id){
    $db = Db::getInstance();
    $record = $db->first("
                        SELECT
                         counseling_id
                        FROM
                         s_calendar_appointment 
                        WHERE 
                          calendar_id=$calendar_id               
                        ");
    
    return $record;
  }

}
?>
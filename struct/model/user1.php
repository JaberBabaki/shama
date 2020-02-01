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
  
  public static function cancelAppointmentByUser($calendar_id, $cardNum, $name){
    $db = Db::getInstance();
    $db->insert("
                UPDATE 
                  s_calender_psych
                SET 
                  appointment = 0,
                  user_id = NULL
                WHERE
                  calender_id=$calendar_id
      ");
      
    $db->insert("
                INSERT INTO
                  s_cancel_appointment
                (calendar_id, cardNum, name)VALUES($calendar_id, $cardNum, '$name')
              ");

  }
}
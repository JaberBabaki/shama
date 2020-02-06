<?php
class User1Model {
  public static function feedCounsiling($keyword){
    $db=Db::getInstance();
    $records = $db->query("SELECT * FROM s_counseling_center WHERE counselingName LIKE '%$keyword%'");
    return $records;
  }

  public static function feedPsych($keyword){
    $db=Db::getInstance();
    $records = $db->query("
                        SELECT
                         *
                        FROM
                         s_psych
                        WHERE 
                          psychName LIKE '%$keyword%'");
    return $records;
  }

  public static function ListReservedByUser($id){
    $db=Db::getInstance();
    $records = $db->query("SELECT * FROM s_counseling_center WHERE counselingName LIKE '%id%'");
    return $records;
  }
  
  public static function cancelAppointment($appointment_id, $cardNum, $name){
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_canceled_appointment (appointment_id, calendar_id , user_id , appointmentTime, paymentMode )
                SELECT
                  appointment_id, calendar_id , user_id , appointmentTime, paymentMode
                FROM
                  s_booked_appointment
                WHERE 
                  appointment_id=$appointment_id
              ");

    $db->insert("
                UPDATE 
                  s_canceled_appointment
                SET
                  cardNum='$cardNum', name='$name'
                WHERE
                  appointment_id=$appointment_id
              ");

    $db->insert("
                DELETE FROM
                  s_booked_appointment
                WHERE 
                  appointment_id=$appointment_id
              ");
    

  }

  public static function getBookedAppointmentByUserId($user_id){
    $db = Db::getInstance();
    $record = $db->query("
                        SELECT
                          t1.appointment_id, t1.paymentMode, t2.date, t2.day, t2.startTime, t2.endTime, t3.psychName, t3.psychPhoto, t4.counselingName, t4.counselingPhoto 
                        FROM
                          s_booked_appointment t1, s_calendar_appointment t2, s_psych t3, s_counseling_center t4
                        WHERE
                          t1.user_id=$user_id AND t1.calendar_id=t2.calendar_id AND t2.psychIdentity=t3.shenaseh AND t2.counseling_id=t4.conceil_id
                        ORDER BY 
                          t2.date ASC,
                          t2.day ASC,
                          t2.startTime ASC
              ");
    return $record;
  }

  public static function bookAppointment($calendar_id, $paymentMode, $user_id){
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_booked_appointment
                (calendar_id, user_id, paymentMode) VALUES ($calendar_id, $user_id, $paymentMode)
              ");
  }

  public static function getCanceledAppointmentByUserId($user_id){
    $db = Db::getInstance();
    $record = $db->query("
                        SELECT
                          t1.appointment_id, t1.paymentMode, t2.date, t2.day, t2.startTime, t2.endTime, t3.psychName, t3.psychPhoto, t4.counselingName, t4.counselingPhoto 
                        FROM
                          s_canceled_appointment t1, s_calendar_appointment t2, s_psych t3, s_counseling_center t4
                        WHERE
                          t1.user_id=$user_id AND t1.calendar_id=t2.calendar_id AND t2.psychIdentity=t3.shenaseh AND t2.counseling_id=t4.conceil_id
                        ORDER BY 
                          t2.date ASC,
                          t2.day ASC,
                          t2.startTime ASC
    ");
    return $record;
  }

}
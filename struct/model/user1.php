<?php
class User1Model {
  public static function feedCounsiling($keyword){
    $db=Db::getInstance();
    $records = $db->query("SELECT * FROM s_counseling_center WHERE counselingName LIKE '%$keyword%'");
    return $records;
  }

  public static function feedWorkshops($keyword){
    $db=Db::getInstance();
    $records = $db->query("SELECT * FROM s_calendar_workshop WHERE course_name LIKE '%$keyword%'");
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
                  s_canceled_appointment (appointment_id, calendar_id , user_id , time, date, paymentMode )
                SELECT
                  appointment_id, calendar_id , user_id , time, date, paymentMode
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

  public static function cancelWorkshop($bookedId, $cardNum, $name){
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_canceled_workshop (workshop_id, booked_workshop_id , user_id , booked_workshop_date, booked_workshop_payment_mode)
                SELECT
                  workshop_id, booked_workshop_id , user_id , booked_workshop_date, booked_workshop_payment_mode
                FROM
                  s_booked_workshop
                WHERE 
                  booked_workshop_id=$bookedId
              ");

    $db->insert("
                UPDATE 
                  s_canceled_workshop
                SET
                  card_num='$cardNum', name='$name'
                WHERE
                  booked_workshop_id=$bookedId
              ");

$db->insert("
              UPDATE
              s_calendar_workshop
              SET booked_number = booked_number - 1 WHERE workshop_id=(SELECT workshop_id FROM s_booked_workshop WHERE booked_workshop_id=$bookedId)
          ");

$db->insert("
                DELETE FROM
                  s_booked_workshop
                WHERE 
                  booked_workshop_id=$bookedId
              ");


  }

  public static function getBookedWorkshopByUsesrId($user_id){
    $db = Db::getInstance();
    $records = $db->query("
                        SELECT
                         *
                        FROM
                         s_booked_workshop t1
                        INNER JOIN s_calendar_workshop t2 ON t1.workshop_id=t2.workshop_id 
                        WHERE 
                          t1.user_id=$user_id
                        ");
    return $records;
  }

  public static function getCanceledWorkshopByUsesrId($user_id){
    $db = Db::getInstance();
    $records = $db->query("
                        SELECT
                         *
                        FROM
                         s_canceled_workshop t1
                        INNER JOIN s_calendar_workshop t2 ON t1.workshop_id=t2.workshop_id 
                        WHERE 
                          t1.user_id=$user_id
                        ");
    return $records;
  }
  

  public static function rateAppintment($psychRate, $psychText, $counselingRate, $counselingText, $appointment_id){
    $db = Db::getInstance();
    $db->insert("
                      INSERT INTO
                        s_rate_appointment
                      (appointment_id, rate_psych, text_psych, rate_counseling, text_counseling) VALUES ($appointment_id, $psychRate, '$psychText', $counselingRate, '$counselingText')

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

  public static function getNotCompletedAppointmentByUserId($user_id, $date, $time){
    $db = Db::getInstance();
    $record = $db->query("
                        SELECT
                          t1.appointment_id, t1.paymentMode, t2.date, t2.day, t2.startTime, t2.endTime, t3.psychName, t3.psychPhoto, t4.counselingName, t4.counselingPhoto 
                        FROM
                          s_booked_appointment t1, s_calendar_appointment t2, s_psych t3, s_counseling_center t4
                        WHERE
                          t1.user_id=$user_id AND t1.calendar_id=t2.calendar_id AND t2.psychIdentity=t3.shenaseh AND t2.counseling_id=t4.conceil_id AND t2.date>='$date' AND IF(t2.date = '$date', t2.startTime, 25) > '$time'
                        ORDER BY 
                          t2.date ASC,
                          t2.day ASC,
                          t2.startTime ASC
              ");
    return $record;
  }


  public static function getCompletedAppointmentByUserId($user_id){
    $db = Db::getInstance();
    $record = $db->query("
                          SELECT 
                            t5.appointment_id, t5.paymentMode, t6.date, t6.day, t6.startTime, t6.endTime, t3.psychName, t3.psychPhoto, t4.counselingName, t4.counselingPhoto 
                          FROM
                           s_info_appointment t1, s_package_appointment t2, s_psych t3, s_counseling_center t4, s_booked_appointment t5, s_calendar_appointment t6 
                          WHERE
                           t2.user_id=$user_id AND t1.package_appointment_id=t2.package_appointment_id AND t1.calendar_id=t6.calendar_id AND t1.calendar_id=t5.calendar_id AND t6.psychIdentity=t3.shenaseh AND t6.counseling_id=t4.conceil_id 
                          ORDER BY
                           t6.startTime ASC 
                        ");
    return $record;
  }

  public static function getPassedAppointmentByUserId($user_id, $date, $time){
    $db = Db::getInstance();
    $record = $db->query("
                        SELECT 
                          t1.appointment_id, t1.paymentMode, t2.date, t2.day, t2.startTime, t2.endTime, t3.psychName, t3.psychPhoto, t4.counselingName, t4.counselingPhoto 
                        FROM
                          s_booked_appointment t1, s_calendar_appointment t2, s_psych t3, s_counseling_center t4
                        WHERE
                          t1.user_id=$user_id  AND t1.calendar_id=t2.calendar_id AND t2.psychIdentity=t3.shenaseh AND t2.counseling_id=t4.conceil_id AND t2.date<='$date' AND IF(t2.date = '$date', t2.startTime, 0) < '$time' 
                        ORDER BY
                          t2.startTime ASC  
                        ");
    return $record;
  }
  
  
  public static function bookAppointment($calendar_id, $paymentMode, $user_id, $date, $time){
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_booked_appointment
                (calendar_id, user_id, paymentMode, date, time) VALUES ($calendar_id, $user_id, $paymentMode, '$date', '$time')
              ");
  }

  public static function bookWorkshop($workshop_id, $paymentMode, $user_id, $date){
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_booked_workshop
                (workshop_id, user_id, booked_workshop_payment_mode, booked_workshop_date) VALUES ($workshop_id, $user_id, $paymentMode, '$date')
              ");
    $db->insert("
                UPDATE
                 s_calendar_workshop
                SET booked_number = booked_number +1 WHERE workshop_id=$workshop_id
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

  public static function checkExistUser($email){
    $db=Db::getInstance();
    $record=$db->first("SELECT * FROM s_patients WHERE s_patients.user_id IN (SELECT user_id FROM s_user WHERE userName='$email')");
    return $record;
  }

  public static function insertPatient($name, $user_id, $gender, $email, $perPhotoName, $phone, $state, $city, $time, $shenaseh) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_patients (user_id, name, gender, email, photo, phone, province_id, city_id , registered_at, updated_at, shenaseh)
                VALUES
                ($user_id,'$name',$gender,'$email','$perPhotoName','$phone', $state, $city, '$time', '$time', '$shenaseh')");
  }
  
  public static function updatePatient($name, $id, $gender, $email, $perPhotoName, $phone, $state, $city, $time) {
    $db = Db::getInstance();
    $db->modify("
                UPDATE 
                 s_patients
                SET
                  name='$name' , gender=$gender, email='$email', photo='$perPhotoName', phone='$phone', province_id=$state, city_id=$city, updated_at='$time'  
                WHERE
                patient_id=$id");
  }

}
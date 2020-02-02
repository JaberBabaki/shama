<?php

class User3Model {
  public static function insertCounselingCenter($id, $counselingName, $fileName, $location, $establishDate, $expairDateCenter, $fieldActivity, $accountNumber, $phoneNumber, $address, $moreExplain, $shenaseh, $time) {
    $db = Db::getInstance();
    $db->insert("INSERT INTO s_counseling_center (user_id,counselingName,counselingPhoto,location,establishDate,expairDate,fieldActivity,accountNumber,phoneNumber,address,moreExplain,registerTime,lastUpdate,shenaseh)VALUES($id,'$counselingName','$fileName','$location','$establishDate','$expairDateCenter','$fieldActivity','$accountNumber','$phoneNumber','$address','$moreExplain','$time','$time','$shenaseh')");
  }

  public static function insertFounderCounseling($id, $nameFounder, $location, $gender, $founderEmail, $fileName, $CV, $founderPhone, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time) {
    $db = Db::getInstance();
    $db->insert("INSERT INTO s_founder_counseling_center (user_id,founderName,founderGender,
                founderEmailAddress,founderPhoto,founderCV,founderPhone,founderLocation,founderUndergraduate,
                founderMasters,founderDoctorate,founderWorkshopsCourses_1,
                founderWorkshopsCourses_2,founderWorkshopsCourses_3,founderWorkshopsCourses_4,
                founderWorkshopsCourses_5,founderArticles_1,founderArticles_2,founderArticles_3,
                founderArticles_4,founderArticles_5,founderBooks_1,founderBooks_2,founderBooks_3,
                founderBooks_4,founderBooks_5,founderConferences_1,founderConferences_2,founderConferences_3,
                founderConferences_4,founderConferences_5,founderAwardsHonors_1,founderAwardsHonors_2,
                founderAwardsHonors_3,founderAwardsHonors_4,founderAwardsHonors_5,registerTime,updateTime )
                VALUES($id,'$nameFounder','$gender','$founderEmail','$fileName','$CV','$founderPhone','$location','$karshenasi','$arshad','$doctora',
                '$workshop1','$workshop2','$workshop3','$workshop4','$workshop5','$article1','$article2',
                '$article3','$article4','$article5','$book1','$book2','$book3','$book4','$book5','$conferance1',
                '$conferance2','$conferance3','$conferance4','$conferance5','$awardsHonor1','$awardsHonor2','$awardsHonor3',
                '$awardsHonor4','$awardsHonor5','$time','$time')");
  }

  public static function updateCounselingCenter($conceil_id, $counselingName, $fileName, $location, $establishDate, $expairDateCenter, $fieldActivity, $accountNumber, $phoneNumber, $address, $moreExplain, $time) {
    $db = Db::getInstance();
    $db->modify("UPDATE  s_counseling_center SET counselingName='$counselingName',counselingPhoto='$fileName',location='$location',establishDate='$establishDate' ,expairDate='$expairDateCenter',fieldActivity='$fieldActivity',accountNumber='$accountNumber',phoneNumber='$phoneNumber',address='$address',moreExplain='$moreExplain',lastUpdate='$time' WHERE  conceil_id=$conceil_id");
  }

  public static function updateFounderCounseling($id, $nameFounder, $location, $gender, $founderEmail, $fileName, $CV, $founderPhone, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time) {
    $db = Db::getInstance();
    $db->modify("UPDATE s_founder_counseling_center SET founderName='$nameFounder',founderGender='$gender',
                founderEmailAddress='$founderEmail',founderPhoto='$fileName',founderCV='$CV',founderPhone='$founderPhone',founderLocation='$location',founderUndergraduate='$karshenasi',
                founderMasters='$arshad',founderDoctorate='$doctora',founderWorkshopsCourses_1='$workshop1',
                founderWorkshopsCourses_2='$workshop2',founderWorkshopsCourses_3='$workshop3',founderWorkshopsCourses_4='$workshop4',
                founderWorkshopsCourses_5='$workshop5',founderArticles_1='$article1',founderArticles_2='$article2',founderArticles_3='$article3',
                founderArticles_4='$article4',founderArticles_5='$article5',founderBooks_1='$book1',founderBooks_2='$book2',founderBooks_3='$book3',
                founderBooks_4='$book4',founderBooks_5='$book5',founderConferences_1='$conferance1',founderConferences_2='$conferance2',founderConferences_3='$conferance3',
                founderConferences_4='$conferance4',founderConferences_5='$conferance5',founderAwardsHonors_1='$awardsHonor1',founderAwardsHonors_2='$awardsHonor2',
                founderAwardsHonors_3='$awardsHonor3',founderAwardsHonors_4='$awardsHonor4',founderAwardsHonors_5='$awardsHonor5',updateTime='$time' WHERE founder_id=$id");
  }

  public static function checkExistCounseling($email) {
    $db = Db::getInstance();
    $record = $db->first("SELECT * FROM s_counseling_center WHERE s_counseling_center.user_id IN (SELECT user_id FROM s_user WHERE userName='$email')");
    return $record;
  }

  public static function checkExistFounderCounseling($email) {
    $db = Db::getInstance();
    $record = $db->first("SELECT * FROM s_founder_counseling_center WHERE s_founder_counseling_center.user_id IN (SELECT user_id FROM s_user WHERE userName='$email')");
    return $record;
  }

  public static function getPictureCoinsiling($id) {
    $db = Db::getInstance();
    $record = $db->first("SELECT counselingPhoto,counselingName FROM s_counseling_center WHERE conceil_id=$id");
    return $record;
  }

  public static function getSummaryData($id) {
    $db = Db::getInstance();
    $record = $db->first("SELECT * FROM s_founder_counseling_center INNER JOIN s_counseling_center ON s_founder_counseling_center.user_id = s_counseling_center.user_id WHERE s_founder_counseling_center.user_id = $id");
    return $record;
  }
  public static function getDataAboutMe($id) {
    $db = Db::getInstance();
    $record = $db->first("SELECT * FROM s_founder_counseling_center INNER JOIN s_counseling_center ON s_founder_counseling_center.user_id = s_counseling_center.user_id WHERE s_counseling_center.conceil_id = $id");
    return $record;
  }
  public static function checkExistPsychInCenter($conceilId,$shenaseh) {
    $db = Db::getInstance();
    $record = $db->first("SELECT * FROM s_psych_in_counseling WHERE counseil_id = $conceilId && psychShenaseh='$shenaseh'");
    return $record;
  }
  public static function checkExistPsych($nationalCode) {
    $db = Db::getInstance();
    $record = $db->first("SELECT * FROM s_psych WHERE psychNationalCode = '$nationalCode'");
    return $record;
  }

  public static function insertPsychInCenter($counseilId,$shenaseh) {
    $db = Db::getInstance();
    $db->insert("INSERT INTO s_psych_in_counseling (psychShenaseh,counseil_id,showInfo)VALUES('$shenaseh',$counseilId,1)");
  }
  public static function listPsychInCenter($counseilId) {
    $db = Db::getInstance();
    $record=$db->query("SELECT * FROM s_psych INNER JOIN s_psych_in_counseling WHERE s_psych.shenaseh=s_psych_in_counseling.psychShenaseh && s_psych_in_counseling.counseil_id=$counseilId");
    return $record;
  }
  public static function listCalenderInCounselling($counseilId) {
    $db = Db::getInstance();
    $record=$db->query("SELECT * 
                        FROM s_psych 
                        INNER JOIN s_calender_psych 
                        WHERE s_psych.shenaseh=s_calender_psych.psychShenaseh && s_calender_psych.counseling_id=$counseilId                         
                        ORDER BY 
                          date ASC,
                          day ASC,
                          startTime ASC;");
    return $record; 
  }
  public static function insertCalender($shenaseh, $counsilingId, $date, $day, $startTime, $endTime, $appointment) {
    $db = Db::getInstance();
    $db->insert("INSERT INTO s_calender_psych (psychShenaseh, counseling_id, date, day, startTime, endTime, appointment)VALUES('$shenaseh', $counsilingId, '$date', '$day', '$startTime', '$endTime', $appointment)");
}
  public static function getPsych($param) {
  $db = Db::getInstance();
  $db->insert("SELECT * FROM s_psych");
}
  // Read all psychologists registered in a counselling center
  // Input: counselling Id
public static function readRegPsychs($counsilingId){
  $db = Db::getInstance();
  $record = $db->query("SELECT * FROM s_calender_psych WHERE counseling_id=$counsilingId");
  return $record;
}
public static function getPsychInfoByShenas($psychShenas){
  $db = Db::getInstance();
  $record = $db->first("SELECT * FROM s_psych WHERE shenaseh='$psychShenas'");
  return $record;
}

public static function listAvailableCalendarByShenasehAndCounsellingId($shenaseh, $conceil_id, $date, $time){
  $db = Db::getInstance();
  $record = $db->query( "
                        SELECT 
                          *
                        FROM
                          s_calender_psych t1
                        WHERE
                          psychShenaseh='$shenaseh' && counseling_id=$conceil_id && calender_id NOT IN (SELECT calendar_id FROM s_book_appointment) &&date>='$date' && IF(date='$date', startTime>='$time', 1=1) 
                        ORDER BY 
                          date ASC,
                          day ASC,
                          startTime ASC
                      ");
  return $record;
}

public static function bookAppointment($calendar_id, $paymentMode, $user_id){
  $db = Db::getInstance();
  $db->insert("
              INSERT INTO
                s_book_appointment
              (calendar_id, user_id, paymentMode) VALUES ($calendar_id, $user_id, $paymentMode)
            ");
}

public static function getPsychAndCounsellingByCalendarId($calendar_id){
  $db = Db::getInstance();
  $record = $db->query("
                        SELECT psych.psychName, center.counselingName, cPsych.startTime, cPsych.endTime, cPsych.day, cPsych.date
                        FROM s_calender_psych cPsych 
                        INNER JOIN s_psych psych on psych.shenaseh=cPsych.psychShenaseh 
                        LEFT OUTER JOIN s_counseling_center center on center.conceil_id=cPsych.counseling_id 
                        WHERE cPsych.calender_id=$calendar_id                 
                      ");
  
  return $record;
}

}
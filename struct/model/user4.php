<?php
class User4Model {
  public static function insertPsych($namePsych,$user_id,$nationalCode,$gender, $emailPsych, $photoName, $fileNameCV,$license, $phonePsych,$location, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time,$shenaseh) {
    $db = Db::getInstance();
    $db->insert("INSERT INTO s_psych (user_id,psychName,psychNationalCode,psychGender,
                psychEmailAddress,psychPhoto,psychCV,psychLicense,psychPhone,psychLocation,psychUndergraduate,
                psychMasters,psychDoctorate,psychWorkshopsCourses_1,
                psychWorkshopsCourses_2,psychWorkshopsCourses_3,psychWorkshopsCourses_4,
                psychWorkshopsCourses_5,psychArticles_1,psychArticles_2,psychArticles_3,
                psychArticles_4,psychArticles_5,psychBooks_1,psychBooks_2,psychBooks_3,
                psychBooks_4,psychBooks_5,psychConferences_1,psychConferences_2,psychConferences_3,
                psychConferences_4,psychConferences_5,psychAwardsHonors_1,psychAwardsHonors_2,
                psychAwardsHonors_3,psychAwardsHonors_4,psychAwardsHonors_5,registerTime,updateTime,shenaseh)
                VALUES($user_id,'$namePsych','$nationalCode','$gender','$emailPsych','$photoName','$fileNameCV','$license',
                '$phonePsych','$location','$karshenasi','$arshad','$doctora',
                '$workshop1','$workshop2','$workshop3','$workshop4','$workshop5','$article1','$article2',
                '$article3','$article4','$article5','$book1','$book2','$book3','$book4','$book5','$conferance1',
                '$conferance2','$conferance3','$conferance4','$conferance5','$awardsHonor1','$awardsHonor2','$awardsHonor3',
                '$awardsHonor4','$awardsHonor5','$time','$time','$shenaseh')");
  }
  public static function updatePsych($namePsych,$id,$nationalCode,$gender,$emailPsych, $photoName,$fileNameCV,$license,$phonePsych,$location,$karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time) {
    $db = Db::getInstance();
    $db->modify("UPDATE s_psych SET psychName='$namePsych',psychNationalCode='$nationalCode',psychGender='$gender',
                psychEmailAddress='$emailPsych',psychPhoto='$photoName',psychCV='$fileNameCV',psychLicense='$license',psychPhone='$phonePsych',psychLocation='$location',psychUndergraduate='$karshenasi',
                psychMasters='$arshad',psychDoctorate='$doctora',psychWorkshopsCourses_1='$workshop1',
                psychWorkshopsCourses_2='$workshop2',psychWorkshopsCourses_3='$workshop3',psychWorkshopsCourses_4='$workshop4',
                psychWorkshopsCourses_5='$workshop5',psychArticles_1='$article1',psychArticles_2='$article2',psychArticles_3='$article3',
                psychArticles_4='$article4',psychArticles_5='$article5',psychBooks_1='$book1',psychBooks_2='$book2',psychBooks_3='$book3',
                psychBooks_4='$book4',psychBooks_5='$book5',psychConferences_1='$conferance1',psychConferences_2='$conferance2',psychConferences_3='$conferance3',
                psychConferences_4='$conferance4',psychConferences_5='$conferance5',psychAwardsHonors_1='$awardsHonor1',psychAwardsHonors_2='$awardsHonor2',
                psychAwardsHonors_3='$awardsHonor3',psychAwardsHonors_4='$awardsHonor4',psychAwardsHonors_5='$awardsHonor5',updateTime='$time' WHERE psych_id=$id");
  }
  public static function checkExistPsych($email){
    $db=Db::getInstance();
    $record=$db->first("SELECT * FROM s_psych WHERE s_psych.user_id IN (SELECT user_id FROM s_user WHERE userName='$email')");
    return $record;
  }
  public static function getDataShenaseh($shenaseh){
    $db=Db::getInstance();
    $record=$db->first("SELECT * FROM s_psych WHERE shenaseh='$shenaseh'");
    return $record;
  }

  public static function getBookedAppoitmentsByPsychId($shenaseh){
    $db=Db::getInstance();
    $record=$db->query("
                      SELECT
                        t2.endTime, t2.startTime, t3.counselingName, t2.day, t2.date, t1.paymentMode, t2.calendar_id
                      FROM
                        s_booked_appointment t1
                      INNER JOIN
                        s_calendar_appointment t2 ON t1.calendar_id=t2.calendar_id
                      INNER JOIN
                      s_counseling_center t3 ON t2.counseling_id=t3.conceil_id
                      WHERE 
                        t2.psychIdentity='$shenaseh'
                      ORDER BY 
                        t2.date ASC,
                        t2.day ASC,
                        t2.startTime ASC
                        ");
    return $record;
  }
  
  public static function startAppointment($calendar_id, $user_id){
    $db=Db::getInstance();
    $record=$db->insert("
                        INSERT INTO
                         s_info_appointment
                        (calendar_id, user_id)VALUES($calendar_id, $user_id) 
                        ");
    return $record;
  }

  // public static function endAppointment($calendar_id, $data){
  //   $db=Db::getInstance();
  //   $record=$db->insert("
  //                       INSERT INTO
  //                        s_info_appointment
  //                       (calendar_id, user_id)VALUES($calendar_id, $user_id) 
  //                       ");
  //   return $record;
  // }

  public static function getCanceledAppoitmentsByPsychId($shenaseh){
    $db=Db::getInstance();
    $record=$db->query("
                      SELECT
                        t2.endTime, t2.startTime, t3.counselingName, t2.day, t2.date, t1.paymentMode
                      FROM
                        s_canceled_appointment t1
                      INNER JOIN
                        s_calendar_appointment t2 ON t1.calendar_id=t2.calendar_id
                      INNER JOIN
                      s_counseling_center t3 ON t2.counseling_id=t3.conceil_id
                      WHERE 
                        t2.psychIdentity='$shenaseh'
                      ORDER BY 
                        t2.date ASC,
                        t2.day ASC,
                        t2.startTime ASC
                        ");
    return $record;
  }

}
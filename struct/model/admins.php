<?php
class AdminsModel {
  public static function checkExistAdmin($email){
    $db=Db::getInstance();
    $record=$db->first("SELECT * FROM s_admins WHERE s_admins.user_id IN (SELECT user_id FROM s_user WHERE userName='$email')");
    return $record;
  }

  public static function insertAdmin($nameAdmin, $user_id, $nationalCode, $gender, $emailAdmin, $perPhotoName, $frontNationalCardName, $backtNationalCardName, $firstPageBrithCertificaitonCardName, $phoneAdmin, $location, $time, $shenaseh) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                 s_admins (user_id, adminName, adminNationalCode, adminGender, adminEmailAddress, adminPhoto, adminPhone, adminLocation, frontMeliCardPhoto, backMeliCardPhoto, shenasnamehPhoto, registerTime, updateTime, shenaseh)
                VALUES
                ($user_id,'$nameAdmin','$nationalCode','$gender','$emailAdmin','$perPhotoName','$phoneAdmin','$location', '$frontNationalCardName', '$backtNationalCardName', '$firstPageBrithCertificaitonCardName', '$time', '$time', '$shenaseh')");
  }

  public static function updateAdmin($nameAdmin, $id, $nationalCode, $gender, $emailAdmin, $perPhotoName, $frontNationalCardName, $backtNationalCardName, $firstPageBrithCertificaitonCardName, $phoneAdmin, $location, $time) {
    $db = Db::getInstance();
    $db->modify("
                UPDATE 
                  s_admins
                SET
                  adminName='$nameAdmin' , adminNationalCode='$nationalCode', adminGender='$gender', adminEmailAddress='$emailAdmin', adminPhoto='$perPhotoName', adminPhone='$phoneAdmin', adminLocation='$location', frontMeliCardPhoto='$frontNationalCardName', backMeliCardPhoto='$backtNationalCardName', shenasnamehPhoto='$firstPageBrithCertificaitonCardName', updateTime='$time'  
                WHERE
                admins_id=$id");
  }

  public static function getAccessType(){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                         * 
                        FROM 
                          s_admins_accessTypes
                      ");
    return $record;
  }


  public static function setAccessRequest($user_id, $decryptedAccessType, $province, $city, $time){
    $db=Db::getInstance();
    $record=$db->insert("
                        INSERT INTO
                          s_admins_accessRequests (user_id, admins_id, accessType, province, city, requested_at)
                        VALUES
                          ($user_id, (SELECT admins_id FROM s_admins WHERE user_id=$user_id), $decryptedAccessType, $province, $city, '$time')
                      ");
    return $record;  
  }


  public static function getAllowedAccess($value){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         country, province, city, name
                        FROM 
                          s_admins_accessTypes
                        WHERE
                        acessType_id=$value
                      ");
    return $record;
  }

  public static function checkExistAccessType($user_id, $value){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_admins_accessRequests
                        WHERE
                          user_id=$user_id AND verify IS NULL AND accessType=$value
                      ");
    return $record;
  }
  
  public static function getRequestedAccessByUserId($user_id){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                         *
                        FROM 
                          s_admins_accessRequests
                        WHERE
                          user_id=$user_id
                      ");
    return $record;
  }

  public static function searchForReportingNullLocation($locationProvince, $locationCity, $treatmentApproach, $counselingTopic, $subTopic, $gender, $dateFrom, $dateTo){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                         *
                        FROM 
                          s_package_appointment t1
                        INNER JOIN s_info_appointment t2
                          ON t1.package_appointment_id = t2.package_appointment_id
                        INNER JOIN s_patients t3
                          ON t1.user_id=t3.user_id
                        INNER JOIN s_counseling_center t4
                          ON t4.conceil_id = t1.counseling_id
                        WHERE
                          consulting_category_id IN $counselingTopic AND
                          treatment_approach_id  IN $treatmentApproach AND
                          sub_topic_id IN $subTopic AND
                          (t3.province_id IN $locationProvince AND
                          t3.city_id IN $locationCity) AND
                          (t4.province_id IN $locationProvince AND
                          t4.city_id IN $locationCity) AND
                          DATE(t2.start_time) >= $dateFrom AND DATE(t2.start_time) <= $dateTo  AND
                          t3.gender IN $gender
                      ");
    return $record;
  }

  public static function searchForReportingCounselingLocation($locationProvince, $locationCity, $treatmentApproach, $counselingTopic, $subTopic, $gender, $dateFrom, $dateTo){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                         *
                        FROM 
                          s_package_appointment t1
                        INNER JOIN s_info_appointment t2
                          ON t1.package_appointment_id = t2.package_appointment_id
                        INNER JOIN s_patients t3
                          ON t1.user_id=t3.user_id
                        INNER JOIN s_counseling_center t4
                          ON t4.conceil_id = t1.counseling_id
                        WHERE
                          t1.consulting_category_id IN $counselingTopic AND
                          t1.treatment_approach_id  IN $treatmentApproach AND
                          t1.sub_topic_id IN $subTopic AND
                          t4.province_id IN $locationProvince AND
                          t4.city_id IN $locationCity AND
                          DATE(t2.start_time) >= '$dateFrom' AND DATE(t2.start_time) <= '$dateTo' AND
                          t3.gender IN $gender    
                      ");
    return $record;
  }

  public static function searchForReportingPatientLocation($locationProvince, $locationCity, $treatmentApproach, $counselingTopic, $subTopic, $gender, $dateFrom, $dateTo){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                         *
                        FROM 
                          s_package_appointment t1
                        INNER JOIN s_info_appointment t2
                          ON t1.package_appointment_id = t2.package_appointment_id
                        INNER JOIN s_patients t3
                          ON t1.user_id=t3.user_id
                        INNER JOIN s_counseling_center t4
                          ON t4.conceil_id = t1.counseling_id
                        WHERE
                          consulting_category_id IN $counselingTopic AND
                          treatment_approach_id  IN $treatmentApproach AND
                          sub_topic_id IN $subTopic AND
                          t3.province_id IN $locationProvince AND
                          t3.city_id IN $locationCity AND
                          DATE(t2.start_time) >= $dateFrom AND DATE(t2.start_time) <= $dateTo   AND
                          t3.gender IN $gender
                      ");
    return $record;
  }
}
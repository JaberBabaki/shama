<?php
class MainAdminModel {
  
  public static function checkExistCounselingCategory($category){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                            s_consulting_categories
                        WHERE
                          name='$category'
                      ");
    return $record;
  }

  public static function insertCounselingCategory($category) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_consulting_categories (name)
                VALUES
                  ('$category')
            ");
  }
  
  
  public static function checkExistSubTopic($topic){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_sub_topics
                        WHERE
                          topic='$topic'
                      ");
    return $record;
  }

  public static function checkExistEmployer($employer){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_employer
                        WHERE
                          name='$employer'
                      ");
    return $record;
  }

  public static function insertSubTopic($topic) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_sub_topics (topic)
                VALUES
                ('$topic')
            ");
  }

  public static function insertEmployer($employer) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_employer (name)
                VALUES
                ('$employer')
            ");
  }

  public static function checkExistTreatmentApproach($treatmentApproach){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_treatment_approaches
                        WHERE
                          name='$treatmentApproach'
                      ");
    return $record;
  }

  public static function insertTreatmentApproach($treatmentApproach) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                s_treatment_approaches (name)
                VALUES
                ('$treatmentApproach')
            ");
  }

  public static function insertProvinceInReporting($provinceId) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_province_in_reporting (province_id)
                VALUES
                ($provinceId)
            ");
  }

  public static function listProvinceInReporting() {
    $db = Db::getInstance();
    $response = $db->query("
                SELECT
                  t2.name, t2.ostan_id
                FROM 
                  s_province_in_reporting t1
                INNER JOIN
                  s_ostan t2
                WHERE
                  t2.ostan_id=t1.province_id 
            ");
    return $response;
  }

  public static function checkExistProvinceInReporting($provinceId){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_province_in_reporting
                        WHERE
                          province_id=$provinceId
                      ");
    return $record;
  }


  public static function listAllowedProvincesByUserId($user_id){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                         t1.province, t2.name
                        FROM 
                          s_admins_accessRequests t1
                        INNER JOIN s_ostan t2
                        ON t1.province=t2.ostan_id
                        WHERE
                          t1.user_id=$user_id AND t1.verify=1
                      ");
    return $record;
  }

  public static function getAccessLevelByUserId($user_id){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                          accessType
                        FROM 
                          s_admins_accessRequests
                        WHERE
                          user_id=$user_id AND verify=1
                      ");
    return $record;
  }

  public static function getAllowedAccessByAccessLevel($accessLevel){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                          *
                        FROM 
                          s_admins_accessTypes
                        WHERE
                          acessType_id = $accessLevel
                      ");
    return $record;
  }

  public static function getAccessLevelByUserIdAndProvinceId($user_id, $provinceId){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                          accessType
                        FROM 
                          s_admins_accessRequests
                        WHERE
                          user_id=$user_id AND verify=1 AND province=$provinceId
                      ");
    return $record;
  }
  
  function getAllowedProvincesAndCitiesByUserId($user_id){
    $db=Db::getInstance();
    $record=$db->query("
                        SELECT
                          *
                        FROM 
                          s_admins_accessRequests
                        WHERE
                          user_id=$user_id AND verify=1
                      ");
    return $record;
  }

  function getCityByUserId($user_id, $provinceId)
  {
    $db = Db::getInstance();
    $record=$db->query("
                        SELECT
                          name, id   
                        FROM
                          s_admins_accessRequests t1
                        INNER JOIN s_city t2
                        ON t1.city=t2.id
                        WHERE
                         t1.province=$provinceId AND t1.user_id=$user_id AND verify=1
                      ");
    return $record;
  }

  function getCouselingCategoryById($couselingId){
    $db = Db::getInstance();
    $record=$db->first("
                        SELECT
                          name  
                        FROM
                          s_consulting_categories
                        WHERE
                          consulting_category_id=$couselingId
                      ");
    return $record;
  }

  function getTreatmentApproachById($treatmentApproachId){
    $db = Db::getInstance();
    $record=$db->first("
                        SELECT
                          name  
                        FROM
                          s_treatment_approaches
                        WHERE
                          treatment_approach_id=$treatmentApproachId
                      ");
    return $record;
  }

  function getSubTopicById($subTopicId){
    $db = Db::getInstance();
    $record=$db->first("
                        SELECT
                          topic  
                        FROM
                          s_sub_topics
                        WHERE
                        sub_topic_id=$subTopicId
                      ");
    return $record;
  }

  public static function checkExistWorkshopTopic($topic){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_workshop_categories
                        WHERE
                          name='$topic'
                      ");
    return $record;
  }

  public static function insertWorkshopTopic($topic) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_workshop_categories (name)
                VALUES
                ('$topic')
            ");
  }

  public static function checkExistTeacherId($id){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_teachers_in_workshops
                        WHERE
                          psych_id=$id
                      ");
    return $record;
  }

  public static function checkExistlicense($name){
    $db=Db::getInstance();
    $record=$db->first("
                        SELECT
                         *
                        FROM 
                          s_license
                        WHERE
                          name='$name'
                      ");
    return $record;
  }
  
  public static function insertTeacherId($id) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                  s_teachers_in_workshops (psych_id)
                VALUES
                ($id)
            ");
  }

  public static function insertLicense($name) {
    $db = Db::getInstance();
    $db->insert("
                INSERT INTO
                s_license (name)
                VALUES
                ('$name')
            ");
  }
}

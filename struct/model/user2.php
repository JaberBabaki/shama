<?php
class User2Model {
  public static function insertCoach($id, $nameCoach,$location,$gender,$emailFounder,$fileName,$CV,$phoneFounder,$karshenasi,$arshad,$doctora,$workshop1,$workshop2,$workshop3,$workshop4,$workshop5,$article1,$article2,$article3,$article4,$article5,$book1,$book2,$book3,$book4,$book5,$conferance1,$conferance2,$conferance3,$conferance4,$conferance5,$awardsHonor1,$awardsHonor2,$awardsHonor3,$awardsHonor4,$awardsHonor5,$shenaseh,$time) {
    $db = Db::getInstance();
    $db->insert("INSERT INTO s_coach (user_id,coachName,coachNationalCode,coachGender,
                coachEmailAddress,coachPhoto,coachCV,coachLicence,coachPhone,coachLocation,coachUndergraduate,
                coachMasters,coachDoctorate,coachWorkshopsCourses_1,
                coachWorkshopsCourses_2,coachWorkshopsCourses_3,coachWorkshopsCourses_4,
                coachWorkshopsCourses_5,coachArticles_1,coachArticles_2,coachArticles_3,
                coachArticles_4,coachArticles_5,coachBooks_1,coachBooks_2,coachBooks_3,
                coachBooks_4,coachBooks_5,coachConferences_1,coachConferences_2,coachConferences_3,
                coachConferences_4,coachConferences_5,coachAwardsHonors_1,coachAwardsHonors_2,
                coachAwardsHonors_3,coachAwardsHonors_4,coachAwardsHonors_5,shenaseh,registerTime,updateTime )
                VALUES($id,'$nameCoach','-','$gender','$emailFounder','$fileName','$CV','-','$phoneFounder','$location','$karshenasi','$arshad','$doctora',
                '$workshop1','$workshop2','$workshop3','$workshop4','$workshop5','$article1','$article2',
                '$article3','$article4','$article5','$book1','$book2','$book3','$book4','$book5','$conferance1',
                '$conferance2','$conferance3','$conferance4','$conferance5','$awardsHonor1','$awardsHonor2','$awardsHonor3',
                '$awardsHonor4','$awardsHonor5','$shenaseh','$time','$time')");
  }
  public static function updateCoach($id, $nameCoach,$location,$gender,$emailFounder,$fileName,$CV,$phoneFounder,$karshenasi,$arshad,$doctora,$workshop1,$workshop2,$workshop3,$workshop4,$workshop5,$article1,$article2,$article3,$article4,$article5,$book1,$book2,$book3,$book4,$book5,$conferance1,$conferance2,$conferance3,$conferance4,$conferance5,$awardsHonor1,$awardsHonor2,$awardsHonor3,$awardsHonor4,$awardsHonor5,$time) {
    $db = Db::getInstance();
    $db->modify("UPDATE s_coach SET coachName='$nameCoach',coachGender='$gender',
                coachEmailAddress='$emailFounder',coachPhoto='$fileName',coachCV='$CV',coachPhone='$phoneFounder',coachLocation='$location',coachUndergraduate='$karshenasi',
                coachMasters='$arshad',coachDoctorate='$doctora',coachWorkshopsCourses_1='$workshop1',
                coachWorkshopsCourses_2='$workshop2',coachWorkshopsCourses_3='$workshop3',coachWorkshopsCourses_4='$workshop4',
                coachWorkshopsCourses_5='$workshop5',coachArticles_1='$article1',coachArticles_2='$article2',coachArticles_3='$article3',
                coachArticles_4='$article4',coachArticles_5='$article5',coachBooks_1='$book1',coachBooks_2='$book2',coachBooks_3='$book3',
                coachBooks_4='$book4',coachBooks_5='$book5',coachConferences_1='$conferance1',coachConferences_2='$conferance2',coachConferences_3='$conferance3',
                coachConferences_4='$conferance4',coachConferences_5='$conferance5',coachAwardsHonors_1='$awardsHonor1',coachAwardsHonors_2='$awardsHonor2',
                coachAwardsHonors_3='$awardsHonor3',coachAwardsHonors_4='$awardsHonor4',coachAwardsHonors_5='$awardsHonor5',updateTime='$time' WHERE coach_id=$id");
  }
  public static function checkExistCoach($email){
    $db=Db::getInstance();
    $record=$db->first("SELECT * FROM s_coach WHERE s_coach.user_id IN (SELECT user_id FROM s_user WHERE userName='$email')");
    return $record;
  }

  public static function feedCoach($keyword){
    $db=Db::getInstance();
    $records = $db->query("
                        SELECT
                         *
                        FROM
                        s_coach
                        WHERE 
                          coachName LIKE '%$keyword%'");
    return $records;
  }
}
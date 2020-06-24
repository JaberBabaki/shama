<?php
class MainAdminController {

  public function __construct() {
    grantMainAdmin();
    require_once("user-base.php");
  }

  function dashboard() {
    $data[] = array();
    $coach = User2Model::checkExistCoach($_SESSION['email']);
    if ($coach != null) {
      $data['coach'] = 1;
      $data['shenaseh'] = $coach['shenaseh'];
      $data['coachName'] = $coach['coachName'];
      $data['coachNationalCode'] = $coach['coachNationalCode'];
      $data['coachPhoto'] = $coach['coachPhoto'];
      $data['coachEmail'] = $coach['coachEmailAddress'];
      $data['coachLicence'] = $coach['coachLicence'];
      $data['registerTime'] = $coach['registerTime'];
      $data['lastUpdate'] = $coach['updateTime'];
    } else {
      $data['coach'] = 0;
    }
    view::renderPanel('panel/mainAdmin/dashboard.php', $data);
  }

  function setting(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listCounselingCategories = UserCommonController::listCounselingCategories();
    if ($listCounselingCategories != null){
      for ($i=0; $i<count($listCounselingCategories); $i++){
        $response[$i]['categoryName'] = $listCounselingCategories[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/setting.php', $data);
  }

  function addCounselingTopic(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $counselingTopic = $_POST['counselingTopic'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($counselingTopic) == 0){
      $response['Error']['message'] = 'لطفا موضوع مشاوره را وارد کنید';
      echo json_encode($response);
      exit;
    }
    $counselingTopic = EncryptionController::encriptText($counselingTopic);
    $exist = MainAdminModel::checkExistCounselingCategory($counselingTopic);
    if ($exist != null){
      $response['Error']['message'] = 'این عنوان قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertCounselingCategory($counselingTopic);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'موضوع مشاوره با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;
  }

  function treatmentApproach(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listTreatmentApproach = UserCommonController::listTreatmentApproach();
    if ($listTreatmentApproach != null){
      for ($i=0; $i<count($listTreatmentApproach); $i++){
        $response[$i]['categoryName'] = $listTreatmentApproach[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/treatmentApproach.php', $data);
  }

  function subTopic(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listSubTopic = UserCommonController::listSubTopic();
    if ($listSubTopic != null){
      for ($i=0; $i<count($listSubTopic); $i++){
        $response[$i]['categoryName'] = $listSubTopic[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/subTopic.php', $data);
  }
  
  function addSubTopic(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $subTopic = $_POST['subTopic'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($subTopic) == 0){
      $response['Error']['message'] = 'لطفا موضوع فرعی را وارد کنید';
      echo json_encode($response);
      exit;
    }
    $subTopic = EncryptionController::encriptText($subTopic);
    $exist = MainAdminModel::checkExistSubTopic($subTopic);
    if ($exist != null){
      $response['Error']['message'] = 'این عنوان قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertSubTopic($subTopic);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'موضوع فرعی با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;   
  }

  function addTreatmentApproach(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $treatmentApproach = $_POST['treatmentApproach'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($treatmentApproach) == 0){
      $response['Error']['message'] = 'لطفا رویکرد درمانی را وارد کنید';
      echo json_encode($response);
      exit;
    }

    $treatmentApproach = EncryptionController::encriptText($treatmentApproach);
    $exist = MainAdminModel::checkExistTreatmentApproach($treatmentApproach);
    if ($exist != null){
      $response['Error']['message'] = 'این عنوان قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertTreatmentApproach($treatmentApproach);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'رویکرد درمانی با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;   
  }

  function provinceInReporting(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listProvinceInReporting = MainAdminModel::listProvinceInReporting();
    if ($listProvinceInReporting != null){
      for ($i=0; $i<count($listProvinceInReporting); $i++){
        $response[$i]['categoryName'] = $listProvinceInReporting[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/provinceInReporting.php', $data);
  }

  function addProvinceInReporting(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $provinceId = $_POST['provinceId'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($provinceId) == 0){
      $response['Error']['message'] = 'لطفا رویکرد درمانی را وارد کنید';
      echo json_encode($response);
      exit;
    }

    $exist = MainAdminModel::checkExistProvinceInReporting($provinceId);
    if ($exist != null){
      $response['Error']['message'] = 'این عنوان قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertProvinceInReporting($provinceId);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'رویکرد درمانی با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;   
  }

  function getAllowedProvinces(){
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listProvinces = MainAdminModel::listAllowedProvincesByUserId($recordUser['user_id']);
    if ($listProvinces != null){
      for ($i=0; $i<count($listProvinces); $i++){
        $response[$i]['name'] = $listProvinces[$i]['name']; 
        $response[$i]['id'] = $listProvinces[$i]['province']; 
      }
    }
    return $response;
  }

  function findAccessLevel($user_id, $provinceId = null){
    $access  = array();
    if ($provinceId == null){
      $accessLevel = MainAdminModel::getAccessLevelByUserId($user_id);
      for ($i=0; $i<count($accessLevel); $i++){
        $tmp = EncryptionController::decryptAccessTypes($accessLevel[$i]['accessType']);
        $access[$i] = MainAdminModel::getAllowedAccessByAccessLevel($tmp);
      }
      return $access;
    }else{
      $accessLevel = MainAdminModel::getAccessLevelByUserIdAndProvinceId($user_id, $provinceId);
      for ($i=0; $i<count($accessLevel); $i++){
        $tmp = EncryptionController::decryptAccessTypes($accessLevel[$i]['accessType']);
        $access[$i] = MainAdminModel::getAllowedAccessByAccessLevel($tmp);
      }
      return $access;
    }
  }  

  function workshopTopic(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listWorkshopTopic = UserCommonController::listWorkshopTopic();
    if ($listWorkshopTopic != null){
      for ($i=0; $i<count($listWorkshopTopic); $i++){
        $response[$i]['categoryName'] = $listWorkshopTopic[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/workshopTopic.php', $data);
  }
  
  function addWorkshopTopic(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $workshopTopic = $_POST['workshopTopic'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($workshopTopic) == 0){
      $response['Error']['message'] = 'لطفا موضوع کارگاه را وارد کنید';
      echo json_encode($response);
      exit;
    }

    $workshopTopic = EncryptionController::encriptText($workshopTopic);
    $exist = MainAdminModel::checkExistWorkshopTopic($workshopTopic);
    if ($exist != null){
      $response['Error']['message'] = 'این عنوان قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertWorkshopTopic($workshopTopic);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'موضوع کارگاه با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;   
  }


  function addEmployer(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $employer = $_POST['employer'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($employer) == 0){
      $response['Error']['message'] = 'لطفا کارفرما را وارد کنید';
      echo json_encode($response);
      exit;
    }

    $exist = MainAdminModel::checkExistEmployer($employer);
    if ($exist != null){
      $response['Error']['message'] = 'این کارفرما قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertEmployer($employer);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = ' کارفرما با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;   
  }
  


  function workshopTeacher(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listTeachers = UserCommonController::listTeachers();
    if ($listTeachers != null){
      for ($i=0; $i<count($listTeachers); $i++){
        $response[$i]['categoryName'] = $listTeachers[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/workshopTeacher.php', $data);
  }

  
  function employer(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listEmployer = UserCommonController::listEmployer();
    if ($listEmployer != null){
      for ($i=0; $i<count($listEmployer); $i++){
        $response[$i]['categoryName'] = $listEmployer[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/employer.php', $data);
  }


  function license(){
    $data[] = array();
    $response[] = array();
    $recordUser = UserBase::LoginCheckPerTask();
    $listLicense = UserCommonController::listLicense();
    if ($listLicense != null){
      for ($i=0; $i<count($listLicense); $i++){
        $response[$i]['categoryName'] = $listLicense[$i]['name']; 
      }
      $data['record'] = $response;
    }else {
      $data['record'] = null;
    }
    
    view::renderPanel('panel/mainAdmin/license.php', $data);
  }

  function addTeacherOfWorkshop(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $teacherId = $_POST['teacherId'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($teacherId) == 0){
      $response['Error']['message'] = 'لطفا یک مدرس را انتخاب کنید';
      echo json_encode($response);
      exit;
    }

    $exist = MainAdminModel::checkExistTeacherId($teacherId);
    if ($exist != null){
      $response['Error']['message'] = 'این مدرس قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertTeacherId($teacherId);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'مدرس با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;    
  }

  function addLicense(){
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $license = $_POST['license'];
    $recordUser = UserBase::LoginCheckPerTask();
    if (strlen($license) == 0){
      $response['Error']['message'] = 'لطفا یک مرجع اعطای پروانه وارد کنید';
      echo json_encode($response);
      exit;
    }

    $exist = MainAdminModel::checkExistlicense($license);
    if ($exist != null){
      $response['Error']['message'] = 'این مرجع اعطای پروانه قبلا در سیستم ثبت شده است';
      echo json_encode($response);
      exit;
    }

    MainAdminModel::insertLicense($license);
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'مدرس با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;    
  }
  
}
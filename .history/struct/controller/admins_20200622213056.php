<?php
class AdminsController {

  public function __construct() {
    grantAdmins();
    require_once("user-base.php");
  }

  function dashboard() {
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $admin = AdminsModel::checkExistAdmin($_SESSION['email']);
    if ($admin != null) {
      $data['admin'] = 1;
      $data['shenaseh'] = $admin['shenaseh'];
      $data['adminName'] = $admin['adminName'];
      $data['adminNationalCode'] = $admin['adminNationalCode'];
      $data['adminPhoto'] = $admin['adminPhoto'];
      $data['adminEmail'] = $admin['adminEmailAddress'];
      $data['registerTime'] = $admin['registerTime'];
      $data['lastUpdate'] = $admin['updateTime'];
    } else {
      $data['admin'] = 0;
    }
    view::renderPanel('panel/admins/dashboard.php', $data);
  }

  function informationAdmin() {
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $recordAdmin =  AdminsModel::checkExistAdmin($_SESSION['email']);
    $data['record']=$recordAdmin;
    $data['shenaseh'] = $recordAdmin['shenaseh'];
    view::renderPanel('panel/admins/informationAdmin.php', $data);
  }
  
  
  
  function requestedAccesses() {
    $recordUser = UserBase::LoginCheckPerTask();
    $user_id = $recordUser['user_id'];
    $recordAdmin =  AdminsModel::checkExistAdmin($_SESSION['email']);
    $rawData = AdminsModel::getRequestedAccessByUserId($user_id);
    $data[] = array();
    $response[] = array();
    for($i=0; $i<count($rawData); $i++){
      $accessType = $rawData[$i]['accessType'];
      $accessType = EncryptionController::decryptAccessTypes($accessType);
      $access = AdminsModel::getAllowedAccess($accessType);
      $response[$i]['accessName'] = $access['name'];
      $response[$i]['time'] = explode(' ', $rawData[$i]['requested_at'])[1];
      $response[$i]['date'] = explode(' ', $rawData[$i]['requested_at'])[0];
      $response[$i]['province'] = null;
      $response[$i]['city'] = null; 
      if ($rawData[$i]['province'] != 0){
        $tmp = UserCommonModel::getOstanId($rawData[$i]['province']);
        $response[$i]['province'] = $tmp['name'];
      }
      if ($rawData[$i]['city'] != 0){
        $tmp = UserCommonModel::getCityById($rawData[$i]['city']);
        $response[$i]['city'] = $tmp['name'];
      }
      
      if ($rawData[$i]['verify'] == null)
        $response[$i]['status'] = 0;
      else if($rawData[$i]['verify'] == 0) 
        $response[$i]['status'] = 2;
      else if($rawData[$i]['verify'] == 1) 
        $response[$i]['status'] = 1;  
    }
    $data['record'] = $response;
    $data['shenaseh'] = $recordAdmin['shenaseh'];
    view::renderPanel('panel/admins/requestedAccesses.php', $data);
  }

  function requestAccessAppointment() {
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $recordAdmin =  AdminsModel::checkExistAdmin($_SESSION['email']);
    $data['record']=$recordAdmin;
    $data['shenaseh'] = $recordAdmin['shenaseh'];
    view::renderPanel('panel/admins/requestAccess.php', $data);
  }

  function requestAccessWorkshop() {
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $recordAdmin =  AdminsModel::checkExistAdmin($_SESSION['email']);
    $data['record']=$recordAdmin;
    $data['shenaseh'] = $recordAdmin['shenaseh'];
    view::renderPanel('panel/admins/requestAccess.php', $data);
  }

  function getAccessTypes() {
    UserBase::LoginCheckPerTask();
    $data = AdminsModel::getAccessType();
    $encryptedData = EncryptionController::encryptAccessTypes($data);
    return $encryptedData;
  }

  function whichInputField(){
    $recordUser = UserBase::LoginCheckPerTask();
    $response = [];
    $dataChanged = [];
    $response['Status'] = true;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $value = $_POST['value'];
    $value = EncryptionController::decryptAccessTypes($value);
    $data = AdminsModel::getAllowedAccess($value);
    $dataChanged['c'] = $data['country'];
    $dataChanged['ci'] = $data['city'];
    $dataChanged['p'] = $data['province'];
    $response['ResultData']['code'] = 200;
    $response['ResultData']['data'] = $dataChanged;
    echo json_encode($response);
    exit;
  }

  function sendRequestedAccess(){
    $recordUser = UserBase::LoginCheckPerTask();
    $user_id = $recordUser['user_id'];
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $value = $_POST['value'];
    $exist = AdminsModel::checkExistAccessType($user_id, $value);
    if ($exist != null){
      $response['Status'] = false;
      $response['Error']['message'] = 'درخواست مشابهی در سامانه وجود دارد. منتظر تایید درخواست باشید.';
      echo json_encode($response);
      exit;
    }
    $decryptedvalue = EncryptionController::decryptAccessTypes($value);
    $data = AdminsModel::getAllowedAccess($decryptedvalue);
    $country = $data['country'];
    $province = $data['province'];
    $city = $data['city'];
    $time = grtCurrentTime();
    if ($country == 1 && $province == 1 && $city == 1){
      AdminsModel::setAccessRequest($user_id, $value, 0, 0, $time);
    }else if($country == 0 && $province == 1 && $city == 1){
      $province1 = $_POST['province'];
      AdminsModel::setAccessRequest($user_id, $value, $province1, 0, $time);
    }else if($country == 0 && $province == 0 && $city == 1){
      $province1 = $_POST['province'];
      $city1 = $_POST['city'];
      AdminsModel::setAccessRequest($user_id, $value, $province1, $city1, $time);
    }
    $response['Status'] = true;
    $response['ResultData']['code'] = 200;
    $response['ResultData']['message'] = 'درخواست شما با موفقیت ثبت گردید';
    echo json_encode($response);
    exit;
  }

  function registerManager() {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $nationalCode = $_POST['nationalCode'];

    $recordUser = UserBase::LoginCheckPerTask();

    RQO('system/upload.php');
    RQO('system/graphic.php');
    $uploadCheckingImage = new UploadFile();

    if (!$uploadCheckingImage->isFileUploading('personalImage')) {
      $response['Error'] = [];
      $response['Error']['code'] = 100;
      $response['Error']['message'] = "لطفا عکس پرسنلی را وارد کنید";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isFileUploading('frontNationalCard')) {
      $response['Error'] = [];
      $response['Error']['code'] = 100;
      $response['Error']['message'] = "لطفا عکس روی کارت ملی را وارد کنید";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isFileUploading('backNationalCard')) {
      $response['Error'] = [];
      $response['Error']['code'] = 100;
      $response['Error']['message'] = "لطفا عکس پشت کارت ملی را وارد کنید";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isFileUploading('firstPageBirthCertification')) {
      $response['Error'] = [];
      $response['Error']['code'] = 100;
      $response['Error']['message'] = "لطفا عکس صفحه اول شناسنامه را وارد کنید";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isAllowedExtension('personalImage', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 101;
      $response['Error']['message'] = "فرمت ارسالی عکس قابل قبول نیست";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isAllowedExtension('frontNationalCard', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 101;
      $response['Error']['message'] = "فرمت ارسالی عکس قابل قبول نیست";
      echo json_encode($response);
      exit;
    }   

    if (!$uploadCheckingImage->isAllowedExtension('backNationalCard', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 101;
      $response['Error']['message'] = "فرمت ارسالی عکس قابل قبول نیست";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isAllowedExtension('firstPageBirthCertification', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 101;
      $response['Error']['message'] = "فرمت ارسالی عکس قابل قبول نیست";
      echo json_encode($response);
      exit;
    }


    if (!$uploadCheckingImage->isAllowedSize('personalImage', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 102;
      $response['Error']['message'] = "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isAllowedSize('frontNationalCard', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 102;
      $response['Error']['message'] = "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isAllowedSize('backNationalCard', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 102;
      $response['Error']['message'] = "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.";
      echo json_encode($response);
      exit;
    }

    if (!$uploadCheckingImage->isAllowedSize('firstPageBirthCertification', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 102;
      $response['Error']['message'] = "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.";
      echo json_encode($response);
      exit;
    }


    $nameAdmin = $_POST['nameManager'];
    $nationalCode = $_POST['nationalCode'];
    $emailAdmin = $_POST['emailManager'];
    $phoneNumber = $_POST['phoneNumber'];
    $ostan = $_POST['ostan'];
    $city = $_POST['city'];
    $location = $ostan . "|" . $city;
    $gender = $_POST['gender'];
    
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $time = grtCurrentTime();
    $shenaseh = uniqid();

    $ext = $uploadCheckingImage->getExtention('personalImage', 'image');
    $perPhotoName = uniqid() . 'PerPic' . $ext;
    $file = $uploadCheckingImage->getFileName('personalImage', 'image');
    $originalPath = "asset/image/manager-pic/per-pic/" . $perPhotoName;
    resizeImage($file, 150, 200, $ext, $originalPath);

    $ext = $uploadCheckingImage->getExtention('frontNationalCard', 'image');
    $frontNationalCardName = uniqid() . 'FNCPic' . $ext;
    $file = $uploadCheckingImage->getFileName('frontNationalCard', 'image');
    $originalPath = "asset/image/manager-pic/f-nc-pic/" . $frontNationalCardName;
    resizeImage($file, 400, 200, $ext, $originalPath);

    $ext = $uploadCheckingImage->getExtention('backNationalCard', 'image');
    $backtNationalCardName = uniqid() . 'BNCPic' . $ext;
    $file = $uploadCheckingImage->getFileName('backNationalCard', 'image');
    $originalPath = "asset/image/manager-pic/b-nc-pic/" . $backtNationalCardName;
    resizeImage($file, 400, 200, $ext, $originalPath);

    $ext = $uploadCheckingImage->getExtention('firstPageBirthCertification', 'image');
    $firstPageBrithCertificaitonCardName = uniqid() . 'FPBCPic' . $ext;
    $file = $uploadCheckingImage->getFileName('firstPageBirthCertification', 'image');
    $originalPath = "asset/image/manager-pic/f-pbc-pic/" . $firstPageBrithCertificaitonCardName;
    resizeImage($file, 400, 200, $ext, $originalPath);

    $recordPsychInCenter = AdminsModel::checkExistAdmin($_SESSION['email']);
    if ($recordPsychInCenter == null) {
      AdminsModel::insertAdmin($nameAdmin, $recordUser['user_id'], $nationalCode, $gender, $emailAdmin, $perPhotoName, $frontNationalCardName, $backtNationalCardName, $firstPageBrithCertificaitonCardName, $phoneNumber, $location, $time, $shenaseh);
      $response['Status'] = true;
      $response['ResultData']['code'] = 200;
      $response['ResultData']['message'] = $shenaseh;
      echo json_encode($response);
      exit;
    }
    else{
      AdminsModel::updateAdmin($nameAdmin, $recordPsychInCenter['admins_id'], $nationalCode, $gender, $emailAdmin, $perPhotoName, $frontNationalCardName, $backtNationalCardName, $firstPageBrithCertificaitonCardName, $phoneNumber, $location, $time, $shenaseh);
      $response['Status'] = true;
      $response['ResultData']['code'] = 201;
      $response['ResultData']['message'] =$recordPsychInCenter['shenaseh'];
      echo json_encode($response);
      exit;
    }

  }

  
  function reportAppointment(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $listCounselingCatModif = array();
    $listSubTopicModif = array();
    $listTreatmentApproachModif = array();
    $listProvinceInReportingModif = array();
    $recordAdmin =  AdminsModel::checkExistAdmin($_SESSION['email']);
    $listCounselingCategories = UserCommonController::listCounselingCategories();
    for($i=0; $i<count($listCounselingCategories); $i++){
      $listCounselingCatModif[$i]['categoryName'] = EncryptionController::decryptText($listCounselingCategories[$i]['name']);
      $listCounselingCatModif[$i]['value'] = EncryptionController::encryptCounselingCategoriesId($listCounselingCategories[$i]['value']);
    }
    $listSubTopic = UserCommonController::listSubTopic();
    for($i=0; $i<count($listSubTopic); $i++){
      $listSubTopicModif[$i]['categoryName'] = EncryptionController::decryptText($listSubTopic[$i]['name']);
      $listSubTopicModif[$i]['value'] = EncryptionController::encryptSubTopicId($listSubTopic[$i]['value']);
    }
    $listTreatmentApproach = UserCommonController::listTreatmentApproach();
    for($i=0; $i<count($listTreatmentApproach); $i++){
      $listTreatmentApproachModif[$i]['categoryName'] = EncryptionController::decryptText($listTreatmentApproach[$i]['name']);
      $listTreatmentApproachModif[$i]['value'] = EncryptionController::encryptTreatmentApproachId($listTreatmentApproach[$i]['value']);
    }
    $listProvinces = MainAdminModel::listProvinceInReporting();
    for($i=0; $i<count($listProvinces); $i++){
      $listProvinceInReportingModif[$i]['categoryName'] = $listProvinces[$i]['name'];
      $listProvinceInReportingModif[$i]['value'] = $listProvinces[$i]['ostan_id'];
    }
    $data['record']=$recordAdmin;
    $data['shenaseh'] = $recordAdmin['shenaseh'];
    $data['listCounselingCategories'] = $listCounselingCatModif;
    $data['listSubTopic'] = $listSubTopicModif;
    $data['listTreatmentApproach'] = $listTreatmentApproachModif;
    $data['listProvinces'] = $listProvinceInReportingModif;
    view::renderPanel('panel/admins/reportAppointment.php', $data);
  }

  function reportWorkshop(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $recordAdmin =  AdminsModel::checkExistAdmin($_SESSION['email']);
    $data['record']=$recordAdmin;
    $data['shenaseh'] = $recordAdmin['shenaseh'];
    view::renderPanel('panel/admins/reportWorkshop.php', $data);
  }

  function searchForReporting(){
    $recordUser = UserBase::LoginCheckPerTask();
    $data[] = array();
    $response = array();
    $locationProvince = explode(',', $_POST['locationProvince']);
    $locationCity = explode(',', $_POST['locationCity']);
    // print_r($locationCity[0]);
    $accessLevel = MainAdminController::findAccessLevel($recordUser['user_id']);
    if ($locationProvince[0] == 'null'){
      $check = 0;
      foreach ($accessLevel as $itme){
        if($itme['country'] == 1 && $itme['province'] == 1 && $itme['city'] == 1){
          $check = 1;
        }
      }
      if ($check == 0){
        $response['Status'] = false;
        $response['Error']['message'] = 'شما دسترسی به کل استان ها ندارید';
        echo json_encode($response);
        exit;
      }
    }else if ($locationCity[0] == 'null'){
      for ($i=0; $i<count($locationProvince); $i++){
        $accessLevel = MainAdminController::findAccessLevel($recordUser['user_id'], $locationProvince[$i]);
        $check = 0;
        foreach ($accessLevel as $itme){
          if($itme['province'] == 1){
            $check = 1;
          }
        }
        if ($check == 0){
          $response['Status'] = false;
          $response['Error']['message'] = 'شما دسترسی به کل شهرستان ها ندارید';
          echo json_encode($response);
          exit;
        }
      }
    }

    if ($_POST['locationProvince'] == 'null'){
      $tmp = MainAdminModel::getAllowedProvincesAndCitiesByUserId($recordUser['user_id']);
      $tmpArray = array();
      foreach ($tmp as $itme){
        array_push($tmpArray, $itme['province']);
      }
      $locationProvince = '(' . implode(',', $tmpArray) . ')';
    }else{
      $locationProvince = '('.$_POST['locationProvince'].')';
    }

    if ($_POST['locationCity'] == 'null'){
      $tmp = MainAdminModel::getAllowedProvincesAndCitiesByUserId($recordUser['user_id']);
      $tmpArray = array();
      foreach ($tmp as $itme){
        array_push($tmpArray, $itme['city']);
      }
      $locationCity = '(' . implode(',', $tmpArray) . ')';
    }else{
      $locationCity = '('.$_POST['locationCity'].')';
    }


    if ($_POST['counselingTopic'] == 'null'){
      $tmp = UserCommonController::listCounselingCategories();
      $tmpArray = array();
      foreach ($tmp as $itme){
        array_push($tmpArray, $itme['value']);
      }
      $counselingTopic = '(' . implode(',', $tmpArray) . ')';
    }else{
      $counselingTopic = '('.$_POST['counselingTopic'].')';
    }

    if ($_POST['subTopic'] == 'null'){
      $tmp = UserCommonController::listSubTopic();
      $tmpArray = array();
      foreach ($tmp as $itme){
        array_push($tmpArray, $itme['value']);
      }
      $subTopic = '(' . implode(',', $tmpArray) . ')';
    }else{
      $subTopic = '('.$_POST['subTopic'].')';
    }

    if ($_POST['treatmentApproach'] == 'null'){
      $tmp = UserCommonController::listTreatmentApproach();
      $tmpArray = array();
      foreach ($tmp as $itme){
        array_push($tmpArray, $itme['value']);
      }
      $treatmentApproach = '(' . implode(',', $tmpArray) . ')';
    }else{
      $treatmentApproach = '('.$_POST['treatmentApproach'].')';
    }

        
    $dateFrom = $_POST['dateFrom'];
    $dateTo = $_POST['dateTo'];
    // print_r($_POST['gender']);
    if ($_POST['gender'] == ''){
      $gender = '(0, 1)';
    }else if ($_POST['gender'] == '0' || $_POST['gender'] == '1'){
      $gender='('.$_POST['gender'].')'; 
    }else{
      $response['Status'] = false;
      $response['Error']['message'] = 'خطایی رخ داده است';
      echo json_encode($response);
      exit;
    }
      // print_r($_POST['whichLocation']);
    if ($_POST['whichLocation'] == '' || explode(',', $_POST['whichLocation']) == array(0, 1) || explode(',', $_POST['whichLocation']) == array(1, 0)){
      $searchResult = AdminsModel::searchForReportingNullLocation($locationProvince, $locationCity, $treatmentApproach, $counselingTopic, $subTopic, $gender, $dateFrom, $dateTo);
    }else if ($_POST['whichLocation'] == '0'){
      $searchResult = AdminsModel::searchForReportingCounselingLocation($locationProvince, $locationCity, $treatmentApproach, $counselingTopic, $subTopic, $gender, $dateFrom, $dateTo);
    }else if ($_POST['whichLocation'] == '1'){
      $searchResult = AdminsModel::searchForReportingPatientLocation($locationProvince, $locationCity, $treatmentApproach, $counselingTopic, $subTopic, $gender, $dateFrom, $dateTo);
    }else{
      $response['Status'] = false;
      $response['Error']['message'] = 'خطایی رخ داده است';
      echo json_encode($response);
      exit;
    }

    // print_r($counselingTopic);
    if ($searchResult != null){
      for ($i=0; $i<count($searchResult); $i++){
        $id = EncryptionController::decryptCounselingCategoriesId($searchResult[$i]['consulting_category_id']);
        $data[$i]['counselingTopicName'] = EncryptionController::decryptText(MainAdminModel::getCouselingCategoryById($id)['name']);
        $id = EncryptionController::decryptTreatmentApproachId($searchResult[$i]['treatment_approach_id']);
        $data[$i]['treatmenApproachName'] = EncryptionController::decryptText(MainAdminModel::getTreatmentApproachById($id)['name']);
        $id = EncryptionController::decryptSubTopicId($searchResult[$i]['sub_topic_id']);
        $data[$i]['subTopicName'] = EncryptionController::decryptText(MainAdminModel::getSubTopicById($id)['topic']);
        $id = $searchResult[$i]['province_id'];
        $data[$i]['provinceName'] = UserCommonModel::getOstanId($id)['name'];
        $id = $searchResult[$i]['city_id'];
        $data[$i]['cityName'] = UserCommonModel::getCityById($id)['name'];
        $id = $searchResult[$i]['gender'];
        if ($id = 0) $data[$i]['gender'] = 'زن';
        else $data[$i]['gender'] = 'مرد';
        $data[$i]['date'] = explode(' ', $searchResult[$i]['start_time'])[0];
 
      }
      $response['ResultData']['data'] = $data;
    }else{
      $response['ResultData']['data'] = null;
    }
    
    $response['ResultData']['code'] = 200;
    $response['Status'] = true;
    echo json_encode($response);
    exit;
    // foreach ($searchData as $key => $value) {
    //   switch ($key) {
    //     case 'treatmentApproach':
    //       $treatmentApproach = $searchData[$key];
    //       break;
    //     case 'subTopic':
    //       $subTopic = $searchData[$key];
    //       break;
    //     case 'counselingTopic/searchBar':
    //         $counselingTopic = $searchData[$key];
    //         break;
    //     case 'location/searchBar':
    //         $location = $searchData[$key];
    //         break;
    //     case 'whichLocation/searchBar':
    //         $whichLocation = $searchData[$key];
    //         break;
    //     case 'dateFrom':
    //         $dateFrom = $searchData[$key];
    //         break;
    //     case 'dateTo':
    //         $dateTo = $searchData[$key];
    //         break;
    //     default:
    //         switch (substr($key, 1)){
    //           case 'treatmentApproach/fix':
    //             array_push($treatmentApproachFix, $searchData[$key]);
    //             break;
    //           case 'subTopic/fix':
    //             array_push($subTopicFix, $searchData[$key]);
    //             break;
    //           case 'counselingTopic/fix':
    //             array_push($counselingTopicFix, $searchData[$key]);
    //             break;
    //           case 'locationTopic/fix':
    //             array_push($locationFix, $searchData[$key]);
    //             break;
    //           case 'whichLocation/fix':
    //             print_r($searchData[$key]);
    //             array_push($whichLocation, $searchData[$key]);
    //             break;
    //         }        
    //     } 
    //   }
      // $searchResult = AdminsModel::searchForReporting($treatmentApproachFix, $subTopicFix, $counselingTopicFix, $locationFix, $whichLocation, $treatmentApproach, $subTopic, $counselingTopic, $location, $dateFrom, $dateTo);
      // print_r($_POST);

    // $value = $searchData['location']['fix'];

  }
  
  function getCity(){
    $recordUser = UserBase::LoginCheckPerTask();
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
      $id = $_POST['id'];
      $accessLevel = MainAdminController::findAccessLevel($recordUser['user_id'], $id);
      foreach ($accessLevel as $itme){
        if ($itme['country'] == 1 || $itme['province'] == 1){
          $response['Status'] = true;
          $results = UserCommonModel::getCity($id);
          foreach ($results as $record) {
            $out['name'] = $record['name'];
            $out['id'] = $record['id'];
            $response['ResultData'][] = $out;
          }
          echo json_encode($response);
          exit;
        }else{
          $response['Status'] = true;
          $results = MainAdminModel::getCityByUserId($recordUser['user_id'], $id);
          foreach ($results as $record) {
            $out['name'] = $record['name'];
            $out['id'] = $record['id'];
            $response['ResultData'][] = $out;
          }
          echo json_encode($response);
          exit;
        }   
      } 
      echo json_encode($response);
      exit;
    }
  }

}
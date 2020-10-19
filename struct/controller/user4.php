<?php


class User4Controller {
  public function __construct() {
    grantUser4();
    require_once("user-base.php");
  }


  function dashboard() {
    $data[] = array();
    $psych = User4Model::checkExistPsych($_SESSION['email']);
    if ($psych != null) {
      $_SESSION['shenaseh'] = $psych['shenaseh'];
      $data['psych'] = 1;
      $data['shenaseh'] = $psych['shenaseh'];
      $data['psychName'] = $psych['psychName'];
      $data['psychNationalCode'] = $psych['psychNationalCode'];
      $data['psychPhoto'] = $psych['psychPhoto'];
      $data['psychEmail'] = $psych['psychEmailAddress'];
      $data['psychLicence'] = $psych['psychLicense'];
      $data['registerTime'] = $psych['registerTime'];
      $data['lastUpdate'] = $psych['updateTime'];
    } else {
      $data['psych'] = 0;
    }
    view::renderPanel('panel/user4/dashboard.php', $data);
  }

  function appointmentStatus(){
    $calendar_id = $_POST['calendar_id'];
    $psychShenaseh = $_SESSION['shenaseh'];
    $response = [];
    $response['Error'] = [];
    $response['ResultData'] = [];
    if($this->isPscychBusy($psychShenaseh) && $_POST['infoRequest']=="false"){
      $response['Status'] = false;
      $response['Message'] = "شما در حال درمان در نوبت دیگری می باشید";
      echo json_encode($response);
      exit;
    }
    $result = $this->getSessionNumberAndSessionSizeByCalendarId($calendar_id);
    if($result['session_size']==null){
      $result = $this->getSessionNumberAndSessionSize($calendar_id);
    }
    $response['Status'] = true;
    $response['ResultData']['sessionNumber'] = $result['session_number'];
    $response['ResultData']['sessionSize'] = $result['session_size'];
    if ($result['session_number']!=0){
      $response['ResultData']['treatmentApproach'] = $result['treatment_approach_id'];
      $response['ResultData']['treatmentResult'] = $result['treatment_result'];
      $response['ResultData']['diagnosis'] = $result['diagnosis'];  
    }
    
    echo json_encode($response);
    exit;
  }

  function startAppointment(){
    $calendar_id = $_POST['calendar_id'];
    $startNewPackage = $_POST['startNewPackage'];
    $result = $this->getSessionNumberAndSessionSize($calendar_id);    
    $sessionNumber = $result['session_number'];
    $result = $this->getUserIdAndCounselingIdAndPsychIdentityByCalendarId($calendar_id);
    if($sessionNumber!=0 && $startNewPackage == "false"){
      $treatmentResult = $_POST['treatment_result'];
      $treatmentApproach_id = $_POST['treatment_approach'];
      $subTopic_id = $_POST['sub_topic'];
      $counselingCategories_id = $_POST['counseling_category'];
      $sessionSize = $_POST['session_size'];  
      $diagnosis = $_POST['diagnosis']; 
      User4Model::updatePackage($result['user_id'], $result['counseling_id'], $result['psychIdentity'], $treatmentApproach_id, $counselingCategories_id, $subTopic_id, $treatmentResult, $diagnosis, $sessionSize);
    }

    if ($startNewPackage == "true"){
      User4Model::startAppointment($calendar_id, 0);
    }else{
      User4Model::startAppointment($calendar_id, $sessionNumber);
    }
    
    // $info_id = $info_id['info_appointment_id'];
    $response = [];
    $response['Status'] = true;
    $response['Error'] = [];
    // $response['ResultData']['info_id'] = $info_id;
    echo json_encode($response);
    exit;
  }

  private function isPscychBusy($psychShenaseh){
    $result = User4Model::isPscychBusy($psychShenaseh);
    if($result[0]['COUNT(1)']==0) return false;
    else return true;
  }

  private function getUserIdAndCounselingIdAndPsychIdentityByCalendarId($calendar_id){
    $response = [];
    $result = UserCommonModel::getUserIdByCalendarId($calendar_id);
    $response['user_id'] = $result['user_id'];
    $result = UserCommonModel::getCounselingIdByCalendarId($calendar_id);
    $response['counseling_id'] = $result['counseling_id'];
    $result = UserCommonModel::getpsychIdentityByCalendarId($calendar_id);
    $response['psychIdentity'] = $result['psychIdentity'];
    return $response;
  }

  function endAppointment(){
    // print_r($_POST);
    // exit;
    $calendar_id = $_POST['calendar_id'];
    $result = $this->getUserIdAndCounselingIdAndPsychIdentityByCalendarId($calendar_id);
    $startNewPackage = $_POST['startNewPackage'];
    if ($startNewPackage=='true'){
      $treatmentResult = $_POST['treatment_result'];
      $treatmentApproach_id = $_POST['treatment_approach'];
      $subTopic_id = $_POST['sub_topic'];
      $counselingCategories_id = $_POST['counseling_category'];
      $sessionSize = $_POST['session_size'];  
      $diagnosis = $_POST['diagnosis'];  
      $package_id = User4Model::startPackage($result['user_id'], $result['counseling_id'], $result['psychIdentity'], $treatmentApproach_id, $counselingCategories_id, $subTopic_id, $treatmentResult, $diagnosis, $sessionSize); 
    }else{
      $treatmentResult = $_POST['treatment_result'];
      $treatmentApproach_id = $_POST['treatment_approach'];
      $subTopic_id = $_POST['sub_topic'];
      $counselingCategories_id = $_POST['counseling_category'];
      $sessionSize = $_POST['session_size'];  
      $diagnosis = $_POST['diagnosis']; 
      User4Model::updatePackage($result['user_id'], $result['counseling_id'], $result['psychIdentity'], $treatmentApproach_id, $counselingCategories_id, $subTopic_id, $treatmentResult, $diagnosis, $sessionSize);
    }
    $tmp = User4Model::getPackageIdAndInfoId($calendar_id, $result['user_id'], $result['counseling_id'], $result['psychIdentity']);
    // print_r($tmp);
    // exit;
    $package_id = $tmp['package_appointment_id'];
    $info_id = $tmp['info_appointment_id'];
    $date = grtCurrentTime(); 
    User4Model::endAppointment($info_id,
                               $package_id,
                               $date
                              );
    $response = [];
    $response['Status'] = true;
    $response['Error'] = [];
    $response['ResultData'] = [];
    echo json_encode($response);
    exit;
  }

  private function getSessionNumberAndSessionSize($calendar_id){
    $result = $this->getUserIdAndCounselingIdAndPsychIdentityByCalendarId($calendar_id);
    $result = User4Model::getSessionNumberAndSessionSizeByUserId($result['user_id'],
                                                                 $result['counseling_id'],
                                                                 $result['psychIdentity']
                                                                 );
                                                                
    if($result==null){
      $result = [];
      $result['session_number'] = 0;
      $result['session_size'] = null;
      return $result;
    }else{
      return $result[0];
    } 
  }
  
  private function getSessionNumberAndSessionSizeByCalendarId($calendar_id){
    $result = User4Model::getSessionNumberAndSessionSizeByCalendarId($calendar_id);
    if($result==null){
      $result = [];
      $result['session_number'] = 0;
      $result['session_size'] = null;
      return $result;
    }else{
      return $result;
    }  
  }
  
  function appointments() {
    $data[] = array();
    $psych = User4Model::checkExistPsych($_SESSION['email']);
    if ($psych != null) {
      $data['psych'] = 1;
      $data['shenaseh'] = $psych['shenaseh'];
      $data['psychName'] = $psych['psychName'];
      $data['psychNationalCode'] = $psych['psychNationalCode'];
      $data['psychPhoto'] = $psych['psychPhoto'];
      $data['psychEmail'] = $psych['psychEmailAddress'];
      $data['psychLicence'] = $psych['psychLicense'];
      $data['registerTime'] = $psych['registerTime'];
      $data['lastUpdate'] = $psych['updateTime'];
    } else {
      $data['psych'] = 0;
    }

    $result = UserCommonModel::getCounselingByPsychId($psych['psych_id']);
    $info='';
    for ($i = 0; $i <= count($result) - 1; $i++) {
      $info=$info .'  <option value=' . $result[$i]['counseil_id'] . '>' . $result[$i]['counselingName'] . '</option>';
    }
    $data['info'] = $info;
    view::renderPanel('panel/user4/appointments.php', $data);
  }

  function todayAppointments() {
    $psychShenaseh = $_SESSION['shenaseh'];
    $counseling_id = $_POST['counseling_id'];
    $date = getCurrentDate(); 
    $result = User4Model::getTodayAppointmentByPsychShenasehAndCounselingId($psychShenaseh, $counseling_id, $date);
    if ($result!=null){
      for ($i=0; $i<count($result); $i++){
        $tmp = $this->getSessionNumberAndSessionSizeByCalendarId($result[$i]['calendar_id']);
        if($tmp['session_size']==null){
          $tmp = $this->getSessionNumberAndSessionSize($result[$i]['calendar_id']);
          }
        $result[$i]['sessionNumber'] = $tmp['session_number'];
        $result[$i]['sessionSize'] = $tmp['session_size'];  
        if ($this->isStartedAppointment($result[$i]['calendar_id'])==true){
          $result[$i]['status'] = "started";
        }else if($this->isFinishedAppointment($result[$i]['calendar_id'])==true){
          $result[$i]['status'] = "finished";
        }else{
          $result[$i]['status'] = "notStarted";
        }

      }
    }
    $response = [];
    $response['Status'] = true;
    $response['Error'] = [];
    $response['ResultData'] = $result;
    echo json_encode($response);
    exit;
  }
  
  private function isStartedAppointment($calendar_id){
    $result = User4Model::isStartedAppointment($calendar_id);
    if($result[0]['COUNT(1)']==0) return false;
    else return true;
  }

  private function isFinishedAppointment($calendar_id){
    $result = User4Model::isFinishedAppointment($calendar_id);
    if($result[0]['COUNT(1)']==0) return false;
    else return true;
  }
  // function getBookedAndCanceledAppoitmentsByPsychId(){
  //   $result = [];
  //   if (isGuest()){
  //     $result['Status'] = false;
  //   }else{
  //     $result['Status'] = true;
  //   }
  //   $shenaseh = $_SESSION['shenaseh'];
  //   $booked = User4Model::getBookedAppoitmentsByPsychId($shenaseh);
  //   $canceled = User4Model::getCanceledAppoitmentsByPsychId($shenaseh);
  //   $result['psychName'] = $response[0]['psychName'];
  //   $result['counselingName'] = $response[0]['counselingName'];
  //   $result['date'] = dateConverter($response[0]['date'], 'enToFa');
  //   $result['startTime'] = stringConverter($response[0]['startTime'], $type='enToFa');
  //   $result['endTime'] = stringConverter($response[0]['endTime'], $type='enToFa');
  //   $result['day'] = $response[0]['day'];
  //   echo json_encode($result);
  //   exit;
  // }

  function informationPsych() {
    $data[] = array();
    $psych= User4Model::checkExistPsych($_SESSION['email']);
    if ($psych!= null) {
      $data['shenaseh'] = $psych['shenaseh'];
    }else{
      $data['shenaseh'] = null;
    }
    view::renderPanel('panel/user4/informationPsych.php', $data);
  }

  function registerPsych() {
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
    if (!$uploadCheckingImage->isAllowedExtension('personalImage', 'image')) {
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
    $CVname = '-';
    $uploadCheckingCV = new UploadFile();
    if ($uploadCheckingCV->isFileUploading('CVFile')) {
      if (!$uploadCheckingCV->isAllowedExtension('CVFile', 'pdf')) {
        $response['Error'] = [];
        $response['Error']['code'] = 103;
        $response['Error']['message'] = "فرمت رزومه ارسالی قابل قبول نیست";
        echo json_encode($response);
        exit;
      }
      if (!$uploadCheckingCV->isAllowedSize('CVFile', 'pdf')) {
        $response['Error'] = [];
        $response['Error']['code'] = 104;
        $response['Error']['message'] = "حجم رزومه ارسالی بیش از ۲ مگابایت است";
        echo json_encode($response);
        exit;
      }
    } else {
      $CVname = '--';
    }
    $namePsych = $_POST['namePsych'];
    $license = $_POST['license'];
    $emailPsych = $_POST['emailPsych'];
    $phonePsych = $_POST['phoneNumber'];
    $ostan = $_POST['ostan'];
    $city = $_POST['city'];
    $location = $ostan . "|" . $city;
    $gender = $_POST['gender'];
    $teacher = $_POST['teacher'];
    $karshenasi = $_POST['karshenasi'];
    $arshad = $_POST['arshad'];
    $doctora = $_POST['doctora'];
    $workshop1 = $_POST['workshop1'];
    $workshop2 = $_POST['workshop2'];
    $workshop3 = $_POST['workshop3'];
    $workshop4 = $_POST['workshop4'];
    $workshop5 = $_POST['workshop5'];
    $article1 = $_POST['article1'];
    $article2 = $_POST['article2'];
    $article3 = $_POST['article3'];
    $article4 = $_POST['article4'];
    $article5 = $_POST['article5'];
    $book1 = $_POST['book1'];
    $book2 = $_POST['book2'];
    $book3 = $_POST['book3'];
    $book4 = $_POST['book4'];
    $book5 = $_POST['book5'];
    $conferance1 = $_POST['conferance1'];
    $conferance2 = $_POST['conferance2'];
    $conferance3 = $_POST['conferance3'];
    $conferance4 = $_POST['conferance4'];
    $conferance5 = $_POST['conferance5'];
    $awardsHonor1 = $_POST['awardsHonor1'];
    $awardsHonor2 = $_POST['awardsHonor2'];
    $awardsHonor3 = $_POST['awardsHonor3'];
    $awardsHonor4 = $_POST['awardsHonor4'];
    $awardsHonor5 = $_POST['awardsHonor5'];

    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $time = grtCurrentTime();
    $shenaseh = uniqid();
    $ext = $uploadCheckingImage->getExtention('personalImage', 'image');
    $photoName = uniqid() . 'PerPic' . $ext;
    $file = $uploadCheckingImage->getFileName('personalImage', 'image');
    $originalPath = "asset/image/per-pic/" . $photoName;
    resizeImage($file, 150, 200, $ext, $originalPath);
    if ($CVname == '-') {
      $extCV = $uploadCheckingCV->getExtention('CVFile', 'pdf');
      $fileNameCV = uniqid() . 'PerPic' . $extCV;
      $fileCV = $uploadCheckingCV->getFileName('CVFile', 'pdf');
      $originalPathCV = "asset/image/per-cv/" . $fileNameCV;
      copy($fileCV, $originalPathCV);
    } else {
      $fileNameCV = '--';
    }
    $recordPsychInCenter = User4Model::checkExistPsych($_SESSION['email']);
    if ($recordPsychInCenter == null) {
      User4Model::insertPsych($namePsych,$recordUser['user_id'], $nationalCode, $gender, $teacher, $emailPsych, $photoName, $fileNameCV, $license, $phonePsych, $location, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time, $shenaseh);
      $response['Status'] = true;
      $response['ResultData']['code'] = 200;
      $response['ResultData']['message'] = $shenaseh;
      echo json_encode($response);
      exit;
    }else{
      User4Model::updatePsych($namePsych,$recordPsychInCenter['psych_id'],$nationalCode,$gender, $teacher, $emailPsych, $photoName,$fileNameCV,$license,$phonePsych,$location,$karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time);
      $response['Status'] = true;
      $response['ResultData']['code'] = 201;
      $response['ResultData']['message'] =$recordPsychInCenter['shenaseh'];
      echo json_encode($response);
      exit;
    }

  }
}

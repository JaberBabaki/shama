<?php
class User1Controller {

  public function __construct() {
    grantUser1();
    require_once("user-base.php");
  }

  public function mainPage(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $patient = User1Model::checkExistUser($_SESSION['email']);
    if ($patient != null) {
      $data['patient'] = 1;
      $data['shenaseh'] = $patient['shenaseh'];
      $data['name'] = $patient['name'];
      $data['photo'] = $patient['photo'];
      $data['email'] = $patient['email'];
      $data['registered_at'] = $patient['registered_at'];
      $data['updated_at'] = $patient['updated_at'];
    } else {
      $data['patient'] = 0;
      $data['email'] = $_SESSION['email'];
    }
    view::render('panel/user1/main.php', $data);
  }

  // $appointment = new Appointment($_SESSION['user_id']);
  // $allAvailable = $appointment->getAllAvailable();
  // $firstAvailable = $appointment->getFirstAvailable();
  // $canceled = $appointment->getCanceled();
  // $data['allAvailable'] = $allAvailable;
  // $data['firstAvailable'] = $firstAvailable;
  // $data['canceled'] = $canceled;
  

  public function allAppointments(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $patient = User1Model::checkExistUser($_SESSION['email']);
    if ($patient != null) {
      $data['patient'] = 1;
      $data['shenaseh'] = $patient['shenaseh'];
      $data['name'] = $patient['name'];
      $data['photo'] = $patient['photo'];
      $data['email'] = $patient['email'];
      $data['registered_at'] = $patient['registered_at'];
      $data['updated_at'] = $patient['updated_at'];
    } else {
      $data['patient'] = 0;
      $data['email'] = $_SESSION['email'];
    }
    RQO('struct/controller/algorithms/user1.php');
    $appointment = new Appointment($_SESSION['user_id']);
    $allAppointments = $appointment->getAllAppoin‍‍‍‍‍‍‍‍‍‍‍‍‍‍tments();
    $data['allAppointments'] = $allAppointments;
    view::render('panel/user1/allAppointments.php', $data);
  }

  public function notCompletedAppointments(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $patient = User1Model::checkExistUser($_SESSION['email']);
    if ($patient != null) {
      $data['patient'] = 1;
      $data['shenaseh'] = $patient['shenaseh'];
      $data['name'] = $patient['name'];
      $data['photo'] = $patient['photo'];
      $data['email'] = $patient['email'];
      $data['registered_at'] = $patient['registered_at'];
      $data['updated_at'] = $patient['updated_at'];
    } else {
      $data['patient'] = 0;
      $data['email'] = $_SESSION['email'];
    }
    RQO('struct/controller/algorithms/user1.php');
    $appointment = new Appointment($_SESSION['user_id']);
    $notCompletedAppointments = $appointment->getNotCompletedAppointments();
    $data['notCompletedAppointments'] = $notCompletedAppointments;
    view::render('panel/user1/notCompletedAppointments.php', $data);
  }

  public function completedAppointments(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $patient = User1Model::checkExistUser($_SESSION['email']);
    if ($patient != null) {
      $data['patient'] = 1;
      $data['shenaseh'] = $patient['shenaseh'];
      $data['name'] = $patient['name'];
      $data['photo'] = $patient['photo'];
      $data['email'] = $patient['email'];
      $data['registered_at'] = $patient['registered_at'];
      $data['updated_at'] = $patient['updated_at'];
    } else {
      $data['patient'] = 0;
      $data['email'] = $_SESSION['email'];
    }
    RQO('struct/controller/algorithms/user1.php');
    $appointment = new Appointment($_SESSION['user_id']);
    $completedAppointments = $appointment->getCompletedAppointments();
    $data['completedAppointments'] = $completedAppointments;
    view::render('panel/user1/completedAppointments.php', $data);
  } 

  public function passedAppointments(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $patient = User1Model::checkExistUser($_SESSION['email']);
    if ($patient != null) {
      $data['patient'] = 1;
      $data['shenaseh'] = $patient['shenaseh'];
      $data['name'] = $patient['name'];
      $data['photo'] = $patient['photo'];
      $data['email'] = $patient['email'];
      $data['registered_at'] = $patient['registered_at'];
      $data['updated_at'] = $patient['updated_at'];
    } else {
      $data['patient'] = 0;
      $data['email'] = $_SESSION['email'];
    }
    RQO('struct/controller/algorithms/user1.php');
    $appointment = new Appointment($_SESSION['user_id']);
    $passedAppointments = $appointment->getPassedAppointments();
    $data['passedAppointments'] = $passedAppointments;
    view::render('panel/user1/passedAppointments.php', $data);
  }

  public function canceledAppointments(){
    $data = [];
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $patient = User1Model::checkExistUser($_SESSION['email']);
    if ($patient != null) {
      $data['patient'] = 1;
      $data['shenaseh'] = $patient['shenaseh'];
      $data['name'] = $patient['name'];
      $data['photo'] = $patient['photo'];
      $data['email'] = $patient['email'];
      $data['registered_at'] = $patient['registered_at'];
      $data['updated_at'] = $patient['updated_at'];
    } else {
      $data['patient'] = 0;
      $data['email'] = $_SESSION['email'];
    }
    RQO('struct/controller/algorithms/user1.php');
    $appointment = new Appointment($_SESSION['user_id']);
    $canceledAppointments = $appointment->getCanceledAppointments();
    $data['canceledAppointments'] = $canceledAppointments;
    view::render('panel/user1/canceledAppointments.php', $data);
  }

  public function allworkshops(){
    $response = [];
    
    view::render('panel/user1/showReserved.php', $response);
  }

  public function notCompletedWorkshops(){
    $response = [];
    
    view::render('panel/user1/showReserved.php', $response);
  }

  public function completedWorkshops(){
    $response = [];
    
    view::render('panel/user1/showReserved.php', $response);
  }

  public function passedWorkshops(){
    $response = [];
    
    view::render('panel/user1/showReserved.php', $response);
  }

  public static function canceledWorkshops(){
    $booked_id = $_POST['booked_id'];
    $cardNum = $_POST['cardNum'];
    $name = $_POST['name'];
    $cardNum = stringConverter($cardNum, $type='faToEn');
    User1Model::cancelWorkshop($booked_id, $cardNum, $name);
    $result = [];
    $result['Status'] = true;
    echo json_encode($result);
    exit;
  }

  public function completePersonalData(){
    UserBase::LoginCheckPerTask();
    $data[] = array();
    $patient = User1Model::checkExistUser($_SESSION['email']);
    if ($patient != null) {
      $data['patient'] = 1;
      $data['shenaseh'] = $patient['shenaseh'];
      $data['name'] = $patient['name'];
      $data['photo'] = $patient['photo'];
      $data['email'] = $patient['email'];
      $data['registered_at'] = $patient['registered_at'];
      $data['updated_at'] = $patient['updated_at'];
    } else {
      $data['patient'] = 0;
      $data['email'] = $_SESSION['email'];
    }
    view::render('panel/user1/completePersonalData.php', $data);
  }

  public static function cancelAppointment(){
    $appointment_id = $_POST['appointment_id'];
    $cardNum = $_POST['cardNum'];
    $name = $_POST['name'];
    $cardNum = stringConverter($cardNum, $type='faToEn');
    User1Model::cancelAppointment($appointment_id, $cardNum, $name);
    $result = [];
    $result['Status'] = true;
    echo json_encode($result);
    exit;
  }


  public static function bookAppointment(){
    $calendar_id = $_POST['calendar_id'];
    $paymentMode = $_POST['paymentMode'];
    $user_id = $_SESSION['user_id'];
    $date = getCurrentDate();
    $time = getCurrentTime();
    // print_r($date);
    // exit;
    User1Model::bookAppointment($calendar_id, $paymentMode, $user_id, $date, $time);
    $response = [];
    $response['Status'] = true;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $response['ResultData']['message'] = "نوبت ثبت شد";
    echo json_encode($response);
    exit;

  }
  
  public static function bookWorkshop(){
    $calendar_id = $_POST['workshop_id'];
    $paymentMode = $_POST['paymentMode'];
    $user_id = $_SESSION['user_id'];
    $date = grtCurrentTime();
    User1Model::bookWorkshop($calendar_id, $paymentMode, $user_id, $date);
    $response = [];
    $response['Status'] = true;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $response['ResultData']['message'] = "نوبت ثبت شد";
    echo json_encode($response);
    exit;

  }

  public static function workshop(){
    $data = [];
    $user_id = $_SESSION['user_id'];
    $records = User1Model::getBookedWorkshopByUsesrId($user_id);
    $data['allBooked'] = $records;
    $records = User1Model::getCanceledWorkshopByUsesrId($user_id);
    $data['canceled'] = $records;
    view::render('panel/user1/workshop.php', $data);
  }

  public static function rateAppointment(){
    $psychRate = $_POST['psychRate'];
    $counselingRate = $_POST['counselingRate'];
    $appointment_id = $_POST['appointment_id'];
    $psychText = $_POST['psychRateText'];
    $counselingText = $_POST['counselingRateText'];
    User1Model::rateAppintment($psychRate, $psychText, $counselingRate, $counselingText, $appointment_id);
    $response = [];
    $response['Status'] = true;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $response['ResultData']['message'] = "نوبت ثبت شد";
    echo json_encode($response);
    exit;
  }

  public static function registerPatient(){
    $recordUser = UserBase::LoginCheckPerTask();
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    // $personalImage = $_POST['personalImage'];
   
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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
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
    $originalPath = "asset/image/per-pic/user1/" . $perPhotoName;
    resizeImage($file, 150, 200, $ext, $originalPath);

    $record = User1Model::checkExistUser($_SESSION['email']);
    if ($record == null) {
      User1Model::insertPatient($name, $recordUser['user_id'], $gender, $email, $perPhotoName, $phone, $state, $city, $time, $shenaseh);
      $response['Status'] = true;
      $response['ResultData']['code'] = 200;
      $response['ResultData']['message'] = $shenaseh;
      echo json_encode($response);
      exit;
    }
    else{
      User1Model::updatePatient($name, $record['patient_id'], $gender, $email, $perPhotoName, $phone, $state, $city, $time);
      $response['Status'] = true;
      $response['ResultData']['code'] = 201;
      $response['ResultData']['message'] =$record['shenaseh'];
      echo json_encode($response);
      exit;
    }

  }
  

}
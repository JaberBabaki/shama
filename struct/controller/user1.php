<?php
class User1Controller {

  public function __construct() {
    grantUser1();
    require_once("user-base.php");
  }

  public function mainPage(){
    $data = [];
    RQO('struct/controller/algorithms/user1.php');
    $appointment = new Appointment($_SESSION['user_id']);
    $allAvailable = $appointment->getAllAvailable();
    $firstAvailable = $appointment->getFirstAvailable();
    $canceled = $appointment->getCanceled();
    $data['allAvailable'] = $allAvailable;
    $data['firstAvailable'] = $firstAvailable;
    $data['canceled'] = $canceled;
    view::render('panel/user1/main.php', $data);
  }

  public function showReserved(){
    $response = [];

    view::render('panel/user1/showReserved.php', $response);
  }

  public function completePersonalData(){
    $response = [];
    
    view::render('panel/user1/completePersonalData.php', $response);
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

  public static function cancelWorkshop(){
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
  public static function bookAppointment(){
    $calendar_id = $_POST['calendar_id'];
    $paymentMode = $_POST['paymentMode'];
    $user_id = $_SESSION['user_id'];
    $date = getCurrentDate();
    $time = getCurrentTime();
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



}
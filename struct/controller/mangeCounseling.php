<?php


class MangeCounselingController {
  public function __construct() {
    require_once("user-base.php");
  }

  function homePageCounseling($params) {
    $data[] = array();
    $recordCounsiling = User3Model::getPictureCoinsiling($params);
    $data['picture'] = $recordCounsiling['counselingPhoto'];
    $data['name'] = $recordCounsiling['counselingName'];
    $data['params'] = $params;
    view::renderCounselingPage('manageCounseling/homePage.php', $data);
  }

  function aboutMe($params) {
    $data[] = array();
    $recordCounsiling = User3Model::getDataAboutMe($params);
    $data['counseling'] = 1;
    $data['shenaseh'] = $recordCounsiling['shenaseh'];
    $data['counselingName'] = $recordCounsiling['counselingName'];
    $data['counselingPhoto'] = $recordCounsiling['counselingPhoto'];
    $data['founderName'] = $recordCounsiling['founderName'];
    $data['expairDate'] = $recordCounsiling['expairDate'];
    $data['registerTime'] = $recordCounsiling['registerTime'];
    $data['lastUpdate'] = $recordCounsiling['lastUpdate'];
    $data['params'] = $params;
    view::renderCounselingPage('manageCounseling/aboutMe.php', $data);
  }

  function turns($params) {
    $data[] = array();
    $recordPsych = User3Model::listPsychInCenter($params);
    for ($i=0; $i<count($recordPsych); $i++){
        // joint query in select
        $data['psychInfo'][$i] = User3Model::getPsychInfoByShenas($recordPsych[$i]['psychShenaseh']);
    }
    $data['params'] = $params;
    view::renderCounselingPage('manageCounseling/queue.php', $data);
  }


  function detailPsych($shenaseh, $conceil_id) {
    $_SESSION['psychShenaseh'] = $shenaseh;
    $_SESSION['conceilling_id'] = $conceil_id;
    $data[] = array();
    RQO('struct/controller/algorithms/user3.php');
    $appointment = new Appointment($shenaseh, $conceil_id);
    $nextAvailable = $appointment->nextAvailable();
    $firstAvailable = $appointment->firstAvailable();
    $secondAvailable = $appointment->secondAvailable();
    $data['nextAvailable'] = $nextAvailable;
    $data['firstAvailableArray'] = $firstAvailable;
    $data['secondAvailableArray'] = $secondAvailable;
    // $data['counseling'] = 1;
    // $data['shenaseh'] = $recordPsych['shenaseh'];
    // $data['counselingName'] = $recordPsych['counselingName'];
    // $data['counselingPhoto'] = $recordPsych['counselingPhoto'];
    // $data['founderName'] = $recordPsych['founderName'];
    // $data['expairDate'] = $recordPsych['expairDate'];
    // $data['registerTime'] = $recordPsych['registerTime'];
    // $data['lastUpdate'] = $recordPsych['lastUpdate'];
    $data['conselling_id'] = $conceil_id;
    $data['params'] = $conceil_id;
    view::renderCounselingPage('manageCounseling/detailPsych.php', $data);
  }

  
  function bookAppointment(){
    $calendar_id = $_POST['calendar_id'];
    $paymentMode = $_POST['paymentMode'];
    $user_id = $_SESSION['user_id'];
    User3Model::bookAppointment($calendar_id, $paymentMode, $user_id);
    $response = [];
    $response['Status'] = true;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $response['ResultData']['message'] = "نوبت ثبت شد";
    echo json_encode($response);
    exit;

  }

  function appointmentInfo(){
    $result = [];
    if (!isGuest()){
      $result['Status'] = true;
      $result['register'] = true;  
      $result['email'] = $_SESSION['email'];
    }else{
      $result['Status'] = true;
      $result['register'] = false;
    }
    $calendar_id = $_POST['calendar_id'];
    $response = User3Model::getPsychAndCounsellingByCalendarId($calendar_id);
    $result['psychName'] = $response[0]['psychName'];
    $result['counselingName'] = $response[0]['counselingName'];
    $result['date'] = dateConverter($response[0]['date'], 'enToFa');
    $result['startTime'] = stringConverter($response[0]['startTime'], $type='enToFa');
    $result['endTime'] = stringConverter($response[0]['endTime'], $type='enToFa');
    $result['day'] = $response[0]['day'];
    echo json_encode($result);
    exit;
  }
}

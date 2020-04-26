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

  function workshops($counseling_id){
    $data[] = array();
    $records = UserCommonModel::listWorkshopsByCounselingId($counseling_id);
    $data['records'] = $records;
    $data['params'] = $counseling_id;
    view::renderCounselingPage('manageCounseling/workshops.php', $data);
  }

  function detailWorkshop($counseling_id, $workshop_id)
  {
    RQO('struct/controller/algorithms/userCommon.php');
    $data = [];
    $record = UserCommonModel::listWorkshopsByCounselingIdAndWorkshopId($counseling_id, $workshop_id);
    // print_r($record);
    // exit;
    $data['params'] = $counseling_id;
    if ($record['booked_number']<$record['capacity_workshop']){
      $data['filled'] = false;
      $data['remainedCapacity'] = $record['capacity_workshop'] - $record['booked_number'];
      $data['remainedCapacity'] = stringConverter($data['remainedCapacity'], 'enToFa');
      $data['workshop_id'] = $record['workshop_id'];
      $now = new DateTime();
      $now->modify('+20 minute');
      $dateFirstRegister = new DateTime($record['start_date_register_workhop'].$record['start_time_register_workshop']);
      $dateEndRegister = new DateTime($record['end_date_register_workshop'].$record['end_time_register_workshop']);
      // print_r($dateFirstRegister);
      // print_r($dateEndRegister);
      // print_r($now);
      // exit;
      if($dateFirstRegister<$now  && $now<$dateEndRegister){
        $data['passed'] = false;
        $diff = $dateEndRegister->diff($now);
        switch ($diff->days){
            case 0:
                $data['dateRegister'] =  ' امروز '.stringConverter($dateEndRegister->format('H:i'), 'enToFa').''.userCommonAlgorithm::pmAm($dateEndRegister->format('H:i'));
                break;
            case 1:
                $data['dateRegister'] = ' فردا '.stringConverter($dateEndRegister->format('H:i'), 'enToFa').''.userCommonAlgorithm::pmAm($dateEndRegister->format('H:i'));
                break;
            case 2:
                $data['dateRegister'] = ' پس فردا '.stringConverter($dateEndRegister->format('H:i'), 'enToFa').''.userCommonAlgorithm::pmAm($dateEndRegister->format('H:i'));
                break;
            default:
                $data['dateRegister'] = stringConverter($diff->days, 'enToFa').'   روز دیگر ساعت   '.stringConverter($dateEndRegister->format('H:i'), 'enToFa').userCommonAlgorithm::pmAm($dateEndRegister->format('H:i'));
                break;
        }
      $data['dateStart'] = dateConverter($record['start_date_workhop'], 'enToFa');
    
        
      }else{
        $data['passed'] = true;
      }
    }else{
      $data['filled'] = true;
    }
    view::renderCounselingPage('manageCounseling/detailWorkshop.php', $data);
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

  


  function calendarInfo(){
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

  function workshopInfo(){
    $result = [];
    if (!isGuest()){
      $result['Status'] = true;
      $result['register'] = true;  
      $result['email'] = $_SESSION['email'];
    }else{
      $result['Status'] = true;
      $result['register'] = false;
    }
    $workshop_id = $_POST['workshop_id'];
    $response = User3Model::getWorkshopInfoByWorkshopId($workshop_id);
    // print_r($response['course_name']);
    // exit;
    $result['courseName'] = $response['course_name'];
    $result['teacherName'] = $response['teacher_name'];
    $result['startDateRegister'] = dateConverter($response['start_date_register_workhop'], 'enToFa');
    $result['endDateRegister'] = dateConverter($response['end_date_register_workshop'], $type='enToFa');
    $result['startTimeRegister'] = stringConverter($response['start_time_register_workshop'], 'enToFa');
    $result['endTimeRegister'] = stringConverter($response['end_time_register_workshop'], $type='enToFa');
    $result['startDate'] = dateConverter($response['start_date_workhop'], 'enToFa');
    $result['endDate'] = dateConverter($response['end_date_workshop'], $type='enToFa');
    $result['startTime'] = stringConverter($response['start_time_workshop'], 'enToFa');
    $result['endTime'] = stringConverter($response['end_time_workshop'], $type='enToFa');
    
    echo json_encode($result);
    exit;
  }

  function bookedWorkshopInfo(){
    $result = [];
    if (!isGuest()){
      $result['Status'] = true;
      $result['register'] = true;  
      $result['email'] = $_SESSION['email'];
    }else{
      $result['Status'] = true;
      $result['register'] = false;
    }
    $booked_id = $_POST['booked_id'];
    $response = User3Model::getBooekedAppointmentByBookedId($booked_id);
    // print_r($response['course_name']);
    // exit;
    $result['courseName'] = $response['course_name'];
    $result['teacherName'] = $response['teacher_name'];
    $result['startDateRegister'] = dateConverter($response['start_date_register_workhop'], 'enToFa');
    $result['endDateRegister'] = dateConverter($response['end_date_register_workshop'], $type='enToFa');
    $result['startTimeRegister'] = stringConverter($response['start_time_register_workshop'], 'enToFa');
    $result['endTimeRegister'] = stringConverter($response['end_time_register_workshop'], $type='enToFa');
    $result['startDate'] = dateConverter($response['start_date_workhop'], 'enToFa');
    $result['endDate'] = dateConverter($response['end_date_workshop'], $type='enToFa');
    $result['startTime'] = stringConverter($response['start_time_workshop'], 'enToFa');
    $result['endTime'] = stringConverter($response['end_time_workshop'], $type='enToFa');
    $result['paymentMode'] = $response['booked_workshop_payment_mode'];
    
    echo json_encode($result);
    exit;
  }

}

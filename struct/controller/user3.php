<?php


class User3Controller {
  public function __construct() {
    grantUser3();
    require_once("user-base.php");
  }


  function dashboard() {
    $data[] = array();
    $counseling = User3Model::checkExistCounseling($_SESSION['email']);
    $founder = User3Model::checkExistFounderCounseling($_SESSION['email']);
    if ($counseling != null) {
      $founder = User3Model::getSummaryData($counseling['user_id']);
      $data['counseling'] = 1;
      $data['shenaseh'] = $counseling['shenaseh'];
      $data['counselingName'] = $founder['counselingName'];
      $data['counselingPhoto'] = $founder['counselingPhoto'];
      $data['founderName'] = $founder['founderName'];
      $data['expairDate'] = $founder['expairDate'];
      $data['registerTime'] = $founder['registerTime'];
      $data['lastUpdate'] = $founder['lastUpdate'];
    } else {
      $data['counseling'] = 0;
    }
    if ($founder != null) {
      $data['founder'] = 1;
    } else {
      $data['founder'] = 0;
    }
    view::renderPanel('panel/user3/dashboard.php', $data);
  }

  function informationCenter() {
    $data[] = array();
    $counseling = User3Model::checkExistCounseling($_SESSION['email']);
    $founder = User3Model::checkExistFounderCounseling($_SESSION['email']);
    if ($counseling == null) {
      $data['counseling'] = 0;
    } else {
      $data['counseling'] = 1;
      $data['shenaseh'] = $counseling['shenaseh'];
    }
    if ($founder == null) {
      $data['founder'] = 0;
    } else {
      $data['founder'] = 1;
    }
    view::renderPanel('panel/user3/informationCenter.php', $data);
  }

  function workshop() {
    $data[] = array();
    view::renderPanel('panel/user3/workshop.php', $data);
  }

  function informationPsych() {
    $data[] = array();
    view::renderPanel('panel/user3/informationPsych.php', $data);
  }

  function checkExistInfoCounseling($return = false, $viewFile='') {
    $recordCunseling = User3Model::checkExistCounseling($_SESSION['email']);
    $counsilingId = $recordCunseling['conceil_id'];
    if ($recordCunseling == null) {
      if ($return == false) {
        $response['Status'] = false;
        $response['Error'] = [];
        $response['Error']['code'] = 401;
        $response['Error']['message'] = "لطفا ابتدا اطلاعات مرکز مشاوره را ثبت نمایید";
        echo json_encode($response);
        exit;
      } else {
        $data['params'] = $counsilingId;
        view::renderPanel($viewFile, $data);
        exit;
        // return $counsilingId;
      }
    } else {
      return $counsilingId;
    }
  }

  function registerCounseling() {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];

    RQO('system/upload.php');
    RQO('system/graphic.php');
    $uploadCheckingImage = new UploadFile();
    if (!$uploadCheckingImage->isFileUploading('imageBrand')) {
      $response['Error'] = [];
      $response['Error']['code'] = 100;
      $response['Error']['message'] = "لطفا عکس برند را وارد کنید";
      echo json_encode($response);
      exit;
    }
    if (!$uploadCheckingImage->isAllowedExtension('imageBrand', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 101;
      $response['Error']['message'] = "فرمت ارسالی عکس قابل قبول نیست";
      echo json_encode($response);
      exit;
    }
    if (!$uploadCheckingImage->isAllowedSize('imageBrand', 'image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 102;
      $response['Error']['message'] = "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.";
      echo json_encode($response);
      exit;
    }
    $counselingName = $_POST['counselingName'];
    $ostanData = $_POST['ostan'];
    $cityData = $_POST['city'];
    $location = $ostanData . '|' . $cityData;
    $establishDate = $_POST['establishDate'];
    $expairDateCenter = $_POST['expairDateCenter'];
    $fieldActivity = $_POST['fieldActivity'];
    $accountNumber = $_POST['accountNumber'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $moreExplain = $_POST['moreExplain'];

    $record = UserCommonModel::checkExist($_SESSION['email']);
    if ($record == null) {
      session_destroy();
      $data[] = array();
      $data['text1'] = 'خطا';
      $data['text2'] = 'شما وارد سامانه نشده اید';
      $data['text3'] = 'لطفا دوباره تلاش کنید';
      $data['link'] = 'login';
      $data['btnLable'] = 'تلاش مجدد';
      message('fail', $data, true);
    } else {
      $check = User3Model::checkExistCounseling($_SESSION['email']);
      if ($check == null) {
        $response = [];
        $response['Status'] = false;
        $response['Error'] = [];
        $response['ResultData'] = [];
        $shenaseh = uniqid();
        $time = grtCurrentTime();

        $ext = $uploadCheckingImage->getExtention('imageBrand', 'image');
        $fileName = uniqid() . 'BranPic' . $record['user_id'] . $ext;
        $file = $uploadCheckingImage->getFileName('imageBrand', 'image');
        $originalPath = "asset/image/bran-pic/" . $fileName;
        resizeImage($file, 200, 200, $ext, $originalPath);

        User3Model::insertCounselingCenter($record['user_id'], $counselingName, $fileName, $location, $establishDate, $expairDateCenter, $fieldActivity, $accountNumber, $phoneNumber, $address, $moreExplain, $shenaseh, $time);
        $getData = User3Model::checkExistCounseling($_SESSION['email']);
        $response['Status'] = true;
        $response['ResultData']['code'] = 200;
        $response['ResultData']['message'] = $getData['shenaseh'];
        echo json_encode($response);
        exit;
      } else {
        $time = grtCurrentTime();
        $ext = $uploadCheckingImage->getExtention('imageBrand', 'image');
        $fileName = uniqid() . 'BranPic' . $record['user_id'] . $ext;
        $file = $uploadCheckingImage->getFileName('imageBrand', 'image');
        $originalPath = "asset/image/bran-pic/" . $fileName;
        resizeImage($file, 200, 200, $ext, $originalPath);

        User3Model::updateCounselingCenter($check['conceil_id'], $counselingName, $fileName, $location, $establishDate, $expairDateCenter, $fieldActivity, $accountNumber, $phoneNumber, $address, $moreExplain, $time);
        $response['Status'] = true;
        $response['ResultData']['code'] = 201;
        $response['ResultData']['message'] = $check['shenaseh'];
        echo json_encode($response);
        exit;
      }
    }

  }

  function registerWorkShop() {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $nameCourse = $_POST['nameCourse'];
    $nameTeacher = $_POST['nameTeacher'];
    $ostanData = $_POST['ostan'];
    $cityData = $_POST['city'];
    $location = $ostanData . '|' . $cityData;
    $durationCourse = $_POST['durationCourse'];
    $feeCourse = $_POST['feeCourse'];
    $startRegisterTime = $_POST['startRegisterTime'];
    $startRegisterDate = $_POST['startRegisterDate'];
    $endRegisterTime = $_POST['endRegisterTime'];
    $endRegisterDate = $_POST['endRegisterDate'];
    $capacityCourse = $_POST['capacityCourse'];
    $startTime = $_POST['startTime'];
    $startDate = $_POST['startDate'];
    $endTime = $_POST['endTime'];
    $endDate = $_POST['endDate'];
    $moreExplain = $_POST['moreExplain'];
    $active = $_POST['active'];
    $record = UserCommonModel::checkExist($_SESSION['email']);
    if ($record == null) {
      session_destroy();
      $data[] = array();
      $data['text1'] = 'خطا';
      $data['text2'] = 'شما وارد سامانه نشده اید';
      $data['text3'] = 'لطفا دوباره تلاش کنید';
      $data['link'] = 'login';
      $data['btnLable'] = 'تلاش مجدد';
      message('fail', $data, true);
    } else {
        $response = [];
        $response['Status'] = false;
        $response['Error'] = [];
        $response['ResultData'] = [];
        $time = grtCurrentTime();
        $user_id = $_SESSION['user_id'];
        User3Model::insertWorkshop($user_id, $nameCourse, $nameTeacher, $location, $durationCourse, $feeCourse, $startRegisterTime, $startRegisterDate, $endRegisterTime, $endRegisterDate, $capacityCourse, $startTime, $startDate, $endTime, $endDate, $moreExplain, $active);
        $response['Status'] = true;
        $response['ResultData']['code'] = 200;
        $response['ResultData']['message'] = [];
        echo json_encode($response);
        exit;
      } 
  }


  function registerFounder() {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];


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

    $nameFounder = $_POST['nameFounder'];
    $emailFounder = $_POST['emailFounder'];
    $phoneFounder = $_POST['phoneNumber'];
    $ostan = $_POST['ostan'];
    $city = $_POST['city'];
    $location = $ostan . "|" . $city;
    $gender = $_POST['gender'];
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

    $record = UserCommonModel::checkExist($_SESSION['email']);
    if ($record == null) {
      session_destroy();
      $data[] = array();
      $data['text1'] = 'خطا';
      $data['text2'] = 'شما وارد سامانه نشده اید';
      $data['text3'] = 'لطفا دوباره تلاش کنید';
      $data['link'] = 'login';
      $data['btnLable'] = 'تلاش مجدد';
      message('fail', $data, true);
    } else {
      $check = User3Model::checkExistFounderCounseling($_SESSION['email']);
      if ($check == null) {
        $response = [];
        $response['Status'] = false;
        $response['Error'] = [];
        $response['ResultData'] = [];
        $time = grtCurrentTime();

        $ext = $uploadCheckingImage->getExtention('personalImage', 'image');
        $fileName = uniqid() . 'PerPic' . $record['user_id'] . $ext;
        $file = $uploadCheckingImage->getFileName('personalImage', 'image');
        $originalPath = "asset/image/per-pic/" . $fileName;
        resizeImage($file, 150, 200, $ext, $originalPath);

        if ($CVname == '-') {
          $extCV = $uploadCheckingCV->getExtention('CVFile', 'pdf');
          $fileNameCV = uniqid() . 'PerPic' . $record['user_id'] . $extCV;
          $fileCV = $uploadCheckingCV->getFileName('CVFile', 'pdf');
          $originalPathCV = "asset/image/per-cv/" . $fileNameCV;
          copy($fileCV, $originalPathCV);
        } else {
          $fileNameCV = '--';
        }

        User3Model::insertFounderCounseling($record['user_id'], $nameFounder, $location, $gender, $emailFounder, $fileName, $fileNameCV, $phoneFounder, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time);

        $response['Status'] = true;
        $response['ResultData']['code'] = 200;
        echo json_encode($response);
        exit;
      } else {
        $time = grtCurrentTime();

        $ext = $uploadCheckingImage->getExtention('personalImage', 'image');
        $fileName = uniqid() . 'PerPic' . $record['user_id'] . $ext;
        $file = $uploadCheckingImage->getFileName('personalImage', 'image');
        $originalPath = "asset/image/per-pic/" . $fileName;
        resizeImage($file, 150, 200, $ext, $originalPath);

        if ($CVname == '-') {
          $extCV = $uploadCheckingCV->getExtention('CVFile', 'pdf');
          $fileNameCV = uniqid() . 'PerPic' . $record['user_id'] . $extCV;
          $fileCV = $uploadCheckingCV->getFileName('CVFile', 'pdf');
          $originalPathCV = "asset/image/per-cv/" . $fileNameCV;
          copy($fileCV, $originalPathCV);
        } else {
          $fileNameCV = '--';
        }

        User3Model::updateFounderCounseling($check['founder_id'], $nameFounder, $location, $gender, $emailFounder, $fileName, $fileNameCV, $phoneFounder, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time);
        $response['Status'] = true;
        $response['ResultData']['code'] = 201;
        echo json_encode($response);
        exit;

      }
    }
  }


  function registerPsych() {
    if (!isset($_POST['shenaseh']) && !isset($_POST['id'])) {
      $data[] = array();
      view::renderPanel('panel/user3/registerPsych.php', $data);
    } elseif (isset($_POST['id'])) {
      $response = [];
      $response['Status'] = false;
      $response['Error'] = [];
      $response['ResultData'] = [];
      $shenaseh = $_POST['id'];
      $recordUser = UserBase::LoginCheckPerTask();
      $counsilingId = $this->checkExistInfoCounseling(false);
      $recordPsychInCenter = User3Model::checkExistPsychInCenter($counsilingId, $shenaseh);

      if ($recordPsychInCenter != null) {
        $response['Status'] = false;
        $response['Error'] = [];
        $response['Error']['code'] = 402;
        $response['Error']['message'] = "پیشتر اطلاعات درمانگر در مرکز مشاوره ثبت شده است. جهت ویرایش اطلاعات گزینه لیست درمانگر های این مرکز را انتخاب کنید";
        echo json_encode($response);
        exit;
      }

      User3Model::insertPsychInCenter($counsilingId, $shenaseh);
      $response['Status'] = true;
      $response['Error'] = [];
      $response['ResultData']['code'] = 201;
      $response['ResultData']['message'] = "اطلاعات درمانگر با موفقیت ثبت شد";
      echo json_encode($response);
      exit;
      //dump($recordPsych,true);

    } else {
      $response = [];
      $response['Status'] = false;
      $response['Error'] = [];
      $response['ResultData'] = [];
      $shenaseh = $_POST['shenaseh'];

      $recordUser = UserBase::LoginCheckPerTask();
      $counsilingId = $this->checkExistInfoCounseling(false);

      $recordPsychInCenter = User3Model::checkExistPsychInCenter($counsilingId, $shenaseh);

      if ($recordPsychInCenter != null) {
        $response['Status'] = false;
        $response['Error'] = [];
        $response['Error']['code'] = 402;
        $response['Error']['message'] = "پیشتر اطلاعات درمانگر در مرکز مشاوره ثبت شده است. جهت ویرایش اطلاعات گزینه لیست درمانگر های این مرکز را انتخاب کنید";
        echo json_encode($response);
        exit;
      }

      $recordPsych = User4Model::getDataShenaseh($shenaseh);
      //dump($recordPsych,true);
      $response['Status'] = false;
      $response['Error'] = [];
      $response['ResultData']['code'] = 200;
      $response['ResultData']['name'] = $recordPsych['psychName'];
      $response['ResultData']['email'] = $recordPsych['psychEmailAddress'];
      $response['ResultData']['phone'] = $recordPsych['psychPhone'];
      $location = explode("|", $recordPsych['psychLocation']);
      //dump($location,true);
      $response['ResultData']['city'] = UserCommonModel::getCityById($location[0])['name'];
      $response['ResultData']['ostan'] = UserCommonModel::getOstanId($location[1])['name'];
      $response['ResultData']['gender'] = $recordPsych['psychGender'];
      $response['ResultData']['photo'] = $recordPsych['psychPhoto'];

      //$response['ResultData']['cv'] = $recordPsych['psychCV'];

      $karshenasi = str_replace('|', '*', $recordPsych['psychUndergraduate']);
      $response['ResultData']['karshenasi'] = $karshenasi;

      $masters = str_replace('|', '*', $recordPsych['psychMasters']);
      $response['ResultData']['masters'] = $masters;

      $doctorate = str_replace('|', '*', $recordPsych['psychDoctorate']);
      $response['ResultData']['doctorate'] = $doctorate;

      $workshopsCourses_1 = str_replace('|', '*', $recordPsych['psychWorkshopsCourses_1']);
      $response['ResultData']['workshopsCourses_1'] = $workshopsCourses_1;

      $workshopsCourses_2 = str_replace('|', '*', $recordPsych['psychWorkshopsCourses_2']);
      $response['ResultData']['workshopsCourses_2'] = $workshopsCourses_2;

      $workshopsCourses_3 = str_replace('|', '*', $recordPsych['psychWorkshopsCourses_3']);
      $response['ResultData']['workshopsCourses_3'] = $workshopsCourses_3;

      $workshopsCourses_4 = str_replace('|', '*', $recordPsych['psychWorkshopsCourses_4']);
      $response['ResultData']['workshopsCourses_4'] = $workshopsCourses_4;

      $workshopsCourses_5 = str_replace('|', '*', $recordPsych['psychWorkshopsCourses_5']);
      $response['ResultData']['workshopsCourses_5'] = $workshopsCourses_5;

      $articles_1 = str_replace('|', '*', $recordPsych['psychArticles_1']);
      $response['ResultData']['articles_1'] = $articles_1;

      $articles_2 = str_replace('|', '*', $recordPsych['psychArticles_2']);
      $response['ResultData']['articles_2'] = $articles_2;

      $articles_3 = str_replace('|', '*', $recordPsych['psychArticles_3']);
      $response['ResultData']['articles_3'] = $articles_3;

      $articles_4 = str_replace('|', '*', $recordPsych['psychArticles_4']);
      $response['ResultData']['articles_4'] = $articles_4;

      $articles_5 = str_replace('|', '*', $recordPsych['psychArticles_5']);
      $response['ResultData']['articles_5'] = $articles_5;

      $books_1 = str_replace('|', '*', $recordPsych['psychBooks_1']);
      $response['ResultData']['books_1'] = $books_1;

      $books_2 = str_replace('|', '*', $recordPsych['psychBooks_2']);
      $response['ResultData']['books_2'] = $books_2;

      $books_3 = str_replace('|', '*', $recordPsych['psychBooks_3']);
      $response['ResultData']['books_3'] = $books_3;

      $books_4 = str_replace('|', '*', $recordPsych['psychBooks_4']);
      $response['ResultData']['books_4'] = $books_4;

      $books_5 = str_replace('|', '*', $recordPsych['psychBooks_5']);
      $response['ResultData']['books_5'] = $books_5;

      $conferences_1 = str_replace('|', '*', $recordPsych['psychConferences_1']);
      $response['ResultData']['conferences_1'] = $conferences_1;

      $conferences_2 = str_replace('|', '*', $recordPsych['psychConferences_2']);
      $response['ResultData']['conferences_2'] = $conferences_2;

      $conferences_3 = str_replace('|', '*', $recordPsych['psychConferences_3']);
      $response['ResultData']['conferences_3'] = $conferences_3;

      $conferences_4 = str_replace('|', '*', $recordPsych['psychConferences_4']);
      $response['ResultData']['conferences_4'] = $conferences_4;

      $conferences_5 = str_replace('|', '*', $recordPsych['psychConferences_5']);
      $response['ResultData']['conferences_5'] = $conferences_5;

      $awardsHonors_1 = str_replace('|', '*', $recordPsych['psychAwardsHonors_1']);
      $response['ResultData']['awardsHonors_1'] = $awardsHonors_1;

      $awardsHonors_2 = str_replace('|', '*', $recordPsych['psychAwardsHonors_2']);
      $response['ResultData']['awardsHonors_2'] = $awardsHonors_2;

      $awardsHonors_3 = str_replace('|', '*', $recordPsych['psychAwardsHonors_3']);
      $response['ResultData']['awardsHonors_3'] = $awardsHonors_3;

      $awardsHonors_4 = str_replace('|', '*', $recordPsych['psychAwardsHonors_4']);
      $response['ResultData']['awardsHonors_4'] = $awardsHonors_4;

      $awardsHonors_5 = str_replace('|', '*', $recordPsych['psychAwardsHonors_5']);
      $response['ResultData']['awardsHonors_5'] = $awardsHonors_5;

      echo json_encode($response);
      exit;
    }

  }

  function listPsych() {
    $recordUser = UserBase::LoginCheckPerTask();
    $counsilingId = $this->checkExistInfoCounseling(true, 'panel/user3/listInfoPsych.php');
    $data[] = array();
    $recordPsych = User3Model::listPsychInCenter($counsilingId);
    for ($i=0; $i<count($recordPsych); $i++){
        // joint query in select
        $data['psychInfo'][$i] = User3Model::getPsychInfoByShenas($recordPsych[$i]['psychShenaseh']);
    }
    $data['params'] = $counsilingId;
    view::renderPanel('panel/user3/listInfoPsych.php', $data);

  }

  function calenderPsych() {
    $data[] = array();
    $counsilingId = $this->checkExistInfoCounseling(true, 'panel/user3/calenderPsych.php');
    $result = User3Model::listPsychInCenter($counsilingId);
    $info='';
    if ($result!=null){
      for ($i = 0; $i <= count($result) - 1; $i++) {
        $info=$info .'  <option value=' . $result[$i]['shenaseh'] . '>' . $result[$i]['psychName'] . '</option>';
      }
      $data['info']=$info;
    }
    $data['regPsychs'] = User3Model::listCalenderInCounselling($counsilingId);
    $booked = User3Model::listBookedAppointmentBycouselingId($counsilingId);
    if ($data['regPsychs']!=null){
      if ($booked == null){
        for ($i=0; $i<count($data['regPsychs']); $i++){
          $data['regPsychs'][$i]['appointment'] = 0;
        }
      }
      else{
        for ($i=0; $i<count($data['regPsychs']); $i++){
          for ($j=0; $j<count($booked); $j++){
            if ($data['regPsychs'][$i]['calendar_id']==$booked[$j]['calendar_id']){
              $data['regPsychs'][$i]['appointment'] = $booked[$j]['paymentMode'];
            }else{
              $data['regPsychs'][$i]['appointment'] = 0;
            }
          }
        }
      }
    }
    view::renderPanel('panel/user3/calenderPsych.php', $data);
  }

  function registerCalender() {
    print_r("ok");
    exit;
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];

    $shenaseh = $_POST['shenaseh'];
    if($shenaseh!="") {
      $from = $_POST['from'];
      $to = $_POST['to'];
      $days = $_POST['days'];
      $start = $_POST['start'];
      $end = $_POST['end'];
      $fee = $_POST['fee'];
      $duration = $_POST['duration'];
      $timeBeforAppointment = $_POST['timeBeforAppointment'];
      $recordUser = UserBase::LoginCheckPerTask();
      $counsilingId = $this->checkExistInfoCounseling(false);
      $recordPsychInCenter = User3Model::checkExistPsychInCenter($counsilingId, $shenaseh);
      if ($recordPsychInCenter == null) {
        $response['Status'] = false;
        $response['Error'] = [];
        $response['Error']['code'] = 402;
        $response['Error']['message'] = "درمانگر وجود ندارد";
        echo json_encode($response);
        exit;
      }

      $seperatedFrom = explode('/', $from);
      $seperatedTo = explode('/', $to);
      if(checkdate($seperatedFrom[1], $seperatedFrom[2], $seperatedFrom[0])==false
                   or
        checkdate($seperatedTo[1], $seperatedTo[2], $seperatedTo[0])==false){
          $response['Status'] = false;
          $response['Error'] = [];
          $response['Error']['code'] = 403;
          $response['Error']['message'] = "تاریخ وارد شده صحیح نمی باشد";
          echo json_encode($response);
          exit;
      }

      $seperatedStart = explode(' ', $start);
      $seperatedEnd = explode(' ', $end);
      $startDate = new DateTime($from); 
      $endDate = new DateTime($to);
      $intervalHour = 1;
      $intervalMinute = 0; 
      while($startDate <= $endDate ){
        $startTime = new DateTime($seperatedStart[0]);
        $endTime = new DateTime($to.$seperatedEnd[0]);  
        $timestamp = strtotime($startDate->format('Y-m-d')); 
        $weekDay = date('w', $timestamp);
        if(preg_match('~'.$weekDay.'~', $days)){
          while($startTime->format('H:i') < $endTime->format('H:i')){
            $start = $startTime->format('H:i');
            $startTime->modify('+'.$intervalHour.'hour');
            $startTime->modify('+'.$intervalMinute.'minute');
            User3Model::insertCalender(
                                      $shenaseh,
                                      $counsilingId,
                                      $startDate->format('Y-m-d'),
                                      $weekDay,
                                      $start,
                                      $startTime->format('H:i'),
                                      $fee,
                                      $duration,
                                      $timeBeforAppointment
                                      
            );
            }
          }
        // increase startDate by 1 
        $startDate->modify('+1 day'); 
        
      }

      $response['Status'] = true;
      $response['Error'] = [];
      $response['ResultData']['code'] = 200;
      $response['ResultData']['message'] = "تقویم با موفقیت ثبت شد.";
      echo json_encode($response);
      exit;
    }
    $response['Status'] = false;
    $response['Error'] = [];
    $response['Error']['code'] = 404;
    $response['Error']['message'] = "درمانگری را انتخاب کنید";
    echo json_encode($response);
    exit;
  }

  // For showing the registered pychs in a counselling center
  // Input: counselling Id
  function listRegPsychs($counsilingId){
    $record = User3Model::readRegPsychs($counsilingId);
    return $record;
  }

  function listWorkshops(){
    $data = [];
    $user_id = $_SESSION['user_id'];
    $data['records'] = User3Model::listWorkshopsByUserId($user_id);
    view::renderPanel('panel/user3/listWorkshops.php', $data);
  }

}

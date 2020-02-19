<?php
class User2Controller{
  public function __construct() {
    grantUser2();
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
    view::renderPanel('panel/user2/dashboard.php', $data);
  }
  function informationCenter() {
    $data[] = array();
    $recordCoach = User2Model::checkExistCoach($_SESSION['email']);
    $data['record']=$recordCoach;
    view::renderPanel('panel/user2/informationCenter.php', $data);
  }

  function registerCoach() {
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
    if (!$uploadCheckingImage->isAllowedExtension('personalImage','image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 101;
      $response['Error']['message'] = "فرمت ارسالی عکس قابل قبول نیست";
      echo json_encode($response);
      exit;
    }
    if (!$uploadCheckingImage->isAllowedSize('personalImage','image')) {
      $response['Error'] = [];
      $response['Error']['code'] = 102;
      $response['Error']['message'] = "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.";
      echo json_encode($response);
      exit;
    }
    $CVname='-';
    $uploadCheckingCV = new UploadFile();
    if ($uploadCheckingCV->isFileUploading('CVFile')) {
      if (!$uploadCheckingCV->isAllowedExtension('CVFile','pdf')) {
        $response['Error'] = [];
        $response['Error']['code'] = 103;
        $response['Error']['message'] = "فرمت رزومه ارسالی قابل قبول نیست";
        echo json_encode($response);
        exit;
      }
      if (!$uploadCheckingCV->isAllowedSize('CVFile','pdf')) {
        $response['Error'] = [];
        $response['Error']['code'] = 104;
        $response['Error']['message'] = "حجم رزومه ارسالی بیش از ۲ مگابایت است";
        echo json_encode($response);
        exit;
      }
    }else{
      $CVname='--';
    }

    $nameCoach = $_POST['nameCoach'];
    $emailCoach = $_POST['emailCoach'];
    $phoneCoach = $_POST['phoneNumber'];
    $ostan = $_POST['ostan'];
    $city = $_POST['city'];
    $location = $ostan . "," . $city;
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
      $check = User2Model::checkExistCoach($_SESSION['email']);
      if ($check == null) {
        $response = [];
        $response['Status'] = false;
        $response['Error'] = [];
        $response['ResultData'] = [];
        $shenaseh = uniqid();
        $time = grtCurrentTime();

        $ext = $uploadCheckingImage->getExtention('personalImage','image');
        $fileName = uniqid() . 'PerPic' . $record['user_id'] . $ext;
        $file = $uploadCheckingImage->getFileName('personalImage','image');
        $originalPath = "asset/image/per-pic/" . $fileName;
        resizeImage($file, 150, 200, $ext, $originalPath);

        if($CVname=='-'){
          $extCV = $uploadCheckingCV->getExtention('CVFile','pdf');
          $fileNameCV = uniqid() . 'PerPic' . $record['user_id'] . $extCV;
          $fileCV = $uploadCheckingCV->getFileName('CVFile','pdf');
          $originalPathCV = "asset/image/per-cv/" . $fileNameCV;
          copy($fileCV, $originalPathCV);
        }else{
          $fileNameCV='--';
        }

        User2Model::insertCoach($record['user_id'], $nameCoach, $location, $gender,$emailCoach, $fileName,$fileNameCV,$phoneCoach, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5,$shenaseh, $time);

        $response['Status'] = true;
        $response['ResultData']['code'] = 200;
        echo json_encode($response);
        exit;
      } else {
        $time = grtCurrentTime();

        $ext = $uploadCheckingImage->getExtention('personalImage','image');
        $fileName = uniqid() . 'PerPic' . $record['user_id'] . $ext;
        $file = $uploadCheckingImage->getFileName('personalImage','image');
        $originalPath = "asset/image/per-pic/" . $fileName;
        resizeImage($file, 150, 200, $ext, $originalPath);

        if($CVname=='-'){
          $extCV = $uploadCheckingCV->getExtention('CVFile','pdf');
          $fileNameCV = uniqid() . 'PerPic' . $record['user_id'] . $extCV;
          $fileCV = $uploadCheckingCV->getFileName('CVFile','pdf');
          $originalPathCV = "asset/image/per-cv/" . $fileNameCV;
          copy($fileCV, $originalPathCV);
        }else{
          $fileNameCV='--';
        }

        User2Model::updateCoach($check['user_id'], $nameCoach, $location, $gender,$emailCoach, $fileName,$fileNameCV,$phoneCoach, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time);
        $response['Status'] = true;
        $response['ResultData']['code'] = 201;
        echo json_encode($response);
        exit;

      }
    }

  }
}
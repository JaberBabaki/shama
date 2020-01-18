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
      User4Model::insertPsych($namePsych,$recordUser['user_id'], $nationalCode, $gender, $emailPsych, $photoName, $fileNameCV, $license, $phonePsych, $location, $karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time, $shenaseh);
      $response['Status'] = true;
      $response['ResultData']['code'] = 200;
      $response['ResultData']['message'] = $shenaseh;
      echo json_encode($response);
      exit;
    }else{
      User4Model::updatePsych($namePsych,$recordPsychInCenter['psych_id'],$nationalCode,$gender,$emailPsych, $photoName,$fileNameCV,$license,$phonePsych,$location,$karshenasi, $arshad, $doctora, $workshop1, $workshop2, $workshop3, $workshop4, $workshop5, $article1, $article2, $article3, $article4, $article5, $book1, $book2, $book3, $book4, $book5, $conferance1, $conferance2, $conferance3, $conferance4, $conferance5, $awardsHonor1, $awardsHonor2, $awardsHonor3, $awardsHonor4, $awardsHonor5, $time);
      $response['Status'] = true;
      $response['ResultData']['code'] = 201;
      $response['ResultData']['message'] =$recordPsychInCenter['shenaseh'];
      echo json_encode($response);
      exit;
    }

  }
}

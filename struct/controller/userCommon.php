<?php

class UserCommonController {
  public function __construct() {
    require_once("user-base.php");
  }

  public function logout() {
    $date = grtCurrentTime();
    UserCommonModel::updateLastVisit($_SESSION['email'], $date);
    session_destroy();
    homePage(true);
  }

  public function login() {
    if (isset($_POST['email'])) {
      $this->loginCheck();
    } else {

      $this->loginForm();
    }
  }

  public function register() {
    if (isset($_POST['email'])) {
      $this->registerCheck();
    } else {
      $this->registerForm();
    }
  }

  public function  getCity() {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
      $id = $_POST['id'];
      $response['Status'] = true;
      $results = UserCommonModel::getCity($id);
      foreach ($results as $record) {
        $out['name'] = $record['name'];
        $out['id'] = $record['id'];
        #dump($out);
        $response['ResultData'][] = $out;
      }
    }
    echo json_encode($response);
    exit;
  }

  public function  showCity($id) {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $name = UserCommonModel::getOstanId($id);
    $out['name'] = $name['name'];
    $out['id'] = $name['ostan_id'];
    $response['ResultData'][] = $out;
    if (isset($id) && is_numeric($id)) {
      $response['Status'] = true;
      $results = UserCommonModel::getCity($id);
      foreach ($results as $record) {
        $out['name'] = $record['name'];
        $out['id'] = $record['id'];
        $response['ResultData'][] = $out;
      }
    }
    view::render('user/showCity.php', $response);
  }

  public function  showCoundiling($idCity, $idOstan) {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $name = UserCommonModel::getCityById($idCity);
    $out['name'] = $name['name'];
    $out['id'] = $name['id'];
    $response['ResultData'][] = $out;
    if (isset($idCity) && is_numeric($idCity) && isset($idOstan) && is_numeric($idOstan)) {
      $response['Status'] = true;
      $results = UserCommonModel::getCoundilingByArea($idCity . '|' . $idOstan);
      if ($results != null) {
        foreach ($results as $record) {
          $out['name'] = $record['counselingName'];
          $out['id'] = $record['conceil_id'];
          $response['ResultData'][] = $out;
        }
      }
    }
    view::render('user/showCounsiling.php', $response);
  }

  function selectCounsiling() {
    $data[] = array();
    view::render('user/selectOstan.php', $data);
  }

  function feedCounsiling() {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $keyword = $_POST['keyword'];
    $count = strlen(trim($keyword));
    if ($count >= 1) {
      $records = User1Model::feedCounsiling($keyword);
      if ($records != null) {
        foreach ($records as $record) {
          $name = $record['counselingName'];
          $id = $record['conceil_id'];
          $out['name'] = $name;
          $out['id'] = $id;
          $response['ResultData'][] = $out;
        }
      }
    }
    echo json_encode($response);
    exit;
  }

  public function registerSuccess() {
    $data[] = array();
    $data['text1'] = 'تبریک';
    $data['text2'] = 'شما با موفقیت در شبکه ملی ازدواج ثبت نام کردید';
    $data['text3'] = 'لطفا وارد شوید';
    $data['link'] = 'login';
    $data['btnLable'] = 'ورود';
    message('success', $data, true);
    //View::render('message/success.php', $data);
  }

  private function loginCheck() {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $record = UserCommonModel::checkExist($email);
    if ($record == null) {
      $data[] = array();
      $data['text1'] = 'خطا';
      $data['text2'] = 'ایمیل شما در سامانه ثبت نشده است';
      $data['text3'] = 'لطفا دوباره تلاش کنید';
      $data['link'] = 'login';
      $data['btnLable'] = 'تلاش مجدد';
      message('fail', $data, true);
    }

    $hashesPass = encryptPassword($pass);
    if ($record['password'] == $hashesPass) {
      $_SESSION['email'] = $email;
      $_SESSION['access'] = $record['access'];
      $data[] = array();
      homePage(true);
    }

    $data[] = array();
    $data['text1'] = 'خطا';
    $data['text2'] = 'رمز عبور وارد شده اشتباه است';
    $data['text3'] = 'لطفا دوباره وارد شوید';
    $data['link'] = 'login';
    $data['btnLable'] = 'تلاش مجدد';
    message('fail', $data, true);

  }

  private function loginForm() {
    $data[] = array();
    View::render('user/login.php', $data);
  }

  private function registerForm() {
    $data['hello'] = array();
    View::render('user/register.php', $data);
  }

  private function registerCheck() {
    $response = [];
    $response['Status'] = false;
    $response['Error'] = [];
    $response['ResultData'] = [];
    $email = $_POST['email'];
    if (strlen($email) <= 7 || strlen($email) >= 70) {
      $response['Status'] = false;
      $response['Error']['code'] = 100;
      $response['Error']['message'] = _email_incorrect;
      echo json_encode($response);
      exit;
    }
    if (!(strpos($email, '@') !== false && strpos($email, '.') !== false && strpos($email, '.') > strpos($email, '@'))) {
      $response['Status'] = false;
      $response['Error']['code'] = 100;
      $response['Error']['message'] = _email_incorrect;
      echo json_encode($response);
      exit;
    }
    $record = UserCommonModel::checkExist($email);
    if ($record != null) {
      $response['Status'] = false;
      $response['Error']['code'] = 101;
      $response['Error']['message'] = _already_n;
      echo json_encode($response);
      exit;
    }
    $password = $_POST['password'];
    $confirm = $_POST['confrmPassword'];
    $access = $_POST['access'];
    $time = grtCurrentTime();
    if (strlen($password) < 8) {
      $response['Status'] = false;
      $response['Error']['code'] = 102;
      $response['Error']['message'] = _pass_short;
      echo json_encode($response);
      exit;
    }
    if (!preg_match("#[0-9]+#", $password)) {
      $response['Status'] = false;
      $response['Error']['code'] = 103;
      $response['Error']['message'] = _pass_number;
      echo json_encode($response);
      exit;
    }

    if (!preg_match("#[a-zA-Z]+#", $password)) {
      $response['Status'] = false;
      $response['Error']['code'] = 104;
      $response['Error']['message'] = _pass_letter;
      echo json_encode($response);
      exit;
    }
    if (!($confirm == $password)) {
      $response['Status'] = false;
      $response['Error']['code'] = 105;
      $response['Error']['message'] = _pass_match;
      echo json_encode($response);
      exit;
    }
    if ($access != '1' && $access != '2' && $access != '3' && $access != '4') {
      $response['Status'] = false;
      $response['Error']['code'] = 106;
      $response['Error']['message'] = "سطح دسترسی اشتباه وارد شده است";
      echo json_encode($response);
      exit;
    } else {
      $access = $access . '0';
    }
    $hashesPass = encryptPassword($password);
    UserCommonModel::insertUser($email, $hashesPass, $time, $access);
    $response['Status'] = true;
    echo json_encode($response);
    exit;
  }


}
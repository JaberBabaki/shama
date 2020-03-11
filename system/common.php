<?php
if (!defined('test')) {
  echo "Forbidden Request";
  exit;
}

function hr($return = false) {
  if ($return) {
    return "<hr>";
  } else {
    echo "<hr>";
  }
}

function br($return = false) {
  if ($return) {
    echo "<br>";
  } else {
    return "<br>";
  }
}

function dump($var, $return = false) {
  if (is_array($var)) {
    $out = print_r($var, true);
  } else if (is_object($var, true)) {
    $out = var_export($var, true);
  } else {
    $out = $var;
  }
  if ($return) {
    echo "<pre>$out</pre>";
  } else {
    return "<pre>$out</pre>";
  }
}

function grtCurrentTime() {
  return date("Y-m-d H:i:s");
}

function getCurrentDate(){
  return date("Y-m-d");
}

function getCurrentTime(){
  return date("H:i:s");
}

function grtCurrentDate() {
  $now = new DateTime();
}

function encryptPassword($password) {
  global $config;
  return md5($password . $config['salt']);
}

function getFullURL() {
  return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function getRequestURL() {
  return $_SERVER['REQUEST_URI'];
}

function baseUrl(){
  global $config;
  return $config['url2'];
}

function fullBaseUrl(){
  global $config;
  return 'http://' . $_SERVER['HTTP_HOST'] . $config['base'];
}



function strContain($string, $search) {
  return strpos($string, $search);
}

function message($type, $message, $mustExit = false) {
  View::render("message/" . $type . '.php', $message);
  if ($mustExit) {
    exit;
  }
}

function twoDigitNumber($number) {
  return ($number < 10) ? $number = "0" . $number : $number;
}

function isUserLogin() {
  if (isset($_SESSION['email'])) {
    return true;
  } else {
    return false;
  }
}

function homePage($output) {
  global $config;
  if ($output) {
    header($config['url1']);
    exit;
  } else {
    return $config['url2'];
  }

}

function refreshPage($output) {
  if ($output) {
    header("Refresh:0");
    exit;
  } else {
    echo "Refresh:0";
  }
}

function RQO($fileName) {
  require_once($fileName);
}

function jdate($date, $format = "y-m-d", $day) {
  $timestamp = strtotime($date);
  $secondsInOneDay = 24 * 60 * 60;
  $daysPassed = floor($timestamp / $secondsInOneDay) + 1;

  $days = $daysPassed;
  $month = 11;
  $year = 1348;

  $days -= 19;

  $daysInMonths = [31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29];
  $monthNames = [
    'فروردين',
    'ارديبهشت',
    'خرداد',
    'تير',
    'مرداد',
    'شهريور',
    'مهر',
    'آبان',
    'آذر',
    'دي',
    'بهمن',
    'اسفند',
  ];


  while (true) {
    if ($days > $daysInMonths[$month - 1]) {
      $days -= $daysInMonths[$month - 1];
      $month++;
      if ($month == 13) {
        $year++;
        if (($year - 1347) % 4 == 0) {
          $days--;
        }
        $month = 1;
      }
    } else {
      break;
    }
  }

  $month = twoDigitNumber($month);
  $days = twoDigitNumber($days);

  $monthName = $monthNames[$month - 1];
  if($format=="d M Y"){
    $output = $format;
    $output = str_replace("Y", $year, $output);
    $output = str_replace("m", $month, $output);
    $output = str_replace("d", $days, $output);
    $output = str_replace("M", $monthName, $output);
    $jday = '';
    if ($day == 'Saturday') {
      $jday = 'شنبه';
    } else if (($day == 'Sunday')) {
      $jday = 'یکشنبه';
    } else if (($day == 'Monday')) {
      $jday = 'دوشنبه';
    } else if (($day == 'Tuesday')) {
      $jday = 'سه شنبه';
    } else if (($day == 'Wednesday')) {
      $jday = 'چهارشنبه';
    } else if (($day == 'Thursday')) {
      $jday = 'پنچشنبه';
    } else if (($day == 'Friday')) {
      $jday = 'جمعه';
    }
    return ' ' . $jday . ' ' . $output;
  }elseif($format=="Y-M-D"){
    $output = $format;
    $output = str_replace("Y", $year, $output);
    $output = str_replace("M", $month, $output);
    $output = str_replace("D", $days, $output);
    return $output;
  }

}


function stringConverter($string, $type='faToEn') {
  if($type=='faToEn'){
    return strtr($string, array('/'=>'-', '۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9'));
  }elseif($type=='enToFa'){
    return strtr($string, array('-'=>'/', '0'=>'۰', '1'=>'۱', '2'=>'۲', '3'=>'۳', '4'=>'۴', '5'=>'۵', '6'=>'۶', '7'=>'۷', '8'=>'۸', '9'=>'۹'));
  }
}

function dateConverter($date, $type='faToEn'){
  if($type=='enToFa'){
    $dateTmp = new DateTime($date);
    $formatter = new IntlDateFormatter(
                          "fa_IR@calendar=persian", 
                          IntlDateFormatter::FULL, 
                          IntlDateFormatter::FULL, 
                          'Asia/Tehran', 
                          IntlDateFormatter::TRADITIONAL, 
                          "yyyy-MM-dd");
    $dateTmp = $formatter->format($dateTmp);
    return stringConverter($dateTmp, $type);
  }else{
    
  }
  
  
}

function dayNumToDayNameConverter($dayNum){
  $weekDay = [];
  $weekDay[0] = "یکشنبه";
  $weekDay[1] = "دوشنبه";
  $weekDay[2] = "سه شنبه";
  $weekDay[3] = "چهار شنبه";
  $weekDay[4] = "پنجشنبه";
  $weekDay[5] = "جمعه";
  $weekDay[6] = "شنبه";
  return $weekDay[$dayNum];
}
  
?>
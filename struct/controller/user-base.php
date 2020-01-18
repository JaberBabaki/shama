<?php
class UserBase{
  public function logout() {
    session_destroy();
    homePage(true);
  }
  public static function LoginCheckPerTask() {
    $recordUser = UserCommonModel::checkExist($_SESSION['email']);
    if ($recordUser == null) {
      session_destroy();
      $data[] = array();
      $data['text1'] = 'خطا';
      $data['text2'] = 'شما وارد سامانه نشده اید';
      $data['text3'] = 'لطفا دوباره تلاش کنید';
      $data['link'] = 'login';
      $data['btnLable'] = 'تلاش مجدد';
      message('fail', $data, true);
    }else{
      return $recordUser;
    }
  }
}
?>
<?php
class View {
  public static function render($filePath, $data) {
    extract($data);
    ob_start();
    require_once('struct/view/'.$filePath);
    $content=ob_get_clean();
    require_once('them/default.php');
  }
  public static function renderPanel($filePath,$data) {
    extract($data);
    ob_start();
    require_once('struct/view/'.$filePath);
    $content = ob_get_clean();
    require_once('them/panel.php');
  }
   
 
  public static function renderCounselingPage($filePath,$data) {
    extract($data);
    ob_start();
    require_once('struct/view/'.$filePath);
    $content=ob_get_clean();
    require_once('them/counselingPage.php');
  }
  public static function renderPartial($filePath, $data = array(), $return = false){
    extract($data);

    if ($return) {
      ob_start();
    }

    require_once("struct/view/" . $filePath);

    if ($return) {
      return ob_get_clean();
    }
  }
}
?>
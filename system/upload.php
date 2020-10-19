<?php


class UploadFile {

  private $extensionImage = array(".jpg", ".jpeg", ".png");
  private $extensionPdf = array(".pdf");
  private $maxImageSize = 400;
  private $maxPdfsize = 2000;

  function isFileUploading($fileName) {
    if (isset($_FILES[$fileName]['error'])) {
      return true;
    } else {
      return false;
    }
  }

  function isAllowedExtension($fileName,$typeFile) {
    if($typeFile=='pdf'){
      $type='application/';
      $array=$this->extensionPdf;
    }else if($typeFile=='image'){
      $type='image/';
      $array=$this->extensionImage;
    }
    $ext = str_replace($type, '.', $_FILES[$fileName]['type']);
    if (in_array($ext, $array)) {
      return true;
    } else {
      return false;
    }
  }

  function isAllowedSize($fileName,$typeFile) {
    if($typeFile=='pdf'){
      $max=$this->maxPdfsize;
    }else if($typeFile=='image'){
      $max=$this->maxImageSize;
    }
    $size = $_FILES[$fileName]['size'] / 1024;
    if ($size >$max) {
      return false;
    } else {
      return true;
    }
  }
  function getExtention($fileName,$typeFile){
    if($typeFile=='pdf'){
      $type='application/';
    }else if($typeFile=='image'){
      $type='image/';
    }
    $ext = str_replace($type, '.', $_FILES[$fileName]['type']);
    return $ext;
  }
  function getFileName($fileName){
    return $_FILES[$fileName]['tmp_name'];
  }
}
